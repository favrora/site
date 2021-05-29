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
    $mail->Subject = 'Referral link (Favrora)';
    $mail->Body    = "Referral link: ".$refLink."<br>
<p>If someone buys our services using your referral link, we will pay you 30% of the purchased service.</p>

<p>We will contact you by email ourselves if we receive any payment. Your referral link and your email are saved in our database.</p>

<h2>How is the purchase of our service carried out?</h2>

<p>The referral link points to our home page. On the main page there is a form to apply for a website redesign.</p>

<p>The client fills out and submits the form. Then we contact him and redesign the client's website. The client pays us and we immediately contact you to send you 30% of the purchase amount.</p>

<p>We appreciate your help, which is why we allocate such a large percentage.</p><br>

<span style='font-style:italic;font-size:12px;'>Best regards, Favrora team.</span>";

    $mail->send();
} catch (Exception $e) {
    // if error
}

?>