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
        
        <h6 style="margin-top:0px; margin-right:40px;">GEOL 1425 Field Trip</h6>
<?php
	include "includes/db.php";
	include "includes/functions.php";
$fourty = 40;
$thirty = 40;	
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
	if (strlen ($_POST['sID']) != 10) {
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
	
	// transportation type count
	$sqlTansArray2 = "SELECT fieldtriptransportation.ID FROM (fieldtriptransportation JOIN fieldtrippeople ON fieldtriptransportation.ID=fieldtrippeople.transportation) JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE (fieldtripdates.ID='$_POST[datePreffered]')";
	$resultsTransArray2 = mysql_query($sqlTansArray2);
	$bbCount = 0;
	$ccCount = 0;
	while($row3 = mysql_fetch_array($resultsTransArray2)) {
		if ($row3['ID']=='1')
			$bbCount++;
		if ($row3['ID']=='2')
			$ccCount++;
	}
	
	$transportLimit = FALSE;
	if ($_POST['desiredTransportation']==1 && $bbCount >= 40)
	    $transportLimit = TRUE;
	elseif ($_POST['desiredTransportation']==2 &&	$ccCount >= 6)
		$transportLimit = TRUE;;
	// duplicate entries
	$dups = FALSE;
	$sqlSID = "SELECT * FROM fieldtrippeople";
	$resultsSID = mysql_query($sqlSID);
	while ($row = mysql_fetch_array($resultsSID)) {
		if (strtolower(trim($row['email'])) == strtolower(trim($_POST['email']))) {
			$dups = TRUE;
			$errorDuplicates = "The record already exists. Please check your inbox for the confirmation email.";
		}
		
	}

	
	// error checking
	if ($_POST['datePreffered'] == -1 ||
		$_POST['desiredTransportation'] == -1 ||
		strlen($_POST['sID']) == 0 ||
		!is_numeric($_POST['sID']) ||
		strlen ($_POST['sID']) != 10 ||
		strlen($_POST['firstName']) == 0 ||
		strlen($_POST['lastName']) == 0 ||
		$_POST['labSection'] == -1 ||
		strlen($_POST['email']) == 0 ||
		!email_validation($_POST['email']) ||
		!uta_email_validation($_POST['email']) ||
		$transportLimit == TRUE ||
		$dups == TRUE) {
			$errors = TRUE;
		} else { $errors = FALSE; }
		
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
			$success_message = "An email has been sent to the given email address. Please follow the link in the email to <span class='red_message'>confirm</span> your submission!";
			echo '<span class="green_message">'.$success_message.'</span>';
			
			// send the confirmation email
			$link = "http://www.uta.edu/ees/index.php?i=field-trip&s=verify&u=".$rand;
			$email_to = $_POST['email'];
			$email_bcc = "dineth@sachintha.com";
			$email_subject = "1425: Field Trip";
			$email_from = '"EES"'.'<ees@uta.edu>';
	
			$email_message = "";
			$email_message .= "<p style='font-size:16px; color:#003400; text-shadow:1px 1px 1px #E3FFE3'>";
			$email_message .= "Please click the following link to confirm your submission: <a href='".$link."'>$link</a> 
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
            	<table width="725px" cellspacing="10" cellpadding="5" style="border-collapse:separate" class="normal_text" >
                	<tr height="40">
                    	<td width="250" >
                        	<label for="datePreffered"><span <?php echo $errorDatePreffered; ?>>Date Preffered</span></label>	
                        </td>
                        <td width="400">
                        	<select name="datePreffered" onchange="this.form.submit();">
                            	<option value="-1">--</option>
                                <?php
									
									//$sqlDates = "SELECT * FROM fieldtripdates WHERE dateFrom>CURDATE() ORDER BY dateFrom ";
									$sqlDates = "SELECT * FROM fieldtripdates WHERE (dateFrom < '2012-10-25' && dateFrom>CURDATE()) ORDER BY dateFrom ";
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
                        <td valign="top" width="175" rowspan="9">
                        	
                        	
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
								// while fieldtrippeople count number of signed up perday but only pending
								$sqlTansArrayP = "SELECT fieldtriptransportation.ID FROM (fieldtriptransportation JOIN fieldtrippeople ON fieldtriptransportation.ID=fieldtrippeople.transportation) JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE (fieldtripdates.ID='$row[ID]' && fieldtrippeople.status='pending')";
									$resultsTransArrayP = mysql_query($sqlTansArrayP);
									$bCountP = 0;
									$cCountP = 0;
									while($row2p = mysql_fetch_array($resultsTransArrayP)) {
										if ($row2p['ID']=='1')
											$bCountP++;
										if ($row2p['ID']=='2')
											$cCountP++;
									}	
						?>
                        	<input name="bCount" type="hidden" value="<?php echo $bCount; ?>" />
                            <input name="cCount" type="hidden" value="<?php echo $cCount; ?>" />
                            	<tr height="40" >
                                	<td colspan="4">
                                    	<strong><span class="bottom_border"><?php
											if ($row['dateFrom'] == $row['dateTo'])
												echo dateInUS($row['dateFrom']);
											else
												echo dateMONDD($row['dateFrom']).' - '.dateMONDD($row['dateTo']);;
															
										 ?></span></strong>
                                    </td>
                                </tr>
                                <tr height="40">
                                	<td width="25%">
                                    	Bus
                                    </td>
                                    <td width="25%">
                                    <?php
									//// dates before 25th
									if ($row['dateFrom'] < '2012-10-25') {
									?>
                                    	 <div class="<?php	///////
										 					if ($bCount>=40)
										 						echo 'availabilityDotRed';
															elseif (($bCount+$bCountP)>=40)
																echo 'availabilityDotYellow';
															else
																echo 'availabilityDotGreen';
													?>
                                      "><span title="<?php									  	
									  	if($bCount==40) 
									  		echo "FULL";
										elseif ($bCount+$bCountP==40)
											echo "Pending: ".$bCountP; 
										elseif (40-$bCount-$bCountP < 0)
											echo 'Overbooked';
										else 
											echo 'Number of available seats: '.(40-$bCount-$bCountP).''; ?>">
										<?php 
											if ($bCount>=40) { 
												echo 40-$bCount-$bCountP;
											}
											elseif (($bCount+$bCountP)>=40) 
												echo $bCountP.'P'; 
											else {
												echo 40-$bCount-$bCountP; 
											}
											?></span></div>
                                        
                                        <?php
											}
											//// if dates after 25th October
											else {
										?>
                                        	 <div class="<?php	///////
										 					if ($bCount>=30)
										 						echo 'availabilityDotRed';
															elseif (($bCount+$bCountP)>=30)
																echo 'availabilityDotYellow';
															else
																echo 'availabilityDotGreen';
													?>
                                      "><span title="<?php									  	
									  	if($bCount==30) 
									  		echo "FULL";
										elseif ($bCount+$bCountP==30)
											echo "Pending: ".$bCountP; 
										elseif (30-$bCount-$bCountP < 0)
											echo 'Overbooked';
										else 
											echo 'Number of available seats: '.(30-$bCount-$bCountP).''; ?>">
										<?php 
											if ($bCount>=30) { 
												echo 30-$bCount-$bCountP;
											}
											elseif (($bCount+$bCountP)>=30) 
												echo $bCountP.'P'; 
											else {
												echo 30-$bCount-$bCountP; 
											}
											?></span></div>
                                        
                                        <?php
											}
										?>
                                    </td>
                                    <td width="25%">
                                    	Car
                                    </td>
                                    <td width="25%">
                                    	 <div class="<?php if ($cCount>=6)
										 						echo 'availabilityDotRed';
															elseif (($cCount+$cCountP)>=6)
																echo 'availabilityDotYellow';
															else
																echo 'availabilityDotGreen';
													?>
                                         "><span  title="<?php 
										 		if($cCount==6) 
									  				echo "FULL";
												elseif ($cCount+$cCountP==6)
													echo "Pending: ".$cCountP; 
												else 
													echo 'Number of available cars: '.(6-$cCount-$cCountP).'';
												 ?>"><?php 
											if ($cCount>=6) 
												echo 6-$cCount; 
											elseif (($cCount+$cCountP)>=6) 
												echo $cCountP.'P'; 
											else 
												echo 6-$cCount-$cCountP;
												?></span></div>
                                    </td>
                                </tr>
                           
                        <?php	
							}
						?>
                         </table>
                        </td>
                    </tr>
                     <tr height="40">
                    	<td>
                        	<label for="desiredTransportation"><span <?php echo $errorPrefferedTransportation; ?> >Preffered Transportation</span></label>	
                        </td>
                        <td>
            				<select name="desiredTransportation">
                            	<option value="-1">--</option>
                                <?php
								if (isset($_POST['datePreffered']) && $_POST['datePreffered']!=-1) {
									$sqlTransportation = "SELECT fieldtriptransportation.ID FROM (fieldtriptransportation JOIN fieldtrippeople ON fieldtriptransportation.ID=fieldtrippeople.transportation) JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE (fieldtripdates.ID='$datePreffered')";
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
                    <tr height="40">
                    	<td>
                        	<label for="sID"><span <?php echo $errorStudentID; ?>>Student ID</span></label>
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['sID'])) echo $_POST['sID']; ?>" type="text" name="sID" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    <tr height="40">
                    	<td>
                        	<label for="firstName"><span <?php echo $errorFirstName; ?>>First Name</span></label>		
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['firstName'])) echo $_POST['firstName']; ?>" type="text" name="firstName" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    <tr height="40">
                    	<td>
                        	<label for="lastName"><span <?php echo $errorLastName; ?>>Last Name</span></label>	
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['lastName'])) echo $_POST['lastName']; ?>" type="text" name="lastName" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    
                    <tr height="40">
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
                   	<tr height="40">
                    	<td>
                        	<label for="email"><span <?php echo $errorEmail; ?>>Email</span><br /><span style="font-size:12px">*Enter your uta.edu email address</span></label>
                        </td>
                        <td>
                        	<input value="<?php if(!isset($success_message) && isset($_POST['email'])) echo $_POST['email']; ?>" type="text" name="email" maxlength="50" size="38"/>
                        </td>
                    </tr>
                    <tr height="40">
                    	<td colspan="2" width="400">
                        	<p style="margin:0 auto; text-align:justify"><strong>Liability Notice:</strong> UTA is not liable for any property damage, injury or death related to the operation of a private vehicle on a UTA class field trip. If you take a private vehicle, or ride in a private vehicle, liability rests with the driver and owner of the vehicle. Operation of private vehicles on the field trip is for the convenience of the occupants and not required or encouraged by UTA.
                            </p>
                        </td>
                    </tr>
                    <tr height="40">
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