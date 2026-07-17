<?php
declare(strict_types=1);

require_once dirname(__DIR__, 2) . '/vendor/phpmailer/phpmailer/src/Exception.php';
require_once dirname(__DIR__, 2) . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once dirname(__DIR__, 2) . '/vendor/phpmailer/phpmailer/src/SMTP.php';

function lex_mail_error(?string $message = null): ?string
{
    if ($message !== null) {
        $GLOBALS['lexLastMailError'] = $message;
    }
    return $GLOBALS['lexLastMailError'] ?? null;
}

function lex_phpmailer_send(string $to, string $subject, string $body): bool
{
    $host = lex_site_setting('smtp_host');
    $port = (int) lex_site_setting('smtp_port', '587');
    $user = lex_site_setting('smtp_user');
    $pass = lex_site_setting('smtp_pass');
    if ($host === '') {
        lex_mail_error('SMTP host is missing.');
        return false;
    }

    $from = $user !== '' ? $user : ('no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'localhost'));
    $fromName = lex_site_setting('site_name', LEX_APP_NAME);

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->Port = $port;
        $mail->SMTPAuth = $user !== '';
        $mail->Username = $user;
        $mail->Password = $pass;
        $mail->CharSet = 'UTF-8';
        $mail->Timeout = 20;

        if ($port === 465) {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        }

        $mail->setFrom($from, $fromName);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = $body;
        $mail->isHTML(false);

        $mail->send();
        return true;
    } catch (PHPMailer\PHPMailer\Exception $e) {
        $message = $mail->ErrorInfo !== '' ? $mail->ErrorInfo : $e->getMessage();
        lex_mail_error('PHPMailer SMTP failed: ' . $message);
        error_log('[PHPMailer] ' . $message);
        return false;
    }
}

function lex_send_email(string $to, string $subject, string $body): bool
{
    lex_mail_error(null);
    if (lex_phpmailer_send($to, $subject, $body)) {
        return true;
    }
    if (lex_site_setting('smtp_host') !== '') {
        return false;
    }

    $from = lex_site_setting('smtp_user');
    $headers = [
        'From: ' . ($from !== '' ? $from : (LEX_APP_NAME . ' <no-reply@localhost>')),
        'Reply-To: ' . ($from !== '' ? $from : 'no-reply@localhost'),
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
    ];
    if (@mail($to, $subject, $body, implode("\r\n", $headers))) {
        return true;
    }
    if (!lex_mail_error()) {
        lex_mail_error('The local mail function failed.');
    }
    return false;
}
