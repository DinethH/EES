      <table id="homeNews" width="340">
                  <tr>
                    <td>             	<div id="newsBoxImage" style="width:175px; height:129px; overflow:hidden">
                				<img style="width:170px; height:125px" src="images/projects/augments.png" />
                    				<div id="newsHomeBox" style="overflow:hidden""><span style="opacity:1">Augments Program</span><br /><br /><span><a target="_blank" class="news_url" href="http://grad.pci.uta.edu/programs/augments/">READ</a></span></div>
                			</div><strong></strong>
                    </td>
                    <td>
                    	<div id="newsBoxImage" style="width:175px; height:129px; overflow:hidden">
                				<img style="width:170px; height:125px" src="images/projects/digit.png" />
                    				<div id="newsHomeBox" style="overflow:hidden""><span style="opacity:1">DiG_IT: Diversity in Geoscience</span><br /><br /><span><a target="_blank" class="news_url" href="http://www.uta.edu/cos/digit.php">READ</a></span></div>
                			</div><strong></strong>
                        	
                      	
               		</td>
                  </tr>
<?php
	$count = 0;
	$sql_news = "SELECT * FROM news WHERE (image!='NULL' && status='approved') ORDER BY date DESC LIMIT 4";
	$results_news = mysql_query($sql_news);
	echo '<tr>';
		while ($row = mysql_fetch_assoc($results_news)) {
			if (strlen($row['image'])>0 )
				$imagePath = $row['image'];
			else
				$imagePath = "";
				
				
			if (strlen($row['url'])>0 )
				$url = $row['url'];
			else
				$url = 'index.php?i=news&year=2012&id='.$row['ID'];
			if (strlen($row['long_disc'])>0 || strlen($row['url'])>0)
				$read = '<span><a class="news_url" href="'.$url.'">READ</a></span>';
			else
				$read = "";
			if ($count%2==0)
				echo "</tr><tr>";
			echo '<td>';
			echo '<div id="newsBoxImage" style="width:175px; height:122px; overflow:hidden">
                				<div style="height:125px; overflow:hidden"><img style="width:170px; " src="images/news/'.$imagePath.'" /></div>
                    				<div id="newsHomeBox" style="overflow:hidden""><span style="opacity:1">'.$row['title'].'</span><br /><br />'.$read.'</div>
                			</div><strong></strong>';			
				
			
				echo '</td>';
			$count++;
		}
	echo '</tr>';
?>
                 
                 
                </table>
