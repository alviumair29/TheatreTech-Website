<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your email address
    $to = "alviu02@my.yorku.ca";

    // Set email subject
    $subject = "New Contact Form Submission";

    // Build the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $body);

    // Redirect to a thank you page or display a success message
    header("Location: thank_you.html");
    exit();
}
?>
