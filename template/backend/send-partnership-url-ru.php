<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/src/php/PHPMailer/src/SMTP.php';


// Получаем данные
$userEmail = $_POST['userEmail'];
$refLink = $_POST['refLink'];

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
    $mail->addAddress($userEmail, 'Favrora');
    $mail->addReplyTo('support@favrora.com', 'Favrora team');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Реферальная ссылка (Favrora)';
    $mail->Body    = "Реферальная ссылка: ".$refLink."<br>

<p>Если кто-то купить наши услуги по вашей реферальной ссылке, мы заплатим вам 30% от стоимости приобретенной услуги.</p>

<p>Мы сами свяжемся с вами по электронной почте, если получим платеж. Ваша реферальная ссылка и ваш адрес электронной почты сохранены в нашей базе данных.</p>

<h2>Как осуществляется покупка нашей услуги?</h2>

<p>Реферальная ссылка ведет на нашу главную страницу. На главной странице находится форма для подачи заявки на редизайн сайта.</p>

<p>Клиент заполняет и отправляет форму. Затем мы связываемся с ним и переделываем сайт клиента. Клиент платит нам, и мы немедленно свяжемся с вами, чтобы отправить вам 30% от суммы покупки.</p>

<p>Мы ценим вашу помощь, поэтому выделяем такой большой процент.</p><br>

<span style='font-style:italic;font-size:12px;'>С уважением, команда Favrora.</span>";

    $mail->send();
} catch (Exception $e) {
    // if error
}

?>