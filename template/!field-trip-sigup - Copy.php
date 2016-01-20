<div id="wrapper" align="left">

<table class="clearfix" style="padding-left:10px" width="1024">
	<tr>
    	<td width="1024" id="current_bar">
        	<?php include "current_bar.php"; ?>
        </td>
    </tr>
	<tr valign="top">
    	<td width="100">
			<?php include "side_menu.php"; ?>
		</td>
        
        <td>
        
        <h6 style="margin-top:0px; margin-right:30px;">GEOL 1425 Field Trip</h6>
<?php
	include "includes/db.php";
	include "includes/functions.php";
	
if (isset($_POST['datePreffered']))
	$datePreffered = $_POST['datePreffered'];
else
	$datePreffered = "";
$prefferedTransportation = "";
$studentID = "";
$firstName = "";
$lastName = "";
$labSection = "";
$email = "";

$errorDatePreffered = "";
$errorPrefferedTransportation = "";
$errorStudentID = "";
$errorFirstName = "";
$errorLastName = "";
$errorLabSection = "";
$errorEmail = "";
$errorDuplicates = "";

$success_message = NULL;

$errors = TRUE;


if (isset($_POST['submitForm'])) {
	if ($_POST['datePreffered'] == -1) {
		$errors = TRUE;
		$errorDatePreffered = 'style="color:#F00"';
	} else {$errors = FALSE;}
	if ($_POST['desiredTransportation'] == -1) {
		$errors = TRUE;
		$errorPrefferedTransportation = 'style="color:#F00"';
	} else {$errors = FALSE; }
	if (strlen($_POST['sID']) == 0) {
		$errors = TRUE;
		$errorStudentID = 'style="color:#F00"';
	} else {$errors = FALSE; }	
	if (!is_numeric($_POST['sID'])) {
		$errors = TRUE;
		$errorStudentID = 'style="color:#F00"';
	} else {$errors = FALSE;}
	if (strlen($_POST['firstName']) == 0) {
		$errors = TRUE;
		$errorFirstName = 'style="color:#F00"';
	} else $errors = FALSE;
	if (strlen($_POST['lastName']) == 0) {
		$errors = TRUE;
		$errorLastName = 'style="color:#F00"';
	} else {$errors = FALSE; }
	if ($_POST['labSection'] == -1) {
		$errors = TRUE;
		$errorLabSection = 'style="color:#F00"';
	} else {$errors = FALSE; }
	if (strlen($_POST['email']) == 0) {
		$errors = TRUE;
		$errorEmail = 'style="color:#F00"';
	} elseif (!email_validation($_POST['email'])) {
		$errors = TRUE;
		$errorEmail = 'style="color:#F00"';
	} elseif (!uta_email_validation($_POST['email'])) {
		$errors = TRUE;
		$errorEmail = 'style="color:#F00"';
	} else  $errors = FALSE;
	
	
	if ($_POST['datePreffered'] == -1 ||
		$_POST['desiredTransportation'] == -1 ||
		strlen($_POST['sID']) == 0 ||
		!is_numeric($_POST['sID']) ||
		strlen($_POST['firstName']) == 0 ||
		strlen($_POST['lastName']) == 0 ||
		$_POST['labSection'] == -1 ||
		strlen($_POST['email']) == 0 ||
		!email_validation($_POST['email']) ||
		!uta_email_validation($_POST['email'])) {
			$errors = TRUE;
		} else { $errors = FALSE; }
	
	// duplicate entries
	$sqlSID = "SELECT * FROM fieldtrippeople";
	$resultsSID = mysql_query($sqlSID);
	while ($row = mysql_fetch_array($resultsSID)) {
		if ($row['eid'] == $_POST['sID']) {
			$errors = TRUE;
			$errorDuplicates = "The record already exists.";
		}
		
	}
	
	
	if (!$errors) {
		
		$datePreffered = $_POST['datePreffered'];
		$prefferedTransportation = $_POST['desiredTransportation'];
		$studentID = $_POST['sID'];
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$labSection = $_POST['labSection'];
		$email = $_POST['email'];
		$status = 'pending';
		$rand = strtolower(substr($firstName, 0,1)).strtolower(substr($lastName, 0,1)).rand(100000,999999);
		
		$sql = "INSERT INTO 
								fieldtrippeople (
										ID, 
										firstName, 
										lastName, 
										eid, 
										datePreffered, 
										transportation,
										section,
										dateSigned,
										email,
										status,
										rand
										) 
								VALUES (
										NULL, 
										'$firstName', 	
										'$lastName', 
										'$studentID',
										'$datePreffered', 
										'$prefferedTransportation', 
										'$labSection',
										NOW(),
										'$email',
										'$status',
										'$rand'
										)";
		mysql_query($sql);
								
		if (mysql_affected_rows($conn)>0) {
			$success_message = "An email has been sent to the given email address. Please click the link in the email to <span class='red_message'>verify</span> your submission!";
			echo '<span class="green_message">'.$success_message.'</span>';
			
			// send the confirmation email
			$link = "http://www.uta.edu/ees/index.php?i=field-trip&s=verify&u=".$rand;
			$email_to = $_POST['email'];
			$email_bcc = "dineth@sachintha.com";
			$email_subject = "1425: Field Trip";
			$email_from = '"EES"'.'<ees@uta.edu>';
	
			$email_message = "";
			$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
			$email_message .= "Please click the following link to verify for submission: <a href='".$link."'>$link</a> 
			<br />To make any changes please contact your instructor.
			<br /><br />This is an automated message. DO NOT REPLY.</p><br />";
			
			sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
		}	
	}
}
?>


        	
<div style="width:700px; padding-right:50px;"> 
<strong>All fields are required.</strong><br />
<?php
if (strlen($errorDuplicates)>0){
	echo  '<span class="red_message">'.$errorDuplicates.'</span>';
}
?>
			<form name="form" class="normal_text input_text" action="" method="post">
            	<table width="700px" cellspacing="10" cellpadding="5" style="border-collapse:separate" class="normal_text" >
                	<tr height="30">
                    	<td width="250" >
                        	<label for="datePreffered"><span <?php echo $errorDatePreffered; ?>>Date Preffered</span></label>	
                        </td>
                        <td width="300">
                        	<select name="datePreffered" onchange="this.form.submit();">
                            	<option value="-1">--</option>
                                <?php
									
									$sqlDates = "SELECT * FROM fieldtripdates WHERE dateFrom>CURDATE() ORDER BY dateFrom ";
									$restultsDates = mysql_query($sqlDates);
									while($row = mysql_fetch_assoc($restultsDates)) {
										$sqlCount = "SELECT * FROM fieldtrippeople JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE fieldtripdates.dateFrom='$row[dateFrom]'";
										$resultsCount = mysql_query($sqlCount);
										$count = 0;
										while ($rowCount = mysql_fetch_array($resultsCount)) {
											$count++;
										}
										if ($count < 46) {
											echo '<option';
											if (!isset($success_message) && isset($_POST['datePreffered']) && $_POST['datePreffered'] == $row['ID'])
												echo ' selected ';
											echo ' value="'.$row['ID'].'">';
											if ($row['dateFrom']==$row['dateTo'])
												echo dateMD($row['dateFrom']);
											else
												echo dateMD($row['dateFrom']).' - '.dateMD($row['dateTo']);
											echo '</option>';
										}
									}
								?>
                            </select>
                        </td>
                        <td valign="top" width="150" rowspan="9">
                        	
                        	
                        <table class="availability">
                        <?php
							$datesID = array();
							$tempCount = 0;
							$sqlDatesArray = "SELECT * FROM fieldtripdates WHERE dateFrom>CURDATE() ORDER BY dateFrom";
							$resultsDatesArray = mysql_query($sqlDatesArray);
							while ($row = mysql_fetch_array($resultsDatesArray)) {
								$datesID[$tempCount] = $row['ID'];
								$tempCount++;
								
								// while fieldtrippeople count number of signed up perday
								$sqlTansArray = "SELECT fieldtriptransportation.ID FROM (fieldtriptransportation JOIN fieldtrippeople ON fieldtriptransportation.ID=fieldtrippeople.transportation) JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE (fieldtripdates.ID='$row[ID]' && fieldtrippeople.status='accepted')";
									$resultsTransArray = mysql_query($sqlTansArray);
									$bCount = 0;
									$cCount = 0;
									while($row2 = mysql_fetch_array($resultsTransArray)) {
										if ($row2['ID']=='1')
											$bCount++;
										if ($row2['ID']=='2')
											$cCount++;
									}
						?>
                        	
                            	<tr height="30" >
                                	<td colspan="4">
                                    	<strong><span class="bottom_border"><?php
											if ($row['dateFrom'] == $row['dateTo'])
												echo dateInUS($row['dateFrom']);
											else
												echo dateMONDD($row['dateFrom']).' - '.dateMONDD($row['dateTo']);;
															
										 ?></span></strong>
                                    </td>
                                </tr>
                                <tr height="30">
                                	<td width="25%">
                                    	Bus
                                    </td>
                                    <td width="25%">
                                    	 <div class="<?php if ($bCount>=40)
										 						echo 'availabilityDotRed';
															else
																echo 'availabilityDotGreen';
													?>
                                      "><span title="<?php if($bCount==40) echo "FULL"; else echo 'Number of available seats: '.(40-$bCount).''; ?>"><?php echo 40-$bCount; ?></span></div>
                                    </td>
                                    <td width="25%">
                                    	Car
                                    </td>
                                    <td width="25%">
                                    	 <div class="<?php if ($cCount>=6)
										 						echo 'availabilityDotRed';
															else
																echo 'availabilityDotGreen';
													?>
                                         "><span  title="<?php if($cCount==6) echo "FULL"; else echo 'Number of available cars: '.(6-$cCount).''; ?>"><?php echo 6-$cCount; ?></span></div>
                                    </td>
                                </tr>
                           
                        <?php	
							}
						?>
                         </table>
                        </td>
                    </tr>
                     <tr height="30">
                    	<td>
                        	<label for="desiredTransportation"><span <?php echo $errorPrefferedTransportation; ?> >Preffered Transportation</span></label>	
                        </td>
                        <td>
            				<select name="desiredTransportation">
                            	<option value="-1">--</option>
                                <?php
								if (isset($_POST['datePreffered']) && $_POST['datePreffered']!=-1) {
									$sqlTransportation = "SELECT fieldtriptransportation.ID FROM (fieldtriptransportation JOIN fieldtrippeople ON fieldtriptransportation.ID=fieldtrippeople.transportation) JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE fieldtripdates.ID='$datePreffered'";
									$restultsTransportation = mysql_query($sqlTransportation);
									$busCount = 0;
									$carCount = 0;
									while($row = mysql_fetch_assoc($restultsTransportation)) {
										if ($row['ID']=='1')
											$busCount++;
										if ($row['ID']=='2')
											$carCount++;
									}
									if ($busCount < 40) {
										echo '<option ';
										if (!isset($success_message) && isset($_POST['desiredTransportation']) && $_POST['desiredTransportation'] == '1')
												echo ' selected ';
										echo ' value="1">Bus</option>';
									}
									if ($carCount < 6) {
										echo '<option ';
										if (!isset($success_message) && isset($_POST['desiredTransportation']) && $_POST['desiredTransportation'] == '2')
												echo ' selected ';
										echo ' value="2">Car</option>';
									}
								}
								?>
                            </select
                        ></td>
                    </tr>
                    <tr height="30">
                    	<td>
                        	<label for="sID"><span <?php echo $errorStudentID; ?>>Student ID</span></label>
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['sID'])) echo $_POST['sID']; ?>" type="text" name="sID" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    <tr height="30">
                    	<td>
                        	<label for="firstName"><span <?php echo $errorFirstName; ?>>First Name</span></label>		
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['firstName'])) echo $_POST['firstName']; ?>" type="text" name="firstName" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    <tr height="30">
                    	<td>
                        	<label for="lastName"><span <?php echo $errorLastName; ?>>Last Name</span></label>	
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['lastName'])) echo $_POST['lastName']; ?>" type="text" name="lastName" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    
                    <tr height="30">
                    	<td>
                        	<label for="labSection"><span <?php echo $errorLabSection; ?>>Lab Section</span></label>	
                        </td>
                        <td>
                        	<select name="labSection">
                            	<option value="-1">--</option>
                               	 <?php
									$sqlSection = "SELECT * FROM fieldtriplabs";
									$restultsSection = mysql_query($sqlSection);
									while($row = mysql_fetch_assoc($restultsSection)) {
										echo '<option ';
										if (!isset($success_message) && isset($_POST['labSection']) && $_POST['labSection'] == $row['ID'])
												echo ' selected ';
										echo ' value="'.$row['ID'].'">';
										echo $row['section'];
										echo '</option>';
									}
								?>  
                            </select>
                        </td>
                    </tr>
                   	<tr height="30">
                    	<td>
                        	<label for="email"><span <?php echo $errorEmail; ?>>Email</span><br /><span style="font-size:12px">*Enter your uta.edu email address</span></label>
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['email'])) echo $_POST['email']; ?>" type="text" name="email" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    <tr height="30">
                    	<td colspan="2" width="300">
                        	<p style="margin:0 auto; text-align:justify"><strong>Liability Notice:</strong> UTA is not liable for any property damage, injury or death related to the operation of a private vehicle on a UTA class field trip. If you take a private vehicle, or ride in a private vehicle, liability rests with the driver and owner of the vehicle. Operation of private vehicles on the field trip is for the convenience of the occupants and not required or encouraged by UTA.
                            </p>
                        </td>
                    </tr>
                    <tr height="30">
                    	<td>
                        	
                        </td>
                        <td align="right">
                        	<input name="submitForm" class="button white" type="submit" value="Submit" />
                        </td>
                    </tr>
                </table>                    
            </form>
</div>
        </td>
	</tr>
</table>
</div>