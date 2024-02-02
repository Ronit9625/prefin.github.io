<!-- process_form.php -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize the email content and headers
    $to = "prefinpay@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Send the email
    $mail_success = mail($to, $subject, $email_message, $headers);

    if ($mail_success) {
        // Redirect to a thank you page or display a success message
        header("Location: thank_you.html");
        exit();
    } else {
        // Redirect to an error page or display an error message
        header("Location: error.html");
        exit();
    }
}
?>
