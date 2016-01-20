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
       	  <form id="form1" name="form1" action="" method="post">
           	<label for="date">Choose a Date: </label>
            <select name="date" onChange="this.form.submit();">
                	<option value="-1">--</option>
                    <?php
						$sqlDates = "SELECT * FROM fieldtripdates WHERE dateFrom > '2013-08-20' ORDER BY dateFrom";
						$restultsDates = mysql_query($sqlDates);
						while($row = mysql_fetch_assoc($restultsDates)) {	
							echo '<option';
							if (!isset($success_message) && isset($_POST['date']) && $_POST['date'] == $row['ID'])
								echo ' selected ';
							echo ' value="'.$row['ID'].'">';
							if ($row['dateFrom']==$row['dateTo'])
								echo dateMD($row['dateFrom']);
							else
								echo dateMD($row['dateFrom']).' - '.dateMD($row['dateTo']);
							echo '</option>';		
						}
					?>
            </select>
            </form><br>
<br>
<?php

include "template/field-trip-table.php";

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

