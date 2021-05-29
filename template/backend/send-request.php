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
$siteLink = $_POST['siteLink'];
$budget = $_POST['budget'];
$userMessage = $_POST['userMessage'];
$refLink = $_POST['refLink'];

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// Определяем отдел
$myEmail = "request@favrora.com";

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
  $mail->setFrom('support@favrora.com', $userName);
  $mail->addAddress($myEmail, 'Favrora');
  $mail->addReplyTo($userEmail, $userName);

  //Content
  $mail->isHTML(true);
  $mail->Subject = 'Redesign website: '.$siteLink;
  $mail->Body    = "Username: ".$userName. "<br>Email: ".$userEmail."<br>"."Site link: ".$siteLink."<br>"."Budget: ".$budget."<br><br>".$userMessage."<br><br><span style='font-style:italic;font-size:12px;'>This email is sent from the home page: favrora.com<br>Referral link: ".$refLink."</span>";

  $mail->send();
} catch (Exception $e) {
  // if error
}

?>