<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/SMTP.php';


// Получаем данные
$userEmail = $_POST['userEmail'];
$fileUrl = $_POST['fileUrl'];

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;

$mail->Host = '';
$mail->Port = 465;
$mail->Username = 'seller@favrora.com';
$mail->Password = '';

// От кого
$mail->setFrom('seller@favrora.com', 'Favrora');

// Кому
$mail->addAddress($userEmail, 'Buyer');

// Тема письма
$subject = 'Product content';
$mail->Subject = $subject;

// Тело письма
$body = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/template/product-email.php');
$mail->msgHTML($body);

// Приложение
$mail->addAttachment($_SERVER['DOCUMENT_ROOT'].$fileUrl);

$mail->send();

?>