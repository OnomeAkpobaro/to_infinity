<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $attendance = htmlspecialchars($_POST['attendance']);

    // Prepare email
    $to = "toinfinity@gmail.com"; // Your email address
    $subject = "RSVP from $name";
    $message = "Name: $name\nEmail: $email\nAttendance: $attendance";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your RSVP!";
    } else {
        echo "Sorry, there was an error sending your RSVP. Please try again later.";
    }
}
?>