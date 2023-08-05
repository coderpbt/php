<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Set up the recipient email address
    $recipient = "coderpbt@gmail.com";
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message: $message\n";

    // Set the headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    $result = mail($recipient, $subject, $email_message, $headers);

    // Return a response to the client
    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
