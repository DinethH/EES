<?php
include "includes/db.php";
include "includes/functions.php";
$name = "";
$email = "";
$comments = "";
$title = "";
$subtitle = "";
$date = "";
$short_description = "";
$long_description = "";
$url = "";

$location = "";
$time = "";
$description = "";

$errorName = "";
$errorEmail = "";
$errorTitle = "";
$errorShortDescription = "";
$errorURL = "";
$errorOr = "";
$errorDate = "";

$success_message = NULL;


if (isset($_POST['submit_news'])) {
	if (!isValidURL($_POST['url'])) 
	 	$errorURL = "Inavlid URL; url must contain http://";
	if (strlen($_POST['name'])==0)
		$errorName = "Your name is required";
	if (!email_validation($_POST['email']))
		$errorEmail = "Inavlid email address";
	if (strlen($_POST['short_description'])==0)
		$errorShortDescription = "A short description is required";
	if (strlen($_POST['title'])==0)
		$errorTitle = "This field is required";
	if (strlen($_POST['long_description']) && strlen($_POST['url'])>0)
		$errorOr = '<span style="color:#F00">OR</span>';
	else
		$errorOr = "OR";
	
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
	} else { $title = NULL; }
	if (strlen($_POST['subtitle'])>0) {
		$subtitle = $_POST['subtitle'];
	} else {$subtitle = NULL;}
	$date = date("Y-m-j");
	if (isset($short_description)) {
		$short_description = $_POST['short_description'];
	} else {$short_description = NULL; }
	if (isset($long_description)) {
		$long_description = $_POST['long_description'];
	} else {$long_description = NULL; }
	$url = $_POST['url'];
	$status = 'pending';
		
	function validate () {
		if (
			strlen($_POST['title'])>0 && 
			strlen($_POST['short_description'])>0 &&
			strlen($_POST['name'])>0 ||
			((strlen($_POST['long_description'])>0 || strlen($_POST['url'])>0) &&
				 !(strlen($_POST['long_description']>0) && strlen($_POST['url'])>0))
			) {
			return true;
		} else {return false;}
	}
	
	if (validate() && email_validation($email) && isValidURL($url)) {
		$sql = "INSERT INTO 
								news (
										ID, 
										title, 
										sub_title, 
										date, 
										short_disc, 
										long_disc, 
										url, 
										status
										) 
								VALUES (
										NULL, 
										'$title', 
										'$subtitle', 
										'$date', 
										'$short_description',
										'$long_description', 
										'$url', 
										'$status'
										)";
		mysql_query($sql);
								
		if (mysql_affected_rows($conn)>0)
			$success_message = "Your request has been added successfully";
		echo '<span class="green_message">'.$success_message.'</span>';
		
		
		// send the confirmation email
		$email_to = $email;
		$email_bcc = "";
		$email_subject = "News/event request confirmation";
		$email_from = '"EES"'.'<mom@sachintha.com>';

		$email_message = "";
		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message .= "Your news/event request has been succussfully added. A moderator will approve your request shortly."."</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		
		//send an email to the moderator
		
		$email_to = "dineth.hettiarachchi@mavs.uta.edu";
		$email_bcc = "";
		$email_subject = "News item request";
		$email_from = '"'.$name.'"'.'<'.$email.'>';
		
		$email_message = "";
		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message .= "A news item request has been made by ".$name.".<br />Message: $comments"."</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		 
	}
	else {
		echo '<span class="red_message">Unable to submit. The following error(s) have been occured.</span>';
	}
}
// add event
if (isset($_POST['submit_event'])) {
	if (strlen($_POST['title'])==0)
		$errorTitle = "Title is required";
	if (strlen($_POST['name'])==0)
		$errorName = "Your name is required";
	if (!email_validation($_POST['email']))
		$errorEmail = "Inavlid email address";
	if ($_POST['year']==-1 || $_POST['month']==-1 || $_POST['day']==-1)
		$errorDate = "Date of the event is required.";
	$date = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	if (isset($_POST['title'])) {
		$title = $_POST['title'];
	} else { $title = NULL; }
	if (strlen($_POST['description'])>0) {
		$description = $_POST['description'];
	} else {$description = NULL;}
	if (strlen($_POST['time'])>0) {
		$time = $_POST['time'];
	} else {$time = NULL; }
	if (strlen($_POST['location'])>0) {
		$location = $_POST['location'];
	} else {$location = NULL; }
	
	$status = 'pending';
		
	function validate () {
		if (
			strlen($_POST['title'])>0 && 
			($_POST['year']!=-1 || $_POST['month']!=-1 || $_POST['day']!=-1) &&
			strlen($_POST['name'])>0
			) {
			return true;
		} else {return false;}
	}
	
	if (validate() && email_validation($email)) {
		$sql = mysql_query("INSERT INTO 
								events (
										ID, 
										title, 
										description, 
										date, 
										time, 
										location, 
										status
										) 
								VALUES (
										NULL, 
										'$title', 
										'$description', 
										'$date', 
										'$time', 
										'$location', 
										'$status'
										)"
								);
		if (mysql_affected_rows($conn)>0)
			$success_message = "Your request has been added successfully";
		echo '<span class="green_message">'.$success_message.'</span>';
		
				// send the confirmation email
		$email_to = $email;
		$email_bcc = "";
		$email_subject = "News/event request confirmation";
		$email_from = '"EES"'.'<mom@sachintha.com>';

		$email_message = "";
		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message .= "Your news/event request has been succussfully added. A moderator will approve your request shortly."."</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		
		//send an email to the moderator
		
		$email_to = "dineth.hettiarachchi@mavs.uta.edu";
		$email_bcc = "";
		$email_subject = "Event request";
		$email_from = '"'.$name.'"'.'<'.$email.'>';
		
		$email_message = "";
		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message .= "Event request has been made by ".$name.".<br />Message: $comments"."</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
			
	}
	else {
		echo '<span class="red_message">Unable to submit. The following error(s) have been occured.</span>';
	}	
}
?>
<form class="normal_text input_text" name="form" action="<?php echo "index.php?i=events&t=request"; ?>" method="post">
    <table cellspacing="10" cellpadding="5" style="border-collapse:separate" class="normal_text"  >
    
    
		<tr height="30">
        	<td>
            	I want to add a new
            </td>
            <td>
            	<select onchange="this.form.submit();" name="request_type">
            	  <option  value="-1">--</option>
            	  <option <?php if((isset($_POST['request_type']) && $_POST['request_type']=='News')) echo "selected"; ?> value="News">news item</option>
            	  <option <?php if((isset($_POST['request_type']) && $_POST['request_type']=='Event')) echo "selected"; ?> value="Event">event</option>
            	</select>
          </td>
        </tr>
        
        
    	<tr height="30">
        	<td>
            	<strong>Your Details</strong>
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="name">Name *<?php echo "<span class='error_message'><br />".$errorName."</span>"; ?></label>
            </td>
            <td>
            	<input name="name" type="text" value="<?php echo returnPostValue($name, $success_message); ?>" maxlength="50" size="38">
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="email" >Email *<?php echo "<span class='error_message'><br />".$errorEmail."</span>"; ?></label>
            </td>
            <td>
            	<input name="email" type="text" value="<?php echo returnPostValue($email, $success_message); ?>" maxlength="50" size="38">
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="comments">Message to the moderator</label>
            </td>
            <td>
            	<textarea name="comments" cols="28" rows="4"><?php echo returnPostValue($comments, $success_message); ?></textarea>
          </td>
        </tr>


        <?php if((isset($_POST['request_type']) && $_POST['request_type']=='News') or isset($_POST['submit_news'])) { ?>
        <tr height="30">
        	<td>
            	<strong>News Information</strong>
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="title">Title *<?php echo "<span class='error_message'><br />".$errorTitle."</span>";?></label>
            </td>
            <td>
            	<input name="title" type="text" value="<?php echo returnPostValue($title, $success_message); ?>" maxlength="200" size="38">
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="subtitle">Subtitle</label>
           	</td>
            <td>
            	<input name="subtitle" type="text" value="<?php echo returnPostValue($subtitle, $success_message); ?>" maxlength="50" size="38" />
            </td>
        </tr>
       
     
            	<label hidden for="date">Date</label>
          
            	<input hidden name="date" type="text" value="<?php //echo returnPostValue($date, $success_message); ?>" maxlength="50" size="30">
     
        
        <tr height="30">
        	<td>
            	<label for="short_description">Summary *<br />(40 words max)
					<?php 
						echo "<span class='error_message'><br />".$errorShortDescription."</span>"; 
						if (isset($_POST['short_description']) && str_word_count($_POST['short_description']) >= 40) 							echo "<span class='error_message'># of words = ".str_word_count($_POST['short_description'])."</span>";?>
                </label>
            </td>
            <td><textarea name="short_description" cols="28" rows="5" ><?php echo returnPostValue($short_description, $success_message); ?></textarea>
            </td>
        </tr>
        <tr height="30">
       		<td>
            	<label for="long_description">Article</label>
           	</td>
            <td>
            	<textarea name="long_description" cols="28" rows="10" ><?php echo returnPostValue($long_description, $success_message); ?></textarea>
          </td>
        </tr>
        <tr height="30">
        	<td>
            </td>
            <td align="center">
            	<?php echo $errorOr; ?>
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="url">URL to the Article<?php echo "<span class='error_message'><br />".$errorURL."</span>";?></label>
            </td>
            <td>
            	<input name="url" type="text" value="<?php echo returnPostValue($url, $success_message); ?>" maxlength="50" size="38">
            </td>
        </tr>
        <tr height="30">
       	  <td>
            </td>
        	<td align="right">
            	<input name="submit_news" type="submit" value="Submit">
            </td>
        </tr>
        <?php } ?>
        <?php if((isset($_POST['request_type']) && $_POST['request_type']=='Event') or isset($_POST['submit_event'])) { ?>
        <tr height="30">
        	<td>
            	<strong>Event Information</strong>
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="title">Title *<?php echo "<span class='error_message'><br />".$errorTitle."</span>"; ?></label>
            </td>
            <td>
            	<input name="title" type="text" maxlength="200" size="38" value="<?php echo returnPostValue($title, $success_message); ?>" />
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="description">Description</label>
            </td>
            <td>
            	<textarea name="description" cols="28" rows="5" ><?php echo returnPostValue($description, $success_message); ?></textarea>
            </td>
        </tr>
        <tr height="30">
        	<td>
           	  <label for="date">Date *<?php echo "<span class='error_message'><br />".$errorDate."</span>"; ?></label>
            </td>
            <td>  
              	<select name="month">
                	<option value="-1">-month-</option>
                    <?php
						for ($i = 1; $i <= 12; $i++) {
							if ($i < 10)
								$val = "0".$i;
							else
								$val = $i;
							echo '<option ';
							if (!isset($success_message) && isset($_POST['month']) && $_POST['month'] == $val)
								echo 'selected';
							echo ' value="'.$val.'">'.getMonthName($val).'</option>';
						}
					?>
                </select> 
                <select name="day">
                	<option value="-1">-day-</option>
                     <?php
						for ($i = 1; $i <= 31; $i++) {
							if ($i < 10)
								$val = "0".$i;
							else
								$val = $i;
							echo '<option ';
							if (!isset($success_message) && isset($_POST['day']) && $_POST['day'] == $val)
								echo 'selected';
							echo ' value="'.$val.'">'.$i.'</option>';
						}
					?>
                </select>
                <select name="year">
                	<option value="-1">-year-</option>
                    <?php
						$currentYear = date('Y');
						
						for ($i = $currentYear - 1; $i <= $currentYear + 9; $i++) {
							
							echo '<option ';
							if (!isset($success_message) && isset($_POST['year']) && $_POST['year'] == $i)
								echo 'selected';
							echo ' value="'.$i.'">'.$i.'</option>';
						}
					?>
                </select> 
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="time">Time</label>
            </td>
            <td>
            	<input name="time" type="text" maxlength="50" size="38" value="<?php echo returnPostValue($time, $success_message); ?>" />
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="location">Location</label>
            </td>
            <td>
            	<input name="location" type="text" maxlength="50" size="38" value="<?php echo returnPostValue($location, $success_message); ?>" />
            </td>
        </tr>
        <tr height="30">
        	<td>
            </td>
            <td align="right">
            	<input type="submit" name="submit_event" />
            </td>
        </tr>
        <?php } ?>
    </table>
</form>