# Caps-LexShield
LEXSHIELD: Integrated Cybersecurity and Legal Compliance Platform for Law Firms
LEXSHIELD PROJECT USER MANUAL

# This manual explains how to set up and use the LEXSHIELD step by step.


1. PROJECT OVERVIEW

LEXSHIELD is a web-based legal services and case management system.

Main user roles:
1. Admin
   - Manages lawyers.
   - Manages clients.
   - Reviews inquiries.
   - Reviews manual GCash payments.
   - Manages system settings.
   - Sends messages to lawyers.

2. Lawyer
   - Views assigned dashboard data.
   - Manages profile information.
   - Views case files.
   - Handles appointments.
   - Sends and receives secure messages.

3. Client
   - Registers and logs in.
   - Views lawyers.
   - Submits manual payment proof.
   - Views billing and payment history.
   - Manages profile information.
   - Views case files.
   - Sends and receives secure messages.
   - Books or views appointments.
   -
# LOGIN AND ACCOUNT ACCESS

Login page:
   http://localhost/lexs_capstone/auth/login.php

Client registration page:
   http://localhost/lexs_capstone/auth/register.php

Default seeded admin email:
   admin@lexshield

   
# HOW TO USE AS ADMIN

Step 1: Log in as admin
1. Open:
   http://localhost/lexs_capstone/auth/login.php
2. Enter the admin email and password.
3. After login, the admin dashboard opens.

# Manage lawyers
1. Click Lawyers in the sidebar.
2. To add a lawyer, click Add Lawyer.
3. Enter the lawyer name, email, bar number, specialization, background, bio, and password.
4. Click Add Lawyer.
5. To change status, use the status dropdown.
6. To delete a lawyer, click the delete button and confirm.

#  Manage clients
1. Click Clients in the sidebar.
2. To add a client, click Add Client.
3. Enter client name, email, phone number, risk level, address, and password.
4. Click Add Client.
5. To update risk level, choose Low, Medium, or High and click Save.
6. To delete a client, click delete and follow the confirmation prompt.

# Review inquiries
1. Click Inquiries in the sidebar.
2. Use the search box to find a public inquiry.
3. Use the status filter to show New, Read, Replied, or Closed inquiries.
4. Change the inquiry status from the action dropdown.
5. The inbox shows a maximum of 10 records per page. Use pagination to move through pages.

# Review payments
1. Click Payments in the sidebar.
2. Search or filter payments by status.
3. Click Review beside a payment.
4. Check the payment proof, reference number, amount, client notes, and other details.
5. Choose Verified or Rejected.
6. Add admin notes if needed.
7. Save the decision.
8. The payment queue shows a maximum of 10 records per page.

# Message lawyers
1. Click Messages in the sidebar.
2. Click Create New Message.
3. Select a lawyer from the Recipient Name dropdown.
4. Add an optional subject.
5. Type the message or attach a file.
6. Click Send Message.
7. The conversation appears in the message list.

#  Update system settings
1. Click Settings.
2. Update system information such as GCash instructions or payment QR settings.
3. Click Save Settings.


# -HOW TO USE AS LAWYER

Step 1: Log in
1. Open:
   http://localhost/lexs_capstone/auth/login.php
2. Enter the lawyer email and password created by admin.

Step 2: View dashboard
1. After login, the lawyer dashboard opens.
2. Check case, appointment, and activity information.

Step 3: Manage profile
1. Click Profile.
2. Review or update available profile details.
3. Save changes if the page allows editing.

Step 4: View case files
1. Click Case Files.
2. Browse assigned case file folders and documents.
3. Open files or download attachments if available.

Step 5: Manage appointments
1. Click Appointments.
2. View upcoming, pending, confirmed, cancelled, or deleted appointments.
3. Use available actions depending on the appointment status.

Step 6: Use messages
1. Click Messages.
2. Select a conversation.
3. Type a secure message.
4. Attach a file if needed.
5. Click Send.
6. Use Create New Message to start a new message where available.


# -HOW TO USE AS CLIENT

Step 1: Register
1. Open:
   http://localhost/lexs_capstone/auth/register.php
2. Fill in the registration form.
3. Complete email OTP verification if enabled.
4. After successful registration, log in.

Step 2: Log in
1. Open:
   http://localhost/lexs_capstone/auth/login.php
2. Enter the client email and password.

Step 3: View dashboard
1. After login, the client dashboard opens.
2. Review summary information and available shortcuts.

Step 4: Browse lawyers
1. Click Lawyers.
2. Search or browse available lawyers.
3. Open lawyer details if needed.

Step 5: Submit manual payment
1. Click Payments.
2. Enter payment information.
3. Upload proof of payment.
4. Submit the payment.
5. Wait for admin review.

Step 6: Check billing
1. Click Billing.
2. Review payment totals and payment status.
3. Open Payments for detailed payment history.

Step 7: Manage profile
1. Click Profile.
2. Review personal information.
3. Update available fields if needed.

Step 8: Use case files
1. Click Case Files.
2. View case folders and documents linked to the client account.
3. Download or open available documents.

Step 9: Use messages
1. Click Messages.
2. Select a conversation.
3. Type a secure message.
4. Attach a file if needed.
5. Click Send.

Step 10: Use appointments
1. Click Appointments.
2. View appointment records.
3. Create, review, or manage appointments if the page provides the action.


8. COMMON WORKFLOW EXAMPLE

Admin setup workflow:
1. Admin logs in.
2. Admin creates lawyer accounts.
3. Admin creates client accounts or clients register themselves.
4. Admin updates settings and payment instructions.

Client payment workflow:
1. Client logs in.
2. Client opens Payments.
3. Client uploads manual GCash proof.
4. Admin opens Payments.
5. Admin reviews proof.
6. Admin verifies or rejects the payment.
7. Client checks Billing or Payments for the updated status.

Messaging workflow:
1. Admin opens Messages.
2. Admin clicks Create New Message.
3. Admin selects any active or busy lawyer.
4. Admin sends a direct message.
5. Lawyer logs in and opens Messages.
6. Lawyer replies from the conversation.




