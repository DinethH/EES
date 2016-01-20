<?php
include "includes/db.php";
include "includes/functions.php";
$firstName = "";
$lastName = "";
$email = "";
$telephone = "";
$comments = "";

$errorFN = "";
$errorLN = "";
$errorEmail = "";
$errorComments = "";

$successMessage = NULL;

$errors = 1;

if (isset($_POST['submit']) ) {
	if (strlen($_POST['firstName']) == 0) {
		$errorFN = " required";
		$errors = 1;
	}
		else
			$errors = 0;
	if (strlen($_POST['lastName']) == 0) {
		$errorLN = " required";
		$errors = 1;
	}
		else
			$errors = 0;
	if (strlen($_POST['emailAddress']) == 0) {
		$errorEmail = " required";
		$errors = 1;
	}
		elseif (!email_validation($_POST['emailAddress'])) {
			$errorEmail = " Invalid email address";
			$errors = 1;
		}
		else
			$errors = 0;
	if (strlen($_POST['comments']) == 0) {
		$errorComments = " required";
		$errors = 1;
	}
		else
			$errors = 0;
	
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['emailAddress'];
	$telephone = $_POST['telephone'];
	$comments = $_POST['comments'];
			
	if($errors == 0) {
		// send email
		$email_to = 'ees@uta.edu';
		$email_bcc = "dineth@sachintha.com";
		$email_subject = "EES - Inquiry from ".$firstName;
		$email_from =  '"'.$firstName.' '.$lastName.'"'.'<'.$email.'>';

		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message = '
						<table class="contactTable" width="500" border="0" cellspacing="5" cellpadding="5" >
						  <tr style="background-color:#FFC;">
							<td width="100px;"><strong>Name:</strong></td>
							<td>'.$firstName." ". $lastName.'</td>
						  </tr>
						  <tr style="background-color:#FFC;">
							<td><strong>Phone:</strong></td>
							<td>'.$telephone.'</td>
						  </tr>
						  <tr style="background-color:#FFC;">
							<td><strong>Email:</strong></td>
							<td><a href="mailto:'.$email.'">'.$email.'</a></td>
						  </tr>
						  <tr style="background-color:#FFC;">
							<td><strong>Comments:</strong></td>
							<td>'.$comments.'</td>
						  </tr>
						</table>';
		$email_message .= "</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		// set succes message
		$successMessage = "Your message has been sent";
	}
	
	
}
?>
<div id="wrapper" align="left">
	
	<table class="clearfix" style="padding-left:10px;" width="1024px">
		<tr>
        	<td width="1024" id="current_bar">
                <?php include "current_bar.php"; ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="100">
                <?php include "side_menu.php"; ?>
            </td>
            <td align="left" width="500" valign="top">
            <?php echo '<span style="margin-left:-10px;" class="green_message">'.$successMessage.'</span>'; ?>
           		<form class="input_text" name="contact" method="post" action="">
                	<table  cellspacing="10" cellpadding="5" style="border-collapse:separate;margin-left:-25px;">
                    	
                            	
                          
                        </tr>
         			
                		<tr height="30">
                        	<td width="110">
                                <label>
                                    First Name* <?php echo "<span class='error_message'><br />".$errorFN."</span>"; ?>
                                </label>
                            </td>
                            <td>
                            	<input type="text" name="firstName" maxlength="50" size="38" value="<?php echo returnPostValue($firstName, $successMessage); ?>" />
                     		</td>
                        </tr>
                        <tr height="30"> 
                            <td>
                                <label>
                                    Last Name* <?php echo "<span class='error_message'><br />".$errorLN."</span>"; ?>
                                </label>
                            </td>
                            <td>
                            	<input type="text" name="lastName" maxlength="50" size="38" value="<?php echo returnPostValue($lastName, $successMessage); ?>" />
                    		</td>
                        </tr>
                        <tr height="30">
                        	<td>        
                                <label>
                                    Email Address* <?php echo "<span class='error_message'><br />".$errorEmail."</span>"; ?>
                                </label>
                            </td>
                            <td>
                            	<input type="text" name="emailAddress" maxlength="50" size="38" value="<?php echo returnPostValue($email, $successMessage); ?>" />
                      		</td>
                        </tr>
                        <tr height="30">   
                        	<td>   
                                <label>
                                    Telephone
                                </label>
                            </td>
                            <td>
                            	<input type="text" name="telephone" maxlength="50" size="38" value="<?php echo returnPostValue($telephone, $successMessage); ?>" />
                      		</td>
                        </tr>
                        <tr height="30">
                        	<td valign="top">      
                                <label>
                                    Comments* <?php echo "<span class='error_message'><br />".$errorComments."</span>"; ?>
                                </label>
                            </td>
                            <td>
                            	<textarea name="comments" cols="28" rows="8"><?php echo returnPostValue($comments, $successMessage); ?></textarea>
                            </td>
                      	</tr>
                 	 	<tr>
                        	<td>
                            </td>
                            <td align="right">
                            	<input class="button white" type="submit" name="submit" value="Submit" />
                            </td>
                       	</tr>
                        
             		</table> 
            	</form>    
            </td>
            
            <td width="500" valign="top" >
            <br /><br />

            	<strong>Address:</strong><br />
                Department of Earth & Environmental Sciences <br />
                Geoscience Building, Room 107<br />
                500 Yates Street<br />
                Box 19049, Arlington, Texas 76019<br />
                <br />
                <strong>Phone:</strong> 817-272-2987<br />
                <br />
                <strong>Fax:</strong> 817-272-2628<br />
                <br />
                <strong>Email:</strong> <a href="mailto:ees@uta.edu">ees@uta.edu</a><br />
            </td>
		</tr>
	</table>
<br />
</div>
