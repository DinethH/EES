<?php
include "../includes/db.php";
include "../includes/functions.php";
$dateFrom = "";
// date
$csv = '"Date';
$sqlDate = "SELECT * FROM fieldtripdates WHERE ID=$_POST[date]";
		$resultsDate = mysql_query($sqlDate);
		$row = mysql_fetch_array($resultsDate);
		if ($row['dateFrom']==$row['dateTo'])
			$csv .= '",'.dateMD($row['dateFrom']);
		else
			$csv.= '",'.dateMD($row['dateFrom']).' - '.dateMD($row['dateTo']);
		$dateFrom = $row['dateFrom'];

$csv .= "\n\n";

// bus
$csv .= "Bus\n";
// name and section
$csv .= '#,Last Name,First Name,Section'."\n";
// print last, first and section
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
$count = 1;
while ($row = mysql_fetch_array($resultsBusPeople)) {
		$csv .= "$count,$row[lastName],$row[firstName],$row[section]\n";
		$count++;
}


// car
$csv .= "Car\n";
// name and section
$csv .= '#,Last Name,First Name,Section'."\n";

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
$count = 1;
while ($row = mysql_fetch_array($resultsBusPeople)) {
		$csv .= "$count,$row[lastName],$row[firstName],$row[section]\n";
		$count++;
}

// unconfirmed
$csv .= "Unconfirmed\n";
// name and section
$csv .= '#,Last Name,First Name,Section'."\n";

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
															WHERE (fieldtripdates.ID=$_POST[date] &&
															
															fieldtrippeople.status='pending') ORDER BY fieldtrippeople.lastName";
			
$resultsBusPeople = mysql_query($sqlBusPeople);
$count = 1;
while ($row = mysql_fetch_array($resultsBusPeople)) {
		$csv .= "$count,$row[lastName],$row[firstName],$row[section]\n";
		$count++;
}


	header("Content-type: application/vnd.ms-excel");
	header("Content-disposition: attachment; filename=$dateFrom.csv");
	echo $csv;

?>