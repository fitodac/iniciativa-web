<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if( !$_POST ) die('Nothing to see here');
addslashes($_POST['message']);

//PHPMailer Object
$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = getenv('SMTP_HOST');
$mail->SMTPAuth = true;
$mail->Username = getenv('SMTP_USER');
$mail->Password = getenv('SMTP_PASSWORD');
$mail->SMTPSecure = getenv('SMTP_SECURE');
$mail->Port = getenv('SMTP_PORT');

$mail->From = 'hola@iniciativacc.com';
$mail->FromName = 'iniciativa';
//To address and name
$mail->addAddress('fitodac.webmanager@gmail.com', 'Webmanager');

//Address to which recipient will reply
$mail->addReplyTo('fitodac@gmail.com', 'Fitodac gmail');

//CC and BCC
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = 'Contacto desde IniciativaCC WEB';
$mail->Body = '<p>'. $_POST['name'] .'</p>';
$mail->Body .= '<p>'. $_POST['email'] .'</p>';
$mail->Body .= $_POST['message'];

$mail->AltBody = 'Nombre: '. $_POST['name'];
$mail->AltBody .= 'Email: '. $_POST['email'];
$mail->AltBody .= 'Mensaje: '. $_POST['message'];

try {
	$mail->send();
	echo 'Message has been sent successfully';
} catch (Exception $e) {
	echo 'Mailer Error: ' . $mail->ErrorInfo;
}