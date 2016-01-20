<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "dineth.hettiarachchi@mavs.uta.edu";
	$bcc = "dineth@sachintha.com";
    $email_subject = "EES Contact Form Message";
	$from2 = '"'.$_POST['first_name'].' '.$_POST['last_name'].'"'.'<'.$_POST['email'].'>'	;
    
	$contentType = 'text/html;charset="UTF-8"';
     
    function died($error) {
        // your error code can go here
		// not used
        echo "<p style='color:#FF0000'>We are very sorry, but there were error(s) found with the form you submitted. </p>";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "<a href='contact.php'>Click here to go back and fix these errors.</a><br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    //$email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message = "";
    $email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>First Name: ".clean_string($first_name)."<br />";
    $email_message .= "Last Name: ".clean_string($last_name)."<br />";
    $email_message .= "Email: ".clean_string($email_from)."<br />";
    $email_message .= "Telephone: ".clean_string($telephone)."<br />";
    $email_message .= "Message: ".clean_string($comments)."</p><br />";
     
     
// create email headers
$headers = 'From: '.$from2."\r\n".
'Bcc: '.$bcc."\r\n".
'Content-Type: '.$contentType."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
 

 
<?php
$success_message = '<span style="color:#00CC33">Your message has been sent.</span>';
}
?>
<p style='font-size:16px; color:#E8FFD5; text-shadow:1px 1px 1px #E3FFE3'></p>