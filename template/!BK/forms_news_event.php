<?php
include "includes/db.php";
include "includes/functions.php";
$name = "";
$email = "";
$comments = "";
$title = "";
$date = "";
$short_description = "";
$long_description = "";
$url = "";

$dateFrom = "";
$dateTo = "";
$timeTo = "";
$timeFrom = "";
$summary = "";
$location = "";
$description = "";
$information = "";
$toDate = "";
$startTime = "";
$endTime = "";

$errorName = "";
$errorEmail = "";
$errorTitle = "";
$errorShortDescription = "";
$errorURL = "";
$errorOr = "";
$errorDate = "";
$errorOr = "OR *";

$errorTime = "";
$errorSummary = "";
$errorDescriptionInformation = "";

$success_message = NULL;

$errors = TRUE;

if (isset($_POST['submit_news'])) {
	if (strlen($_POST['name']) == 0) {
		$errorName = "required";
		$errors = TRUE;
	} else $errors = FALSE;
	if (strlen($_POST['email']) == 0) {
		$errorEmail = "required";
		$errors = TRUE;
	} elseif (!email_validation($_POST['email'])) {
		$errorEmail = "invalid email address";
		$errors = TRUE;
		} else  $errors = FALSE;
	if (strlen($_POST['title'])==0 ) {
		$errorTitle = "required";
		$errors = TRUE;
	} else $errors = FALSE;
	if (strlen($_POST['short_description'])==0 ) {
		$errorShortDescription = "required";
		$errors = TRUE;
	} else $errors = FALSE;
	if (!isValidURL($_POST['url']))  {
	 	$errorURL = "Inavlid URL; url must contain http://";
		$errors = TRUE;
	} else $errors = FALSE;	
	if (strlen($_POST['long_description'])>0 && strlen($_POST['url'])>0) {
		$errorOr = '<span style="color:#F00">OR *</span>';
		$errors = TRUE;
	} elseif (strlen($_POST['long_description'])==0 && strlen($_POST['url'])==0) {
		$errorOr = '<span style="color:#F00">OR *</span>';
		$errors = TRUE;
	} else {
		$errorOr = "OR *";
		$errors = FALSE;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];
	
	$title = $_POST['title'];
	$short_description = $_POST['short_description'];
	$long_description = $_POST['long_description'];
	$url = $_POST['url'];	

	$date = date("Y-m-j");
	
	$status = 'pending';
		
	
	if (!$errors) {
		$sql = "INSERT INTO 
								news (
										ID, 
										title, 
										date, 
										short_disc, 
										long_disc, 
										url,
										submitterName,
										submitterEmail, 
										status
										) 
								VALUES (
										NULL, 
										'$title', 	
										'$date', 
										'$short_description',
										'$long_description', 
										'$url', 
										'$name',
										'$email',
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
		$email_from = '"EES"'.'<ees@uta.edu>';

		$email_message = "";
		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message .= "Your news/event request has been succussfully added. A moderator will approve your request shortly."."</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		
		//send an email to the moderator
		
		$email_to = "ees@uta.edu";
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
	if (isset($_POST['title'])) 
		$title = $_POST['title'];
	if (isset($_POST['year'])) 
		$fromDate = $_POST['year']."-".$_POST['month']."-".$_POST['day'];
	if (isset($_POST['toYear'])) 
		$toDate = $_POST['toYear']."-".$_POST['toMonth']."-".$_POST['toDay'];
	if (isset($_POST['fromHour'])) 
		$startTime = $_POST['fromHour'].":".$_POST['fromMinute']." ".$_POST['fromAPM'];
	if (isset($_POST['toHour'])) 
		$endTime = $_POST['toHour'].":".$_POST['toMinute']." ".$_POST['toAPM'];
	if (isset($_POST['summary'])) 
		$summary = $_POST['summary'];
	if (isset($_POST['description'])) 
		$description = $_POST['description'];
	if (isset($_POST['information'])) 
		$information = $_POST['information'];
	if (isset($_POST['location'])) 
		$location = $_POST['location'];
	
	if (isset($_POST['name'])) 
		$name = $_POST['name'];
	if (isset($_POST['email'])) 
		$email = $_POST['email'];
	if (isset($_POST['comments'])) 
		$comments = $_POST['comments'];
//
if (isset($_POST['submit_event'])) {
	$errors = TRUE;
	if (strlen($_POST['name']) == 0) {
		$errorName = "required";
		$errors = TRUE;
	} else $errors = FALSE;
	if (strlen($_POST['email']) == 0) {
		$errorEmail = "required";
		$errors = TRUE;
	} elseif (!email_validation($_POST['email'])) {
		$errorEmail = "invalid email address";
		$errors = TRUE;
		} else  $errors = FALSE;
	if (strlen($_POST['title'])==0 ) {
		$errorTitle = "required";
		$errors = TRUE;
	} else $errors = FALSE;
	if ($_POST['dateRadio'] == 'oneDay' ) {
		if ($_POST['month'] == -1 || $_POST['day'] == -1 || $_POST['year'] == -1) {
			$errorDate = "invalid date";
			$errors = TRUE;
		} else $errors = FALSE;
	}
	if ($_POST['dateRadio'] == 'multiDays') {
		if ($_POST['month'] == -1 || $_POST['day'] == -1 || $_POST['year'] == -1) {
			$errorDate = "invalid date";
			$errors = TRUE;
		} else $errors = FALSE;
		if ($_POST['toMonth'] == -1 || $_POST['toDay'] == -1 || $_POST['toYear'] == -1) {
			$errorDate = "invalid date";
			$errors = TRUE;
		} else $errors = FALSE;
	}
	if (isset($_POST['timeCheckBoxes']) && $_POST['timeCheckBoxes']=='startTime') {
		if ($_POST['fromHour']==-1 || $_POST['fromMinute']==-1 || $_POST['fromAPM']==-1) {
			$errorTime = "invalid time";
			$errors = TRUE;
		} else $errors = FALSE;
	}
	
	if (isset($_POST['timeCheckBoxesE']) && $_POST['timeCheckBoxesE']=='endTime') {
		if ($_POST['toHour']==-1 || $_POST['toMinute']==-1 || $_POST['toAPM']==-1) {
			$errorTime = "invalid time";
			$errors = TRUE;
		} else $errors = FALSE;
	}
	if (strlen($_POST['summary']) == 0) {
		$errorSummary = "required";
		$errors = TRUE;
	} else $errors = FALSE;

	if (isset($_POST['type']) && $_POST['type']=='fieldcamp') {
		if (isset($_POST['information']) && strlen($_POST['information'])==0) {
			$errorDescriptionInformation = 'required';
			$errors = TRUE;
		} else $errors = FALSE;
	}
	
	
	$type = $_POST['type'];
	
	$status = 'pending';
		
	
	if (!$errors) {
		$sql = mysql_query("INSERT INTO 
								events (
										ID,
										type,
										date_from,
										date_to,
										title,
										time_from,
										time_to,
										location,
										summary,
										description,
										information,
										status
										) 
								VALUES (
										NULL, 
										'$type', 
										'$fromDate', 
										'$toDate', 
										'$title', 
										'$startTime', 
										'$endTime',
										'$location',
										'$summary',
										'$description',
										'$information',
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
		$email_from = '"EES"'.'<ees@uta.edu>';

		$email_message = "";
		$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
		$email_message .= "Your news/event request has been succussfully added. A moderator will approve your request shortly."."</p><br />";
		
		sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		
		//send an email to the moderator
		
		$email_to = "ees@uta.edu";
		$email_bcc = "dineth@sachintha.com";
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
<form class="normal_text input_text" name="form" action="<?php echo "index.php?i=forms&s=ner"; ?>" method="post">
    <table cellspacing="10" cellpadding="5" style="border-collapse:separate" class="normal_text"  >
    
    
		<tr height="30">
        	<td>
            	Add a new
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
            	<strong>News Details</strong>
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
     
            	
            	<input hidden name="date" type="hidden" value="<?php //echo returnPostValue($date, $success_message); ?>" maxlength="50" size="30">
     
        
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
            	<input class="button white" name="submit_news" type="submit" value="Submit">
            </td>
        </tr>
        <?php } ?>
        <?php if((isset($_POST['request_type']) && $_POST['request_type']=='Event') or isset($_POST['submit_event'])) { ?>
        <tr height="30">
        	<td>
            	<strong>Event Details</strong>
            </td>
        </tr>
        <tr height="30">
        	<td>
            	<label for="type">Event Type</label>
            </td>
            <td>
            	<select name="type" onchange="this.form.submit();">
                	<option  <?php if((isset($_POST['type']) && $_POST['type']=='fieldcamp')) echo "selected"; ?> value="fieldcamp">Field Camp</option>
                    <option  <?php if(!isset($_POST['type']) || (isset($_POST['type']) && $_POST['type']=='other')) echo "selected"; ?> value="other">Other</option>  
                </select>
   
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
        	<td valign="top">
           	  <label for="date">Date *<?php echo "<span class='error_message'><br />".$errorDate."</span>"; ?></label>
            </td>
            <td valign="top">  
            	
            	  <label>
            	    <input 
						<?php 	if(!isset($_POST['dateRadio'])) echo 'checked';
								elseif(isset($_POST['dateRadio']) && $_POST['dateRadio']=='oneDay') echo 'checked'; ?> 
                 	onchange="this.form.submit();" type="radio" name="dateRadio" value="oneDay" id="dateRadio_0" />
            	    One Day Event</label>
            	  
            	  <label>
            	    <input
                    <?php	if(isset($_POST['dateRadio']) && $_POST['dateRadio']=='multiDays') echo 'checked'; ?>
                    onchange="this.form.submit();" type="radio" name="dateRadio" value="multiDays" id="dateRadio_1" />
            	    Multiple Days</label>
				<br />
                
					<?php if(!isset($_POST['dateRadio']) || (isset($_POST['dateRadio']) && $_POST['dateRadio']=='oneDay')) { ?>
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
                    <?php } elseif (isset($_POST['dateRadio']) && $_POST['dateRadio']=='multiDays') { ?> 
                    <table><tr><td ><label>From</label></td>
                    <td><select name="month">
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
                	</select></td></tr>
					<tr><td><label>To</label></td>
                    <td><select name="toMonth">
       	  				<option value="-1">-month-</option>
                    		<?php
								for ($i = 1; $i <= 12; $i++) {
									if ($i < 10)
										$val = "0".$i;
									else
										$val = $i;
									echo '<option ';
									if (!isset($success_message) && isset($_POST['toMonth']) && $_POST['toMonth'] == $val)
										echo 'selected';
									echo ' value="'.$val.'">'.getMonthName($val).'</option>';
								}	
							?>
              		</select> 
                	<select name="toDay">
                		<option value="-1">-day-</option>
                    		<?php
							for ($i = 1; $i <= 31; $i++) {
								if ($i < 10)
									$val = "0".$i;
								else
									$val = $i;
								echo '<option ';
								if (!isset($success_message) && isset($_POST['toDay']) && $_POST['toDay'] == $val)
									echo 'selected';
								echo ' value="'.$val.'">'.$i.'</option>';
							}
							?>
                	</select>
                	<select name="toYear">
                		<option value="-1">-year-</option>
                   		<?php
							$currentYear = date('Y');
						
							for ($i = $currentYear - 1; $i <= $currentYear + 9; $i++) {
							
								echo '<option ';
								if (!isset($success_message) && isset($_POST['toYear']) && $_POST['toYear'] == $i)
									echo 'selected';
								echo ' value="'.$i.'">'.$i.'</option>';
							}
						?>
                	</select></td></tr></table>
                    <?php } ?>
            </td>
        </tr>
        <tr height="30">
       	  <td valign="top">
            	<label for="timeCheckBoxes">Time</label>
            <?php echo "<span class='error_message'><br />".$errorTime."</span>"; ?></td>
            <td>
            	<table>
                	<tr>
                    	<td>
                        <label>
                        	<input 
                            <?php if (isset($_POST['timeCheckBoxes']) && $_POST['timeCheckBoxes']=='startTime' ||
								isset($_POST['timeCheckBoxesE']) && $_POST['timeCheckBoxesE']=='endTime') echo 'checked'; ?>
                            onchange="this.form.submit();" type="checkbox" name="timeCheckBoxes" value="startTime" id="timeCheckBoxes_0" />
            	     	Start</label>
                        </td>
                        <td>
                        	<?php
                            	if (isset($_POST['timeCheckBoxes']) && $_POST['timeCheckBoxes']=='startTime' ||
								isset($_POST['timeCheckBoxesE']) && $_POST['timeCheckBoxesE']=='endTime') {
							?>
                            	<select name="fromHour">
                                	<option value="-1">-HH-</option>
                                    <?php
										for ($i = 0; $i <= 12; $i++) {
											if ($i < 10)
												$hour = '0'.$i;
											else
												$hour = $i;
											echo '<option ';
											if (!isset($success_message) && isset($_POST['fromHour']) && $_POST['fromHour'] == $hour)
									echo 'selected';
											echo ' value="'.$hour.'">'.$hour.'</option>';
										}
									?>
                                </select> : 
                                <select name="fromMinute">
                                	<option value="-1">-MM-</option>
                                    <?php
										for ($i = 0; $i <= 59; $i++) {
											if ($i < 10)
												$minute = '0'.$i;
											else
												$minute = $i;
											echo '<option ';
											if (!isset($success_message) && isset($_POST['fromMinute']) && $_POST['fromMinute'] == $minute)
									echo 'selected';
											echo ' value="'.$minute.'">'.$minute.'</option>';
										}
									?>
                                </select>
                                 <select name="fromAPM">
                                	<option value="-1">-AM/PM-</option>
                                    <option <?php if (!isset($success_message) && isset($_POST['fromAPM']) && $_POST['fromAPM'] == 'AM')
									echo 'selected'; ?> value="AM">AM</option>
                                    <option <?php if (!isset($success_message) && isset($_POST['fromAPM']) && $_POST['fromAPM'] == 'PM')
									echo 'selected'; ?> value="PM">PM</option>
                                </select>
                            <?php
								}
							?>
            	   		</td>
                   	</tr>
                    <tr>
                    	<td>
                        <label>
            	     		<input 
                            <?php if (isset($_POST['timeCheckBoxesE']) && $_POST['timeCheckBoxesE']=='endTime') echo 'checked'; ?>
                            type="checkbox" onchange="this.form.submit();" name="timeCheckBoxesE" value="endTime" id="timeCheckBoxes_1" />
            	     	End</label>
                        </td>
                        <td>
                        	<?php
                            	if (isset($_POST['timeCheckBoxesE']) && $_POST['timeCheckBoxesE']=='endTime') {
							?>
                            	<select name="toHour">
                                	<option value="-1">-HH-</option>
                                   <?php
										for ($i = 0; $i <= 12; $i++) {
											if ($i < 10)
												$hour = '0'.$i;
											else
												$hour = $i;
											echo '<option ';
											if (!isset($success_message) && isset($_POST['toHour']) && $_POST['toHour'] == $hour)
									echo 'selected';
											echo ' value="'.$hour.'">'.$hour.'</option>';
										}
									?>
                                </select> : 
                                <select name="toMinute">
                                	<option value="-1">-MM-</option>
                                     <?php
										for ($i = 0; $i <= 59; $i++) {
											if ($i < 10)
												$minute = '0'.$i;
											else
												$minute = $i;
											echo '<option ';
											if (!isset($success_message) && isset($_POST['toMinute']) && $_POST['toMinute'] == $minute)
									echo 'selected';
											echo ' value="'.$minute.'">'.$minute.'</option>';
										}
									?>
                                </select>
                                 <select name="toAPM">
                                	<option value="-1">-AM/PM-</option>
                                     <option <?php if (!isset($success_message) && isset($_POST['toAPM']) && $_POST['toAPM'] == 'AM')
									echo 'selected'; ?> value="AM">AM</option>
                                    <option <?php if (!isset($success_message) && isset($_POST['toAPM']) && $_POST['toAPM'] == 'PM')
									echo 'selected'; ?> value="PM">PM</option>
                                </select>
                            <?php
								}
							?>
                        </td>
                   	</tr>
           		</table>  
            	
            	  
       	    </td>
        </tr>
        <tr height="30">
       	  <td valign="top">
            	<label for="summary">Summary</label>
            *<br />
            (40 words max)
            <?php 
						echo "<span class='error_message'><br />".$errorSummary."</span>"; 
						if (isset($_POST['short_description']) && str_word_count($_POST['short_description']) >= 40) 							echo "<span class='error_message'># of words = ".str_word_count($_POST['short_description'])."</span>";?></td>
            <td>
            	<textarea name="summary" cols="28" rows="5" ><?php echo returnPostValue($summary, $success_message); ?></textarea>
            </td>
        </tr>
        <?php if (isset($_POST['type']) && $_POST['type'] == 'other') { ?>
        <tr height="30">
       	  <td valign="top">
            	<label for="description">Description</label>
            * <?php echo "<span class='error_message'><br />".$errorDescriptionInformation."</span>"; ?></td>
            <td>
            	<textarea name="description" cols="28" rows="5" ><?php echo returnPostValue($description, $success_message); ?></textarea>
            </td>
        </tr>
        <?php } ?>
        <?php if (isset($_POST['type']) && $_POST['type'] == 'fieldcamp') { ?>
        <tr height="30">
        	<td valign="top">
            	<label for="information">Information * <?php echo "<span class='error_message'><br />".$errorDescriptionInformation."</span>"; ?></label>
            </td>
            <td>
            	<textarea name="information" cols="28" rows="5" ><?php echo returnPostValue($information, $success_message); ?></textarea>
            </td>
        </tr>
        <?php } ?>
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
            	<input class="button white" type="submit" name="submit_event" value="Submit" />
            </td>
        </tr>
        <?php } ?>
    </table>
</form>