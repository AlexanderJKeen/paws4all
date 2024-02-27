<?php

function handleFormSubmission() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $to = "alexander.keen@keenkom.co.uk"; // Replace with your email address
        $subject = "New Contact Form Submission";
        $headers = "From: $name <$email>";

        // You can customize the email message as per your requirements
        $email_message = "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Message:\n$message";

        // Send email
        try {
            if (mail($to, $subject, $email_message, $headers)) {
                echo "Email sent successfully!";
            } else {
                throw new Exception("Failed to send email.");
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        $message = "thanks";
        echo "<script type='text/javascript'>alert('$message');</script>";
    } else {
        // Redirect or display an error message if accessed directly
        header("Location: index.php");
        exit();
    }
}

// Call the function to handle form submission
handleFormSubmission();
