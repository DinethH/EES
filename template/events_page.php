<?php
if (!isset($_POST['freq']))
	$_POST['freq'] = 'upcoming';
?>
<style>
.event_type_u {
	font-size:9px;
	background-color:#F90;
	color:#FFF;
	font-weight:bold;
	text-transform:uppercase;
	padding:3px;
	border-radius:3px;
}
.type_cool {
	font-size:9px;
	background-color:#09F;
	color:#FFF;
	font-weight:bold;
	text-transform:uppercase;
	padding:3px;
	border-radius:3px;
}
.type_field {
	font-size:9px;
	background-color:#0C6;
	color:#FFF;
	font-weight:bold;
	text-transform:uppercase;
	padding:3px;
	border-radius:3px;
}
table a {
	text-decoration:none;
	color:#000;
}
</style>
<ul class="second_nav">

		<script type="text/javascript">
        function submitform()
        {
            document.forms["myform"].submit();
        }
		function submitform2()
        {
            document.forms["myform2"].submit();
        }
		function submitform4()
        {
            document.forms["myform4"].submit();
        } 
        </script>
	<form id="myform" action="<?php echo "index.php?i=events"; ?>" method="post">
    	<input name="freq" type="hidden" value="upcoming" />
    	<a href="javascript: submitform()"><li <?php if (isset($_POST['freq']) && $_POST['freq']=='upcoming') echo 'class="secondSelected"'; ?>>Upcoming</li></a>
    </form>
	<form id="myform2" action="<?php echo "index.php?i=events"; ?>" method="post" name="form2">
    	<input name="freq" type="hidden" value="recent"  />
    	<a href="javascript: submitform2()"><li <?php if (isset($_POST['freq']) && $_POST['freq']=='recent') echo 'class="secondSelected"'; ?>>Recent</li></a>
	</form>
    <form id="myform4" action="<?php echo "index.php?i=events"; ?>" method="post">
    	<input name="freq" type="hidden" value="tech"  />
    	<a href="javascript: submitform4()"><li <?php if (isset($_POST['freq']) && $_POST['freq']=='tech') echo 'class="secondSelected"'; ?>>Tech Sessions</li></a>
	</form>
</ul>


<?php
	include "includes/db.php";
	include "includes/functions.php";
	
	
	
