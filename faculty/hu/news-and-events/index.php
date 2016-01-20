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
  <h2>Dr. Hu's Presentations:</h2>
     
     <table cellpadding="5">
     	<tr>
        	<td>11/8/2013</td>
          <td>&ldquo;Sustainable Shale Hydrocarbon  Development Affected by Environmental and Production-Decline Issues&rdquo;.  Department of Civil Engineering, the University of Texas, San Antonio, Texas.</td>
        </tr>
     	<tr>
     	  <td>10/24/2013</td>
     	  <td>&ldquo;Sustainable Shale Hydrocarbon  Development Affected by Environmental and Production-Decline Issues&rdquo;. Energy  &amp; Geoscience Institute, the University of Utah, Salt Lake City, Utah.</td>
   	  </tr>
     	<tr>
     	  <td>10/29/2013</td>
     	  <td>Hu, Q.H., Z.Y. Gao, and R.P. Ewing.  Diffusion-Limited Fracture-Matrix Interaction and Gas Recovery in Barnett  Shale. <a href="https://gsa.confex.com/gsa/2009SC/finalprogram/session_23780.htm">Session &ldquo;A Comprehensive Look at Hydraulic Fracturing  for Hydrocarbon Recovery and Other Purposes</a>&rdquo;, 2013 Geological  Society of America Annual Meeting and Exposition, Denver, CO, October 27–30,  2013. </td>
   	  </tr>
     	<tr>
     	  <td>10/19/2013</td>
     	  <td>Hu,  Q.H. Pore Structure and Fluid Flow Considering Yucca Mountain and Tight Shale  Gas Experience. GSA Penrose  Conference&quot; Predicting  and Detecting Natural and Induced Flow Paths for Geothermal Fluids in Deep  Sedimentary Basins&quot; Park City, Utah, October 19-23, 2013. (keynote speaker)</td>
   	  </tr>
     	<tr>
     	  <td>10/10/2012 </td>
     	  <td>&ldquo;Real and Perceived Environmental Issues  Related to Shale Hydrocarbon Production&rdquo;. Department of Earth and Environmental  Sciences, the University of Texas at Arlington, Arlington, TX.</td>
   	  </tr>
     	<tr>
     	  <td>10/7/2013</td>
     	  <td>&ldquo;Sustainable Shale Hydrocarbon Development  Affected by Environmental and Production-Decline Issues&rdquo;. The University  of Arizona, Tucson, Arizona.</td>
   	  </tr>
     </table>
     
     
     
  <h2>Science and  Nature Comment Publications:</h2>
  <h2>Research work on  shale resource development and associated issues had led to three recent  publications at the web version of Science and Nature journals.</h2>
  <blockquote style="text-align:left"><ul>
  <li>
  <p>Comment for &quot;<a href="http://comments.sciencemag.org/content/10.1126/science.1235009">Impact of Shale Gas Development on Regional Water Quality</a>&quot; (Vidic, R.D., S.L. Brantley,  J.M. Vandenbossche, D. Yoxtheimer, J D. Abad, <em>Science</em>, 17 May 2013, Vol. 340, No. 6134, pp. 1235009-0. doi:10.1126/science.1235009). July 29, 2013. <a href="http://comments.sciencemag.org/content/10.1126/science.1235009#comments">http://comments.sciencemag.org/content/10.1126/science.1235009#comments</a></p></li>

  <li>
    <p>Comment  for &quot;Energy: A reality check on the shale  revolution&quot;(Hughes,  J.D., <em>Nature</em>, 21 February 2013, Vol.  494, pp. 307-308. doi:10.1038/494307a). May 10, 2013. <a href="http://www.nature.com/nature/journal/v494/n7437/full/494307a.html">http://www.nature.com/nature/journal/v494/n7437/full/494307a.html</a></p></li>

  <li><p>Comment for &quot;Drawbacks to Natural Gas&quot;(Souther, S., <em>Science</em>, 12 April 2013, Vol. 340, No.  6129, pp. 141-141. doi:10.1126/science.340.6129.141-a). April 27, 2013. <a href="http://comments.sciencemag.org/content/10.1126/science.340.6129.141-a">http://comments.sciencemag.org/content/10.1126/science.340.6129.141-a.</a></p>
  </li>
  </ul></blockquote>
  <p style="text-align:left">In June 2013, Dr. Hu was notified that he had been elected  to the Fellowship, Geological Society of America (GSA) for his outstanding  contributions to understanding of fluid flow and mass transport processes in  porous and fractured media, and to development of innovative techniques for  pore structure (both geometry and topology) characterization in tight rock  formations (http://www.geosociety.org/members/newFellows.htm). </p>
 <p style="text-align:left"><u>Dr. Hu was invited as an </u>International Scientific Committee  Member for &quot;As 2014: 5th International Congress on  Arsenic in the Environment&quot; to be held in Buenos Aires, Argentina, May 11–16, 2014. </p>
  <p style="text-align:left"><u>As the Chair</u>, Dr. Hu organized a Theme Session &ldquo;Nano-petrophysics  and Fluid Flow in Porous Media&rdquo;  at 47 Annual Meeting of Geological Society of America South Central Section, Austin,  TX, April 4-5, 2013.</p>
<h3 class="news">Group Members</h3> 

<style>
	#ri li {
		padding-bottom:26px;
	}
