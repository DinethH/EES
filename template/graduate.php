<script type="text/javascript" src="js/smooth.pack.js"></script>
<?php
if (isset($_GET['u'])) {
	if ($_GET['u']=='degrees') {
		include "graduate_degrees.php";
	}
	if ($_GET['u']=='requirements') {
		include "graduate_requirements.php";	
	}
	if ($_GET['u']=='gradguide') {
		include "graduate_guide.php";	
	}
	if ($_GET['u']=='mentoring') {
		include "graduate_mentoring.php";	
	}
	if ($_GET['u'] == 'fellowships') {
		include "graduate_fellowships.php";	
	}
	if ($_GET['u'] == 'fast') {
		include "graduate_fast.php";	
	}
	if ($_GET['u']=='egta') {
		include "graduate_egta.php";
	}
}
if (!isset($_GET['u'])) {
?>
<h6>Graduate Degree Information</h6>
    	<ul id="afterH6">
        	<li><a href="?i=academics&amp;s=graduate&amp;u=degrees">Degrees &amp; Requirements</a></li>
        	<li><a href="?i=academics&amp;s=graduate&amp;u=fast">Fast Track Program</a></li>
        	<li><a target="_blank" href="http://grad.pci.uta.edu/about/catalog/current/schools/science/earth/">Graduate Catalog</a></li>
        	<li><a href="?i=academics&amp;s=graduate&amp;u=gradguide">Graduate Guide</a></li>
        	<li><a target="_blank" href="http://grad.pci.uta.edu/prospective/">How to Apply</a></li>
        </ul>
<h6> Schedules/Deadlines</h6>
	<ul id="afterH6">
    	<li><a target="_blank" href="http://wweb.uta.edu/ses/recordsandregistration/content/student_services/final_exam_schedule.aspx">Final Exam Schedule</a></li>
    	<li><a href="http://grad.pci.uta.edu/about/catalog/current/calendar/" target="_blank">Graduate Calendar/Deadlines</a></li>
    </ul>
<h6>Misc</h6>
	<ul id="afterH6">
		
        <!--<li><a href="?i=academics&amp;s=graduate&amp;u=egta">Enhanced GTA</a></li>-->
         <li><a href="http://grad.pci.uta.edu/students/finances/fellowships/uta/" target="_blank">Fellowships for Graduate Students</a></li>
         <li><a href="http://grad.pci.uta.edu/students/forms" target="_blank">Forms for Graduate Students</a></li>
       
        <li><a href="?i=academics&s=graduate&u=mentoring">Mentoring Program</a></li>
        <li><a href="?i=academics&s=graduate&u=fellowships">Research Fellowships</a></li>
        <li><a href="?i=academics&s=graduate&u=egta"></a><a href="assets/Request_Recommendation.pdf">Request for Recommendation</a></li>  
    </ul>
	<br />

<?php
	}
?>
<br>