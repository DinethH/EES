 <?php
            include 'includes/db.php';
            $sql = "SELECT * FROM students WHERE type=10 ORDER BY name ASC";
                                                            $results = mysql_query($sql) or die ("Unable to execute: ". mysql_error());
                                                            $studentsCount = 1;
                                                            ?>
                                                            <div style="width: 700px; background-color: #00457D; color: white;">
                                                                <table>
                                                                    <tr style="height: 40px; font-weight: bold; vertical-align: central;">
                                                                        <!--<td style="width: 50px;"></td>-->
                                                                        <td style="width: 200px;">Name</td>
                                                                        <td style="width: 300px;">Position</td>
                                                                        <td style="width: 150px;">Social</td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <?php
                                                            while ($row = mysql_fetch_array($results)) {
                                                                echo '<div style="';
                                                                if ($studentsCount%2==0) {
                                                                    echo ' background-color:#EDE2CB; ';
                                                                }
                                                                echo 'width: 700px;">
                                                                        <table class="gradTitle">
                                                                            <tr style="height:50px; font-size: 16px;"><div>
                                                                                <!--<td style="width: 50px;"><img width="32" src="images/social/default.jpg"/></td>-->
                                                                                <td style="width: 200px;">'.$row['name'].'</td>
                                                                                <td style="width: 300px;">'.$row['position'].'</td>
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
                                                                                    echo '<a href="#"><img class="moreButton grayscale" title="more" alt="more" style="" width="48" src="images/social/play.png"/></a>';
                                                                                } 
                                                                                echo '</td>
                                                                            </div>
                                                                            </tr>
                                                                        </table>
                                                                    </div>';
                                                                $studentsCount++;
                                                            }
                                                            ?>
            <!-- alumni people end -->
  