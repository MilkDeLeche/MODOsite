<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);

try {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mangel3457@gmail.com'; // Replace with your Gmail
    $mail->Password = 'eill bjao aqcg sjju';   // Replace with your Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('mangel3457@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'New Message For MODO';
    $mail->Body = "<strong>Nombre:</strong> $name<br><strong>Email:</strong> $email<br><br><strong>Mensaje:</strong><br>$message";

    $mail->send();
    header("Location: thank-you.html");
    exit();

} catch (Exception $e) {
    echo "❌ No se pudo enviar el mensaje. Error del correo: {$mail->ErrorInfo}";
}
?>