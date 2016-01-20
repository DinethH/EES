<?php if (!isset($_POST['deg'])) { ?>
<style>
.news_url {
	font-size:16px;
	font-weight:normal;
}
</style>
<h6>The MS in Environmental and Earth Sciences</h6>
The degree has four options.<br />
	<ol>
    	<li><strong>The Environmental Science Option</strong> provides graduate students with an integrated,
multidisciplinary education, requiring a breadth of understanding and mastery of a spectrum
of scientific and engineering principles.The thesis option, designed for those interested in an
in-depth experience in some particular topic, and a non-thesis option are available. </li><br />
        <li><strong>The Geoscience Option</strong> is a two year program with specializations in stratigraphy,
paleontology, sedimentology, structural geology, tectonics, plate tectonics, computer
modeling, geochemistry or paleoclimatology. Students in this program are prepared for
additional graduate work at the PhD level, or for positions in industry and government. Thesis
or non thesis options are available. </li><br />
        <li><strong>The Environmental Science Professional Option</strong> is a Professional Master's Degree for
those interested in a career in Environmental Science. Instead of a thesis, students are
participate in a mentoring program, take a course in project economics, work as an intern or
in a part time job in the Environmental Science Profession, and participate in course
experiences involving business ethics, teamwork, a small research project, and
communication. This is a non thesis program. </li><br />
        <li><strong>The Petroleum Geoscience Professional Option</strong> is a Professional Masters Degree for
those interested in a career in Petroleum Geoscience. In addition to core geology courses,
students are required to participate in a mentoring program with industry professionals, work
as an intern or in a part time job in petroleum geoscience, take a course in project
economics, and participate in course activities that emphasize business ethics, teamwork
and communications. A thesis research project is required. </li>
  	</ol>
    <form name="" action="" method="post">
    <input name="deg" value="1" type="hidden" />
		<input class="news_url" style="border:none; background:none; cursor:pointer" value="Requirements" type="submit" />
	</form>
    
<h6>The PhD in Environmental and Earth Sciences</h6>
<p>The program leading to the Doctor of Philosophy degree in Environmental and Earth Sciences is designed primarily to prepare doctoral-level students for research careers in industry, government or academic institutions. Students carry out independent research and acquire practical knowledge of the type of research conducted and the constraints (both practical and philosophical) under which such research is conducted. The areas of research are interdisciplinary using the Earth's environment, interpreted broadly, as the theme. Research normally comes from the disciplines of Geoscience, Biology, Chemistry and Engineering, but contributions from other disciplines are welcome. The program is designed to provide graduate students an
integrated, multidisciplinary education, requiring a breadth of understanding and mastery of a spectrum of scientific and engineering principles. Among the goals is to provide students who have earned engineering or science undergraduate degrees a common ground for interdisciplinary communication, an understanding of the environment, and competence in a research area that will enable them to evaluate complex environmental problems.
</p>
<form name="" action="" method="post">
    <input name="deg" value="2" type="hidden" />
		<input class="news_url" style="border:none; background:none; cursor:pointer" value="Requirements" type="submit" />
	</form>
    <br />
<?php } ?>
<?php
	if (isset($_POST['deg']))
		include "graduate_requirements.php";
?>

<p style="text-align:right"><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></p>
