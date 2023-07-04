<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'adarshsebastian9202@gmail.com';  // Email address of the recipient
    $subject = 'Contact Form Submission';  // Subject of the email
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Additional headers
    // $headers = 'From: ' . $email . "\r\n" .
    //     'Reply-To: ' . $email . "\r\n" .
    //     'X-Mailer: PHP/' . phpversion();

    // Send the email
    $mailSent = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailSent) {
        echo 'Email sent successfully.';
    } else {
        echo 'There was an error sending the email.';
    }
}
?>