<?php
    $to = "paletteproductiondevelopers@gmail.com"; 

    $from = $_POST['email'];
    $name = $_POST['name'];
    $csubject = $_POST['subject']; 
    $cmessage = $_POST['message'];

    // Headers Fix:
    // "From" la unga website domain mail irukanum (e.g., info@yourdomain.com)
    // Illana unga recipient mail-aiyae kudunga, athu spam-a thadukkum.
    $headers = "From: Omega Contact <paletteproductiondevelopers@gmail.com>\r\n";
    $headers .= "Reply-To: ". $from . "\r\n"; // Inga user mail irukkurathaala, reply panna user-ku pogum.
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_subject = "Omega Contact Form: " . $csubject;

    $body = "<!DOCTYPE html><html lang='en'><body>";
    $body .= "<div style='border: 1px solid #eee; padding: 20px; font-family: sans-serif;'>";
    $body .= "<h2>New Message from Omega Contact Form</h2>";
    $body .= "<p><strong>Name:</strong> {$name}</p>";
    $body .= "<p><strong>Email:</strong> {$from}</p>";
    $body .= "<p><strong>Subject:</strong> {$csubject}</p>";
    $body .= "<p><strong>Message:</strong><br>" . nl2br($cmessage) . "</p>";
    $body .= "</div></body></html>";

    $send = mail($to, $email_subject, $body, $headers);

    if ($send) {
        echo "success";
    } else {
        echo "error";
    }
?>