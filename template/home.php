<?php
	include "includes/db.php";
	include "includes/functions.php";
?>
<style>
    .home-special {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        box-shadow: 1px 1px 5px #999;
    }
    #special a {
        text-decoration: none;
        font-size: 16px;
        color: white;
    }
</style>
<div id="homePage">

	<div id="sliders">
    <p style="margin-top:-10px;">
    	<table >
        	<tr valign="top" >
            	<td style="padding-top:5px;"><?php include "image_slider.php"; 
					//	height:380px;
					//	width:655px;?>
                </td>
                <td > <?php //include "news_boxes.php"; ?>
                    
                    <table id="special">
                        <tr>
                            <td>
                                <div style="width: 200px; height: 220px; overflow: hidden">
                                    <img class="home-special" style="width:100%" src="images/projects/augments.png" />
                                    
                                        <img style="width:100%;margin-top: -10px; z-index: -1" src="images/augments-blur.jpg" />
                                    
                                    <div style="position: absolute; color: white; font-weight: bold; margin-top: -100px; margin-left: 25px;">
                                        <span style="opacity:1"><a target="_blank" class="news_url" href="http://grad.pci.uta.edu/programs/augments/">Augments Program</a></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="width: 200px; background-color: #000066; height: 222px; margin-top: 5px; overflow: hidden">
                                    <img style="width:100%" src="images/projects/digit.png" />
                                    <img style="width:100%;margin-top: -10px; z-index: -1" src="images/augments-blur.jpg" />
                                    
                                    <div style="position: absolute; color: white; font-weight: bold; margin-top: -115px; margin-left: 25px;">
                                        <span style="opacity:1"><a target="_blank" class="news_url" href="http://www.uta.edu/cos/digit.php">DiG_IT: Diversity in <br>Geoscience</a></span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                </td>
            </tr>
        </table>                      
</p>
    </div>
    
    <div style="width: 100%; height: 200px; margin-top: -60px;">
        <table style="width: 100%">
            <tr>
                <?php
	$count = 0;
	$sql_news = "SELECT * FROM news WHERE (image!='NULL' && status='approved') ORDER BY date DESC LIMIT 4";
	$results_news = mysql_query($sql_news);
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
			
			
			echo '<td style="width: 25%">';
			echo '<div id="newsBoxImage" style="width:240px; height:240px; overflow:hidden; box-shadow:1px 1px 5px #999">
                				<div style="overflow:hidden"><img style="width:248px; " src="images/news/'.$imagePath.'" /></div>
                    				<div style="overflow:hidden; background-color: #333333; height:75px; color:white; padding:10px; margin-top:-7px;"><span style="opacity:1">'.$row['title'].'</span><br /><br /></div>
                			</div><strong></strong>';			
				
			
				echo '</td>';
			$count++;
		}
	
?>
           
            </tr>
        </table>
    </div>
    
  
    <div id="bottomFigures" style="float:inherit; margin-top:50px;">
    <table width="100%">
    	<tr valign="top">
        	<td width="33%" align="center">
            	<div class="researchImage" style="margin-top:5px;"><a href="?i=research"><img width="250" src="images/interactive.png" /></a></div>
                <p style="padding-left:20px; padding-right:20px; text-align:justify">The figure above symbolizes the teaching and research scope of the Earth & Environmental Sciences Department and its faculty. Like the Earth and its spheres, the department consists of groups of faculty who interact and collaborate within and between groups representing the 5 aspects of the global Earth system.
