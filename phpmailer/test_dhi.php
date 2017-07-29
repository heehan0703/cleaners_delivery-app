<?php
require 'class.phpmailer.php';

define('GUSER', 'dhirendra20kumar@gmail.com'); // GMail username
define('GPWD', 'vishu@millan');
define('SMTPSERVER', 'smtp.gmail.com'); //
function smtpmailer($to, $from, $from_name, $subject, $body, $is_gmail = true) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true; 
	if ($is_gmail) {
		$mail->SMTPSecure = 'ssl'; 
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;  
		$mail->Username = 'dhirendra20kumar@gmail.com';  
		$mail->Password = 'vishu@millan';   
	} else {
		$mail->Host = SMTPSERVER;
		$mail->Username = SMTPUSER;  
		$mail->Password = SMTPPWD;
	}        
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

smtpmailer('dranatech@yahoo.com', 'dhirendra20kumar@gmail.com', 'yourName', 'test mail message', 'Hello World!');
?>
