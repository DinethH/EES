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
        <?php if (!isset($_GET['u'])) { ?>
        	<?php
				$errors = TRUE;
				$errorDatePreffered = "";
				$errorPrefferedTransportation = "";
				if (isset($_POST['update'])) {
					$datePreffered = $_POST['datePreffered'];
					$prefferedTransportation = $_POST['desiredTransportation'];
					
					if (($datePreffered == -1) || ($prefferedTransportation == -1)) {
						$errors = TRUE;
					} else { $errors = FALSE; }
					
					if ($datePreffered == -1)
						$errorDatePreffered = 'style="color:#F00"';
					if ($prefferedTransportation == -1)
						$errorPrefferedTransportation = 'style="color:#F00"';
					
					if ($errors == FALSE) {
						// send the confirmation email
						$link = "http://www.uta.edu/ees/index.php?i=field-trip&s=edit&u=update&r=".$_POST['rand']."&d=".base64_encode($datePreffered)."&t=".base64_encode($prefferedTransportation);
						$email_to = $_POST['email'];
						$email_bcc = "dineth@sachintha.com";
						$email_subject = "1425: Field Trip Update";
						$email_from = '"EES"'.'<ees@uta.edu>';
				
						$email_message = "";
						$email_message .= "<p style='font-size:16px; color:#003300; text-shadow:1px 1px 1px #E3FFE3'>";
						$email_message .= "Please click the following link to update your submission: <a href='".$link."'>$link</a> 
						<br />If this wasn't you or this was done mistakenly, please disregard this email. 

						<br /><br />This is an automated message. DO NOT REPLY.</p><br />";
						
						sendEmail ($email_from, $email_to, $email_subject, $email_message, $email_bcc);
						
						echo "<span class='red_message'>An email has been sent to the following email address: $email_to. Please follow the instructions to update your submission.</span>";
					}
				}
			?>
        
        
         
        	<?php 
			if (isset($_POST['rand'])) {
				$rand = $_POST['rand'];
				if (isset($rand)) {
					$sqlSelected = "SELECT * FROM fieldtrippeople WHERE rand='$rand'";
					$resultsSelected = mysql_query($sqlSelected);
					$rowSelected = mysql_fetch_array($resultsSelected);
					$name = $rowSelected['firstName'].' '.$rowSelected['lastName'];
			?>
            <form name="form" class="normal_text input_text" action="" method="post">
            	<input type="hidden" name="rand" value="<?php echo $rand; ?>" />
                <input type="hidden" name="email" value="<?php echo $rowSelected['email']; ?>" />
            	<table cellpadding="5" width="100%">
                	<tr height="30">
                    	<td width="250">
                        	<label for="name">Name</label>
                        </td>
                        <td width="450">
                        	<input name="name" type="text" disabled="disabled" value="<?php echo $name; ?>" />
                        </td>
                    </tr>
                    <tr height="30">
                    <td width="250" >
                        	<label for="datePreffered"><span <?php echo $errorDatePreffered ?>>Date Preffered</span></label>	
                        </td>
                        <td width="450">
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
                        </tr>
                        <tr height="30">
                        	<td>
                        	<label for="desiredTransportation"><span <?php echo $errorPrefferedTransportation ?>>Preffered Transportation</span></label>	
                        </td>
                        <td>
            				<select name="desiredTransportation">
                            	<option value="-1">--</option>
                                <?php
								if (isset($_POST['datePreffered']) && $_POST['datePreffered']!=-1) {
									$sqlTransportation = "SELECT fieldtriptransportation.ID FROM (fieldtriptransportation JOIN fieldtrippeople ON fieldtriptransportation.ID=fieldtrippeople.transportation) JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE fieldtripdates.ID='$_POST[datePreffered]'";
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
                        </tr>
                        <tr height="30">
                        	<td>
                            	
                            </td>
                            <td>
                            	<input class="button white" type="submit" name="update" value="Update" />
                            </td>
                        </tr>
                </table>
            </form>
            <?php
				}
				else {
					echo "<span class='red_message'>The selected record does not exist.</span>";
				}
			}
			else {
				echo "<span class='red_message'>Error: <a href='?i=field-trip&s=change'> Click here to go back to edit/delete your submission.</a></span>";	
			}	
			?>
            <?php } elseif (isset($_GET['u']) && $_GET['u']=='update') {
				$rand = ($_GET['r']);
				$date = base64_decode($_GET['d']);
				$trans = base64_decode($_GET['t']);
				$sqlUpdate = "SELECT * FROM fieldtrippeople WHERE rand='$rand'";
				$resultsUpdate = mysql_query($sqlUpdate);
				$rowUpdate = mysql_fetch_array($resultsUpdate);
				
				if (!$rowUpdate) {
					echo '<span class="red_message">The record does not exist.</span>';
				}
				else {
					$update = mysql_query("UPDATE fieldtrippeople SET datePreffered='$date', transportation='$trans' WHERE rand='$rand'");
					if(mysql_affected_rows()>0 && !isset($updated)) {
						echo '<span class="green_message">Your record has been successfully updated.</span>';
						$updated = 1;
					}
					elseif(isset($updated))
						echo '<span class="red_message">Update error.</span>';
					else
						echo '<span class="red_message">Update error.</span>';
				}
			
			?>
          	
            
            <?php } ?>
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

