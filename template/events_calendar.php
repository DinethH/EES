<link rel="stylesheet" type="text/css" href="css/tooltips.css" />
<?php

$monthNames = array("January", "February", "March", "April", "May", "June", "July", 
"August", "September", "October", "November", "December");



if (isset($_REQUEST['prevMonth']))
	$cMonth = $_REQUEST['prevMonth'];
elseif (isset($_REQUEST['nextMonth']))
	$cMonth = $_REQUEST['nextMonth'];
else
	if (date('m')<10)
		$cMonth = date('n');
	else
		$cMonth = date('m');
if (isset($_REQUEST['prevYear']))
	$cYear = $_REQUEST['prevYear'];
elseif (isset($_REQUEST['nextYear']))
	$cYear = $_REQUEST['nextYear'];
else
	$cYear = date('Y');
	

 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}

?>
		<script type="text/javascript">
        function submitform()
        {
            document.forms["myform"].submit();
        }
		function submitform2()
        {
            document.forms["myform2"].submit();
        }
		function submitform3()
        {
            document.forms["myform3"].submit();
        }
        </script>

<ul class="second_nav">
    <form action="" method="post" name="myform">
        
            <input name="prevMonth" type="hidden" value="<?php echo $prev_month; ?>" />
            <input name="prevYear" type="hidden" value="<?php echo $prev_year; ?>" />
            <li><a href="javascript: submitform()">Previous</a></li>
    
        
     </form>
     <form action="" method="post" name="myform3">
    
        
            <input name="currentMonth" type="hidden" value="<?php echo date('m'); ?>" />
            <input name="currentYear" type="hidden" value="<?php echo date('Y'); ?>" />
            <li><a href="javascript: submitform3()">Today</a></li>
    
        
    </form>
    <form action="" method="post" name="myform2">
    
        
            <input name="nextMonth" type="hidden" value="<?php echo $next_month; ?>" />
            <input name="nextYear" type="hidden" value="<?php echo $next_year; ?>" />
            <li><a href="javascript: submitform2()">Next</a></li>
    
        
    </form>
</ul>
<table width="700">
	<tr>
		<td align="center">
			<table width="100%">
				<tr align="center">
					<td colspan="7"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
	</tr>
	<tr height="30">
        <td class="week_day">S</td>
        <td class="week_day">M</td>
        <td class="week_day">T</td>
        <td class="week_day">W</td>
        <td class="week_day">T</td>
        <td class="week_day">F</td>
        <td class="week_day">S</td>
	</tr>

<?php
include "includes/db.php";
include "includes/functions.php";
$sql = "SELECT * FROM events WHERE status='approved'";
$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
while($row=mysql_fetch_assoc($results)) {
	if (strlen($row['date_to'])>0) {
		$diff = abs(strtotime($row['date_from']) - strtotime($row['date_to']));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		
		$dateDiff = $days;
		
		
	}
	if (isset($row['date_from'])) {
		$startingDate = ($row['date_from']);
		$title[$row['date_from']] = $row['title'];
		$timeFrom[$row['date_from']] = $row['time_from'];
		if (strlen($row['date_to'])>0) {
			for ($i = 0; $i < $dateDiff; $i++) {
				$tempDate =  strtotime(date("Y-m-d", strtotime($startingDate. ' + '.$i.' day') ) );
				$addedDate = date ( 'Y-m-d', $tempDate);
				$title[$addedDate] = limit_words($row['title'], 7);
				$timeFrom[$addedDate] = $row['time_from'];
				if (strlen($row['description'])>0)
					$ID[$row['date_from']] = $row['ID'];
				$url = array();
				if (strlen($row['url'])>0)
					$url[$row['date_from']] = $row['url'];
			}
		}
		else {
			if (strlen($row['description'])>0)
				$ID[$row['date_from']] = $row['ID'];
			
			if (strlen($row['url'])>0)
				$url[$row['date_from']] = $row['url'];
		}
		
	}
	
}
$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);
$thismonth = getdate ($timestamp);
$startday = $thismonth['wday'];
for ($i=0; $i < ($maxday+$startday); $i++) {
	if (date('Y') == $cYear && date('F') == $monthNames[$cMonth - 1] && date('j') == ($i - $startday + 1)) $today = "class='today'";	
	else $today = "class='cal_day'";
	
    if(($i % 7) == 0 ) echo "<tr>";
	
    if($i < $startday) echo "<td class='end_day'></td>";
    else {
		echo "<td width='' $today>". ($i - $startday + 1);
		if ($cMonth < 10)
			$nMonth = '0'.$cMonth;
		else
			$nMonth = $cMonth;
		if (($i - $startday + 1) < 10)
			$day = '0'.($i - $startday + 1);
		else
			$day = $i - $startday + 1;
		$date = $cYear.'-'.$nMonth.'-'.$day;
		//echo $date;
		
		if (isset($title[$date])) {
			//echo "<br />";
			//echo $event_date[$date];
			echo '<a ';
			if (isset($ID[$date]))
				echo 'href="?i=events&id='.$ID[$date];
			elseif (isset($url[$date]) && strlen($url[$date])>0)
				echo 'href="'.$url[$date];
			else
				echo 'href="#"';
			echo'" class="tooltip">
				<figure class="circle"></figure>
	
	
	<span class="normal_text">
		'.$title[$date].'<br />
		'.$timeFrom[$date].'</span></a>';			
		}
	
		echo "</td>";
	}
    if(($i % 7) == 6 ) echo "</tr>";
}
?>
			</table>
		</td>
	</tr>
</table>

<br />







