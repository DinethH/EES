<div id="wrapper" align="center">
	<table style="float:left; padding-left:10px" width="1024">
		<tr>
            <td id="current_bar">
                <?php include "current_bar.php"; ?>
            </td>
    	</tr>
		<tr>
            <td valign="top" width="100">
                <?php include "side_menu.php"; ?>
            </td>
			<td class="profile_table">
 				<?php
					include "includes/db.php";
					$sql = "SELECT * FROM faculty";
					$results=mysql_query($sql) or die("Unable to execute:".mysql_error());
					while($row=mysql_fetch_array($results)) {
						if ($row['ID']==$_GET['user']) {
							$img_url_db = "images/people/faculty/".$row['img'];
							$img_url_default = "images/people/faculty/default.jpg";
							if (file_exists($img_url_db)) 
								$img_url = $img_url_db;
							else 
								$img_url = $img_url_default;
							echo "<table id='profile_page'>
									<tr>
										<td id='profile_page_pic'><br />
											<img src='$img_url'/><br />
										</td>
										<td id='profile_data'>";
							if (isset($row['link']) && $row['link']!='NULL') 
								echo "<a href='$row[link]'><span class='full_name'> $row[title] $row[first] $row[last]</span></a><br />" ;
							elseif (isset($row['title']) && $row['title']!='NULL' )
								echo "<span class='full_name'> $row[title] $row[first] $row[last]</span><br />";			
							else 
								echo "<span class='full_name'> $row[first] $row[last]</span><br />";
							echo "$row[position]<br />";
							if (isset($row['location']) && $row['location']!='NULL' )
								echo "Office: <a href='http://www.uta.edu/maps/map?id=GS'> $row[location]</a><br />";
							if (isset($row['phone']) && $row['phone']!='NULL' ) 
								echo "<strong>Phone</strong>: $row[phone]<br />" ;	
							if (isset($row['email'])&& $row['email']!='NULL') 
								echo "<strong>E-mail</strong>: <a href='mailto:$row[email]'>$row[email]</a><br />" ;
							if (isset($row['website'])) 
								echo "<strong>Website</strong>: $row[website]<br />" ;
							if (isset($row['area']) && $row['area']!='NULL') 
								echo "<strong>Research Area(s)</strong>: $row[area]<br />" ;				
							echo "</td></tr></table>";
						}
					}
				?>
        	</td>
		</tr>
	</table>
</div>