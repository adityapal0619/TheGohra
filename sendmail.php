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

    // From header apni domain ka email rakhein
    $headers = "From: hello@thegohra.com\r\n";
    // Reply-To mein user ka email rakhein
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: Contactus.html?success=1");
        exit();
    } else {
        header("Location: Contactus.html?success=0");
        exit();
    }
} else {
    echo "Invalid request.";
}
?>
