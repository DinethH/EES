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
       		<form id="editForm" name="edit" action="" method="post">
            	<table cellpadding="5">
                <tr><td>
                	<label for="utaID">Enter your UTA ID: </label>
            	</td>
                <td>
                	<input type="text" name="utaID" value="<?php if(isset($_POST['utaID'])) echo $_POST['utaID']; ?>" />
                </td>
                <td>
                	<input class="button white" type="submit" name="search" value="Search" />
                </td>
                </tr>
                </table>
            </form>
            
            
             
        <?php
			
			if (isset($_POST['search'])) {
				$utaID = trim($_POST['utaID']);
				$sql = "SELECT * from fieldtrippeople WHERE eid='$utaID'";
				$results = mysql_query($sql);
				$row = mysql_fetch_array($results);
				if (strlen($utaID)==0) {
					echo "<span class='red_message'>Please enter your UTA ID</span>";
				}
				elseif (!is_numeric($utaID)) {
					echo "<span class='red_message'>Invalid ID; please try again.</span>";
				}
				elseif($row) {

					
					$firstName = $row['firstName'];
					$lastName = $row['lastName'];
					$datePreffered = $row['datePreffered'];
					$transportation = $row['transportation'];
					$section = $row['section'];
					$rand = $row['rand'];
				
		?>
	<table width="700px" cellspacing="10" cellpadding="5" style="border-collapse:separate" class="normal_text" >
    	<tr height="30">
			<td width="150" >
            	Name
            </td>
            <td width="400">
            	<?php echo $firstName.' '.$lastName; ?>
            </td>
        </tr>
		<tr height="30">
			<td width="150" >
				Date Preffered
			</td>
			<td width="400">

                	<?php			
						$sqlDates = "SELECT * FROM fieldtripdates WHERE ID='$datePreffered'";
						$restultsDates = mysql_query($sqlDates);
						$rowDates = mysql_fetch_array($restultsDates);
						if ($rowDates['dateFrom'] == $rowDates['dateTo'])
							echo dateMD($rowDates['dateFrom']);
						else
							echo dateMD($rowDates['dateFrom']).' - '.dateMD($rowDates['dateTo']);
						
					?>
      
            </td>
       	</tr>
        <tr height="30">
            <td>
               Preffered Transportation
            </td>
            <td>
               	<?php			
					$sqlTransportation = "SELECT * FROM fieldtriptransportation WHERE ID='$transportation'";
					$restultsTransportation = mysql_query($sqlTransportation);
					$rowTransportation = mysql_fetch_array($restultsTransportation);
					echo $rowTransportation['type'];
				?>
			</td>
    	</tr>
        <tr height="30">
            <td>
               Lab Section
            </td>
            <td>
               	<?php			
					$sqlLab = "SELECT * FROM fieldtriplabs WHERE ID='$section'";
					$resultsLab = mysql_query($sqlLab);
					$rowLab = mysql_fetch_array($resultsLab);
					echo $rowLab['section'];
				?>
			</td>
    	</tr>
        
        <tr height="30">
        	<td>
            <form style="display:inline" class="normal_text input_text" action="index.php?i=field-trip&s=edit" method="post">
            <input class="button white" type="submit" name="edit" value="Edit" />
            <input name="rand" type="hidden" value="<?php echo $rand; ?>" />
            </form>
            
            <form style="display:inline" class="normal_text input_text" action="index.php?i=field-trip&s=delete" method="post">
            <input name="rand" type="hidden" value="<?php echo $rand; ?>" />
            <input class="button white" type="submit" name="delete" value="Delete" />
            </form>
            </td>
            <td>
            </td>
        </tr>
   	</table>

        <?php		
				}
				else {
					echo "<span class='red_message'>Record cannot be found.</span>";
				}
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