if ((isset($_POST['freq']))) {
	function displayResults ($upcomingArray) {
		$nothing = FALSE;
?>
<table width="750">
                    <?php foreach ($upcomingArray as $upcoming) { ?>
                    	<tr valign="top" >
                        	<td style="padding:10px; line-height:26px;">
                            	<?php
                                	if (isset($upcoming['url']) && strlen($upcoming['url']) > 0) {
										echo '<a href="'.$upcoming['url'].'">';
									}
								?>
                                
                                <div>
                            	 <?php 
								 	if (isset($upcoming['type']) && strlen($upcoming['type']) > 0 && $upcoming['type'] == 'tech session') 
										echo '<span class="event_type_u">'.$upcoming['type'].'</span><br />';
										
									if (isset($upcoming['type']) && strlen($upcoming['type']) > 0 && $upcoming['type'] == 'Cool Talks') 
										echo '<span class="type_cool">'.$upcoming['type'].'</span><br />'; 
										
									if (isset($upcoming['type']) && strlen($upcoming['type']) > 0 && $upcoming['type'] == 'fieldcamp') 
										echo '<span class="type_field">'.$upcoming['type'].'</span><br />';  
								 ?>
                            	
								<?php 
								if (isset($upcoming['title']) && strlen($upcoming['title']) > 0) {
									if ($upcoming['type'] == 'tech session') {
										echo '<strong>Title:</strong> '.$upcoming['title']; 
									}
									else {
										echo $upcoming['title']; 
									}
								}
								?>
                               
                                
                                <?php if (isset($upcoming['ts_speaker']) && strlen($upcoming['ts_speaker']) > 0) echo  '<br /><strong>Speaker:</strong> '.($upcoming['ts_speaker']).'<br /><strong>Affiliation:</strong> '.$upcoming['ts_affiliation']; ?>
                                <br />
								<span style="color:green; font-size:14px">
								<?php if (isset($upcoming['date_from']) && strlen($upcoming['date_from']) > 0) echo  dateInUS($upcoming['date_from']); ?> 
                                <?php if (isset($upcoming['time_from']) && strlen($upcoming['time_from']) > 0) echo  " | ".($upcoming['time_from']); ?> 
                                <?php if (isset($upcoming['location']) && strlen($upcoming['location']) > 0) echo  ' | '.($upcoming['location']); ?> 
                                </span>
                                </div>
                                <?php
                                	if (isset($upcoming['type']) && strlen($upcoming['type']) > 0) {
										//echo '</a>';
									}
								?>
                                
                            </td>
                        </tr>
						
					<?php } ?>
                    </table>
<?php		
	}

	
	
	$currentDate = currentDate();
	if (isset($_POST['freq']) && $_POST['freq'] == 'upcoming') {
		$upcomingArray = array();
					$upcomingCount = 0;
					$upcomingArray[$upcomingCount] = array();
					$currentDate = currentDate();
					// upcoming events and dates from the academic calendar
					$sql_events = "SELECT * FROM events WHERE (date_from >= '$currentDate' && status='approved') ORDER BY date_from ASC";
					$results_events = mysql_query($sql_events);
					while ($row = mysql_fetch_assoc($results_events)) {
						$upcomingArray[$upcomingCount]['date_from'] = $row['date_from'];
						$upcomingArray[$upcomingCount]['time_from'] = $row['time_from'];
						$upcomingArray[$upcomingCount]['location'] = $row['location'];
						$upcomingArray[$upcomingCount]['date_to'] = $row['date_to'];
						$upcomingArray[$upcomingCount]['title'] = $row['title'];
						$upcomingArray[$upcomingCount]['url'] = $row['url'];
						$upcomingArray[$upcomingCount]['semester'] = NULL;
						$upcomingArray[$upcomingCount]['type'] = $row['type'];
						$upcomingArray[$upcomingCount]['ts_speaker'] = $row['ts_speaker'];
						$upcomingArray[$upcomingCount]['ts_affiliation'] = $row['ts_affiliation'];
						$upcomingCount++;
					}					
					// academic calendar
					$sql_academic_calendar = "SELECT * FROM academic_calendar WHERE date_from >= '$currentDate' ORDER BY date_from ASC";
					$restults_academic_calendar = mysql_query($sql_academic_calendar);
					while ($row = mysql_fetch_assoc($restults_academic_calendar)) {
						$upcomingArray[$upcomingCount]['date_from'] = $row['date_from'];
						$upcomingArray[$upcomingCount]['time_from'] = NULL;
						$upcomingArray[$upcomingCount]['location'] = NULL;
						$upcomingArray[$upcomingCount]['date_to'] = $row['date_to'];
						$upcomingArray[$upcomingCount]['title'] = $row['description'];
						$upcomingArray[$upcomingCount]['url'] = NULL;
						$upcomingArray[$upcomingCount]['semester'] = $row['semester'];
						$upcomingArray[$upcomingCount]['type'] = NULL;
						$upcomingArray[$upcomingCount]['ts_speaker'] = NULL;
						$upcomingArray[$upcomingCount]['ts_affiliation'] = NULL;
						$upcomingCount++;			
					}
					sort($upcomingArray);
					
					// display results
					displayResults($upcomingArray);
					?>
                    
                    <?php
	}
	elseif (isset($_POST['freq']) && $_POST['freq'] == 'recent') {
		$upcomingArray = array();
					$upcomingCount = 0;
					$upcomingArray[$upcomingCount] = array();
					$currentDate = currentDate();
					// upcoming events and dates from the academic calendar
					$sql_events =  "SELECT * FROM events WHERE (status='approved' && date_from < '$currentDate') ORDER BY date_from DESC LIMIT 5";
					$results_events = mysql_query($sql_events);
					while ($row = mysql_fetch_assoc($results_events)) {
						$upcomingArray[$upcomingCount]['date_from'] = $row['date_from'];
						$upcomingArray[$upcomingCount]['time_from'] = $row['time_from'];
						$upcomingArray[$upcomingCount]['location'] = $row['location'];
						$upcomingArray[$upcomingCount]['date_to'] = $row['date_to'];
						$upcomingArray[$upcomingCount]['title'] = $row['title'];
						$upcomingArray[$upcomingCount]['url'] = $row['url'];
						$upcomingArray[$upcomingCount]['semester'] = NULL;
						$upcomingArray[$upcomingCount]['type'] = $row['type'];
						$upcomingArray[$upcomingCount]['ts_speaker'] = $row['ts_speaker'];
						$upcomingArray[$upcomingCount]['ts_affiliation'] = $row['ts_affiliation'];
						$upcomingCount++;
					}					
					// academic calendar
					$sql_academic_calendar =  "SELECT * FROM academic_calendar WHERE date_from < '$currentDate' ORDER BY date_from DESC LIMIT 5";
					$restults_academic_calendar = mysql_query($sql_academic_calendar);
					while ($row = mysql_fetch_assoc($restults_academic_calendar)) {
						$upcomingArray[$upcomingCount]['date_from'] = $row['date_from'];
						$upcomingArray[$upcomingCount]['time_from'] = NULL;
						$upcomingArray[$upcomingCount]['location'] = NULL;
						$upcomingArray[$upcomingCount]['date_to'] = $row['date_to'];
						$upcomingArray[$upcomingCount]['title'] = $row['description'];
						$upcomingArray[$upcomingCount]['url'] = NULL;
						$upcomingArray[$upcomingCount]['semester'] = $row['semester'];
						$upcomingArray[$upcomingCount]['type'] = NULL;
						$upcomingArray[$upcomingCount]['ts_speaker'] = NULL;
						$upcomingArray[$upcomingCount]['ts_affiliation'] = NULL;
						$upcomingCount++;			
					}
					rsort($upcomingArray);
					
					// display results
					displayResults($upcomingArray);
	}
}
if (isset($_POST['freq']) && $_POST['freq']=='tech') {
	$currentDate = currentDate();
	$sql = "SELECT * FROM events WHERE (type='tech session' && status='approved' AND date_from > '2014-01-01') ORDER BY date_from ASC";
	$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
?>
<style>
#tech td {
	padding:8px;
}
</style><br />

