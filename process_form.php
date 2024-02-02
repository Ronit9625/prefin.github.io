<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize the email subject and body as per your needs
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Replace 'your_email@example.com' with your actual email address
    $to = "prefinpay@gmail.com";

    // Send the email
    mail($to, $subject, $body, "From: $email");

    // Redirect to a thank you page or show a success message
    header("Location: thank_you.html");
    exit();
}
?>
