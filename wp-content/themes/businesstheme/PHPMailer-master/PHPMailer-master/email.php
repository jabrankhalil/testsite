<?php


require_once( "C:/wamp/www/testsite/wp-content/themes/businesstheme/PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'jabran93@gmail.com';
$mail->Password = 'jkm48995';
$mail->SMTPSecure = 'tls';

$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->addAddress($_POST['email'], $_POST['name']);

$mail->addReplyTo('jabran93@gmail.com', 'jabran khalil');

$mail->WordWrap = 50;
$mail->isHTML(true);

$mail->Subject = 'Using PHPMailer';
$mail->Body    = $_POST['message'];

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    exit;
}

echo 'Message has been sent';

?>