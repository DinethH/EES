<br />
<?php
	include "includes/db.php";
	$sql_abbre = "SELECT * FROM undergraduate_courses ORDER BY undergraduate_courses.course";
	$results_abbre=mysql_query($sql_abbre) or die("Unable to execute:".mysql_error());
	$courseAbbre = array();
	$i = 0;
	while($row_abbre=mysql_fetch_array($results_abbre)) {
		$uniqueAbbre = TRUE;
		foreach ($courseAbbre as $courseAbbr) {
			if ($courseAbbr == $row_abbre['course'])
				$uniqueAbbre = FALSE;
			else
				$uniqueAbbre = TRUE;
		}
		if ($uniqueAbbre) {
			$courseAbbre[$i] = $row_abbre['course'];
		}
		$i++;
	}
	if (!isset($_POST['abbre']))
		$_POST['abbre'] = -1;
	if (!isset($_POST['number']))
		$_POST['number'] = -1;

?>
<form action="" method="post">
	<select class="button white" name="abbre" onchange="this.form.submit();">
    	<option value="-1">All</option>
        <?php
			foreach($courseAbbre as $abbre) {
				echo '<option ';
				if (isset($_POST['abbre']) && $_POST['abbre'] == $abbre)
					echo ' selected ';
				echo 'value="'.$abbre;
				echo '"';
				echo '>';
				echo $abbre;
				
				echo '</option>';
			}
		?>
    </select>
    <select  class="button white" name="number" onchange="this.form.submit();">
    	<option value="-1">All</option>
        <?php
			$sql_num = "SELECT * FROM undergraduate_courses WHERE course='$_POST[abbre]' ORDER BY undergraduate_courses.number";
			$results_num=mysql_query($sql_num) or die("Unable to execute:".mysql_error());
		?>
        <?php
					while($row_num=mysql_fetch_assoc($results_num))  {
						echo '<option ';
						if ($_POST['number'] == $row_num['number'])
							echo ' selected ';
						echo 'value="'.$row_num['number'];
						echo '"';
						echo '>';
						echo $row_num['number'];
						
						echo '</option>';
					}
				?>
    </select>
</form>

<?php
	if ($_POST['number']==-1) {
		$sql = "SELECT * FROM undergraduate_courses ORDER BY undergraduate_courses.number";
		$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
	}	
	else {
		$sql = "SELECT * FROM undergraduate_courses WHERE (course='$_POST[abbre]' && number='$_POST[number]') ORDER BY undergraduate_courses.number";
		$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
	}
	echo '<p>';	
	while($row=mysql_fetch_assoc($results)) {
		echo '<a name="'.$row['number'].'" id="'.$row['number'].'"></a>';
		echo "<strong>".trim(strtoupper($row['course']))." ".trim($row['number'])." ".trim(strtoupper($row['title']),' ')."</strong> (".trim($row['credits'],' ').") <p align='justify'>".trim($row['desc'],' ')."</p>";	
	}
	echo '</p>';
?>
<br />
<?php if ($_POST['number'] == -1) {?>
<p style="text-align:right"><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></p>
<?php	} ?>