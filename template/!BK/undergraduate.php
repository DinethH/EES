<script type="text/javascript" src="js/smooth.pack.js"></script> 
<?php

if (isset($_GET['u'])) {
	if ($_GET['u']=='degrees') {
		include "undergraduate_degrees.php";
	}
	if ($_GET['u'] == 'requirements') {
		include "undergraduate_requirements.php";
	}
	if ($_GET['u'] == 'courses') {
		include "undergraduate_courses.php";
	}
	if ($_GET['u']=='fieldcamps') {
		include "undergraduate_fieldcamps.php";
	}
}
if (!isset($_GET['u'])) {
?>
	<h6 class="123">Undergraduate Degree Information</h6>
    	<ul id="afterH6">
        	<li><a target="_blank" href="http://wweb.uta.edu/catalog/assets/pdf/ugrd_catalog/dept_of_earth_and_env_science.pdf">Undergraduate Catalog 2012-2013</a></li>
            <li><a href="?i=academics&s=undergraduate&u=degrees">Degrees and Requirements</a> </li>
        </ul>
    
    <h6>Courses &amp; Schedules</h6>
     	<ul id="afterH6">
        	<li><a href="?i=academics&s=undergraduate&u=courses">Course Descriptions</a></li>
            <li><a target="_blank" href="http://wweb.uta.edu/ses/recordsandregistration/content/student_services/final_exam_schedule.aspx">Final Exam Schedule</a></li>
        </ul>
    <h6>Events</h6>
		<ul id="afterH6">
        	<li><a href="?i=academics&s=undergraduate&u=fieldcamps">Field Camps</a></li>
        </ul>
        
        <br />


<?php
}

?>