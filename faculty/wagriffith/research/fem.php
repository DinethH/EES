<?php 
	if (isset($_GET['s']) && $_GET['s'] == 'fs' || !isset($_GET['s']) ) {
?>



<h2>Field Studies</h2>

<div>
<figure>
	<img width="680" src="../images/research/fem.jpg" />
    <figcaption>Conducting fieldwork near Bear Creek in the central High Sierra Nevada</figcaption>
</figure>
</div>

<p>Field investigations of geologic structures, whether  direct via exhumed faults or indirect (e.g. remote sensing, boreholes, seismic  reflection), are necessary to construct, constrain, and validate models  (including boundary conditions and underlying assumptions about the relevant governing  equations) which describe the mechanical behavior of such structures.  Our focus in this field has been to study  structures that may be used to distinguish between seismic and aseismic slip in  the rock record. We focus a great deal of energy studying exhumed faults  containing pseudotachylyte (solidified melt produced during seismic slip),  because they provide evidence that ancient earthquakes were hosted by the  faults.  For example, Griffith et al. (2008)  described the occurrence of pseudotachylyte on  faults in the High Sierra Nevada, and used this to learn more about the short  term dynamics of fault slip as it relates to the longer term fault growth  (Griffith et al., <em>J. Struct. Geol.</em>,  2008).  These observations have  been combined with detailed mapping along faults to calculate the co-seismic  stress drop for small earthquake ruptures (Griffith et al., <em>J. Geophys. Res</em>., 2009).   Such detailed mapping also allows for  quantitative studies of the effects of non-planar fault geometries on slip and  damage production.  Griffith et al., J.  Geophys. Res. (2010) showed that melting can occur in contractional bends while  opening occurs in extensional bends along a fault. This slip behavior causes  the entire fault to be weak as if melting was occurring along the entire  fault.  Such a slip process also results  in concentrated off-fault fracturing in the extensional bends due to larger  tensile normal stresses there.  When in  the form of melt, pseudotachylyte intrudes fractures in the wall rock in a  process akin to hydraulic fracture.  The  resulting pseudotachylyte injection veins record information of the  constitutive behavior of the rocks in situ (Griffith et al., EPSL, 2012), the  directivity and velocity of earthquake rupture (Ngo et al., 2012), and the slip  weakening distance characterizing the frictional behavior of the fault  (Griffith and Prakash, in prep).</p>

<h2>Collaborators:</h2>

<p style="text-indent:0">Giulio Di Toro (Universitá  di Padova, INGV-Roma), Tom Mitchell (University College London), Stefan Nielsen  (Durham University), Andrea Bistacchi (Universitá di  Milano Bicocca), Steven A.F. Smith (University  of Otago)</p>



<h2>Related Publications:</h2>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type='review' and related LIKE '%1fs%' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">

	<p style="text-indent:-2em; margin-left:2em; padding:10px;">	
	<?php 
	$description = $row['description'];
	/*$description = preg_replace( "/W.A. Griffith/", "<strong>W.A. Griffith</strong>", $row['description']);
	$description = preg_replace( "/Griffith, W.A./", "<strong>Griffith, W.A.</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2008/", "<strong> 2008</strong>", $description);
	$description = preg_replace( "/\s2009/", "<strong> 2009</strong>", $description);
	$description = preg_replace( "/\s2010/", "<strong> 2010</strong>", $description);
	$description = preg_replace( "/\s2011/", "<strong> 2011</strong>", $description);
	$description = preg_replace( "/\s2012/", "<strong> 2012</strong>", $description);
	$description = preg_replace( "/\s2013/", "<strong> 2013</strong>", $description);
	$description = preg_replace( "/\s2014/", "<strong> 2014</strong>", $description);
	$description = preg_replace( "/\s2015/", "<strong> 2015</strong>", $description);*/
	echo $description; ?></p>
</div>
<?php }
?>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type!='review' AND related LIKE '%1fs%' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">
	<p style="text-indent:-2em; margin-left:2em; padding:5px;">
	<?php 
	$description = $row['description'];
	/*$description = preg_replace( "/W.A. Griffith/", "<strong>W.A. Griffith</strong>", $row['description']);
	$description = preg_replace( "/Griffith, W.A./", "<strong>Griffith, W.A</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2008/", "<strong> 2008</strong>", $description);
	$description = preg_replace( "/\s2009/", "<strong> 2009</strong>", $description);
	$description = preg_replace( "/\s2010/", "<strong> 2010</strong>", $description);
	$description = preg_replace( "/\s2011/", "<strong> 2011</strong>", $description);
	$description = preg_replace( "/\s2012/", "<strong> 2012</strong>", $description);
	$description = preg_replace( "/\s2013/", "<strong> 2013</strong>", $description);
	$description = preg_replace( "/\s2014/", "<strong> 2014</strong>", $description);
	$description = preg_replace( "/\s2015/", "<strong> 2015</strong>", $description);*/
	echo $description; ?>
    <?php
		if (strlen($row['pdf']) > 0) {	
	?>
    	<a href="../assets/publications/<?php echo $row['pdf'] ?>"><img alt="<?php echo $row['pdf'] ?>" width="20" src="../images/pdf.png"></a>
    <?php
		}
	?>
    </p>
