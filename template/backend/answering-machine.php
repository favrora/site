<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/SMTP.php';


// Получаем данные
$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
  $mail->SMTPDebug = 0;
  $mail->SMTPSecure = 'ssl';
  $mail->isSMTP();
  $mail->Host       = 'smtp.beget.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'support@favrora.com';
  $mail->Password   = 'KbFM6uI*';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  //Recipients
  $mail->setFrom('support@favrora.com', 'Favrora team');
  $mail->addAddress($userEmail, $userName);
  $mail->addReplyTo('support@favrora.com', 'Favrora team');

  //Content
  $mail->isHTML(true);
  $mail->Subject = "Website redesign request";
  $mail->Body    = "Hello ".$userName."!"."<br><br>"."Our team has received your request for a website redesign. We will consider your application and give you an answer within 2 days.<br><br>This message was sent by an answering machine. Thank you for your application, wait for our response!<br><br>Best regards, Favrora team.<br><br><span style='font-style:italic;font-size:12px;'>This email is sent from: favrora.com</span>";

  $mail->send();
} catch (Exception $e) {
  // if error
}

?>