</style>
  <ul id="ri">
    <li>Josh Hodge, Troy Barber, Eric van Vleet, Tony Sortore, Mikael Hiestand  and Liz Brown, are hired as undergraduate student helpers in the lab of Dr. Hu.</li>
    <li>Melanie Ybarra, Joseph Anyanwa, Daniel Baah,  Rafael Villegas, and  Beau Berend are the new members of research group in 2013, as M.S.  students focusing on Petroleum Geoscience Professional Option.</li>
    <li>In May 2013, Simon Obame successfully defended his MS  thesis &ldquo;Effect of Oil Viscosity Change on Oil Production: CO2 Enhanced  Oil Recovery in the Permian Basin and Potential in the Gabon Basin&rdquo;.</li>
    <li>In March, 2013, Dr. Sheng Peng moved to the  Bureau of Economic Geology of Texas and the University of Texas at Austin as a  Research Fellow. http://www.beg.utexas.edu/personnel.php<strong></strong></li>
    <li>Ugo Ononogbu successfully defended his MS thesis &ldquo;Biomarkers:  Review and Application to the Eagle Ford Shale Formation&rdquo; in December of  2012.<strong></strong></li>
    <li>Jarrod Reynolds started his Ph.D. work on water  resources issues related to shale gas production at Barnett shale in Fall 2012.  Jarrod has been working at EOG Resources.</li>
    <li>Ugo Ononogbu, Simon Obame, and Fidelis Edgobu joined  the research group early 2012 as M.S. students focusing on Petroleum Geoscience  Professional Option.</li>
    <li>Ian Hamilton successfully defended his MS thesis &ldquo;Identifying  Possible Hydrologic Recharge Zones of the Sangre De Cristo Aquifer on the  Milliken Ranch in Las Vegas, NM&rdquo;in December of 2011.</li>
    <li>In December 2011 Nathan Glondys successfully  defended his MS thesis &ldquo;Thermal Maturity and Porosity Development  during Catagenesis in the Barnett Shale, Fort Worth Basin, Texas&rdquo;. </li>
    <li>Dr. He-cheng Liang from China University of Geosciences, Wuhan worked  for one year (from Jan. 2011 to Jan. 2012) in the research group as a visiting  scientist.</li>
    <li>Prof. Jian-guo Bao from China University of  Geosciences, Wuhan spent one year (from Oct. 2010 to Oct. 2011) in the research  group.</li>
    <li>Toru Nakajiwa, a postdoc from Tokyo University  of Agriculture and Technology in Japan, worked on fluid flow and chemical  transport in unsaturated media, during January to October of 2011. Toru is now  a postdoc with Ohio State University working on carbon dynamics. </li>
    <li>During Oct. 2010 – Aug. 2011, Jiang-kun Du, a MS  student from China University of Geosciences, Wuhan, was supported by a DOE project to  study the effects of pore-scale physics on uranium geochemistry in Hanford  sediments.</li>
    <li>Dr. Sheng Peng joined the group as an Assistant  Research Professor since January of 2011.
    </li>
  </ul>
  
<h3 class="news">Proposal Panel Review:</h3>
<p>During March-April, 2013, Dr. Hu has been invited as an Onsite Panel Reviewer for Environmental Protection Agency Science to Achieve Results (STAR) Graduate Fellowship program and Virtual Panel reviewer for National Science Foundation’s Environmental Chemical Sciences (ECS) program of Chemistry Division.</p>


