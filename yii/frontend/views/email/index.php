<?php 

include "../../vendor/phpmailer/phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.qq.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '1164010074@qq.com';                 // SMTP username
$mail->Password = 'hislgmzhkezsieaa';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('1164010074@qq.com', '孙靠谱');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('1045415797@qq.com');               // Name is optional
$mail->addReplyTo('1045415797@qq.com', '王彤');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '么么哒！';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '发送成功';
}






 ?>