</div>
<?php }
?>



<?php
	}
?>

<?php 
	if (isset($_GET['s']) && $_GET['s'] == 'es') {
?>
<h2>Experimental Studies</h2>

<p>Experimental  laboratory investigations have focused on rupture propagation, high speed  friction, and characterization of elastic properties of rocks.  Simulations of fast, subsonic shear ruptures have  been (slower than the speed of shear waves) in photoelastic material in the  Rosakis lab at Caltech.  These  experimental ruptures are analogues for earthquake ruptures in crystalline  rocks.  The dynamic stress field  evolution during the experiments are recorded using photoelasticity and high  speed photography, so the stress perturbations caused by the rupture can be  observed as they change with time on the scale of microseconds.</p>

<figure>
<img src="images/Griffith_etal_Geology_Fig1_2009.jpg" width="680" />
<figcaption>
	<div>
	  <ol id="captopnList">
      	<li>Photoelastic apparatus including  laser light source, polarizing filters, and highspeed cameras.</li>
	    <li>Hydraulic press and sample  configuration showing relative orientation of vertical load (<em>P</em>) and inclination of interface (B). Explosion induces a bilateral right-lateral shear rupture upon explosion.</li>
		<li>To constrain the strength  envelope of the interface we conducted static strength tests on 14 Homalite  samples with glued interfaces at angles ranging from 30&deg; to 80&deg; using an Instron  electromechanical testing machine. See Griffith et al, Geology, 2009 for more  details.</li>
      </ol>
	</div>
</figcaption>
</figure>

<figure>
<img src="images/Griffith_etal_Geology_2009_Fig2.jpg" width="680" />
<figcaption>
	<div>
     Isochromatic fringe  patterns around a shear rupture nucleating at an exploding wire and propagating  along bonded interface. Note that fringes surrounding rupture tip expand as rupture  grows, indicating an increasing stress concentration with distance. See  Griffith et al, Geology, 2009 for more details.
</div>
</figcaption>
</figure>
<P></P>
<figure>
<img src="images/Griffith_etal_Geology_2009_Fig3.jpg" width="680"/>
<figcaption>
	<div>
	  Tensile microcracks in Homalite 100 specimen compared to pseudotachylyte injection veins in the field.  See Griffith et al, Geology, 2009 and Ngo et al., JGR, 2012 for more details.
    </div>
</figcaption>
</figure>

<div>
  <p>These  experiments have been used in conjunction with solutions of analytical boundary  value problems to gain insight into the mechanics of dynamic rupture  propagation and to constrain the contribution of the dynamic rupture tip to  off-fault damage (i.e. fractures).  A  major goal of this research is to develop criteria for interpreting dynamic  parameters (e.g. rupture velocity, stress state) for ancient earthquake  ruptures on exposed faults (Griffith et al., Geology, 2009), and to understand  the energy budget associated with dynamic damage production.</p>
  <p>This  work has yielded a mathematical description for the formation of the off-fault  tensile cracks that formed during the dynamic experimental shear rupture  (Griffith et al.,2009; Ngo et al., 2012). In the study, a fracture mechanics-based  analytical description for steady-state sub-Rayleigh shear rupture propagation  was developed utilizing a velocity-weakening cohesive zone model. </p>
<figure>
	<img width="680" src="../images/research/fem_es2.png" />
    <figcaption>Inclination angle of microcracks formed during two dynamic rupture experiments compared with theoretically-predicted orientation from analytic model developed by Ngo et al., JGR, 2012.  Note that variation in inclination angle is tied to variations in shear rupture velocity during experiments.  See Ngo et al., JGR, 2012 for more information.</figcaption>
</figure>
  <p>
   For various assumed velocity-weakening friction laws, the dynamic shear rupture model predicts the occurrence and orientation of the tensile cracks which form in the surrounding material due to transient stress perturbations associated with the passage of the rupture tip. An important feature of the velocity weakening description for dynamic friction used in the analysis is that the velocity weakening parameter, (which describes the linear dependence of crack-tip shear traction and sliding rate), can be back-calculated from the orientation of the observed off-fault micro-cracks. Currently, little-to-no experimental data exists to estimate this velocity weakening parameter directly for the experimental material (Homalite-100) or for crustal rocks, particularly at relevant slip speeds (1-10 m/s) and normal stress (&gt; 50 MPa).<br />
    </p>
  <p>Understanding the frictional behavior of the rock-on-rock interface in this slip velocity – normal stress parameter space is critical to the physics of the earthquake rupture front.  There is broad agreement amongst researchers in the geophysics community that similar rocks may undergo very different weakening processes in different normal stress and/or slip velocity regimes. Consequently, inference of weakening behavior of fault rocks in situ from laboratory experiments at interfacial conditions of relevance to earthquake physics cannot be done simply by scaling exercises, and relatively small changes in normal stress and/or the slip speed can result in changes in the slip weakening distance of an order of magnitude. Motivated by these observations, we (with Vikas Prakash from Case Western Reserve University) are working on a project sponsored by the NSF Geophysics program to advance the current state of our understanding regarding the frictional constitutive behavior of earthquake faults using two principal approaches: (1) implementing a new dynamic shear friction testing apparatus by synergistically combining the split-Hopkinson pressure bar and the double-direct shear friction apparatus to the study of dynamic friction in both intact and granular geo-materials; and (2) developing a methodology for testing the efficacy of parameters extracted from dynamic friction experiments in dynamic rupture models. </p>
</div>

<h2>Collaborators:</h2>

<p>Ares Rosakis (Caltech), Vikas Prakash (Case Western Reserve University), Giulio Di Toro (Universitá di Padova, INGV-Roma), Stefan Nielsen (Durham University), Duc Ngo, Younggang Huang (Northwestern University), Tom Mitchell (University College London), Joerg Renner (Ruhr University – Bochum)</p>

<h2>Related Publications:</h2>




<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type='review' and related LIKE '%1es%' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">

	<p style="text-indent:-2em; margin-left:2em; padding:10px;">	
	<?php 
	$description = $row['description'];
	/*$description = preg_replace( "/W.A. Griffith/", "<strong>W.A. Griffith</strong>", $row['description']);
	$description = preg_replace( "/Griffith, W.A./", "<strong>Griffith, W.A.</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2008/", "<strong> 2008</strong>", $description);
	$description = preg_replace( "/\s2009/", "<strong> 2009</strong>", $description);
	$description = preg_replace( "/\s2010/", "<strong> 2010</strong>", $description);
	$description = preg_replace( "/\s2011/", "<strong> 2011</strong>", $description);
	$description = preg_replace( "/\s2012/", "<strong> 2012</strong>", $description);
	$description = preg_replace( "/\s2013/", "<strong> 2013</strong>", $description);
	$description = preg_replace( "/\s2014/", "<strong> 2014</strong>", $description);
	$description = preg_replace( "/\s2015/", "<strong> 2015</strong>", $description);*/
	echo $description; ?></p>
</div>
<?php }
?>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type!='review' AND related LIKE '%1es%' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">
	<p style="text-indent:-2em; margin-left:2em; padding:5px;">
	<?php 
	$description = $row['description'];
	/*$description = preg_replace( "/W.A. Griffith/", "<strong>W.A. Griffith</strong>", $row['description']);
	$description = preg_replace( "/Griffith, W.A./", "<strong>Griffith, W.A</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2008/", "<strong> 2008</strong>", $description);
	$description = preg_replace( "/\s2009/", "<strong> 2009</strong>", $description);
	$description = preg_replace( "/\s2010/", "<strong> 2010</strong>", $description);
	$description = preg_replace( "/\s2011/", "<strong> 2011</strong>", $description);
	$description = preg_replace( "/\s2012/", "<strong> 2012</strong>", $description);
	$description = preg_replace( "/\s2013/", "<strong> 2013</strong>", $description);
	$description = preg_replace( "/\s2014/", "<strong> 2014</strong>", $description);
	$description = preg_replace( "/\s2015/", "<strong> 2015</strong>", $description);*/
	echo $description; ?>
    <?php
		if (strlen($row['pdf']) > 0) {	
	?>
    	<a href="../assets/publications/<?php echo $row['pdf'] ?>"><img alt="<?php echo $row['pdf'] ?>" width="20" src="../images/pdf.png"></a>
    <?php
		}
	?>
    </p>
