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
$department = $_POST['department'];
$emailTitle = $_POST['emailTitle'];
$userMessage = $_POST['userMessage'];

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// Определяем отдел
if($department == "ceo-founder") {
  $myEmail = "admin@favrora.com";
} else if($department == "technical-support") {
  $myEmail = "support@favrora.com";
} else {
  $myEmail = "support@favrora.com";
}

try {
  $mail->SMTPDebug = 0;
  $mail->SMTPSecure = 'ssl';
  $mail->isSMTP();
  $mail->Host       = 'smtp.beget.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'contact@favrora.com';
  $mail->Password   = '%D%pqd88';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  //Recipients
  $mail->setFrom('contact@favrora.com', 'User');
  $mail->addAddress($myEmail, 'Favrora support');
  $mail->addReplyTo($userEmail, $userName);

  //Content
  $mail->isHTML(true);
  $mail->Subject = $emailTitle;
  $mail->Body    = "Username: ".$userName."<br>Email: ".$userEmail."<br><br>".$userMessage."<br><br><span style='font-style:italic;font-size:12px;'>This email is sent from the contact page: favrora.com/contact-us</span>";

  $mail->send();
} catch (Exception $e) {
  // if error
}

?>