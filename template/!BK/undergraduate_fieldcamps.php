

<script type="text/javascript"
	src="js/trip_slide.js"></script>


<?php
include "includes/db.php";
include "includes/functions.php";

$sql_years = "SELECT * FROM events WHERE (type='fieldcamp' && status='approved') ORDER BY date_from DESC";
$results_years=mysql_query($sql_years) or die("Unable to execute:".mysql_error());

$fieldCampYears = array();
$i = 0;
while($row=mysql_fetch_array($results_years)) {
	$uniqueYear = TRUE;
	list($year) = explode("-", $row['date_from']);
	foreach ($fieldCampYears as $fieldCampYear) {
		if ($fieldCampYear == $year)
			$uniqueYear = FALSE;
		else
			$uniqueYear = TRUE;
	}
	if ($uniqueYear) {
		$fieldCampYears[$i] = $year;
	}
	$i++;
}

if (!isset($_POST['years']))
	$_POST['years'] = $fieldCampYears[0];
if (!isset($_POST['fieldDates'])) {
	$sql_fieldDates = "SELECT * FROM events WHERE (date_from=$_POST[years] && type='fieldcamp' && status='approved') ORDER BY date_from DESC";
	$results_fieldDates=mysql_query($sql_fieldDates) or die("Unable to execute:".mysql_error());
	$row_fieldDates = mysql_fetch_array($results_fieldDates);
	$_POST['fieldDates'] = dateInUS($row_fieldDates['date_from']);
}
if (!isset($_POST['freq']))
	$_POST['freq'] = 'info';
if (!isset($ID)) {
	$sql_ID = "SELECT * FROM events WHERE (date_from=$_POST[years] && type='fieldcamp' && status='approved') ORDER BY date_from DESC";
	$results_ID=mysql_query($sql_ID) or die("Unable to execute:".mysql_error());
	$row_ID = mysql_fetch_array($results_ID);
	$ID = $row_ID['ID'];
}
?>
<ul class="second_nav">
	<form name="form" action="<?php echo 'index.php?i=academics&s=undergraduate&u=fieldcamps'; ?>" method="post">
	
        <select  class="button white" name="years" onchange="this.form.submit();">
            <?php
            	foreach($fieldCampYears as $fieldCampYear) {
					echo '<option ';
					echo ' value="'.$fieldCampYear.'"';
					if ($_POST['years'] == $fieldCampYear)
			echo ' selected';
					echo '>';
					echo $fieldCampYear;
					echo '</option>';
				}
            ?>
        </select>
        
        
        <select class="button white" name="fieldDates" onchange="this.form.submit();">
        	<?php
				$sql = "SELECT * FROM events WHERE (date_from=$_POST[years] && type='fieldcamp' && status='approved') ORDER BY date_from DESC";
				$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
				while($row=mysql_fetch_array($results)) {
					echo '<option ';
					echo 'value="'.dateInUS($row['date_from']).'" ';
					if( (isset($_POST['fieldDates']) && $_POST['fieldDates']==dateInUS($row['date_from']))) echo " selected";
					echo '>';
					echo dateMD($row['date_from']).' - '.dateMD($row['date_to']);
					echo '</option>';
					if( (isset($_POST['fieldDates']) && $_POST['fieldDates']==dateInUS($row['date_from'])))
						$ID = $row['ID'];
				}
			?>
        </select>  
        
        
        <input class="button white" name="info" type="submit" value="INFO" />
        
        <?php
			$sql_photos_button = "SELECT * FROM events WHERE ID=$ID";
			$results_photos_button=mysql_query($sql_photos_button) or die("Unable to execute:".mysql_error());
			$row_photos_button = mysql_fetch_array($results_photos_button);
		   
        	if (strlen($row_photos_button['images'])>0)
				echo '<input class="button white" name="photos" type="submit" value="PHOTOS" />';     
        ?> 
   
	</form>
    
    
    
   
</ul>
<?php

if (!isset($_POST['photos'])) {
	$sql_id = "SELECT * FROM events WHERE ID=$ID";
	$results_id=mysql_query($sql_id) or die("Unable to execute:".mysql_error());
	$row_id = mysql_fetch_array($results_id);
	echo $row_id['information'];
}
if (isset($_POST['photos'])) {
	//print_r(getFileNames());
	$sql_photos = "SELECT * FROM events WHERE ID=$ID";
	$results_photos=mysql_query($sql_photos) or die("Unable to execute:".mysql_error());
	$row_photos = mysql_fetch_array($results_photos);
	//echo $row_photos['ID'];
	//print_r( getFileNames($row_photos['images'], $row_photos['ID']) );
	
	/** add images to the javascript **/
	echo '<script type="text/javascript">
	<!--
  	var viewer = new PhotoViewer();';
	  foreach ($file_names = getFileNames($row_photos['images'], $row_photos['ID']) as $file_name) {
		  echo "viewer.add('".$file_name."');";
	  }

	echo '//--></script>';
	
	
	///
	echo "<br />";
	echo "<div >";
	echo "<table width='700'><tr class='fade-area-1'>";
	$columCount = 0;
	foreach ($file_names = getThumbNames($row_photos['images'], $row_photos['ID']) as $file_name) {
		echo '<td><div align="center"><a href="javascript:void(viewer.show('.$columCount.'))"><img style="max-height:160px;max-width:160px;" class="fieldCampImages shadowed"  src="'.$file_name.'"/></a></div></td>';
		$columCount++;
		if (($columCount%4)==0)
			echo '</tr><tr height="10"></tr><tr>';
	}
	echo "</tr></table>";
	echo "</div>";
}
?>

<p style="text-align:right"><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></p>