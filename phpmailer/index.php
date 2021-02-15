<?php
include('../function/db.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require_once 'vendor/autoload.php';
try {
$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Username='ahmedmekka1011@gmail.com';
$mail->Password ='';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;


$mail->From = 'ahmedmekka1011@gmail.com';
$mail->FromName = 'Ahmed Mekka';
$mail->addReplyTo('ahmedmekka1011@gmail.com', 'Ahmed Mekka');
$mail->addAddress('ahmedmekka1011@gmail.com','Ahmed Mekka');
  
$mail->Subject = 'Test!';
$mail->isHTML(true);
$mail->Body = '<h4>salam c Ahmed!</h4>';

$mail->addAttachment( 'download.jpg', 'Attachment');

$mail->SMTPOptions = array(

    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' =>true,
    )
);

$mail->send();
echo 'mail Sent!';
header('location: ../home.php');

} catch (Esception $e){

    echo "votre mssg non recus";
    header('location: ../contact.php');
}


   
