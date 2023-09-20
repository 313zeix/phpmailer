<?php
require_once 'mail.php';
$mail->setFrom('dogfrog313@gmail.com', 'ALi zein');
$mail->addAddress('10121806@mu.edu.lb');

$mail->Subject = "test message";
$mail->Body = "this is the HTML message body <b>in bold!</b>";
$mail->send();

?>