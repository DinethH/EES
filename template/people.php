<link media="screen" rel="stylesheet" type="text/css" href="css/tooltips.css" />

<script type="text/javascript" src="js/smooth.pack.js"></script>
<?php 
        $index;
        if (!isset($_GET['index']) || ($_GET['index'] == 'all') ) {
            $index = "";
        }
        else {
            $index = $_GET['index'];
        }
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
            <td align="left" width="1024" style="vertical-align: top">

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
										<span";
										if (!strlen($row['email'])>0 ) {
											echo " style='display:none;' ";
										}
										echo " class='tooltipD'>
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
										
										<span";
										if (!strlen($row['email'])>0 ) {
											echo " style='display:none;' ";
										}
										echo " class='tooltipD'>
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
							else if (isset($_GET['s']) && $_GET['s']=='staff') {
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
										echo "<p style='height:80px' class='profile_position'> $row[position]<br />
												<strong>Office</strong>: $row[location]<br />
												<strong>Phone</strong>: $row[phone]<br />
												<strong>Email</strong>: <a href='mailto:'>$row[email]</a><br />
												</p></div><br />";       
									echo "</td>";	
										$count++;
									
									}
								echo "</tr></table>";
							}
                                                        // grad students
                                                        else if (isset($_GET['s']) && $_GET['s']=='grad') {
                                                           
                                                            ?>
                                    <div>
                                        <table style="width: 740px; margin-left: -30px;">
                                            <tr>
                                                <td>
                                                    <ul>
                                                        <a class="grad_index" style="padding-right:8px; <?php if(isset($_GET['index']) && $_GET['index'] == 'all') echo 'color:blue'; ?>" href="?i=people&s=grad&index=all"><li class="grad_index_li" style='list-style:none; display:inline;'>ALL</li></a>
                                                    <?php
                                                        $sql_index = "SELECT name FROM students";
                                                        $index_array = array();
                                                        $results_index = mysql_query($sql_index);
                                                        while ($row = mysql_fetch_array($results_index)) {
                                                            if (!in_array(substr($row['name'], 0, 1), $index_array ) ) {
                                                                array_push($index_array, substr($row['name'], 0, 1));
                                                            }
                                                        }
                                                        //print_r ($index_array);
                                                        for ($i = 0;$i < 26;$i++) {
                                                            for ($j = 0; $j < count($index_array)-1; $j++) {
                                                                //if ($index_array[$j] == chr(65+$i)) {
                                                                //    echo "<a class='news_url' style='padding-right:8px;' href='?i=people&s=grad&index=".chr(65+$i)."'><li style='list-style:none; display:inline;'>".chr(65+$i)."</li></a>";

                                                               // }
                                                            }
                                                            echo "<a class='grad_index' style='padding-right:8px;";
                                                            if(isset ($_GET['index']) && $_GET['index'] == chr(65+$i)) echo 'color:blue';
                                                            echo "' href='?i=people&s=grad&index=".chr(65+$i)."'><li class='grad_index_li' style='list-style:none; display:inline;'>".chr(65+$i)."</li></a>";

                                                        }

                                                    ?>
                                                    </ul>
                                                </td>
                                                <td style="width: 200px;">
                                                    <form method="POST" target="">
                                                        <input  name="auto_in" type="text" class="autosuggest white" autocomplete="off" onfocus="if (this.value==this.defaultValue){this.value='';}" onblur="if (this.value==''){this.value=this.defaultValue;}" value="<?php if (isset($_POST['auto_in'])) echo $_POST['auto_in']; else echo "search"; ?>">
                                                        <input class="button white" name="auto_bt" type="submit" value="Search">
                                                    </form>
                                                    <div class="dropdown">
                                                        <ul class="result">
                                                        </ul>
                                                    </div>
                                                    <script src="js/jquery-1.7.1.min.js"></script>
                                                    <script src="js/auto_suggest.js"></script>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <?php
                                    if (isset($_POST['auto_bt'])) {
                                       $sql = "SELECT * FROM students WHERE (type=9 && name LIKE '%$_POST[auto_in]%') ORDER BY name ASC";
                                    }
                                    else {
                                        $sql = "SELECT * FROM students WHERE (type=9 && name LIKE '$index%') ORDER BY name ASC";
                                    }
                                     
                                                            $results = mysql_query($sql) or die ("Unable to execute: ". mysql_error());
                                                            if ($results == 0) {
                                                                $no_results = "";
                                                            }
                                                            $studentsCount = 1;
                                    ?>
                                    <div style="width: 700px; background-color: #00457D; color: white;padding-left: 5px;">
                                                                <table>
                                                                    <tr style="height: 40px; font-weight: bold; vertical-align: central; font-size: 16px;">
                                                                        <!-- <td style="width: 50px;"></td> -->
                                                                        <td style="width: 200px;">Name</td>
                                                                        <td style="width: 300px;">Program</td>
                                                                        <td style="width: 200px;"></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <?php
                                                            while ($row = mysql_fetch_array($results)) {
                                                                echo '<div class="gradBox" style="';
                                                                if ($studentsCount%2==0) {
                                                                    echo ' background-color:#EDE2CB; ';
                                                                }
                                                                echo 'width: 700px;">
                                                                        <table class="gradTitle">
                                                                            <tr style="height:50px; font-size: 16px;"><div>
                                                                                <!--<td style="width: 50px;"><img width="32" src="images/social/default.jpg"/></td>-->
                                                                                <td style="width: 200px;">'.$row['name'].'</td>
                                                                                <td style="width: 300px;">'.$row['program'].'</td>
                                                                                <td style="width: 200px; ">';
                                                                                if ($row['linkedIn']!= null) {
                                                                                    echo '<a target="_blank" href="'.$row['linkedIn'].'"><img class="grayscale" title="LinkedIn" alt="linkedin profile" style="" width="48" src="images/social/linkedin.png"/></a>';
                                                                                }
                                                                                if ($row['facebook'] != null) {
                                                                                    echo '<a target="_blank" href="'.$row['facebook'].'"><img class="grayscale" title="Facebook" alit="facebook profile" style="" width="48" src="images/social/facebook.png"/></a>';
                                                                                }
                                                                                if ($row['youtube'] != null) {
                                                                                    echo '<a target="_blank" href="'.$row['youtube'].'"><img class="grayscale" title="Youtube" alt="youtube channel" style="" width="48" src="images/social/youtube.png"/></a>';
                                                                                }
                                                                                if ($row['email']!=null) {
                                                                                    echo '<a><img class="moreButton grayscale" title="more" alt="more" style="" width="48" src="images/social/play.png"/></a>';
                                                                                } 
                                                                                echo '</td>
                                                                            </div></tr>';
                                                                                 if ($row['email']!=null or strlen($row['email'])!=0) {
                                                                ?>
                                    <tr>
                                        <td colspan="3">
                                            <div class="gradDetails">
                                                <table>
                                                    <tr>
                                                        
                                                <?php
                                                   
                                                        echo '<td>';
                                                            echo 'Email: <a href="mailto:'.strtolower($row['email']).'">'.strtolower($row['email']).'</a>';
                                                            if ($row['room']!=null) {
                                                                echo '</br>Office: '.$row['room'];
                                                            }
                                                        echo '</td>';
                                                   
                                                ?>
                                                  
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                                                <?php
                                                                                 }
                                                                        echo '</table>
                                                                    </div>';
                                                                $studentsCount++;
                                                            }
                                                                if ($studentsCount == 1) {
                                                                    echo '<br>No results found!';
                                                                }
                                                                if ($studentsCount >= 15) {
                                                                    echo "<table width='720'><tr><td align='right' class=''><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></td></tr></table>";
                                                                }
                                                        }

						}
					?>
                                    </br>
                                    </div>
			</td>
		</tr>
	</table>
</div>