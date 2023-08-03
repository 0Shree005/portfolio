<?php
require 'path/to/PHPMailer/PHPMailerAutoload.php';

// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Configure PHPMailer
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->Username = 'shreepingale12@gmail.com';
$mail->Password = 'bittu@9877';

// Set sender and recipient
$mail->setFrom($email, $name);
$mail->addAddress('shreepingale12@gmail.com'); // Replace with your Gmail account

// Set email content
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully.';
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}
?>
