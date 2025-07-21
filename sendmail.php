<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hello@thegohra.com"; 
    $subject = "New Contact Form Submission";

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $sub = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Subject: $sub\n";
    $body .= "Message: $message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you! Your message has been sent successfully.</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again.</h2>";
    }
} else {
    echo "Invalid request.";
}
?>
