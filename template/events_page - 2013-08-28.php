<?php
if (!isset($_POST['freq']))
	$_POST['freq'] = 'upcoming';
?>
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
        </script>
	<form id="myform" action="<?php echo "index.php?i=events"; ?>" method="post">
    	<input name="freq" type="hidden" value="upcoming" />
    	<a href="javascript: submitform()"><li <?php if (isset($_POST['freq']) && $_POST['freq']=='upcoming') echo 'class="secondSelected"'; ?>>Upcoming</li></a>
    </form>
	<form id="myform2" action="<?php echo "index.php?i=events"; ?>" method="post" name="form2">
    	<input name="freq" type="hidden" value="recent"  />
    	<a href="javascript: submitform2()"><li <?php if (isset($_POST['freq']) && $_POST['freq']=='recent') echo 'class="secondSelected"'; ?>>Recent</li></a>
	</form>
</ul>
<?php
	include "includes/db.php";
	include "includes/functions.php";
	
	
	
	
	function displayResults ($results) {
		$nothing = FALSE;
		while($row=mysql_fetch_array($results)) {
			$nothing = TRUE;
			echo '<div class="event_box">';
				echo '<a href="';
				if (strlen($row['url'])> 0)
					echo $row['url'];
				else
					echo "?i=events&id=".$row['ID'];
				echo '"><strong>'.ucwords($row['title']).'</strong></a>';
				echo "<br />";
				
				if (strlen($row['date_to'])>0 ) {
					echo '<span class="news_date">'.dateInUS($row['date_from']);
					if (strlen($row['date_to'])>0)
						echo ' - '.dateInUS($row['date_to']);
					
				}
				else
					echo '<span class="news_date">'.dateInUS($row['date_from']);
				if (strlen($row['time_from'])>0)
					echo ", $row[time_from]";
				if (strlen(isset($row['time_to']))>0)
					echo " - $row[time_to]";
					
				if (strlen($row['location'])>0)
					echo ", $row[location]";
				echo '</span>';
				echo "<br />";
				echo $row['summary'];
				echo "<br />";
				if (strlen($row['description'])>0)
					echo "<a class='news_url' href='?i=events&id=".$row['ID']."'>MORE INFO</a>";
				
				
			echo "</div>";
		}
		if (!$nothing)
					echo "There are currently no scheduled events.";
	}

	
	
	$currentDate = currentDate();
	if (isset($_POST['freq']) && $_POST['freq'] == 'upcoming') {
		$sql = "SELECT * FROM events WHERE (status='approved' && date_from >= '$currentDate') ORDER BY date_from ASC";
		$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
		displayResults($results);
	}
	elseif (isset($_POST['freq']) && $_POST['freq'] == 'recent') {
		$sql = "SELECT * FROM events WHERE (status='approved' && date_from < '$currentDate') ORDER BY date_from DESC";
		$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
		displayResults($results);
	}
	
	
?>