</p>
            </td>
            	
            <td width="340">
            	<h5 class="homeTitle">Upcoming</h5>
                <div style="height:180px; ">
                
				<?php
					$upcomingArray = array();
					$upcomingCount = 0;
					$upcomingArray[$upcomingCount] = array();
					$currentDate = currentDate();
					// upcoming events and dates from the academic calendar
					$sql_events = "SELECT * FROM events WHERE (date_from >= '$currentDate' && status='approved') ORDER BY date_from ASC";
					$results_events = mysql_query($sql_events);
					while ($row = mysql_fetch_assoc($results_events)) {
						$upcomingArray[$upcomingCount]['date_from'] = $row['date_from'];
						$upcomingArray[$upcomingCount]['date_to'] = $row['date_to'];
						$upcomingArray[$upcomingCount]['title'] = $row['title'];
						$upcomingArray[$upcomingCount]['url'] = $row['url'];
						$upcomingArray[$upcomingCount]['semester'] = NULL;
						$upcomingArray[$upcomingCount]['type'] = $row['type'];
						$upcomingCount++;
					}					
					// academic calendar
					$sql_academic_calendar = "SELECT * FROM academic_calendar WHERE date_from >= '$currentDate' ORDER BY date_from ASC";
					$restults_academic_calendar = mysql_query($sql_academic_calendar);
					while ($row = mysql_fetch_assoc($restults_academic_calendar)) {
						$upcomingArray[$upcomingCount]['date_from'] = $row['date_from'];
						$upcomingArray[$upcomingCount]['date_to'] = $row['date_to'];
						$upcomingArray[$upcomingCount]['title'] = $row['description'];
						$upcomingArray[$upcomingCount]['url'] = NULL;
						$upcomingArray[$upcomingCount]['semester'] = $row['semester'];
						$upcomingArray[$upcomingCount]['type'] = NULL;
						$upcomingCount++;			
					}
					sort($upcomingArray);
					
					if ($upcomingCount != 0) {
						echo '<table style="padding-left:20px;padding-right:20px; margin-top:-15px">';
						for ($c = 0; $c <= 3; $c++) {
							
							list($mon, $day) = monthDay($upcomingArray[$c]['date_from']);
							echo '<tr>';
							echo '<td><div class="date_figure">'.$mon.'<br />'.$day.'</div></td>';
							echo '<td valign="top"><div class="event_box_home"><strong><a href="index.php?i=events" ';
							if (strlen($upcomingArray[$c]['url'])>0)
								echo 'href="'.$upcomingArray[$c]['url'].'">';
							elseif ($upcomingArray[$c]['url'] != NULL)
								echo 'href="?i=events&id='.$row['ID'].'">';
							elseif ($upcomingArray[$c]['url'] == NULL)
								echo '>';
							echo limit_words(ucwords($upcomingArray[$c]['title']), 3).'...</a></strong><br />';
							if ($upcomingArray[$c]['semester'] != NULL &&  strlen($upcomingArray[$c]['semester'])>0)
								echo strtolower($upcomingArray[$c]['semester']);
							elseif ($upcomingArray[$c]['type'] != NULL &&  strlen($upcomingArray[$c]['type'])>0)
								echo strtolower($upcomingArray[$c]['type']);
							echo '</div></td>';
						echo '</tr>';	
							
						}
						echo '</table>';
					}
				
					if ($upcomingCount==0)
						echo "There are currently no scheduled events.";
						
					?>
                    </div>
                    
            	
            </td>

            <td align="left">
<!-- third column -->
<h5 class="homeTitle">Resources</h5>
<div style="margin-top:-18px" id="homeResources">
	<li><a target="_blank" href="http://grad.pci.uta.edu/programs/info/">Office of Graduate Studies</a></li>
    <li><a target="_blank" href="http://grad.pci.uta.edu/students/finances/fellowships/uta/">Fellowships for Graduate Students</a>
    <li><a target="_blank" href="http://www.uta.edu/uta/visitors.php">Visitors</a></li>
    <li><a target="_blank" href="https://sis-portal-prod.uta.edu/AEPPRD/signon.html">MyMav</a></li>
    <li><a target="_blank" href="http://www.wun.ac.uk/events/series/horizons-earth-systems">Horizons in Earth Systems (WUN)</a></li>
    <li><a target="_blank" href="?i=geolinks">Geo Links</a></li>
</div>
<br />

<table style="margin-top:5px;">
                    	<tr>
                        	<td>
                            <div id="newsBoxImage" style="width:175px; height:122px; overflow:hidden">
                				<div style="height:125px; overflow:hidden"><img style="width:170px; " src="images/bottom_weather.jpg" /></div>
                    				<a href="http://forecast.weather.gov/MapClick.php?CityName=Arlington&state=TX&site=FWD&lat=32.6945&lon=-97.1275" target="_blank"><div id="newsHomeBox" style="overflow:hidden""><span style="opacity:1">Weather</span><br /><br /><br /><?php include "weather.php"; ?></div></a>
                			</div>
                            </td>
                            <td>
                            <div id="newsBoxImage" style="width:175px; height:122px; overflow:hidden">
                				<div style="height:125px; overflow:hidden"><img style="width:170px; " src="images/fieldcamps.jpg" /></div>
                    				<div id="newsHomeBox" style="overflow:hidden""><span style="opacity:1">Field Camps</span><br />
<br />
<br />
<span><a class="news_url" href="?i=academics&s=undergraduate&u=fieldcamps">MORE INFO</a></span><br /><br /></div>
                			</div>
                            </td>
                        </tr>
                    </table>


</td>
        </tr>
   	</table>
    </div>   
   
</div>