</div>
<?php }
?>





<?php
	}
?>

<?php 
	if (isset($_GET['s']) && $_GET['s'] == 'ns') {
?>

<h2>Numerical Studies</h2>

<div><P>Studies of fault mechanics often require one to focus on the behavior of individual faults; however, in nature, faults in nature are often influenced by neighboring faults to a comparable degree as they are by the regional state of stress.  As a result, it is important to quantify how systems of faults and fractures interact. Thus far, my approach to this subject has addressed two aspects of fault and fracture interaction:</P></div>
<p>I am interested in understanding how fault structure, ranging from micro- to macroscopic scales, dictates the coupled hydro-thermal-mechanical behavior of faults. This study has involved a multidisciplinary approach in which I have combined field and microscopic observations with Finite Element Method (FEM) models to simulate the coupled processes of fluid flow and heat transfer along faults during seismic slip.  The models focus on faults of the Mt. Abbot Quadrangle in the central Sierra Nevada. This is essentially a rock physics problem, where we numerically estimate the effect of damage-related fractures on relevant rock physical parameters such as the elastic modulus, K<sub>d</sub>, and the effective permeability, k<sub>d</sub> of the fractured fault damage zone and compare these to the laboratory-measured values (K<sub>e</sub> and k<sub>e</sub> respectively) of the undamaged elastic bedrock outside of the fault zone (Figure 3).  The elastic modeling has been done in collaboration with Pablo Sanz (Civil Engineering, Stanford/Exxon-Mobil Upstream Research Company). The elastic and hydraulic material contrasts across faults have important implications for the balance of pore fluid pressure, temperature, and frictional strength of fault–s, as well as earthquake rupture directivity.</p>

  
  <figure>
    <img width="680" src="../images/research/pablo.jpg" />
    <figcaption>Numerical triaxial loading experiments testing the “effective” elastic modulus of a fault zone with mapped faults and fractures represented as frictional discontinuities.  If all faults are allowed to slip and open, the effective Young’s modulus of the fault zone is reduced by more than 50%, even without accounting for microscopic deformation.</figcaption>
  </figure>

<p>For my M.S. research, I integrated GPS measurements of  horizontal surface velocities in the Los Angeles Basin, three-dimensional fault  geometries interpreted from For my M.S. research, I  integrated GPS measurements of horizontal surface velocities in the Los Angeles  Basin, three-dimensional fault geometries interpreted from subsurface data  (seismic, borehole, trenching), and numerical Boundary Element Method  mechanical models to study the modern day mechanical interaction of active  faults in the region.  In one study (Griffith  and Cooke, <em>Bull. Seismol. Soc. Am</em>.,  2005; <a href="http://www.scec.org/research/050823basinmodel.html">http://www.scec.org/research/050823basinmodel.html</a>),  I applied different horizontal velocities as boundary conditions on a fault  model (Figure 4) to compare geodetic models for strain accommodation to fault  slip rates from paleoseismic estimates.   We found that contraction in the LA Basin is most likely accommodated by  a combination of vertical thickening and horizontal expansion, and suggested  that the seismic potential of five faults in the LA Basin might currently be  underestimated.  In another study, we  used GPS velocities and a proxy for mechanical efficiency (strain energy  density)  to distinguish between proposed  geometric configurations for a blind thrust fault responsible for the 1987 M<sub>L</sub>  5.9 Whittier Narrows earthquake (Griffith and Cooke, <em>Bull. Seismol. Soc. Am</em>, 2004).</p>
<figure>
	<img width="680" src="../images/research/bssa.jpg" />
  <figcaption>Different geodetic models of tectonic strain in the Los Angeles Basin (left) ranging from “Escape Tectonics” (Walls et al., 1998) to “Vertical Thickening” (Argus et al., 1999) are differentiated based on their effects on modeled fault slip rates (right).  For more information, see Griffith and Cooke, 2005.</figcaption>
</figure>

<h2>Collaborators:</h2>
<p>Ernian Pan (University of Akron), Pablo Sanz (Exxon-Mobil Upstream Research Company), Michele Cooke (University of Massachusetts), Stefan Nielsen (Durham University)</p>

<h2>Related Publications:</h2>


<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type='review' and related LIKE '%1ns%' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">

	<p style="text-indent:-2em; margin-left:2em; padding:10px;">	
	<?php 
	$description = preg_replace( "/W.A. Griffith/", "<strong>W.A. Griffith</strong>", $row['description']);
	$description = preg_replace( "/Griffith, W.A./", "<strong>Griffith, W.A.</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2008/", "<strong> 2008</strong>", $description);
	$description = preg_replace( "/\s2009/", "<strong> 2009</strong>", $description);
	$description = preg_replace( "/\s2010/", "<strong> 2010</strong>", $description);
	$description = preg_replace( "/\s2011/", "<strong> 2011</strong>", $description);
	$description = preg_replace( "/\s2012/", "<strong> 2012</strong>", $description);
	$description = preg_replace( "/\s2013/", "<strong> 2013</strong>", $description);
	$description = preg_replace( "/\s2014/", "<strong> 2014</strong>", $description);
	$description = preg_replace( "/\s2015/", "<strong> 2015</strong>", $description);
	echo $description; ?></p>
</div>
<?php }
?>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type!='review' AND related LIKE '%1ns%' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">
	<p style="text-indent:-2em; margin-left:2em; padding:5px;">
	<?php 
	$description = preg_replace( "/W.A. Griffith/", "<strong>W.A. Griffith</strong>", $row['description']);
	$description = preg_replace( "/Griffith, W.A./", "<strong>Griffith, W.A</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2004/", "<strong> 2004</strong>", $description);
	$description = preg_replace( "/\s2005/", "<strong> 2005</strong>", $description);
	$description = preg_replace( "/\s2006/", "<strong> 2006</strong>", $description);
	$description = preg_replace( "/\s2007/", "<strong> 2007</strong>", $description);
	$description = preg_replace( "/\s2008/", "<strong> 2008</strong>", $description);
	$description = preg_replace( "/\s2009/", "<strong> 2009</strong>", $description);
	$description = preg_replace( "/\s2010/", "<strong> 2010</strong>", $description);
	$description = preg_replace( "/\s2011/", "<strong> 2011</strong>", $description);
	$description = preg_replace( "/\s2012/", "<strong> 2012</strong>", $description);
	$description = preg_replace( "/\s2013/", "<strong> 2013</strong>", $description);
	$description = preg_replace( "/\s2014/", "<strong> 2014</strong>", $description);
	$description = preg_replace( "/\s2015/", "<strong> 2015</strong>", $description);
	echo $description; ?>
    <?php
		if (strlen($row['pdf']) > 0) {	
	?>
    	<a href="../assets/publications/<?php echo $row['pdf'] ?>"><img alt="<?php echo $row['pdf'] ?>" width="20" src="../images/pdf.png"></a>
    <?php
		}
	?>
    </p>
</div>
<?php }
?>

  
  <?php
	}
	?>
