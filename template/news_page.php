<?php
	include "includes/db.php";
	include "includes/functions.php";
	
	function newsYearTest ($year, $selected) {
		if (($selected)==NULL)
			return ($year >= date('Y'));
		else
			return ($year == $selected);
	}
	
	/***/
	if (isset($_GET['s']) && isset($_GET['year']) && is_int((int)$_GET['year'])) {
		$sql_archive = "SELECT * FROM news";
		$results_archive=mysql_query($sql_archive) or die("Unable to execute:".mysql_error());
		
		$archiveYears = array();
		$i = 0;
		while($row=mysql_fetch_array($results_archive)) {
			$uniqueYear = TRUE;
			list($year) = explode("-", $row['date']);
			foreach ($archiveYears as $archiveYear) {
				if ($archiveYear == $year)
					$uniqueYear = FALSE;
				else
					$uniqueYear = TRUE;
			}
			if ($uniqueYear)
				$archiveYears[$i] = $year;
			$i++;
		}
		
		echo '<section id="news_archive"><ul class="second_nav">';
		foreach ($archiveYears as $archiveYear) {
            		if($archiveYear < date('Y')) {
                		echo'<a href="index.php?i=news&s=archive&year='.$archiveYear.'">';
						echo '<li';
						if (isset($_GET['year']) && $_GET['year']==$archiveYear)
							echo ' class="secondSelected"';
						echo '>'.$archiveYear.'</li></a>';
					}
				}
		echo '</ul></section>';
	}
	
	/***/
	
	$sql = "SELECT * FROM news WHERE status='approved' ORDER BY date DESC";
	$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
	
	$array_size = 0;
	$array_size_full = 0;
	$sql_count = "SELECT * FROM news WHERE status='approved'";
	$results_count=mysql_query($sql_count) or die("Unable to execute:".mysql_error());
	while ($rowCount = mysql_fetch_array($results_count)) {
		$date = explode("-", $rowCount['date']);
		if (newsYearTest ($date[0], $selectedYear))
			$array_size++;
		$array_size_full++;
	}
	
	$count = 0;
	
	
if ($array_size>0) {	
	while($row=mysql_fetch_array($results)) {
		$date = explode("-", $row['date']);
		if (newsYearTest ($date[0], $selectedYear)) {
			echo "<div style='overflow:hidden;' class='news_box ";
			if ($count < $array_size - 1) 
				echo "bottom_border";
			echo "'>";
			echo "<a class='news_title' ";
			if(strlen($row['url'])>0) 
				echo "target='_blank' href='".$row['url']."'>";
			elseif (strlen($row['long_disc'])>0) 
				echo "href='?i=news&year=".$date[0]."&id=".$row['ID']."'>";
			echo "<span >$row[title]</span></a><br />";
			if (isset($row['date'])) 
				echo "<span class='news_date'>Posted on ".dateInUS($row['date'])."</span><br />";
			if (isset($row['image']))
				echo '<img style="float:left; padding-right:5px;" width="100" src="images/news/'.$row['image'].'" />';
			if (strlen($row['short_disc'])>0) 
				echo "<span class='news_short'>$row[short_disc]</span>";
			echo "<br />";
			if (strlen($row['url'])>0) 
				echo "<a class='news_url' target='_blank' href='$row[url]'> READ MORE &raquo;</a>";
			if (strlen($row['long_disc'])>0) {
				echo "<a class='news_url' href='index.php?i=news";
				if ($date[0] < date('Y'))
					echo "&s=archive";
				echo "&year=$date[0]&id=$row[ID]'> READ MORE &raquo;</a>";
			}
			echo "</div>";
			$count++;
		}
	}
} elseif ($array_size==0) {
	$count = 0;
	while($row=mysql_fetch_array($results)) {
		$date = explode("-", $row['date']);
		
			echo "<div style='overflow:hidden;' class='news_box ";
			if ($count < 5) 
				echo "bottom_border";
			echo "'>";
			echo "<a class='news_title' ";
			if(strlen($row['url'])>0) 
				echo "target='_blank' href='".$row['url']."'>";
			elseif (strlen($row['long_disc'])>0) 
				echo "href='?i=news&year=".$date[0]."&id=".$row['ID']."'>";
			echo "<span >$row[title]</span></a><br />";
			if (isset($row['date'])) 
				echo "<span class='news_date'>Posted on ".dateInUS($row['date'])."</span><br />";
			if (isset($row['image']))
				echo '<img style="float:left; padding-right:5px;" width="100" src="images/news/'.$row['image'].'" />';
			if (strlen($row['short_disc'])>0) 
				echo "<span class='news_short'>$row[short_disc]</span>";
			echo "<br />";
			if (strlen($row['url'])>0) 
				echo "<a class='news_url' target='_blank' href='$row[url]'> READ MORE &raquo;</a>";
			if (strlen($row['long_disc'])>0) {
				echo "<a class='news_url' href='index.php?i=news";
				if ($date[0] < date('Y'))
					echo "&s=archive";
				echo "&year=$date[0]&id=$row[ID]'> READ MORE &raquo;</a>";
			}
			echo "</div>";
			$count++;
			if ($count==6)
				break;
		
	}

}
?>