<style>
.news_url {
	font-size:16px;
	font-weight:normal;
}
</style>
<?php if (!isset($_POST['deg'])) { ?>
<br />



<table style="float:right">
	<tr>
 		<td>
        <em>The Department of Earth and Environmental Sciences offers eight programs of study at the bachelor's level.</em>
        </td>
        <td>
        	<a target="_blank" href="http://wweb.uta.edu/catalog/assets/pdf/ugrd_catalog/dept_of_earth_and_env_science.pdf"><img title="Download a PDF of this Document" width="40" src="images/pdf.png" /></a>
        </td>
    </tr>
</table>


<br />

<h6>The Bachelor of Science in Geology</h6>
	
	This degree has three options:<br>
	<ol>
  		<li><strong>The Professional Option</strong> is for those who plan to enter the profession or go to graduate school but are uncertain where they want to concentrate. The program emphasizes breadth and exposes students to most of the geological disciplines.</li><br />
  		<li><strong>The Environmental Option</strong> emphasizes the application of Earth Science to environmental problems associated with the hydrosphere, atmosphere, and natural hazards.</li><br />
  		<li><strong>The Engineering Geology Option</strong> is for those interested in combining Geology with a Civil Engineering minor to work with engineering firms on construction and environmental problems.</li>
	</ol>
	<form name="" action="" method="post">
    <input name="deg" value="1" type="hidden" />
		<input class="news_url" style="border:none; background:none; cursor:pointer" value="Requirements" type="submit" />
	</form>
  

<h6>The Bachelor of Science in Environmental Science</h6>
This degree has one option and is designed for those who plan to enter the profession or go to graduate school. It consists of equal numbers of credit hours in Geology and Biology, either Physical or Organic Chemistry, and Math through Calculus II.<br><br />

<form name="" action="" method="post">
    <input name="deg" value="2" type="hidden" />
		<input class="news_url" style="border:none; background:none; cursor:pointer" value="Requirements" type="submit" />
	</form>

<h6>The Bachelor of Science in Geoinformatics</h6>
Geoinformatics is the analysis, integration and dissemination of the vast quantities of scientific data that are associated with a geographic location. The informatics concept integrates web-based, data management technologies with scientific and technical disciplines as well as business and liberal arts disciplines. This degree has two options.<br>
<ol>
  <li><strong>The General Option</strong> is for those who want to apply informatics to some discipline, which is represented by the minor.</li><br />
  <li><strong>The Earth Science Option</strong> is for those who want to apply informatics to Geoscience.</li>
</ol>
<form name="" action="" method="post">
    <input name="deg" value="3" type="hidden" />
		<input class="news_url" style="border:none; background:none; cursor:pointer" value="Requirements" type="submit" />
	</form>
<h6>The Bachelor of Arts in Geology</h6>
This degree has three options:<br>
<ol>
  <li><strong>The Geographic Information Systems Option</strong> is for those who want to combine Geology with computer technology to store and analyze spatial data using the GIS software.</li><br />
  <li><strong>The General Option</strong> is for those who want to combine Geology with other professional interests.</li><br />
  <li><strong>The Teacher Certification Option</strong> is for those who want teacher certification in Earth/Life Sciences or in Earth Science.</li>
</ol>
Certification in Geographic Information Systems is designed for those in other majors who want to become proficient in spatial data analysis, which is used in business, liberal arts, engineering and architecture disciplines. <br />
<br />

<form name="" action="" method="post">
    <input name="deg" value="4" type="hidden" />
		<input class="news_url" style="border:none; background:none; cursor:pointer" value="Requirements" type="submit" />
	</form>

<?php } ?>
<?php
	if (isset($_POST['deg']))
		include "undergraduate_requirements.php";
?>
<p style="text-align:right"><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></p>