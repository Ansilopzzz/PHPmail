<?php
// Recipient email address
$to = 'recipient@example.com';

//Subject of the mail
$subject = 'Test Email';

//Message body
$message = 'This is a test email sent from PHP script.';

//Sender email and name
$senderEmail = 'sender@example.com';
$senderName = 'John Doe';

//Additional headers
$headers = 'From: ' . $senderName . '<' . $senderEmail . '>' . "\r\n" . 'Reply-To: ' . $senderEmail . "\r\n" . 'X-Mailer: PHP/' . phpversion();

//Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'Email Sent Succesfully!';
} else {
    echo 'Failed to send email.';
}
?>
