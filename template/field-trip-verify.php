<?php
	include "includes/db.php";
	include "includes/functions.php";
?>
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
        
<?php

if (strtolower($_GET['s']) == 'verify')
	$verify = TRUE;
else
	$verify = FALSE;
	
if ($verify) {
	if (isset($_GET['u'])) {
		$rand = $_GET['u'];
	}
	// verify the date selected is greater than the current date
	$sqlV = "SELECT fieldtripdates.dateFrom FROM fieldtrippeople JOIN fieldtripdates ON fieldtrippeople.datePreffered=fieldtripdates.ID WHERE rand='$rand'";
	$resultsV = mysql_query($sqlV);
	$rowV = mysql_fetch_array($resultsV);


	if ($rowV['dateFrom'] > currentDate()) {
	
	
		///// update
		
		$sqlu = "UPDATE fieldtrippeople SET status='accepted' WHERE rand='$rand'";
		$resultsu = mysql_query($sqlu);
		if(mysql_affected_rows($conn)>0) {
			echo "<p class='green_message' style='width:600px;'>Your submission has been confirmed.</p>";
			echo "<p class='green_message' style='width:600px;'>Click the following link to see the signup sheet. <a href='http://www.uta.edu/ees/index.php?i=field-trip&s=view'>http://www.uta.edu/ees/index.php?i=field-trip&s=view.</a></p>";
		}
		else {
			echo "<p class='red_message' style='width:600px;'>Your submission has been already confirmed or the record does not exist. <br><br></p>";
		}
	}
	else {
		echo "<p class='red_message' style='width:600px;'>Signup for the selected date is over.<br><br></p>";
	}
}

else {
	echo "<p>ERROR</p>";
}


?>
        
       </td>
	</tr>
</table>
</div>


