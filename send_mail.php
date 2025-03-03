<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Manually include PHPMailer files
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Define email credentials
$smtpHost = "smtp.gmail.com"; // Change for Outlook, Yahoo, etc.
$smtpUser = "somosaeth@gmail.com"; // Your email
$smtpPass = "kzqg fifw hvcc zvhy"; // Use an App Password if using Gmail

// Read form values
$userName = isset($_POST['username']) ? strip_tags($_POST['username']) : "";
$senderEmail = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : "";
$userPhone = isset($_POST['phone']) ? strip_tags($_POST['phone']) : "";
$userSubject = isset($_POST['subject']) ? strip_tags($_POST['subject']) : "New Contact Form Message";
$message = isset($_POST['message']) ? strip_tags($_POST['message']) : "";

// Validate form input
if (!empty($userName) && filter_var($senderEmail, FILTER_VALIDATE_EMAIL) && !empty($message)) {
  $mail = new PHPMailer(true);

  try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUser;
    $mail->Password = $smtpPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use SSL if required
    $mail->Port = 587; // 465 for SSL, 587 for TLS

    // Email headers
    $mail->setFrom($smtpUser, 'gonzalezcenter.org');
    $mail->addAddress("jcgcenter@aeth.org", "gonzalezcenter website");
    $mail->addReplyTo($senderEmail, $userName);

    // Email content
    $mail->isHTML(false);
    $mail->Subject = $userSubject;
    $mail->Body = "Name: $userName\nEmail: $senderEmail\nPhone: $userPhone\nMessage:\n$message";

    // Send the email
    $mail->send();
    $status = "success";
  } catch (Exception $e) {
    $status = "error";
  }
} else {
  $status = "error";
}

// Redirect back with a message
header("Location: contact.php?message=$status");
exit;
