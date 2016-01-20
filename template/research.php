<script type="text/javascript" src="js/smooth.pack.js"></script>
<a name="top"></a>
<div id="wrapper" align="left">

	<table class="clearfix" style="padding-left:10px" width="1024">
		<tr>
            <td width="1024" id="current_bar">
                <?php include "current_bar.php"; ?>
            </td>
        </tr>
        <tr>
            <td valign="top" width="100">
                <?php include "side_menu.php"; ?>
            </td>
        	<td>
           
            <div class='research_box bottom_border'>
            	<img class="research_img" style="float:left" width="300" src="images/interactive.jpg"/>
                	The figure above symbolizes the teaching and research scope of the Earth & Environmental Sciences Department and its faculty. Like the Earth and its spheres, the department consists of groups of faculty who interact and collaborate within and between groups representing the 5 aspects of the global Earth system. Those concerned with the Geosphere are geoscientists who study the solid Earth and consist of geophysicists, geochemists, structural geologists/tectonophysicists, sedimentologists and geomorphologists; Those concerned with the Biosphere are ecologists, zoologists, botanists and paleontologists whose interests range from microbes to large flora and fauna and from extant to extinct species; Atmospheric scientists are concerned with climate, and atmospheric dynamics and chemistry; The Hydrospheric faculty study both ground and surface water including lakes, rivers and oceans and their physics and chemistry; Faculty interested in the Anthroposphere study the interaction of the human population with all aspects of the Earth system. 

           
          </div>
				<?php
					include "includes/db.php";
					$sql = "SELECT * FROM research ORDER BY title ASC";
					$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
					$array_size = mysql_result(mysql_query("SELECT COUNT(*) FROM research"),0);
					$count = 0;
					while($row=mysql_fetch_array($results)) {
						echo "<div class='research_box ";
						if ($count < $array_size - 1) 
							echo "bottom_border";
						echo "'><a name='";
						echo substr($row['title'],0,6);
						echo "' class='news_title' href='$row[url]'><span >$row[title]</span></a><br /><br />";
						if (isset($row['img'])) 
							echo "<img class='research_img' align='left' src='images/research/$row[img]'/>";
						if (isset($row['desc'])) 
							echo "<span class='research_desc'>$row[desc]</span>";
						if (strlen($row['url'])>0) 
							echo "<br /><a target='_blank' class='news_url' href='$row[url]'> MORE INFO </a></div>";
						else
							echo "<br /></div>";
						
						if ($count == $array_size - 1) {
							echo "<p class='' style='width:600px;text-align:right'><a style='font-size:12px; font-weight:bold; text-decoration:none' href='#top'>BACK TO TOP</a></p>";
						}
						$count++;
						
						
					}
				?>
			</td>
		</tr>
       
	</table>

<br />
<br />

</div>
