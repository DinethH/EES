<link media="screen" rel="stylesheet" type="text/css" href="css/tooltips.css" />

<script type="text/javascript" src="js/smooth.pack.js"></script>
<?php 
	include "includes/db.php";
?>
    <a name="top"></a>
<div id="wrapper" align="center">
    <table class="clearfix" style="padding-left:10px" width="1024">
        <tr width="1024">
            <td width="1024" id="current_bar">
                <?php include "current_bar.php"; ?>
            </td>
        </tr>
		<tr>
        	<td valign="top">
                <?php include "side_menu.php"; ?>
            </td>
            <td align="left" width="1024">

				<div id="profile_thumb" style="width:800px">
					<?php
						$departments = array(
											"Earth & Environmental Sciences",
											"Adjunct",
											"Biology", 
											"Chemistry & Biochemistry", 
											"Civil Engineering",
											"Psychology",
											"Urban and Public Affairs"
											);
						
						
                    	if (!isset($_GET['user'])) {
							if (isset($_GET['s']) && $_GET['s']=='faculty') {
								echo '<ul class="second_nav">';
								echo '<form>';
								foreach ($departments as $department) {
									echo '<a href="#'.$department.'"><li>'.$department.'</li></a>';
								}
								echo '</form>';
								echo '</ul>';
						
							
								
								$chair = 0;
								foreach ($departments as $department) {
									$count = 0;
									$sql_chair = "SELECT * FROM faculty WHERE faculty.position='Professor & Chair'";
									$results_chair = mysql_query($sql_chair) or die ("Unable to execute: ". mysql_error());
									$sql = "SELECT * FROM faculty WHERE ((faculty.department='$department' OR faculty.p='adjunct') && faculty.position!='Professor & Chair') ORDER BY faculty.last ASC";
									$results = mysql_query($sql) or die ("Unable to execute:".mysql_error());
									echo "<p style='font-size:20px'><a name='$department'>$department</a></p>";
									echo "<table><tr>";
									// Chair Person
									if ($chair==0) {
										while($row=mysql_fetch_assoc($results_chair)) {
											if ($count%4==0) {
												echo "</tr><tr>";
											}
											echo "<td width='180' class='profileTD'><a target='_blank' href='$row[link]";
											$img_url_db = "images/people/faculty/".$row['img'];
											$img_url_default = "images/people/faculty/default.jpg";
											if (file_exists($img_url_db)) 
												$img_url = $img_url_db;
											else 
												$img_url = $img_url_default;
											echo "'><div class='profile_pic'><img  src='$img_url'/><br /><br />";
											echo '<span class="profile_name">';	
										if ($row['title']!='NULL') 
											echo "$row[title] ";
										echo "$row[first] $row[last] </span><br /><p class='profile_position'> $row[position]</p></div><br /></a>
										<span class='tooltipD'>
											<h5>$row[title] $row[first] $row[last]</h5><table>";
										if (strlen($row['phone'])>0) {
											echo '<tr title="Phone Number"><td><img width="24" src="images/phone.png" /></td>';
											echo '<td>'.$row['phone']."</td></tr>";
										}
										if (strlen($row['email'])>0) {
											echo '<tr title="Email Address"><td><img height="24" src="images/email.png" /></td>';
											echo "<td> <a href='mailto:".$row['email']."'>".$row['email']."</a></td></tr>";		
										}
										if (strlen($row['location'])>0) {
											echo '<tr title="Office"><td><img height="24" src="images/office.png" /></td>';
											echo '<td>'.$row['location']."</td></tr>";
										}
										
										if (strlen($row['website'])>0) {
											echo '<tr title="'.$row['title'].' '.$row['last'].'\'s Website"><td><img height="24" src="images/website.png" /></td>';
											echo '<td><a style="text-decoration:underline" target="_blank" href="'.$row['website'].'">'.$row['title'].' '.$row['last'].'\'s Website'."</a></td></tr>";
										}
										if (strlen($row['link'])>0) {
											echo '<tr title="Faculty Profile"><td><img height="24" src="images/profile.png" /></td>';
											echo '<td><a style="text-decoration:underline" target="_blank" href="'.$row['link'].'">Faculty Profile'."</a></td></tr>";
										}
									
										echo "</table></span>";   
										
										
										 
										echo "</td>";	
											$count++;
											
										}
									}
									// Others
									while($row=mysql_fetch_assoc($results)) {
										if ($count%4==0) {
											echo "</tr><tr>";
										}
										echo "<td width='180' class='profileTD'><a ";
										if ($row['link'] != NULL)
											echo "target='_blank' href='$row[link]";
										else
											echo "href='?i=people&s=staff&user=".$row['ID'];
										$img_url_db = "images/people/faculty/".$row['img'];
										$img_url_default = "images/people/faculty/default.jpg";
										if (file_exists($img_url_db)) 
											$img_url = $img_url_db;
										else 
											$img_url = $img_url_default;
										echo "'><div class='profile_pic'><img  src='$img_url'/><br /><br />";
										echo '<span class="profile_name">';	
									if ($row['title']!='NULL') 
										echo "$row[title] $row[first] $row[last] </span>";
										echo "<p class='profile_position'> $row[position]</p></div><br /></a>
										
										<span class='tooltipD'>
											<h5>$row[title] $row[first] $row[last]</h5><table>";
										if (strlen($row['phone'])>0) {
											echo '<tr title="Phone Number"><td><img width="24" src="images/phone.png" /></td>';
											echo '<td>'.$row['phone']."</td></tr>";
										}
										if (strlen($row['email'])>0) {
											echo '<tr title="Email Address"><td><img height="24" src="images/email.png" /></td>';
											echo "<td> <a href='mailto:".$row['email']."'>".$row['email']."</a></td></tr>";		
										}
										if (strlen($row['location'])>0) {
											echo '<tr title="Office"><td><img height="24" src="images/office.png" /></td>';
											echo '<td>'.$row['location']."</td></tr>";
										}
										
										if (strlen($row['website'])>0) {
											echo '<tr title="'.$row['title'].' '.$row['last'].'\'s Website"><td><img height="24" src="images/website.png" /></td>';
											echo '<td><a style="text-decoration:underline" target="_blank" href="'.$row['website'].'">'.$row['title'].' '.$row['last'].'\'s Website'."</a></td></tr>";
										}
										if (strlen($row['link'])>0) {
											echo '<tr title="Faculty Profile"><td><img height="24" src="images/profile.png" /></td>';
											echo '<td><a style="text-decoration:underline" target="_blank" href="'.$row['link'].'">Faculty Profile'."</a></td></tr>";
										}
									
										echo "</table></span>";
										
										      
									echo "</td>";	
										$count++;
									
									}
									echo "</tr></table>";
									$chair++;
									if ($chair < count($departments))
										echo "<table width='720'><tr><td align='right' class='bottom_border'><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></td></tr></table>";	
								}
														
							}
							// emeritus faculty
							if (isset($_GET['s']) && $_GET['s']=='emeritus') {
								$sql = "SELECT * FROM faculty WHERE faculty.p='emeritus'";
								$results = mysql_query($sql) or die ("Unable to execute: ". mysql_error());
								echo "<table><tr>";
								$count = 0;
								while($row=mysql_fetch_assoc($results)) {
										if ($count%4==0) {
											echo "</tr><tr>";
										}
										echo "<td width='180'><a ";
										if ($row['link'] != NULL)
											echo "target='_blank' href='$row[link]";
										else
											echo "href='?i=people&s=emeritus&user=".$row['ID'];
										$img_url_db = "images/people/faculty/".$row['img'];
										$img_url_default = "images/people/faculty/default.jpg";
										if (file_exists($img_url_db)) 
											$img_url = $img_url_db;
										else 
											$img_url = $img_url_default;
										echo "'><div class='profile_pic'><img  src='$img_url'/><br /><br />";
										echo '<span class="profile_name">';	
									if ($row['title']!='NULL') 
										echo "$row[title] $row[first] $row[last] </span>";
										echo "<p class='profile_position'> $row[position]</div><br /></a></p>";       
									echo "</td>";	
										$count++;
									
									}
									echo "</tr></table>";
							}
							// staff
							if (isset($_GET['s']) && $_GET['s']=='staff') {
								$sql = "SELECT * FROM faculty WHERE faculty.p='staff'";
								$results = mysql_query($sql) or die ("Unable to execute: ". mysql_error());
								echo "<table><tr>";
								$count = 0;
								while($row=mysql_fetch_assoc($results)) {
										if ($count%4==0) {
											echo "</tr><tr>";
										}
										echo "<td width='180'>";
										
										$img_url_db = "images/people/faculty/".$row['img'];
										$img_url_default = "images/people/faculty/default.jpg";
										if (file_exists($img_url_db)) 
											$img_url = $img_url_db;
										else 
											$img_url = $img_url_default;
										echo "<div class='profile_pic'><img src='$img_url'/><br /><br />";
										echo '<span class="profile_name">';	
									if ($row['title']!='NULL') 
										echo "$row[title]";
										echo "$row[first] $row[last] </span>";
										echo "<p style='height:70px' class='profile_position'> $row[position]<br />
												<strong>Office</strong>: $row[location]<br />
												<strong>Phone</strong>: $row[phone]<br />
												<strong>Email</strong>: <a href='mailto:'>$row[email]</a><br />
												</p></div><br />";       
									echo "</td>";	
										$count++;
									
									}
								echo "</tr></table>";
							}
						}
					?>
				</div>
			</td>
		</tr>
	</table>
</div>