<?php
include "includes/db.php";
include "includes/functions.php";
$getID = $_GET['id'];
$sql = "SELECT * FROM events WHERE ID=$getID";
$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
$row=mysql_fetch_array($results);

?>
<table>
	<tr height="50">
    	<td class="bottom_border">
        	<span style="font-size:18px;"><strong><?php echo strtoupper($row['title']); ?></strong></span>
        </td>
    </tr>
    <tr height="30">
    	<td>
        	<?php
			if ($row['date_from'] ) {
				echo '<span class="news_date">'.dateInUS($row['date_from']);
				if (strlen($row['date_to'])>0)
					echo ' - '.dateInUS($row['date_to']);
				
			if (isset($row['time_from']))
				echo ", $row[time_from]";
			if (isset($row['time_to']))
				echo " - $row[time_to]";
			echo '</span>';
			}
		
			?>
        </td>
    </tr>
    <tr>
    	<td>
        	<div class="news_page_box normal_text">
            	<?php
					
					if (isset($row['image'])) {
						$imageURL = "images/news/".$row['image'];
						list($width, $height) = getimagesize($imageURL);
						echo '<img class="news_image"';
						if ($width > 300)
							echo 'width="300"';
						echo ' src="'.$imageURL.'"/>';
					}
    				echo str_replace("'", "�", $row['description']);
				?>
                <br /><br />
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-50077679549164ec"></script>
                <!-- AddThis Button END -->
            </div>
        </td>
    </tr>

</table>