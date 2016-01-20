<?php 
include "../template/header.php"; 
if (!isset($_GET['i'])) {
	$_GET['i'] = 'recent';
}

?>
<h5 class="currentBar">Home &raquo; News &amp; Events &raquo; <?php if (!isset($_GET['i']) || (isset($_GET['i']) && $_GET['i']=='recent')) echo 'Recent'; else echo 'Past'; ?></h5>
<section style="width:960px">
	<h1 class="grayB">News &amp; Events</h1><br />

  <a href="?i=recent"><h3 style="margin-left:0px;" class="button white">Recent</h3></a>
    <a href="?i=past"><h3 class="button white">Past</h3></a>
    
    <br>
<br>

    <?php if (isset($_GET['i']) && $_GET['i']=='recent') { ?>
<h3 class="news">Group Members</h3> 
  <ul id="ri">
    	<li><p>Jarrod Reynolds will start his Ph.D. work on water resources issues related to shale gas production at Barnett Shale. Jarrod has been working at EOG Resources.</p></li>
        <li><p>Ugo Ononogbu, Simon Obame, and Fidelis Edgobu joined the research group early 2012 as M.S. students focusing on Petroleum Geoscience Professional Option.</p></li>
        <li><p>Ian Hamilton successfully defended his MS thesis “Identifying Possible Hydrologic Recharge Zones of the Sangre De Cristo Aquifer on the Milliken Ranch in Las Vegas, NM” in December of 2011.</p></li>
        <li><p>In December 2011 Nathan Glondys successfully defended his MS thesis “Thermal Maturity and Porosity Development during Catagenesis in the Barnett Shale, Fort Worth Basin, Texas”.</p></li>
        <li><p>Dr. He-cheng Liang from China University of Geosciences, Wuhan worked for one year (from Jan. 2011 to Jan. 2012) in the research group as a visiting scientist.</p></li>
        <li><p>Prof. Jian-guo Bao from China University of Geosciences, Wuhan spent one year (from Oct. 2010 to Oct. 2011) in the research group.</p></li>
        <li><p>Toru Nakajiwa, a postdoc from Tokyo University of Agriculture and Technology in Japan, worked on fluid flow and chemical transport in unsaturated media, during January to October of 2011. Toru is now a postdoc with Ohio State University working on carbon dynamics.</p></li>
        <li><p>During Oct. 2010 – Aug. 2011, Jiang-kun Du, a MS student from China University of Geosciences, Wuhan, was supported by a DOE project to study the effects of pore-scale physics on uranium geochemistry in Hanford sediments.</p></li>
        <li><p>Dr. Sheng Peng joined the group as an Assistant Research Professor since January of 2011.</p></li>
  </ul>

<h3 class="news">Publications in 2012 (up to Aug. 2012; corresponding author) </h3>
<ol style="text-align:left">
   	  <li><p>Gao, Z.Y., and <strong><u>Q.H. Hu</u></strong>.  2012. Using spontaneous water imbibition to measure the effective permeability  of building materials. <em>Special Topics and  Reviews in Porous Media - An International Journal, 3(3): 209-213,  DOI:  10.1615/SpecialTopicsRevPorousMedia.v3.i3.20.</em>
   	  </p></li>
   	  <li><p><strong><u>Hu, Q.H</u></strong><u>.</u>, R.P. Ewing, and S. Dultz. 2012. Low pore connectivity in natural rock. <em>Journal of Contaminant Hydrology</em>,  133: 76-83, doi.org/10.1016/j.jconhyd.2012.03.006.</p></li><li><p>
   	   <u>Ewing, R.P.</u>, C.X. Liu,  and <strong>Q.H. Hu</strong>. 2012. Modeling intragranular  diffusion in low-connectivity granular media. <em>Water Resources Research</em>, vol.  48, W03518, doi:10.1029/2011WR011407.
   	  </p></li>
   	  <li><p>Peng, S., and <strong><u>Q.H. Hu</u></strong>. 2012. LA-ICP-MS calibration with internal standard  and modified constant-sum methods. <em>American  Journal of Analytical Chemistry</em>, 3: 168-174, doi:10.4236/ajac.2012.32024.</p></li>
    <li><p><strong><u>Hu, Q.H.</u></strong>,  G.X. Sun, X.B. Gao, and Y.G. Zhu. 2012. Conversion, sorption, and transport of  arsenic species in geological media. <em>Applied  Geochemistry,</em> doi:10.1016/j.apgeochem.2012.01.012.</p></li>
    <li><p>Du, J.Q., J. Bao, <strong><u>Q.H. Hu</u></strong>, and R.P. Ewing. 2012. Uranium release from  different size fractions of sediments in Hanford 300 Area, Washington, USA. <em>Journal of Environmental Radioactivity</em>,  107: 92-94, doi:10.1016/j.jenvrad.2012.01.007.</p></li>
    <li><p>Peng, S., <strong><u>Q.H. Hu</u></strong>, R.P. Ewing, C.X. Liu, and J.M. Zachara. 2012.  Quantitative 3-D elemental mapping by LA-ICP-MS for basalt at the Hanford 300  Area Site. <em>Environmental Science and  Technology</em>, 46(4): 2025-2032, doi<strong>: </strong>10.1021/es2023785.</p></li>
    <li><p>Peng, S., <strong><u>Q.H. Hu</u></strong>, and S. Hamamoto. 2012. Diffusivity of rocks: Gas diffusion  measurements and correlation to porosity and pore-size distribution. <em>Water Resources Research</em>, Vol. 48, No.  2, W02507, doi:10.1029/2011WR011098.</p></li>
    <li><p><strong><u>Hu, Q.H</u></strong><u>.</u>, J.E. Moran, and J. Gan. 2012.  Sorption, degradation, and transport of methyl iodide and other iodine species  in geologic media. <em>Applied Geochemistry</em>,  27(3): 774-781, doi:10.1016/j.apgeochem.2011.12.022.</p></li>
    <li><p>Gao, X.B., Y.X. Wang, and <u>Q.H. Hu</u>.  2012. Fractionation and speciation of arsenic in fresh and combusted coal  wastes from Yangquan, northern China. <em>Environmental  Geochemistry and Health</em>, 34(1):113-122, doi:10.1007/s10653-011-9395-1.</p></li>
  </ol>


<h3 class="news">Wiley Visiting Scientist Fellowship</h3> 
<p>Dr. Hu has been selected as a recipient of Wiley Visiting Scientist Fellowship of the Environmental Molecular Sciences Laboratory (EMSL), Pacific Northwest National Laboratory. He spent one month during April-May of 2011 at EMSL to work on the pore-scale connectivity and associated mass transfer of Hanford sediments related to the long-term contaminant release and management of contaminated sites. The work utilized FIB/SEM/EDS and X-ray microtomography at EMSL.  </p>
    
 
 
    <?php }  elseif (isset($_GET['i']) && $_GET['i']=='past') { ?>
 
<h3 class="news">Journal Editorial Board</h3>
<p> Dr. Hu has accepted the invitation to serve as a member of the Editorial Board of the Journal of Contaminant Hydrology (JCH). With an Impact factor of 2.010, JCH is an internationally leading journal to publish scientific articles pertaining to the contamination of groundwater.<a href="http://www.elsevier.com/wps/find/journaldescription.cws_home/503341/description#description/" target="_blank" style="text-decoration:underline"><br />
    <em> http://www.elsevier.com/wps/find/journaldescription.cws_home/503341/description#description/</em></a></p>
<h3 class="news">RPSEA Funding</h3>
<p>Dr. Hu's proposal entitled "Integrated Experimental and Modeling Approaches to Studying the Fracture-Matrix Interaction in Gas Recovery from Barnett Shale" has been selected for funding by Research Partnership to Secure Energy for America (RPSEA).<a href="http://www.rpsea.org/en/art/275/" target="_blank" style="text-decoration:underline"><br />
  http://www.rpsea.org/en/art/275/</a></p>
<p>Project abstract has been posted at the website of DOE's National Energy Technology Laboratory. <a href="http://www.netl.doe.gov/technologies/oil-gas/EPAct2005/Projects/UNC/0912212-UT-Arlington-Abstract.html" target="_blank"  style="text-decoration:underline"><br />
  http://www.netl.doe.gov/technologies/oil-gas/EPAct2005/Projects/UNC/0912212-UT-Arlington-Abstract.html</a>.</p>
<h3 class="news">DOE Funding</h3>
<p> As the PI, Dr. Hu has been awarded an external federal grant to examine the effects of pore-scale physics on uranium geochemistry in Hanford sediments. The project is funded by DOE Office of Science&rsquo;s Subsurface Biogeochemical Research program. Dr. Hu will perform the laboratory experiments, in collaboration with Dr. Robert &ldquo;Toby&rdquo; Ewing of Iowa State University, who will conduct pore-scale network modeling. </p>
<h3 class="news">Fulbright Senior Specialist Award</h3>
<p>Dr. Hu has won a competitive national award as the Fulbright Senior Specialist. He will travel to Japan to lecture and conduct research at the Tokyo University of Agriculture and Technology in Japan during April 19 to May 30, 2010.</p>
<p>The Fulbright Program, America's flagship international educational exchange program, has provided approximately 286,500 people with the opportunity to observe each others' political, economic, educational and cultural institutions, to exchange ideas and to embark on joint ventures of importance o the general welfare of the world's inhabitants. The program operates in more than 155 countries worldwide. <a href="http://www.uta.edu/ucom/internalcommunications/mavwire/2010/apr05.php" target="_blank" style="text-decoration:underline"><br />
  Fulbright Award</a></p>
<h3 class="news">NSF Funding</h3>
<p> Funded by the Paleo Perspectives on Climate Change program and led by Harry Rowe, Arne Winguth, and Max Hu of the Department of Earth and Environmental Sciences at UT-Arlington, the project will study how the climate system in eastern North America evolved during the last eight glacial-interglacial cycles, which cover the last 600,000 years of Earth&rsquo;s history. Rowe and Hu, both geochemists, are reconstructing climate change using chemical and isotopic records preserved in cave stalagmites recovered from the Appalachian Mountains of Tennessee and West Virginia. Winguth, a climate modeler, is using the climate reconstructions as a guide to develop and refine simulations of the climate system for key periods of rapid climate change. </p>
<h3 class="news">Research Highlights</h3>
<p> A paper of Hu et al. (2008) on radionuclide sorption under different redox conditions was highlighted in <a style="text-decoration:underline" href="http://www.geochemsoc.org/publications/geochemicalnews/gn138jan09/geochemicalhighlights.htm" target="_blank">Geochemical Highlights (#138) </a>by Geochemical Society. </p>
<?php } ?>
    
</section>

<?php include "../template/footer.php"; ?>