<h3 class="news">Publications in 2012-2013 (up to Aug. 2013; corresponding author) </h3>
<ol style="text-align:left">
   	  <li>
   	    <p>Fontenot, B.E., L.R. Hunt, Z.L. Hildenbrand, D.D. Carlton Jr., H. Oka,  J.L. Walton, D. Hopkins, A. Osorio, B.  Bjorndal, <strong>Q.H. Hu</strong>, and <u>K.A. Schug</u>.2013.An evaluation of water  quality in private drinking water wells near natural gas extraction sites in  the Barnett shale formation. <em>Environmental Science and Technology</em> 2013; 130725190830004. doi: <a href="http://dx.doi.org/10.1021/es4011724">10.1021/es4011724</a>.</p>
   	  </li>
   	  <li><p><u>Webber, B.</u>, P. Corbettc, K.T. Sempled, U.  Ogbonnayad, W.S. Teele, C.A. Masiellof, Q.J. Fisherg, J.J Valenza II, Yi-Qiao  Song, and <strong>Q.H. Hu</strong>. 2013. An NMR  study of porous rock and biochar containing organic material. <em>Microporous and Mesoporous Materials</em>,  http://dx.doi.org/10.1016/j.micromeso.2013.04.004.   	</p>  </li>
   	  <li><p>Gao, Z.Y., <strong><u>Q.H. Hu</u>, </strong>and H.C. Liang. 2013. Gas diffusivity in porous  media: Determination by mercury intrusion porosimetry and correlation to  porosity and permeability. <em>Journal of  Porous Media</em>. 16(7): 607–617.   	  </p></li>
   	  <li>
   	    <p>Kendall, M,R,, <u>A.S. Madden</u>,  M.E. Madden, and Q. Hu. 2013. Effects of arsenic  incorporation on jarosite dissolution rates and reaction products. <em>Geochimica et Cosmochimica Acta</em>, 112: 192–207.</p>
   	  </li>
   	  <li>
   	    <p>Gao, Z.Y., and <strong><u>Q.H. Hu</u></strong>. 2013. Estimating permeability using median  pore-throat radius obtained from mercury intrusion porosimetry. <em>Journal of Geophysics and Engineering</em>. 10, 025014,  doi:10.1088/1742-2132/10/2/025014.</p>
   	  </li>
   	  <li>
   	    <p>Gao, X.B., C.L. Su, <u>Y.X. Wang</u>,  and Q.H. Hu. 2012. Mobility of arsenic in aquifer sediments at Datong Basin,  northern China: Effect of bicarbonate and phosphate. <em>Journal of Geochemical Exploration</em>,  http://dx.doi.org/10.1016/j.gexplo.2012.09.001.</p>
   	  </li>
   	  <li>
   	    <p><u>Peng, S.</u>, <strong><u>Q.H.  Hu</u></strong>, S. Dultz, and M. Zhang. 2012. Using X-ray computed tomography in  pore structure characterization for a Berea sandstone: Resolution effect. <em>Journal of Hydrology</em>, 472-473: 254-261,  doi: <a href="http://resolver.scholarsportal.info/resolve/doi/10.1016/j.jhydrol.2012.09.034">10.1016/j.jhydrol.2012.09.034</a>.</p>
   	  </li>
   	  <li>
   	    <p><strong><u>Hu, Q.H.</u></strong>, and X. Mao. 2012. Applications of  laser ablation-inductively coupled plasma-mass spectrometry in studying  chemical diffusion, sorption, and transport in natural rock.  <em>Geochemical  Journal</em>, 46 (5):459–475.</p>
   	  </li>
   	  <li>
   	    <p>Nfodzo, P., <strong>Q.H. Hu</strong>, and <u>H. Choi</u>. 2012. Impacts of pH-dependent metal  speciation on the decomposition of triclosan by sulfate radicals. <em>Water Science and Technology: Water  Supplies, </em>12.6: 837–843, doi: 10.2166/ws.2012.059.</p>
   	  </li>
   	  <li>
   	    <p><strong><u>Hu, Q.H.</u></strong>, G.X. Sun, X.B. Gao, and Y.G. Zhu.  2012. Conversion, sorption, and transport of arsenic species in geological  media. <em>Applied Geochemistry,</em>27:  2197–2203, doi:10.1016/j.apgeochem.2012.01.012.</p>
   	  </li>
   	  <li>
   	    <p><u>Wu, D.J.</u>, J.S. Wang, X.Y. Lin, and <strong>Q.H. Hu</strong>. 2012. Recharge processes and  groundwater evolution of multiple aquifers. <em>Proceedings  of the Institute of Civil Engineers -Water Management, </em>165(WM8):411–424,  doi: 10.1680/wama.10.00113.</p>
   	  </li>
   	  <li>
   	    <p>Gao, Z.Y., and <strong><u>Q.H.  Hu</u></strong>. 2012. Using spontaneous water imbibition to measure the effective  permeability of building materials. <em>Special  Topics and Reviews in Porous Media - An International Journal, 3(3):  209-213,  DOI:  10.1615/SpecialTopicsRevPorousMedia.v3.i3.20.</em></p>
   	  </li>
   	  <li>
   	    <p><strong><u>Hu, Q.H</u></strong><u>.</u>, R.P. Ewing, and S. Dultz. 2012. Low pore  connectivity in natural rock. <em>Journal of  Contaminant Hydrology</em>, 133: 76-83, doi.org/10.1016/j.jconhyd.2012.03.006.</p>
   	  </li>
   	  <li>
   	    <p><u>Ewing, R.P.</u>, C.X. Liu,  and Q.H. Hu. 2012. Modeling intragranular  diffusion in low-connectivity granular media.<em>Water Resources Research</em>,vol. 48, W03518, doi:10.1029/2011WR011407.</p>
   	  </li>
   	  <li>
   	    <p>Peng, S., and <strong><u>Q.H.  Hu</u></strong>. 2012. LA-ICP-MS calibration with internal standard and modified  constant-sum methods. <em>American Journal of  Analytical Chemistry</em>, 3: 168-174, doi:10.4236/ajac.2012.32024.</p>
   	  </li>
   	  <li>
   	    <p><strong><u>Hu, Q.H.</u></strong>, G.X. Sun, X.B. Gao, and Y.G. Zhu.  2012. Conversion, sorption, and transport of arsenic species in geological  media. <em>Applied Geochemistry,</em> doi:10.1016/j.apgeochem.2012.01.012.</p>
   	  </li>
   	  <li>
   	    <p>Du, J.Q., J. Bao, <strong><u>Q.H.  Hu</u></strong>, and R.P. Ewing. 2012. Uranium release from different size fractions  of sediments in Hanford 300 Area, Washington, USA. <em>Journal of Environmental Radioactivity</em>, 107: 92-94,  doi:10.1016/j.jenvrad.2012.01.007.</p>
   	  </li>
   	  <li>
   	    <p>Peng, S., <strong><u>Q.H.  Hu</u></strong>, R.P. Ewing, C.X. Liu, and J.M. Zachara. 2012. Quantitative 3-D  elemental mapping by LA-ICP-MS for basalt at the Hanford 300 Area Site. <em>Environmental Science and Technology</em>,  46(4): 2025-2032, doi<strong>: </strong>10.1021/es2023785.</p>
   	  </li>
   	  <li>
   	    <p>Peng, S., <strong><u>Q.H.  Hu</u></strong>, and S. Hamamoto. 2012. Diffusivity of rocks: Gas diffusion  measurements and correlation to porosity and pore-size distribution. <em>Water Resources Research</em>, Vol. 48, No.  2, W02507, doi:10.1029/2011WR011098.</p>
   	  </li>
   	  <li>
   	    <p><strong><u>Hu, Q.H</u></strong><u>.</u>, J.E. Moran, and J. Gan. 2012. Sorption, degradation,  and transport of methyl iodide and other iodine species in geologic media. <em>Applied Geochemistry</em>, 27(3): 774-781,  doi:10.1016/j.apgeochem.2011.12.022.</p>
   	  </li>
   	  <li>
   	    <p>Gao, X.B., Y.X. Wang, and <u>Q.H. Hu</u>. 2012.  Fractionation and speciation of arsenic in fresh and combusted coal wastes from  Yangquan, northern China. <em>Environmental  Geochemistry and Health</em>, 34(1):113-122, doi:10.1007/s10653-011-9395-1.</p>
   	  </li>
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