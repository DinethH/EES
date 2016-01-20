<link media="print" rel="stylesheet" type="text/css" href="css/print.css" />
<?php
	include "includes/db.php";
	include "includes/functions.php";
?>
<div id="wrapper" align="left">

<table class="clearfix" style="padding-left:10px" width="1024">
	<tr class="hidden">
    	<td width="1024" id="current_bar">
        	<?php include "current_bar.php"; ?>
        </td>
    </tr>
	<tr valign="top">
    	<td class="hidden" width="100">
			<?php include "side_menu.php"; ?>
		</td>
        
        <td>
        <div style="width:700px; padding-right:50px;">  
        	<?php 
			if (isset($_POST['rand']))
				$rand = $_POST['rand'];
				if (isset($rand)) {
					$sqlD = "SELECT * FROM fieldtrippeople WHERE rand='$rand'";
					$resultsD = mysql_query($sqlD);
					$rowD = mysql_fetch_array($resultsD);
					// send the confirmation email
					$link = "http://www.uta.edu/ees/index.php?i=field-trip&s=delete&u=".$rand;
					$email_to = $rowD['email'];
					$email_bcc = "dineth@sachintha.com";
					$email_subject = "1425: Field Trip - Delete";
					$email_from = '"EES"'.'<ees@uta.edu>';
			
					$email_message = "";
					$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
					$email_message .= "Please click on the following link to delete your entry for the 1425 field trip: <a href='".$link."'>$link</a> 
					<br />If this wasn't you or this was done mistakenly, please disregard this email.
					<br /><br />This is an automated message. DO NOT REPLY.</p><br />";
					
					sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
					
					echo "<span class='error_message' style='font-size:14px;'> An email has been sent to the following email address: ".$rowD['email']." Please follow the instructions to confirm your deletion.</span>";
				}
				elseif (isset($_GET['u'])) {
					
					$sqlDelete = "DELETE FROM fieldtrippeople WHERE rand='$_GET[u]'";
					$resultsDelete = mysql_query($sqlDelete);
					if (mysql_affected_rows()>0) {
						echo "<span class='green_message'>Your submission is successfull.</span>";
					}
					else {
						echo "<span class='red_message'>The selected record does not exist.</span>";
					}
					
				}
			
			else {
				echo "<span class='red_message'>Error: <a href='?i=field-trip&s=change'> Click here to go back to edit/delete your submission.</a></span>";
				
			}
			?>
		</div>
        </td>
       
	</tr>
</table>
</div>
<?php
if (isset($_POST['csv'])) {
	include "template/csv.php";
}
?>
<br>
<br>

