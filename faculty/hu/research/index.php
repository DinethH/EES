<?php 
include "../template/header.php"; 
if (!isset($_GET['i'])) {
	$_GET['i'] = 'current';
}

?>
<h5 class="currentBar">Home &raquo; Research &raquo; <?php if (!isset($_GET['i']) || (isset($_GET['i']) && $_GET['i']=='current')) echo 'Current'; else echo 'Past'; ?></h5>

<section style="width:960px">
	<h2 style="margin:0" class="grayB">Research</h2><br />

    
    <a href="?i=current"><h3 style="margin-left:0px;" class="button white">Current</h3></a>
    <a href="?i=past"><h3 class="button white">Past</h3></a>
    
    <br>
<br>

    <?php if (isset($_GET['i']) && $_GET['i']=='current') { ?>
    <ul id="ri">
    	<li><p>2013 - 2014 “Characterization of shale samples for improved hydrocarbon recovery” (PI), ConocoPhillips Company, Houston, TX.</p></li>
    	<li><p>2010 - 2014 &quot;Integrated Experimental and Modeling Approaches to Studying the Fracture-Matrix Interaction in Gas Recovery from Barnett Shale&quot; (PI), Research Partnership to Secure Energy for America (RPSEA), DOE's National Energy Technology Laboratory.</p></li>
    	<li><p>2010 - 2013&quot;Analyzing and Modeling Chemical Penetration in Building Materials&quot; (PI), Lawrence Livermore National Laboratory, Livermore, CA.</p></li>

    </ul>
    
    
    <?php }  elseif (isset($_GET['i']) && $_GET['i']=='past') { ?>
    
    <ul id="ri">
    		<li>
    		  <p>2011    &ldquo;Wiley Visiting Scientist Fellowship&rdquo;, EMSL-PNNL.</p></li>
    		  <li><p>2010–2012      &ldquo;Pore connectivity of Hanford sediments  and natural rock&rdquo; (PI; 50 hours Dual FIB/SEM and 150 hours X-ray Tomography, EMSL-PNNL.</p></li>
    		  <li><p>2010–2012 &ldquo;Effects of pore-scale physics on uranium  geochemistry in Hanford sediments&rdquo;, DOE Office of Science&rsquo;s Subsurface Biogeochemical  Research (SBR) program.</p></li>
    		  <li><p>2010– 2012  &ldquo;Characterization  of building materials&rdquo;, Arcadis, U.S., Inc, Durham, NC.</p></li>
    		  <li><p>2010    &ldquo;Evaluation of the subsurface contamination  beneath Trailer 5475 at LLNL Livermore Site&rdquo;, Faculty and Students Team (FaST)  Program at LLNL, the Office of Workforce Development for Teachers and  Scientists, DOE&rsquo;s Office of Science.<strong></strong></p></li>
    		  <li><p>2010    Fulbright  Senior Specialist grant in Environmental Science, Fulbright  Scholar Program, Council for Exchange of International Scholars, U.S.  Department of State.  </p>
</li>
    		<li>
    		  <p>2010 - 2012 "Three Dimensional Scanning of Uranium Distribution in Hanford Sediment Grains" (PI), Subsurface Science Scientific Focus Area, Pacific Northwest National Laboratory, Richland, WA.</p>
  		  </li>
		<li><p>2009 – 2012 “Global Change and the Terrestrial Paleoclimate Record from Eastern North America: 600,000 years BP to Present” (co-PI), Paleo Perspectives on Climate Change (P2C2) Program, National Science Foundation.</li>
    	<li><p>2008 – 2010 “Program Development in Contaminant Hydrogeology and Environmental Aqueous Geochemistry”; start-up funding for new faculty, The University of Texas at Arlington.</p></li>
        <li><p>2007 – 2007	Hu, Q.H. Transport parameters – Analysis/evaluation. DOE’s Nevada Operations Office.</p></li>
		<li><p>2006 – 2007	Hu, Q.H. Conduct elemental analysis of a few selected rock samples collected from the long-term diffusion project from Grimsel Test Site. National Cooperative for the Disposal of Radioactive Waste (Nagra), Switzerland.</p></li>
		<li><p>2006 – 2006	Hu, Q.H. (PI), and M. Zavarin. Effects of reducing groundwaters on redox-sensitive radionuclide migration. DOE’s Nevada Operations Office.</p></li>
		<li><p>2005 – 2006	Hu, Q.H. (PI), M. Zavarin, P.H. Zhao, and T.P. Rose. Characterization of carbonate test debris in support of HST modeling. DOE’s Nevada Operations Office.</p></li>
		<li><p>2004 – 2007	Steefel, C.I., and Q.H. Hu (co-PI). Rate controls in chemical weathering: A reactive transport approach. Geosciences Program of DOE’s Office of Basic Energy Sciences.</p></li>
		<li><p>2004 – 2007	Hu, Q.H. (PI), R.P. Ewing, and L. Tomutsu. Pore connectivity, episodic flow, and unsaturated diffusion in fractured tuff. DOE’s Office of Civilian Radioactive Waste Management.</p></li>
		<li><p>2004 – 2005	Hu, Q.H. (PI), and T.P. Rose. Distribution of long-lived soluble radionuclides in cavity-chimney systems. DOE’s Nevada Operations Office.</p></li>
        <li><p>2004 – 2005	Hu, Q.H. Microbeam analysis of radionuclide concentrations in nuclear test debris samples. DOE’s Nevada Operations Office.</p></li>
        <li><p>2004	Hu, Q.H. Purchase and application of a flow-through radionuclide detector. High Return on Investment Pollutant Prevention Program of DOE.</p></li>
        <li><p>2003 – 2004	Hu, Q.H. (PI), and D.K. Smith. Radionuclide mobility at Nevada Test Site. DOE’s Office of Civilian Radioactive Waste Management.</p></li>
        <li><p>2001	Hu, Q.H. Pore connectivity effects on contaminant transport in rock matrices. Mini-Grant Program of Earth Sciences Division at Lawrence Berkeley National Laboratory.</p></li>
        <li><p>2000 – 2001	Hu, Q.H. (PI), T. Kneafsey, J.S.Y. Wang. Unsaturated diffusion testing and modeling of crushed and fractured tuff. Yucca Mountain Site Characterization Project.</p></li>
    </ul>
  <?php } ?>
    
</section>

<?php include "../template/footer.php"; ?>