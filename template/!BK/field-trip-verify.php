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
	
	$sqlu = "UPDATE fieldtrippeople SET status='accepted' WHERE rand='$rand'";
	$resultsu = mysql_query($sqlu);
	if(mysql_affected_rows($conn)>0) {
		echo "<p class='green_message' style='width:600px;'>Your submission has been verified.</p>";
		echo "<p class='green_message' style='width:600px;'>Click here to see the signup sheet. <a href='http://www.uta.edu/ees/index.php?i=field-trip&s=view'>http://www.uta.edu/ees/index.php?i=field-trip&s=view.</a></p>";
	}
	else {
		echo "<p class='red_message' style='width:600px;'>Your submission has been already verified or the record does not exist. <br><br>Refer to the following page: <a href='http://www.uta.edu/ees/index.php?i=field-trip&s=view'>http://www.uta.edu/ees/index.php?i=field-trip&s=view.</a></p>";
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


