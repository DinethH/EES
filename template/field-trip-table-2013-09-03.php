
<?php if ((isset($_POST['date']) && $_POST['date']!=-1) || (isset($_GET['d']) && $_GET['d']!=-1)) { 
if (isset($_GET['d']) && $_GET['d']!=-1) {
	$_POST['date'] = $_GET['d'];
}

if ((isset($_POST['print']) && $_POST['print']=='print') || (isset($_GET['p']) && $_GET['p']=='print')) {
	if (isset($_GET['p']) && $_GET['p']=='print') {
		$_POST['print'] = $_GET['p'];
	}

	include "../includes/db.php";
	include "../includes/functions.php";
}

?>
       	<table class="print fieldTripView" width="100%" border="0" style="border-collapse: collapse;
	border-spacing: 0;">
  <tr style="background-color:#CCC;" <?php if (isset($_POST['print'])) echo "height='40'" ?>>
    <td style="padding-left:10px;" class="" width="41"><strong>Date</strong></td>
    <td style="padding-left:10px;" class=""><strong>
    <?php
		$sqlDate = "SELECT * FROM fieldtripdates WHERE ID=$_POST[date]";
		$resultsDate = mysql_query($sqlDate);
		$row = mysql_fetch_array($resultsDate);
		if ($row['dateFrom']==$row['dateTo'])
			echo dateMD($row['dateFrom']);
		else
			echo dateMD($row['dateFrom']).' - '.dateMD($row['dateTo']);
	?>
    
    									</strong></td>
    	<td style="padding-top:5px; padding-right:5px;" class="" align="right">
        <script type="text/javascript">
        function submitform()
        {
            document.forms["myform"].submit();
        }
		</script>
         <script type="text/javascript">
        function submitform2()
        {
            document.forms["myform2"].submit();
        }
		</script>
        <form target="_blank" style="display:inline" id="myform2" action="template/field-trip-table.php?d=<?php echo $_POST['date']; ?>&p=print" name="myform2" method="post">
            	<input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
            	<input type="hidden" name="print" value="print">
            	<?php if (!isset($_POST['print'])) { ?>
                <input  title="Printer friendly version" width="40" src="images/print.png" value="print" type="image">
                <?php } ?>
             
                
            </form>
        	<form style="display:inline" id="myform" action="template/csv.php" name="myform" method="post">
            	<input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
                <?php if (!isset($_POST['print'])) { ?>
                <input title="Download as a CSV file" width="40" src="images/excel.jpg" value="CSV" type="image">
                <?php } ?>
            </form>
            
               
	
        </td>
    </tr>
  <tr height="30">
    <td style="padding-left:10px;"><strong>BUS</strong></td>
    <td style="padding-left:10px;" width="450">&nbsp;</td>
    <td style="padding-left:10px;" width="145">&nbsp;</td>
    </tr>
  <tr height="30">
    <td style="padding-left:10px;text-align:right; padding-right:10px;background-color:#00457D ; color:#FFF;" ><strong>#</strong></td>
    <td style="padding-left:10px;background-color:#00457D; color:#FFF;" ><strong>Name</strong></td>
    <td style="padding-left:10px;background-color:#00457D; color:#FFF;" ><strong>Section</strong></td>
    </tr>
  
  		<?php
			$evenColor = 'style="background-color:#EDE2CB;"';
			$count = 1;
			$sqlBusPeople = "SELECT 
								fieldtrippeople.firstName, 
								fieldtrippeople.lastName, 
								fieldtriplabs.section 
							FROM ((
								fieldtrippeople 
									JOIN 
								fieldtripdates 
									ON 
										fieldtrippeople.datePreffered=fieldtripdates.ID) 
											JOIN 
										fieldtriptransportation 
											ON 
												fieldtrippeople.transportation=fieldtriptransportation.ID)
													JOIN 
												fieldtriplabs 
													ON 
														fieldtriplabs.ID=fieldtrippeople.section 
															WHERE (fieldtripdates.ID=$_POST[date] && fieldtriptransportation.ID='1' && fieldtrippeople.status='accepted') ORDER BY fieldtrippeople.lastName";
			
			$resultsBusPeople = mysql_query($sqlBusPeople);
			while ($row = mysql_fetch_array($resultsBusPeople)) {
				echo '<tr height="30" ';
				if ($count%2 == 0)
					echo $evenColor;
				echo ' >';
					echo '<td style="padding-left:10px;text-align:right;padding-right:10px;">'.$count.'</td>';
					echo '<td style="padding-left:10px;">'.ucfirst($row['lastName']).",".' '.ucfirst($row['firstName']).'</td>';
					echo '<td style="padding-left:10px;">'.$row['section'].'</td>';
				echo '</tr>';
				$count++;
			}
			if ($count==1) {
				echo '<tr height="30" ';
				if ($count%2 == 0)
					echo $evenColor;
				echo ' >';
					echo '<td></td>';
					echo '<td>';
					echo 'No records found!';
					echo '</td>';
					echo '<td>'.$row['section'].'</td>';
				echo '</tr>';
			}
		?>
   <tr height="20">
   	
   </tr>
 

  <tr height="30">
    <td style="padding-left:10px;"><strong>CAR</strong></td>
    <td style="padding-left:10px;" width="450">&nbsp;</td>
    <td style="padding-left:10px;" width="145">&nbsp;</td>
    </tr> 
  <tr height="30">
    <td style="padding-left:10px;text-align:right; padding-right:10px;background-color:#00457D; color:#FFF;" ><strong>#</strong></td>
    <td style="padding-left:10px;background-color:#00457D; color:#FFF;" ><strong>Name</strong></td>
    <td style="padding-left:10px;background-color:#00457D; color:#FFF;" ><strong>Section</strong></td>
    </tr>
   		<?php
		$evenColor = 'style="background-color:#EDE2CB;"';
		$count = 1;
			$sqlBusPeople = "SELECT 
								fieldtrippeople.firstName, 
								fieldtrippeople.lastName, 
								fieldtriplabs.section 
							FROM ((
								fieldtrippeople 
									JOIN 
								fieldtripdates 
									ON 
										fieldtrippeople.datePreffered=fieldtripdates.ID) 
											JOIN 
										fieldtriptransportation 
											ON 
												fieldtrippeople.transportation=fieldtriptransportation.ID)
													JOIN 
												fieldtriplabs 
													ON 
														fieldtriplabs.ID=fieldtrippeople.section 
															WHERE (fieldtripdates.ID=$_POST[date] && fieldtriptransportation.ID='2' && fieldtrippeople.status='accepted') ORDER BY fieldtrippeople.lastName";
			
			$resultsBusPeople = mysql_query($sqlBusPeople);
			while ($row = mysql_fetch_array($resultsBusPeople)) {
				echo '<tr height="30" ';
				if ($count%2 == 0)
					echo $evenColor;
				echo ' >';
					echo '<td style="padding-left:10px;text-align:right;padding-right:10px;">'.$count.'</td>';
					echo '<td style="padding-left:10px;">'.ucfirst($row['lastName']).",".' '.ucfirst($row['firstName']).'</td>';
					echo '<td style="padding-left:10px;">'.$row['section'].'</td>';
				echo '</tr>';
				$count++;
			}
			if ($count==1) {
				echo '<tr height="30" ';
				if ($count%2 == 0)
					echo $evenColor;
				echo ' >';
					echo '<td></td>';
					echo '<td>';
					echo 'No records found!';
					echo '</td>';
					echo '<td>'.$row['section'].'</td>';
				echo '</tr>';
			}
		?>
    <tr height="30"></tr>    

 
  <?php
  	$sqlU = "SELECT 
								fieldtrippeople.firstName, 
								fieldtrippeople.lastName, 
								fieldtriplabs.section 
							FROM ((
								fieldtrippeople 
									JOIN 
								fieldtripdates 
									ON 
										fieldtrippeople.datePreffered=fieldtripdates.ID) 
											JOIN 
										fieldtriptransportation 
											ON 
												fieldtrippeople.transportation=fieldtriptransportation.ID)
													JOIN 
												fieldtriplabs 
													ON 
														fieldtriplabs.ID=fieldtrippeople.section 
															WHERE (fieldtripdates.ID=$_POST[date] && fieldtrippeople.status='pending') ORDER BY fieldtrippeople.lastName";
	$resultsU = mysql_query($sqlU);
	$count = 1;
if (mysql_affected_rows() > 0) {
	$unconfirmed = 1;
	echo '  <tr height="30">
    <td style="padding-left:10px;"><strong>Unconfirmed</strong></td>
    <td style="padding-left:10px;" width="450">&nbsp;</td>
    <td style="padding-left:10px;" width="145">&nbsp;</td>
    </tr>';
	while ($row = mysql_fetch_array($resultsU)) {
				echo '<tr height="30" ';
				if ($count%2 == 0)
					echo $evenColor;
				echo ' >';
					echo '<td style="padding-left:10px;text-align:right;padding-right:10px;">'.$count.'</td>';
					echo '<td style="padding-left:10px;">'.ucfirst($row['lastName']).",".' '.ucfirst($row['firstName']).'</td>';
					echo '<td style="padding-left:10px;">'.$row['section'].'</td>';
				echo '</tr>';
				$count++;
			}
			if ($count==1) {
				echo '<tr height="30" ';
				if ($count%2 == 0)
					echo $evenColor;
				echo ' >';
					echo '<td></td>';
					echo '<td>';
					echo 'No records found!';
					echo '</td>';
					echo '<td>'.$row['section'].'</td>';
				echo '</tr>';
			}
}
else {
	$unconfirmed = 0;
}
																
  ?>  

        </table>
        <?php if ($unconfirmed == 1) { ?>
        <table>
        <td headers="30"></td>
        <tr colspan="2"><td style="color:#F00">NOTE: If your name is listed under "Unconfirmed", please confirm your submission by following the email that is sent after signing up. If you're having any issues confirming, please contact the webmaster at <a href="mailto:dineth.hettiarachchi@mavs.uta.edu">dineth.hettiarachchi@mavs.uta.edu</a></td></tr>
        </table>
        <?php } ?>
     <?php } ?>