<p>
<strong>All the sessions will be held in GS 100 at 4:00 PM</strong>
</p>
<table cellpadding="0" cellspacing="0" border="0" style="width:750px;" id="tech">
	<tr valign="top" style="background-color:#00457D ; color:#FFF; font-weight:bold;">
    	<td width="20">
        	#
        </td>
        <td width="60">
        	Date
        </td>
        <td width="150">
        	Speaker
        </td>
        <td width="180">
        	Affiliation
        </td>
        <td>
        	Title of the talk
        </td>

        
    </tr>
<?php
	$count = 1;
	while ($row = mysql_fetch_array($results)) {
?>
	
    	<tr valign="top" <?php if ($count%2 == 1) echo 'bgcolor="#EDE2CB"'; ?> style=" ">
        	<td>
            	<?php echo $count; ?>  
            </td>
            
            <td>
            
				<?php 
					$month_name = getMonthName(substr($row['date_from'],5,2));
					$day = (substr($row['date_from'],8,2)); 
					echo $day,'-';
					echo substr($month_name,0,3); 
					 
				?>
               
            </td>
            
            <td>
            	<?php echo $row['ts_speaker']; ?>
            </td>
            
            <td>
            	<?php echo $row['ts_affiliation']; ?>
            </td>
            
            <td>
            	<?php echo $row['title']; ?>
                <?php if ($row['date_from'] < $currentDate) echo ' <img src="images/events/check.png" width="20"  />'; ?> 
            </td>
        </tr>
    
<?php
	$count++;
	}
	echo '</table><br /><br />';
}
	
?>