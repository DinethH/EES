<?php
if(isset($_POST['email'])) {
     
	$contentType = 'text/html;charset="UTF-8"';
	 
	// create email headers
	$headers = 'From: '.$from2."\r\n".
	'Bcc: '.$bcc."\r\n".
	'Content-Type: '.$contentType."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);  

}
?>
