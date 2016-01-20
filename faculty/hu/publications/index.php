<?php 
include "../template/header.php"; 
if(!isset($_GET['i'])) 
	$i=1;
else
	$i=0;
?>
<h5 class="currentBar">Home &raquo; Publications &raquo; <?php if (!isset($_GET['i']) || (isset($_GET['i']) && $_GET['i']=='1')) echo 'Peer-Reviewed Journal Articles';
elseif ($_GET['i']==2) echo 'Peer-Reviewed Publications Included in the Web of Science'; 
elseif ($_GET['i']==3) echo 'Peer-Reviewed Book Chapters';
elseif ($_GET['i']==4) echo 'Peer-Reviewed Proceedings Articles';
elseif ($_GET['i']==5) echo 'Technical Reports';
elseif ($_GET['i']==6) echo 'Presentations at Meetings and Conferences';
?></h5>

<section style="width:960px">
<h2 class="grayB" style="margin:0">Publications</h2><br>

<div align="center" style="width:960px">

<ul style="display:block;" class="second_nav">

	<li><a <?php if((isset($_GET['i']) && $_GET['i']==1) || (isset($i)) && $i==1) echo 'style="background-color:#FFC; padding:2px;"'; ?> href="?i=1">PEER-REVIEWED JOURNAL ARTICLES</a></li><br>
    <li><a <?php if(isset($_GET['i']) && $_GET['i']==2) echo 'style="background-color:#FFC; padding:2px;"'; ?> href="?i=2">PEER-REVIEWED PUBLICATIONS INCLUDED IN THE WEB OF SCIENCE</a></li><br>
    <li><a <?php if(isset($_GET['i']) && $_GET['i']==3) echo 'style="background-color:#FFC; padding:2px;"'; ?> href="?i=3">PEER-REVIEWED BOOK CHAPTERS</a></li><br>
    <li><a <?php if(isset($_GET['i']) && $_GET['i']==4) echo 'style="background-color:#FFC; padding:2px;"'; ?> href="?i=4">PEER-REVIEWED PROCEEDINGS ARTICLES</a></li><br>
    <li><a <?php if(isset($_GET['i']) && $_GET['i']==5) echo 'style="background-color:#FFC; padding:2px;"'; ?> href="?i=5">TECHNICAL REPORTS</a></li><br>
    <li><a <?php if(isset($_GET['i']) && $_GET['i']==6) echo 'style="background-color:#FFC; padding:2px;"'; ?> href="?i=6">PRESENTATIONS AT MEETINGS AND CONFERENCES</a></li><br>

</ul>

</div>



<?php if((isset($_GET['i']) && $_GET['i']==1) || (isset($i)) && $i==1) { ?>


<ol style="text-align:left">
	<li>
	  <p>Fontenot, B.E., L.R. Hunt, Z.L. Hildenbrand, D.D. Carlton Jr., H. Oka,  J.L. Walton, D. Hopkins, A.  Osorio, B. Bjorndal, <strong>Q.H. Hu</strong>, and<u> K.A. Schug</u>. 2013. An evaluation of water quality in  private drinking water wells near natural gas extraction sites in the Barnett  shale formation. <em>Environmental Science and Technology</em>,  130725190830004 DOI: <a href="http://dx.doi.org/10.1021/es4011724">10.1021/es4011724</a>. <a target="_blank" href="../assets/researchPDF/2013 EST Barnett wells just accepted.pdf" title="Download PDF, 573KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
<li>
  <p><u>Webber, B.</u>,  P. Corbettc, K.T. Sempled, U. Ogbonnayad, W.S. Teele, C.A. Masiellof, Q.J.  Fisherg, J.J Valenza II, Yi-QiaoSongh, and <strong>Q.H.  Hu</strong>. 2013. An NMR study of porous rock and biochar containing organic  material. <em>Microporous and Mesoporous  Materials</em>, http://dx.doi.org/10.1016/j.micromeso.2013.04.004 <a target="_blank" href="../assets/researchPDF/2013 NMRC micro.pdf" title="Download PDF, 836KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p>Gao, Z.Y., <strong><u>Q.H.  Hu</u></strong>, and H.C. Liang. 2013. Gas diffusivity in porous media:  Determination by mercury intrusion porosimetry and correlation to porosity and  permeability. <em>Journal of Porous Media</em>.  16(7): 607–617 <a target="_blank" href="../assets/researchPDF/2013 JPM MIP.pdf" title="Download PDF, 3,282KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p>Kendall, M.R., <u>A.S.  Madden</u>, M.E. Madden, and <strong>Q.H. Hu</strong>.  2013. Effects of arsenic incorporation on jarosite dissolution rates and  reaction products. <em>GeochimicaetCosmochimicaActa</em>112:  192–207 <a target="_blank" href="../assets/researchPDF/GCA As 2013.pdf" title="Download PDF, 2,719KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p>Gao, Z.Y., and <strong><u>Q.H. Hu</u></strong>. 2013. Estimating permeability using median  pore-throat radius obtained from mercury intrusion porosimetry. <em>Journal of Geophysics and Engineering</em>,10, 025014, doi:10.1088/1742-2132/10/2/025014 <a target="_blank" href="../assets/researchPDF/JGE MIP 2013.pdf" title="Download PDF, 378KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p>Gao, X.B., C.L. Su, <u>Y.X. Wang</u>, and <strong>Q.H. Hu</strong>. 2012. Mobility of arsenic in  aquifer sediments at Datong Basin, northern China: Effect of bicarbonate and  phosphate. <em>Journal of Geochemical  Exploration</em>, http://dx.doi.org/10.1016/j.gexplo.2012.09.001 <a target="_blank" href="../assets/researchPDF/2012 JGE Gao As anions.pdf" title="Download PDF, 1,342KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p><u>Peng, S.</u>, <strong><u>Q.H. Hu</u></strong>, S. Dultz, and M. Zhang.  2012. Pore structure characterization of Berea sandstone using X-ray computed  tomography: Resolution effect and comparison with mercury intrusion porosimetry. <em>Journal  of Hydrology</em>, 472-473: 254-261, doi: 10.1016/j.jhydrol.2012.09.034 <a target="_blank" href="../assets/researchPDF/2012 JH CT Peng et al.pdf" title="Download PDF, 1,342KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p><strong><u>Hu, Q.H.</u></strong> and X.L. Mao. 2012. Applications of laser  ablation-inductively  coupled plasma-mass  spectrometry in studying chemical diffusion, sorption, and transport in natural  rock. <em>Geochemical Journal,</em> 46  (5):459-475 <a target="_blank" href="../assets/researchPDF/2012 GJ LA-ICP-MS Hu and Mao.pdf" title="Download PDF, 2,372KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p>Nfodzo, P., <strong>Q.H.  Hu</strong>, and <u>H. Choi</u>. 2012. Impacts of pH-dependent metal speciation on  the decomposition of triclosan by sulfate radicals. <em>Water Science and Technology: Water Supplies</em>, 12.6: 837-843, doi: 10.2166/ws.2012.059 <a target="_blank" href="../assets/researchPDF/2012 WS-EM1297R1 triclosan.pdf" title="Download PDF, 255KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p><strong><u>Hu, Q.H.</u></strong>, G.X. Sun, X.B. Gao,  and Y.G. Zhu. 2012. Conversion, sorption, and transport of arsenic species in geological media. <em>Applied Geochemistry,</em> 27:  2197-2203, doi:10.1016/j.apgeochem.2012.01.012 <a target="_blank" href="../assets/researchPDF/2012 AG As conversion final.pdf" title="Download PDF, 290KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
<li>
  <p><u>Wu, D.J</u>.,  J.S. Wang, X.Y. Lin, and <strong>Q.H. Hu</strong>.  2012. Recharge processes and groundwater evolution of multiple aquifers. <em>Proceedings of the Institute of Civil  Engineers - Water Management,</em>165(WM8):411–424, doi: 10.1680/wama.10.00113 <a target="_blank" href="../assets/researchPDF/2012 WM recharge.pdf" title="Download PDF, 419KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
</li>
	<li><p>Gao,  Z.Y., and <strong><u>Q.H. Hu</u></strong>. 2012.  Using spontaneous water imbibition to measure the effective permeability of  building materials. <em>Special Topics and Reviews in Porous  Media - An International Journal</em>, 3(3): 209-213,  <strong>DOI:</strong> 10.1615/SpecialTopicsRevPorousMedia.v3.i3.20.<a target="_blank" href="../assets/researchPDF/2012 STRPM imbibition k.pdf" title="Download PDF, 432KB"><img width="20" src="../images/pdf.png" /></a>    </p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H</u></strong><u>.</u>, R.P.  Ewing, and S. Dultz. 2012. Pore connectivity in natural rock. <em>Journal of Contaminant Hydrology</em>, 133:  76-83, doi.org/10.1016/j.jconhyd.2012.03.006.<a target="_blank" href="../assets/researchPDF/2012 JCH connectivity.pdf" title="Download PDF, 935KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Ewing, R.P.</u>, C.X. Liu, and Q.H. Hu. 2012. Modeling intragranular diffusion in low-connectivity granular media. <em>Water Resources Research</em>, vol. 48, W03518,  doi:10.1029/2011WR011407.
	<a target="_blank" href="../assets/researchPDF/2012 WRR EwingLiuHu.pdf" title="Download PDF, 1,360KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p>Peng,  S. and <strong><u>Q.H. Hu</u></strong>. 2012. LA-ICP-MS calibration with  internal standard and modified constant-sum methods. <em>American Journal of Analytical Chemistry</em>, 3: 168-174, doi:10.4236/ajac.2012.32024 <a target="_blank" href="../assets/researchPDF/2012 AJAC LA-ICP-MS.pdf" title="Download PDF, 290KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li>
	  <p><u><strong>H</strong></u><strong><u>u,  Q.H.</u></strong>,  G.X. Sun, X.B. Gao, and Y.G. Zhu. 2012. Conversion,  sorption, and transport of arsenic species in  geological media. <em>Applied  Geochemistry,</em> doi:10.1016/j.apgeochem.2012.01.012.	<a target="_blank" href="../assets/researchPDF/2012 AG As conversion.pdf" title="Download PDF, 1,414KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p>Du,  J.Q., J. Bao, <strong><u>Q.H. Hu</u></strong>, and  R.P. Ewing. 2012. Uranium release from different size fractions of sediments in  Hanford 300 Area, Washington, USA. <em>Journal  of Environmental Radioactivity</em>, 107: 92-94, doi:10.1016/j.jenvrad.2012.01.007.	<a target="_blank" href="../assets/researchPDF/2012 JENR U release.pdf" title="Download PDF, 493KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Peng,  S., <strong><u>Q.H. Hu</u></strong>, R.P. Ewing, C.X.  Liu, and J.M. Zachara. 2012. Quantitative  3-D elemental mapping by LA-ICP-MS for basalt at the Hanford 300 Area Site. <em>Environmental Science and Technology</em>,  46(4): 2025-2032, doi<strong>: </strong>10.1021/es2023785.	<a target="_blank" href="../assets/researchPDF/2012 EST mapping.pdf" title="Download PDF, 2,274KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Peng,  S., <strong><u>Q.H. Hu</u></strong>, and S. Hamamoto.  2012. Diffusivity of rocks: Gas diffusion measurements and correlation to  porosity and pore-size distribution. <em>Water  Resources Research</em>,  Vol. 48, No. 2, W02507, doi:10.1029/2011WR011098.	<a target="_blank" href="../assets/researchPDF/2012 WRR gas diffusion.pdf" title="Download PDF, 883KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H</u></strong><u>.</u>, J.E.  Moran, and J. Gan. 2012. Sorption, degradation, and transport of methyl iodide  and other iodine species in geologic media. <em>Applied  Geochemistry</em>, 27(3): 774-781, doi:10.1016/j.apgeochem.2011.12.022.	<a target="_blank" href="../assets/researchPDF/2012 AG CH3I.pdf" title="Download PDF, 563KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p>Gao, X.B., Y.X. Wang, and <strong><u>Q.H. Hu</u></strong>.  2012. Fractionation and  speciation of arsenic in fresh and combusted coal wastes from Yangquan,  northern China. <em>Environmental  Geochemistry and Health</em>, 34(1):113-122,  doi:10.1007/s10653-011-9395-1.	<a target="_blank" href="../assets/researchPDF/2012 EGH As in coal waste.pdf" title="Download PDF, 265KB"><img width="20" src="../images/pdf.png" /></a>   </p> </li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong> 2011. Simultaneous separation and quantification of iron and transition species  using LC-ICP-MS. <em>American Journal of Analytical Chemistry</em>. 2: 675-682, doi:10.4236/ajac.2011.26076. <a target="_blank" href="../assets/researchPDF/2011 AJAC Fe species.pdf" title="Download PDF, 1,653KB"><img width="20" src="../images/pdf.png" /></a>    </li>
	<li><p>Sun, G.X., X.J. Wang, and <strong><u>Q.H. Hu</u></strong>. 2011. Using  stable lead isotopes to trace heavy metal contamination sources in sediments of  Xiangjiang and Lishui Rivers in China. <em>Environmental Pollution</em>, 159:3406-3410,doi:10.1016/j.envpol.2011.08.037.	<a target="_blank" href="../assets/researchPDF/2011 EP lead isotopes.pdf" title="Download PDF, 473KB"><img width="20" src="../images/pdf.png" /></a>   </p> </li>
	<li><p>Gao, X.B., <u>Y.X. Wang</u>, T. Ma, <strong>Q.H. Hu</strong>,  X.L. Xing, and Q. Yu. 2011. Anthropogenic impact assessment of Niangziguan karst  water. <em>Proceedings  of the Institute of Civil Engineers -</em> <em>Water  Management, </em>164(10):  495–510, doi:10.1680/wama.1000070.	<a target="_blank" href="../assets/researchPDF/2011 ICE-WM karst Gao.pdf" title="Download PDF, 492KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Gao, X.B., <u>Y.X. Wang</u>, <strong>Q.H. Hu</strong>,  and C.L. Su. 2011. Effects of anion competitive sorption on  arsenic enrichment in groundwater. <em>Journal  of Environmental Science and Health, Part A-Toxic/hazardous Substances and Environmental  Engineering</em><strong> </strong>46(5): 471-479, doi<strong>:</strong>10.1080/10934529.2011.551726. <a target="_blank" href="../assets/researchPDF/2011 JESH Part A arsenic anion Gao.pdf" title="Download PDF, 1,590KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Teng, Y.G.</u>, R.  Zuo, J.S. Wang, <strong>Q.H. Hu</strong>,  Z.J. Sun, and N. Zeng. 2011. Detection of tritium sorption on four soil materials. <em>Journal  of Environmental Radioactivity</em>, 102 (2): 212–216,<strong> </strong>doi:10.1016/j.jenvrad.2010.12.002. <a target="_blank" href="../assets/researchPDF/2011 JENR tritium sorption Teng.pdf" title="Download PDF, 438KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Zuo, R., Y.G. Teng, <u>J.S. Wang</u>, <strong>Q.H. Hu</strong>, and M.L. Guo. 2011. Experimental validation of  retardation of tritium migration in the Chinese loess media. <em>Water, Air, and Soil Pollution</em>, 215(1-4): 497–506, doi:10.1007/s11270-010-0494-x.	<a target="_blank" href="../assets/researchPDF/2010 WASP tritium loess.pdf" title="Download PDF, 196KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Ewing, R.P.</u>, <strong>Q.H. Hu</strong>, and C.X. Liu. 2010. Scale dependence intra-granular  porosity, diffusivity, and tortuosity.<strong> </strong><em>Water Resources Research,</em> 46, W06513,  doi:10.1029/2009WR008183.	<a target="_blank" href="../assets/researchPDF/2010 WRR scale.pdf" title="Download PDF, 1,128KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H</u></strong><u>.</u>, J.Q. Weng, and J.S. Wang.  2010. Sources of anthropogenic radionuclides in the environment. <em>Journal of Environmental Radioactivity</em>,  201(6): 426–437,<strong> </strong>doi:10.1016/j.jenvrad.2008.08.004.	<a target="_blank" href="../assets/researchPDF/2010 JENR RN review.pdf" title="Download PDF, 450KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p>Zuo, R., Y.G. Teng, <u>J.S. Wang</u>, and <strong>Q.H. Hu</strong>. 2010. Factors influencing plutonium sorption in shale media. <em>Radiochimica Acta</em>, 98(1): 27<strong>–</strong>34, doi: 10.1524/ract.2010.1682.	<a target="_blank" href="../assets/researchPDF/2010 RA Pu shale.pdf" title="Download PDF, 132KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Wang, J.S.</u>,  R. Zuo, Y.G. Teng, <strong>Q.H. Hu</strong>,  and Z.J. Sun. 2010. Sorption of strontium and fractal  scaling of the heterogeneous media in a candidate VLLW disposal site. <em>Journal of Radioanalytical and Nuclear  Chemistry</em>, 283(2): 319–328, doi: 10.1007/s10967-009-0359-1.	<a target="_blank" href="../assets/researchPDF/2010 JRNC Sr.pdf" title="Download PDF, 307KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li>
	  <p>Dai, J.L., M. Zhang, <strong>Q.H.  Hu</strong>, Y.Z. Huang, R.Q. Wang, and <u>Y.G. Zhu</u>. 2009. Adsorption  and desorption of iodine by various Chinese soils: II. Iodide and iodate. <em>Geoderma</em>, 153(1-2): 130–135, doi:10.1016/j.geoderma.2009.07.020.	<a target="_blank" href="../assets/researchPDF/2009 Geoderm iodine.pdf" title="Download PDF, 606KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li>
	  <p>Cao, Q., <strong>Q.H.  Hu</strong>, C. Baisch, and S. Khan, and <u>Y.G. Zhu</u>. 2009. Arsenate toxicity  for wheat and lettucein six Chinese  soils with different properties. <em>Environmental  Toxicology and Chemistry</em>, 28(9): 1946<strong>–</strong>1950,  doi:&nbsp;10.1897/08-660.1.	<a target="_blank" href="../assets/researchPDF/2009 ET&amp;C As Chinese soils.pdf" title="Download PDF, 308KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong>, M. Zavarin, and T.P. Rose. 2008. Effect of reducing groundwater on the  retardation of redox-sensitive radionuclides. <em>Geochemical Transactions</em>, 9:12, doi:10.1186/1467-4866-9-12.	<a target="_blank" href="../assets/researchPDF/2008 GT RN redox.pdf" title="Download PDF, 1,586KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong><strong>, </strong>T.P. Rose, M. Zavarin, D.K.  Smith, J.E. Moran, and P.H. Zhao. 2008. Assessing field-scale migration of  radionuclides at the Nevada Test Site: &ldquo;Mobile&rdquo; species. <em>Journal of Environmental Radioactivity</em>, 99:<strong> </strong>1617–1630, doi:10.1016/j.jenvrad.2008.06.007.	<a target="_blank" href="../assets/researchPDF/2008 JER mobile species w cover p 1-2.pdf" title="Download PDF, 717KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong> and A. Möri. 2008. Radionuclide transport in fracture-granite interface zones. <em>Physics and Chemistry of the Earth</em>,  33(14-16): 1042–1049, doi:10.1016/j.pce.2008.05.015.<strong> </strong>	<a target="_blank" href="../assets/researchPDF/2008 JPCE fracture zone offprint.pdf" title="Download PDF, 685KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p>Khan, S., A.J. Lin, S.Z. Zhang, <strong>Q.H.  Hu</strong>, and <u>Y.G. Zhu</u>. 2008. Accumulation of polycyclic aromatic  hydrocarbons and heavy metals in lettuce grown in the soils contaminated with  long-term wastewater irrigation. <em>Journal  of Hazardous Materials,</em> 152(2): 506–515, doi<strong>:</strong>10.1016/jjhazmat.2007.07.014.	<a target="_blank" href="../assets/researchPDF/2008 JHM PAH&metals.pdf" title="Download PDF, 1,099KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li>
	  <p><u>Zhao, P.H.</u>, <strong>Q.H. Hu</strong>, T.P. Rose, G.J. Nimz, and M.  Zavarin. 2008. Distribution of 99Tc and 129I in the  vicinity of underground nuclear tests at the Nevada Test Site. <em>Journal of Radioanalytical and Nuclear  Chemistry</em>, 276(3): 755–761, doi:10.1007/s10967-008-0629-3.	<a target="_blank" href="../assets/researchPDF/2008 JRNC Tc&amp;I.pdf" title="Download PDF, 188KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u>Gates-Anderson,  D</u>., C. Rasmussen, R. Fischer, B. Viani, <strong>Q.H. Hu</strong>, M. Sutton, and W. McNab. 2007.  Dirty bomb fallout. <em>Nuclear Engineering International</em>, 52: 28-29.	<a target="_blank" href="../assets/researchPDF/2007 Nucl dirty bomb.pdf" title="Download PDF, 1,167KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li>
	  <p>Cao, Q., <strong>Q.H. Hu</strong>, S. Khan,  W.J. Wang, A.J. Lin, X. Du, and <u>Y.G. Zhu</u>. 2007. <a href="http://apps.isiknowledge.com:80/WoS/CIW.cgi?SID=1BkOL@OMbHAd5lfF7l4&Func=Abstract&doc=1/1">Wheat phytotoxicity from arsenic and cadmium separately  and together in solution culture and in a calcareous soil</a>. <em>Journal of Hazardous Materials</em>, 148(1-2): 377–382, <a href="http://dx.doi.org/10.1016/j.jhazmat.2007.02.050" target="doilink">doi:10.1016/j.jhazmat.2007.02.050</a>.	<a target="_blank" href="../assets/researchPDF/2007 JHM phytotoxicity.pdf" title="Download PDF, 367KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong>, and J.E. Moran. 2005.  Simultaneous analyses and applications of multiple fluorobenzoate and halide  tracers in hydrologic studies. <em>Hydrological  Processes</em>, 19: 2671–2687, doi:10.1002/hyp.5780.	<a target="_blank" href="../assets/researchPDF/2005 HP tracers.pdf" title="Download PDF,238KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong><strong>, </strong>P. Zhao,<strong> </strong>J.E. Moran, and J.C. Seaman. 2005. Sorption and transport of  iodine species in sediments from the Savannah River and Hanford Sites. <em>Journal of Contaminant Hydrology</em>, 78:185<strong>–</strong>205, doi:10.1016/j.jconhyd.2005.05.007.	<a target="_blank" href="../assets/researchPDF/2005 JCH iodine.pdf" title="Download PDF, 309KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Chen, S.B., <u>Y.G. Zhu</u>, and <strong>Q.H.  Hu</strong>. 2005. Soil to plant transfer of 238U, 226Ra and  232Th on a uranium mining-impacted soil from southeastern China. <em>Journal of Environmental Radioactivity</em>,  82: 223-236, doi<a href="http://dx.doi.org/10.1016/j.jenvrad.2005.01.009" target="doilink">:10.1016/j.jenvrad.2005.01.009</a>.&nbsp;	<a target="_blank" href="../assets/researchPDF/2005 JER U.pdf" title="Download PDF, 304KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong>, T.J. Kneafsey, J.S.Y. Wang,  L. Tomutsa, and J.J. Roberts. 2004. Characterizing unsaturated diffusion  in porous tuff gravels.<strong> </strong><em>Vadose Zone Journal</em>, 3(4): 1425–1438, doi:10.2113/3.4.1425.	<a target="_blank" href="../assets/researchPDF/2004 VZJ diffusion.pdf" title="Download PDF, 1,701KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Salve, R.</u>, H. H. Liu, P. Cook, A.Czarnomski, <strong>Q.H. Hu</strong>, and D. Hudson. 2004.  Unsaturated flow and transport through a fault embedded in fractured welded  tuff. <em>Water Resources Research</em>,  Vol. 40, W04210, doi:10.1029/2003WR002571.	<a target="_blank" href="../assets/researchPDF/2004 WRR matrix diffusion.pdf" title="Download PDF, 1,592KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.H.</u></strong>, R.C. Trautz, and J.S.Y.  Wang. 2004. Tracer migration delineation in the unsaturated fractured tuff. <em>Geochemical Journal</em>, 38(2):177–189.	<a target="_blank" href="../assets/researchPDF/2004 Geochemical J field transport.pdf" title="Download PDF, 19,581KB"><img width="20" src="../images/pdf.png" /></a></p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.</u></strong> and J.S.Y. Wang.  2003. Aqueous-phase diffusion in unsaturated geological media: A review. <em>Critical Reviews in Environmental Science  and Technology</em>, 33(3):275–297, doi:10.1080/10643380390814488.<a target="_blank" href="../assets/researchPDF/2003 CRC diffusion review.pdf" title="Download PDF, 1,117KB"><img width="20" src="../images/pdf.png" /></a>	
</p></li>
	<li><p><u>Moridis, G.J.</u>, <strong>Q. Hu,</strong> Y.S. Wu, and G.S.  Bodvarsson. 2003. Preliminary 3-D site-scale studies of radionuclide colloid  transport in the unsaturated zone at Yucca Mountain, Nevada.<em> Journal of Contaminant Hydrology</em>,  60:251–286, <a href="http://dx.doi.org/10.1016/S0169-7722(02)00082-7" target="doilink">doi:10.1016/S0169-7722(02)00082-7</a>.	<a target="_blank" href="../assets/researchPDF/2003 JCH colloids.pdf" title="Download PDF, 1,901KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Johnson, G.R., K. Gupta,  D.K. Putz, <strong>Q. Hu</strong>, and <u>M.L. Brusseau</u>.  2003. The effect of local-scale physical heterogeneity on contaminant transport  behavior. <em>Journal of Contaminant  Hydrology</em>, 64:35–58, doi<a href="http://dx.doi.org/10.1016/S0169-7722(02)00103-1" target="doilink">:10.1016/S0169-7722(02)00103-1</a>.&nbsp;<a target="_blank" href="../assets/researchPDF/2003 JCH coupled processes.pdf" title="Download PDF, 277KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Nelson,<strong> </strong>N.T., <strong>Q. Hu</strong>, and <u>M.L. Brusseau</u>. 2003.  Characterizing the contribution of diffusive mass transfer to solute transport  in sedimentary aquifer systems at laboratory and field scales. <em>Journal of Hydrology</em>, 276:275–286, doi<a href="http://dx.doi.org/10.1016/S0022-1694(03)00061-1" target="doilink">:10.1016/S0022-1694(03)00061-1</a>.	<a target="_blank" href="../assets/researchPDF/2003 JH dispersion.pdf" title="Download PDF, 178KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.</u></strong>, T.J. Kneafsey, R.C. Trautz,  and J.S.Y. Wang. 2002. Tracer penetration into welded tuff matrix from flowing  fractures. <em>Vadose Zone Journal</em>,  1:102–112, doi:10.2113/1.1.102.	<a target="_blank" href="../assets/researchPDF/2002 VZJ tracer penetration.pdf" title="Download PDF, 334KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.</u></strong>, R. Salve, W.T.  Stringfellow, and J.S.Y. Wang. 2001. Field tracer transport tests in  unsaturated fractured tuffs. <em>Journal of  Contaminant Hydrology</em>, 51(1-2):1–12, doi:10.1016/S0169-7722(01)00124-3.	<a target="_blank" href="../assets/researchPDF/2001 JCH Alcove 6.pdf" title="Download PDF, 355KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p>Li, L., I. Yolcubal, S. Snyder, <strong>Q.  Hu</strong>, and <u>M.L. Brusseau</u>. 2001. Biodegradation during contaminant  transport in porous media. 3. Apparent condition-dependency of growth-related  coefficients. <em>Journal of Contaminant  Hydrology,</em> 50(3-4):209–223, doi:10.1016/S0169-7722(01)00111-5.	<a target="_blank" href="../assets/researchPDF/2001 JCH biodegradation.pdf" title="Download PDF, 372KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.</u></strong>, P. Persoff, and J.S.Y.  Wang. 2001. Laboratory measurement of water imbibition into low-permeability  welded tuff. <em>Journal of Hydrology,</em> 242(1-2):64–78, doi:10.1016/S0022-1694(00)00388-7.	<a target="_blank" href="../assets/researchPDF/2001 JH imbibition.pdf" title="Download PDF, 446KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Brusseau, M.L.</u>, <strong>Q. Hu</strong>, J.M. Wang, and R.M.  Maier-Miller. 1999. Biodegradation during contaminant transport in porous  media. 2. The influence of physicochemical factors. <em>Environmental Science and Technology,</em> 33(1):96–102, doi:10.1021/es980311y  S0013-936X(98)00311-3.	<a target="_blank" href="../assets/researchPDF/1999 EST biodegradation.pdf" title="Download PDF, 97KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong> and <u>M.L. Brusseau</u>.  1998. Coupled effect of nonlinear, rate‑limited sorption and biodegradation on  transport of 2, 4‑dichlorophenoxyacetic acid in soil. <em>Environmental Toxicology and Chemistry</em>, 17(9):1673–1680, doi:10.1897/1551-5028(1998)017&lt;1673:CEONRL&gt;2.3.CO;2.	<a target="_blank" href="../assets/researchPDF/1998 ETAC 24D.pdf" title="Download PDF, 173KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong> and <u>M.L. Brusseau</u>.  1997. Reply to the comment on &ldquo;The effect of solute size on transport in  structured porous media&rdquo;. <em>Water Resources  Research</em>, 33(2):363–366.	<a target="_blank" href="../assets/researchPDF/1997 WRR reply.pdf" title="Download PDF, 207KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Brusseau, M.L.</u>, <strong>Q. Hu</strong>, and R. Srivastava.  1997. Using flow interruption to identify factors causing nonideal contaminant  transport.  <em>Journal of Contaminant Hydrology</em>, 24(3/4):205–219, doi:10.1016/S0169-7722(96)00009-5.	<a target="_blank" href="../assets/researchPDF/1997 JCH flow interruption.pdf" title="Download PDF, 768KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong> and <u>M.L. Brusseau</u>.  1996. Transport of rate-limited sorbing solutes in an aggregated porous medium:  A multiprocess non-ideality approach. <em>Journal  of Contaminant Hydrology</em>, 24(1):53–73, doi:10.1016/0169-7722(96)00006-X.	<a target="_blank" href="../assets/researchPDF/1996 JCH MPNE.pdf" title="Download PDF, 1,038KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong> and <u>M.L. Brusseau</u>.  1995. Dispersive-diffusive transport of non-sorbed solute in multicomponent  solutions. <em>Journal of Contaminant  Hydrology</em>, 19(4):261–267, doi:10.1016/0169-7722(95)00019-R.	<a target="_blank" href="../assets/researchPDF/1995 JCH dispersion.pdf" title="Download PDF, 290KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong> and <u>M.L. Brusseau</u>.  1995. Effect of solute size on transport in structured porous media. <em>Water Resources Research</em>,  31(7):1637–1646, doi:10.1016/0148-9062(96)89866-4.	<a target="_blank" href="../assets/researchPDF/1995 WRR solute size.pdf" title="Download PDF, 965KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong>, X. Wang, and <u>M.L.  Brusseau</u>. 1995. Quantitative structure-activity relationships for evaluating  the influence of sorbate structure on sorption of organic compounds by soil. <em>Environmental Toxicology and Chemistry</em>,  14(7):1133–1140, doi:10.1897/1552-8618(1995)14[1133:QSRFET]2.0.CO;2.	<a target="_blank" href="../assets/researchPDF/1995 ETAC QSAR.pdf" title="Download PDF, 12,602KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><strong>Hu, Q.</strong> and <u>M.L. Brusseau</u>.  1994. The effect of solute size on diffusive-dispersive transport in porous  media. <em>Journal of Hydrology</em>,  158:305–317, doi:10.1016/0022-1694(95)02800-5.	<a target="_blank" href="../assets/researchPDF/1994 JCH solute size.pdf" title="Download PDF, 557KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Brusseau, M.L.</u>, X. Wang, and <strong>Q. Hu</strong>. 1994.  Enhanced transport of low-polarity organic compounds through soil by  cyclodextrin. <em>Environmental Science and  Technology</em>, 28(5):952–956, doi:<a href="http://dx.doi.org/10.1021%2Fes00054a030">10.1021/es00054a030</a>.	<a target="_blank" href="../assets/researchPDF/1994 EST cyclodextrin.pdf" title="Download PDF, 566KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u>Xu, R</u>., <strong>Q. Hu</strong>, W. Jin, H. Fang, J. Xu, and X. Yan. 1994. Study on  degradation, adsorption and leaching of Paclobutrazol in soils. <em>Environmental Chemistry</em>, 13(1):53–59.  (in Chinese)	<a target="_blank" href="../assets/researchPDF/1994 多效唑在土壤中降解_吸附和淋溶作用_徐瑞薇.pdf" title="Download PDF, 566KB"><img width="20" src="../images/pdf.png" /></a>
</p></li>
	<li><p><u>Xu, R</u>., <strong>Q. Hu</strong>, W. Jin, and D. Li. 1992. Study on behavior of pesticide  Dimehypo in soil.  <em>Journal of Environmental Sciences,</em> 4(4):87–96. 	<a target="_blank" href="../assets/researchPDF/1992 Study+on+belmviour+of+pesticide+Dimehypo+in+soil.pdf" title="Download PDF, 304KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u>Xu, R</u>., W. Jin, <strong>Q. Hu</strong>, D. Li, X. Chen, S. Zhang, X.  Liu, A. Zhou, Z. Chen, C. Zhou, Y. Shi, S. Huang. 1992. Study on the  environmental effect and degradation of pesticide Dimehypo. Environmental Sciences,  13(6): 1–19. (in Chinese) 	<a target="_blank" href="../assets/researchPDF/1992 杀虫双环境影响和降解研究_徐瑞薇.pdf" title="Download PDF, 1,278KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u><strong>H</strong></u><strong><u>u, Q.</u></strong> 1991. Recent developments in the  study of environmental soil chemistry. <em>Soil  Science</em>, 23(4):193–197. (in Chinese)	<a target="_blank" href="../assets/researchPDF/1991 杀虫双农药在土壤中行为的研究_徐瑞薇.pdf" title="Download PDF, 416KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
	<li><p><u>Xu, R</u>., <strong>Q. Hu</strong>, W. Jin, and D. Li. 1991. Investigating behavior of pesticide  Dimehypo in soils. Environmental Chemistry, 10(3): 47–53. (in Chinese)	<a target="_blank" href="../assets/researchPDF/1991 土壤环境化学的研究动态_胡钦红.pdf" title="Download PDF, 360KB"><img src="../images/pdf.png" alt="" width="20" /></a></p>
	</li>
</ol>

<table width='960'><td align='right' class=''><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></table>

<?php } elseif(isset($_GET['i']) && $_GET['i']==2) { ?>

<ol>
	<li>
	  <p>Gao, X.B., <strong><u>Q.H.  Hu</u></strong>, Y.X. Wang, and X.G. Liu.  2010. Bicarbonate competition in the desorption of arsenic  species from sediments<strong>. </strong><em>Geochimica et Cosmochimica Acta</em>, 74(12): A319.</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong> 2010. Speciation and transport behavior of  Tc-99 and I-129<strong>. </strong><em>Geochimica  et Cosmochimica Acta</em>,  74(12): A424.</p>
	</li>
	<li>
	  <p>Liu, X.G. and<strong> <u>Q.H. Hu.</u></strong> 2010. Application  of laser ablation-ICP-MS in environmental fate and transport studies<strong>. </strong><em>Geochimica et Cosmochimica Acta</em>, 74(12): A619.</p>
	</li>
	<li>
	  <p><u>Möri, A</u>.,<strong> </strong>M.<strong> </strong>Mazurek, and<strong> Q.H. Hu</strong><strong>. </strong>2007. In situ experiments  on matrix diffusion in fractured crystalline rock.<strong> </strong>In <em>Water-Rock Interaction, WRI-12 </em>(Bullen T.  and Wang Y., eds.), Volumes 1 and 2, pp.  357–360. Taylor &amp;  Francis, New York. </p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong><strong>, </strong>R.P.  Ewing, C.I. Steefel, L. Tomutsa, and G.B. Hudson. 2005. Multiple approaches to  studying diffusion processes in geological media<strong>. </strong><em>Geochimica et Cosmochimica Acta</em>, 69(10): A171, Suppl. 1.</p>
	</li>
	<li>
	  <p><u>Steefel,<strong> </strong>C.I.</u>,  S.L. Brantley, A.K. Navarre, and <strong>Q.H. Hu</strong>. 2005. Rate control in  low-porosity diffusion-reaction systems.<strong> </strong><em>Geochimica et Cosmochimica Acta</em>, 69(10): A181, Suppl. 1.<strong> </strong><a target="_blank" href="../assets/researchPDF/2005 Goldschmidt weathering.pdf" title="Download PDF, 27KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p><u>Moran, J.E.</u>, <strong>Q.H.</strong> <strong>Hu</strong>, E. Nelson, and P. Zhao. 2005. Experimental results from iodine  speciation and transport studies. <em>Geochimica et Cosmochimica Acta</em>, 69(10): A720, Suppl. 1.<a target="_blank" href="../assets/researchPDF/2005 Goldschmidt iodine.pdf" title="Download PDF, 31KB"><img width="20" src="../images/pdf.png" /></a>
 </p>
	</li>
	<li>
	  <p><u>Zavarin, M.</u>,  M.R. Johnson, S.K. Roberts, <strong>Q.H. Hu</strong>,  P. Zhao, and A.B. Kersting. 2005. Applying mechanistic modeling at the field  scale: Radionuclide transport at the Nevada Test Site. 229th National Meeting  of the American Chemical Society, Vol. 229, p. U307.</p>
	</li>
	<li>
	  <p><u>Zhao, P.</u>,  Y. Sun, <strong>Q.H. Hu</strong>, and J.E. Moran.  2004. Reactive transport of iodide in clay minerals: Experimental and modeling  efforts. 227th National Meeting of the American Chemical Society, Vol. 227, P.  U1114.</p>
	</li>
	<li>
	  <p><u>Brusseau  M.L.</u>, J.J. Piatt, <strong>Q.H. Hu</strong>, and J. Wang. 1997. The use of biotracers for measuring  biodegradation potential in the subsurface. Abstracts of Papers of the American  Chemical Society, Vol. 213, p. 199-ENVR.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.</strong> and <u>M.L. Brusseau</u>. 1995. The effect of solute size on transport in  aggregated media.  Abstracts of the  papers of American Chemical Society, Vol. 209, p. 109-ENVR.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.</strong>, and <u>M.L.  Brusseau</u>. 1994. Dispersion and diffusion of multicomponent solutions during  transport in porous-media. Abstracts of Papers of the American Chemical  Society, Vol. 207, p. 216-ENVR.</p>
	</li>
	<li>
	  <p>Wang, X., <strong>Q.H.  Hu</strong>, and <u>M.L. Brusseau</u>. 1994. The solubilization and enhanced  transport of low-polarity organic-compounds by cyclodextrin. Abstracts of  Papers of the American Chemical Society, Vol. 207, p. 147-ENVR. </p>
	</li>
</ol>


<?php } elseif(isset($_GET['i']) && $_GET['i']==3) { ?>

<ol>
	<li>
	  <p><strong>Hu, Q</strong>.<strong>H.</strong> and J.E. Moran. 2010. Iodine:  Radionuclides.&nbsp;Encyclopedia of Inorganic  Chemistry,&nbsp;ed. R.H. Crabtree, pp. 165-178, John  Wiley: Chichester. DOI: 10.1002/0470862106.ia731. <a target="_blank" href="../assets/researchPDF/2010 EIC iodine.pdf" title="Download PDF, 150KB"><img width="20" src="../images/pdf.png" /></a></p>
	</li>
	<li>
	  <p><strong>Hu, Q</strong>.<strong>H.</strong> 2010. Technetium: Radionuclides.&nbsp;Encyclopedia of Inorganic Chemistry,&nbsp;ed. R.H.  Crabtree, pp. 217-226, John Wiley: Chichester.  DOI: 10.1002/0470862106.ia724.<a target="_blank" href="../assets/researchPDF/2010 EIC technetium.pdf" title="Download PDF, 121KB"><img width="20" src="../images/pdf.png" /></a></p>
	</li>
	<li>
	  <p><strong>Hu, Q</strong>.<strong>H.</strong>, J.E. Moran, and V. Blackwood. 2009.  Chapter 10. Geochemical cycling of iodine species in soils. <em>Comprehensive Handbook of Iodine:  Nutritional, Biochemical, Pathological and Therapeutic Aspects</em>. V.R.  Preedy, G.N. Burrow and R.R. Watson (editors), pp. 93–105, Academic Press,  Oxford. <a target="_blank" href="../assets/researchPDF/2009 iodine book ch010 copy.pdf" title="Download PDF, 1,121KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p>Brusseau,  M.L., <strong>Q.H. Hu</strong>, N.T. Nelson, and R.B.  Cain. 1999. A diffusive tracer-test method for investigating the influence of  mass transfer processes on field-scale solute transport. <em>Innovative Subsurface Remediation: Field Testing of Physical, Chemical,  and Characterization Technologies, </em>M. L. Brusseau, D.A. Sabatini, J.S.  Gierke, and M.D. Annable, Editors, <em>ACS  Symposium Series 725,</em> pp. 251–264, Oxford University Press.</p>
	</li>
	<li>
	  <p>Brusseau,  M.L., J.J. Piatt, J.M. Wang, and <strong>Q.H.  Hu. </strong>1999. A biotracer test  for characterizing the in-situ biodegradation potential associated with  subsurface systems. <em>Innovative Subsurface  Remediation: Field Testing of Physical, Chemical, and Characterization  Technologies, </em>M. L. Brusseau, D.A. Sabatini, J.S. Gierke, and M.D. Annable,  Editors, <em>ACS Symposium Series 725,</em> pp. 240–250, Oxford University Press.</p>
	</li>
</ol>

<?php } elseif(isset($_GET['i']) && $_GET['i']==4) { ?>
<ol>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong>, X.G. Liu, S. Dultz, R.P.  Ewing, and H.D. Rowe<strong>.</strong> 2010.  Fracture-matrix interaction and gas recovery in the Barnett shale. AAPG/SEG/SPE  Hedberg Conference &ldquo;Critical Assessment of Shale Resource Plays&rdquo;, December  5–10, 2010, Austin, TX, USA.</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong>, G.X.  Sun, X.B. Gao, R.  Zuo, and J.S. Wang. 2010. Conversion, sorption, and transport of arsenic species in geological media. Arsenic in Geosphere and Human Diseases: As 2010. Editors: J.-S. Jean, J. Bundschuh, and P. Bhattacharya, pp. 118–119. CRC Press, Taylor  and Francis Group, Boca Raton. </p>
	</li>
	<li>
	  <p>Teng, Y.G., R. Zuo, J.S. Wang, and <strong><u>Q.H.</u></strong><strong><u> Hu</u></strong><em>.</em> 2010. Removal of arsenic (As3+ and  As5+) from aqueous solution using natural and modified attapulgite as adsorbent. Arsenic in  Geosphere and Human Diseases: As 2010. Editors: J.-S. Jean, J. Bundschuh, and P. Bhattacharya, pp. 423–424. CRC Press, Taylor and Francis Group, Boca Raton. </p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong> 2009. Realistic  quantification of radionuclide retardation in intact rock. 12th International  Conference on Chemistry and Migration Behavior of Actinides and Fission  Products in the Geosphere (Migration&rsquo;09), p. 202, September 20–25, 2009, Kennewick, Washington, USA.</p>
	</li>
	<li>
	  <p><u>Zhu,  Y.-G.</u>, X. Zhang, Q.  Huang, F.-J. Zhao, <strong>Q.H. Hu</strong>, and P.N. Williams. 2009. Arsenic uptake by  and speciation in macrophytes. 10th International Conference on the  Biogeochemistry of Trace Elements, July 13–16, 2009, Chihuahua, Mexico.</p>
	</li>
	<li>
	  <p><u>Zavarin,  M.</u>, S.F. Carle, R.L. <strong>Q.H.  Hu</strong>, A.B. Kersting, R.M. Maxwell, G.A. Pawloski, E. Ramon, S.K. Roberts,  D.E. Shumaker, A.F.T. Tompson, and P. Zhao. 2008. Proceedings of the World  Environmental &amp; Water Resources Congress, Editors: R.W. Babcock, Jr. and R.  Walton, May 12-16, 2008, Honolulu,  Hawaii. </p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong> and A. Möri. 2007. Radionuclide transport in fracture-granite interface zones.  11th International Conference on Chemistry and Migration Behavior of Actinides  and Fission Products in the Geosphere (Migration&rsquo;07), pp. 229–230, August  26–31, 2007, Munich, Germany.</p>
	</li>
	<li>
	  <p><u>Möri, A</u>.,<strong> </strong>M.<strong> </strong>Mazurek,  and<strong> Q.H. Hu</strong><strong>. </strong>2007. In situ experiments on matrix diffusion in fractured  crystalline rock.<strong> </strong>In <em>Water-Rock Interaction, WRI-12 </em>(Bullen T.  and Wang Y., eds.), pp.  357–360. Taylor &amp; Francis, New York, </p>
	</li>
	<li>
	  <p><strong><u>Hu, Q</u></strong><strong><u>.H.</u></strong><strong> </strong>2007. Radionuclides in the  environment. Biogeochemistry of Trace Elements: Environmental Protection,  Remediation and Human Health. Editors: Y. Zhu, N. Lepp, and R. Naidu, pp.  404–405. Tsinghua University Press, Beijing. 9th International Conference on  the Biogeochemistry of Trace Elements, July 15–19, 2007, Beijing, China.<strong> </strong> <a target="_blank" href="../assets/researchPDF/2007 ICOBTE RN.pdf" title="Download PDF, 2,161KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p><u>Gates-AndersonD</u>., R. Fischer, M. Sutton,<strong> </strong>C. Rasmussen, B. Viani, W. McNab, J. Gray, and <strong>Q.H. Hu</strong>. 2007. Field evaluation of the explosive deposition of  cesium on concrete surfaces following the detonation of a mock radiological  dispersal device (RDD). Waste Management&rsquo;07, February 25–March 1,  2007, Tucson, AZ. UCRL-PROC-226374.<strong></strong> <a target="_blank" href="../assets/researchPDF/2007 WM LDRD proceedings.pdf" title="Download PDF, 277KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q</u></strong><u>.<strong>H.</strong></u>, R.P. Ewing, L. Tomutsa, and M.J. Singleton. 2006. Pore  connectivity, episodic flow, and unsaturated diffusion in fractured tuff.  Proceedings of the 11th International  High- Level Radioactive Waste Management Conference (IHLRWM), pp. 70–76,<strong> </strong>April 30–May 4, 2006, Las  Vegas, NV. http://www.ocrwm.doe.gov/science/pdf/abstracts/46985.pdf <a target="_blank" href="../assets/researchPDF/2006 IHLRW.pdf" title="Download PDF, 397KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong>, P. Zhao, J.E. Moran, T.P. Rose, and A.B.  Kersting. 2005. Integrated approaches to studying speciation and migration of  radionuclides in various media. 10th International Conference on Chemistry and  Migration Behavior of Actinides and Fission Products in the Geosphere  (Migration&rsquo;05), pp. 159–160.   September 18–23, 2005, Avignon, France. <a target="_blank" href="../assets/researchPDF/2005 ICOBTE iodine.pdf" title="Download PDF, 90KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p><u>Zavarin, M<strong>.</strong></u>, M.R. Johnson, S.K. Roberts, R. Pletcher,<strong>Hu,  Q.H.</strong>, P. Zhao, A.B. Kersting, E. Ramon,and J. Walensky. 2005. Applying  mechanistic modeling at the field scale: Radionuclide transport at the Nevada  Test Site. 10th International Conference on Chemistry and Migration Behavior of  Actinides and Fission Products in the Geosphere (Migration&rsquo;05), p. 226.  September 18–23, 2005, Avignon, France.</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q</u></strong><strong><u>.H.</u></strong><strong>, </strong>J.E. Moran, T.P. Rose, D.K.  Smith, and Y.G. Zhu. 2005. Integrated approaches to studying speciation and  behavior of iodine and technetium. 8th International Conference on the  Biogeochemistry of Trace Elements, April 3–7, 2005, Adelaide, Australia.  http://www-r.llnl.gov/tid/lof/documents/pdf/311736.pdf </p>
	</li>
	<li>
	  <p><strong><u>Hu, Q</u></strong><u>.<strong>H.</strong></u> and D.K. Smith. 2004.<strong> </strong>Field-scale migration of 99Tc  and 129I at the Nevada Test Site. J.M. Hanchar, S. Stroes-Gascoyne,  L. Browning (eds.) Scientific  Basis for Nuclear Waste Management XXVIII, Materials Research Society Symposium Proceedings, Volume 824, pp.  399–404. Materials Research Society, Pittsburgh, PA, USA. <a target="_blank" href="../assets/researchPDF/2004 MRS Tc & I.pdf" title="Download PDF, 4,439KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p>Hudson G.B., H.R. Beller, B.  K. Esser, A.R. Grayson, <strong><u>Q.H. Hu</u></strong>,  S.R. Kane, R.N. Leif, J.E. Moran, C. Moody-Bartel. 2004. Emerging contaminants in water resources:  Status, challenges, and a case study. 2nd International  Conference on Soil Pollution and Remediation (SOILREM 2004), November 9–12,  2004, Nanjing, P.R. China. http://www-r.llnl.gov/tid/lof/documents/pdf/312357.pdf.</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong> and R.P. Ewing. 2002. Pore connectivity effects on solute transport in rocks. <em>Bridging the Gap Between Measurement and  Modeling in Heterogeneous Media. Proceedings of the International Groundwater  Symposium</em>, edited by A.N. Findikakis, Berkeley, California, pp. 583-587. </p>
	</li>
	<li>
	  <p><u>Xu, R</u>., <strong>Q.H. Hu</strong>, W. Jin, and D. Li. 1990. Environmental behavior of novel  pesticide Dimehypo in soils. <em>Proceedings  of Environmental Behavior and Eco-toxicology of Toxic Organic Chemicals</em>.  pp. 93–102. Scientific and Technological Publishing House in China. (in  Chinese)</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong> and R. Xu. 1990. Research on adsorption of Dimehypo and Nereistoxin by soil. <em>Proceedings of Environmental Behavior and  Eco-toxicology of Toxic Organic Chemicals</em>. pp. 103–111. Scientific and  Technological Publishing House in China. (in Chinese)</p>
	</li>
	<li>
	  <p><strong><u>Hu, Q.H.</u></strong> and R. Xu. 1990. Approaches and trends of modeling pesticide movement in the  unsaturated zone. <em>Proceedings of  Environmental Behavior and Eco-toxicology of Toxic Organic Chemicals</em>. pp.  133–141. Scientific and Technological Publishing House in China. (in Chinese)</p>
	</li>
</ol>
<table width='960'><td align='right' class=''><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></table>
<?php } elseif(isset($_GET['i']) && $_GET['i']==5) { ?>
<ol>
	<li><p><strong>Hu,  Q.H.</strong>,  and R.P. 2012. Ewing.<em>Effects  of Pore-Scale Physics on Uranium Geochemistry in Hanford Sediments</em>.  Department of Energy Office of Science Subsurface Biogeochemical Research Annual  Meeting, DOE/SC-0148, p. 23.</p></li>
    <li><p><strong>Hu, Q.H.</strong>, and R.P.  2011. Ewing.<em>Effects of Pore-Scale Physics on Uranium Geochemistry in Hanford  Sediments</em>. Subsurface Biogeochemical Research Contractor-Grantee Workshop,  Department of Energy Office of Science, Biological and Environmental Research,  LBNL-43E-2011, p. 48.</li>
	<li><strong>Hu, Q.H.</strong>, and R.P.  2011. Ewing. <em>Effects of Pore-Scale Physics on Uranium Geochemistry in Hanford  Sediments</em>. Subsurface Biogeochemical Research Contractor-Grantee Workshop,  Department of Energy Office of Science, Biological and Environmental Research,  LBNL-43E-2011, p. 48.	</li>
	<li>
	  <p>Ewing, R.P., C.X., Liu, and <strong>Q.H. Hu.</strong> 2011. <em>Scale-Dependence of  Intra-granular Diffusion</em>. Subsurface Biogeochemical  Research Contractor-Grantee Workshop, Department of Energy Office of Science,  Biological and Environmental Research, LBNL-43E-2011, p. 169.</p>
	</li>
	<li>
	  <p>Rose, T.P., <strong>Q.H. Hu</strong>, P. Zhao, C.L.  Conrado, R. Dickerson, G.F. Eaton, A.B. Kersting, J.E. Moran, G. Nimz, B.A.  Powell, E.C. Ramon, F.J. Ryerson, R.W. Williams, P.T. Wooddy, and M. Zavarin.  2011. <em>Radionuclide Partitioning in an Underground Nuclear Test Cavity</em>. Lawrence Livermore National Laboratory,  Livermore, CA, UCRL-TR-409817, 85 pp. </p>
	</li>
	<li>
	  <p>Pawloski, G.A., A.F.T.  Tompson, S.F. Carle, R.L. Detwiler, <strong>Q.H.  Hu</strong>, S. Kollet, R.M. Maxwell, W.M. McNab, S.K. Roberts, D.E. Shumaker, Y.W.  Sun, and M. Zavarin. 2010. <em>Evaluation of  hydrologic source term processes for underground nuclear tests in Yucca Flat,  Nevada Test Site</em>. Lawrence Livermore National Laboratory, Livermore, CA,  UCRL-TR-403428, 52 pp.</p>
	</li>
	<li>
	  <p>Rose, T.P., <strong>Q.H. Hu</strong>, P. Zhao, C.L. Conrado, R.  Dickerson, G.F. Eaton, A.B. Kersting, J.E. Moran, G.J. Nimz, B.A. Powell, E.C.  Ramon, F.J. Ryerson, R.W. Williams, P.T. and M. Zavarin. 2008. <em>Radionuclide partitioning in an Underground  Nuclear Test Cavity</em>. Lawrence Livermore National Laboratory, Livermore, CA,  UCRL-TR-409817, 80 pp.</p>
	</li>
	<li>
	  <p>Hand, J.S., B. Fryer, N.  Bryant, J. Larentzos, S.L. Drellack, <strong>Q.H.  Hu</strong>, M. Zavarin, and R. Warren. 2008. <em>Phase  1 contaminant transport parameters for the groundwater flow and contaminant  transport model of Corrective Action Unit 99: Rainier Mesa/Shoshone Mountain,  Nevada Test Site, Nye County, Nevada</em>. Stoller-Navarro Joint Venture, Las  Vegas, NV, 173 pp.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H., </strong>R.P. Ewing, and L. Tomutsa<strong>. </strong>2007. <em>Pore connectivity,  episodic flow, and unsaturated diffusion in fractured tuff</em>. Office of the  Chief Scientist: Science, Technology, and Management Research Summaries Fiscal  Years 2006<strong>–</strong>2007<strong>,</strong> pp. 143<strong>–</strong>144. U.S.  Department of Energy, Office of Civilian Radioactive Waste Management,  Washington, D.C., DOE/RW-0594.</p>
	</li>
	<li>
	  <p>Zavarin, M., A.B. Kersting, R.E. Lindvall, T.P.  Rose, G.F. Eaton, V. Genetti, <strong>Q.H. Hu,</strong> G.B. Hudson, J.E. Moran, G.J.  Nimz, E.C. Ramon, L. Shuller, R.W. Williams, and P. Zhao. 2007. <em>Hydrologic Resources Management Program and  Underground Test Area FY 2005 progress report</em>. Lawrence Livermore National  Laboratory, Livermore, CA, UCRL-TR-229708, 90 pp. </p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.</strong> and M. Zavarin. 2007. <em>Evaluation  of the Rainier Mesa/Shoshone Mountain CAU HST transport parameters based on  solid and water sampling</em>. Lawrence Livermore National Laboratory,  Livermore, CA, UCRL-MI-234814, 51 pp.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.,</strong> M. Zavarin, and T.P. Rose.  2007. <em>Effect of reducing groundwater on  the retardation of redox-sensitive radionuclides</em>. Lawrence Livermore  National Laboratory, Livermore, CA, UCRL-TR-231524, 49 pp.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H., </strong>R.P. Ewing, and L. Tomutsa<strong>. </strong>2006. <em>Pore connectivity, episodic flow, and unsaturated diffusion in  fractured tuff</em>. Lawrence Livermore National Laboratory, Livermore, CA,  UCRL-TR-226091, 10 pp. </p>
	</li>
	<li>
	  <p>Zavarin, M., M.R. Johnson, S.K. Roberts, R.  Pletcher, T.P. Rose, A.B. Kersting, G. Eaton, <strong>Q.H. Hu</strong>, E. Ramon, J. Walensky, and P. Zhao. 2006. <em>Radionuclide transport from tuff and  carbonate fractures from Yucca Flat, Nevada Test Site</em>. Lawrence Livermore  National Laboratory, Livermore, CA, UCRL-TR-219836, 140 pp.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.,</strong> T.P. Rose, D.L. Finnegan, and  A.B. Kersting. 2006. Interpretation of NTS hot well actinide data. In <em>Hydrologic Resources Management Program and  Underground Test Area FY 2004 progress report</em>. pp. 21–59. Rose, T. P., G.F.  Eaton, and A.B. Kersting (Editors). Lawrence Livermore National Laboratory,  Livermore, CA, UCRL-TR-216032.</p>
	</li>
	<li>
	  <p>Eaton, G.F., T.P. Rose, <strong>Q.H. Hu</strong>, P. Zhao, R.W. Williams, E.C. Ramon, J.E. Moran, and G. B.  Hudson. 2006. FY 2004 hot well data summary. In <em>Hydrologic Resources Management Program and Underground Test Area FY  2004 progress report</em>. pp. 1–20. Rose, T. P., G.F. Eaton, and A.B. Kersting  (Editors). Lawrence Livermore National Laboratory, Livermore, CA,  UCRL-TR-216032.</p>
	</li>
	<li>
	  <p>Beller, H., G. Eaton, B. Ekwurzel, B.K. Esser, <strong>Q.H. Hu</strong>, G.B. Hudson, R. Leif, W.W.  McNab, C. Moody-Bartel, K. Moore, and J.E. Moran. 2005. <em>California GAMA  program</em><em>: Sources and transport of  nitrate in groundwater in the Livermore Valley Basin, California</em>. Lawrence  Livermore National Laboratory, Livermore, CA, UCRL-TR-217189, 30 pp.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H., </strong>R.P. Ewing, and L. Tomutsa<strong>. </strong>2005. <em>Pore connectivity, episodic flow, and unsaturated diffusion in fractured  tuff</em>. Wengle, J., Director. Office of Science and Technology and  International Annual Report 2005. pp. 173–174. Washington, D.C., U.S. Department of Energy, Office of Civilian Radioactive Waste  Management.</p>
	</li>
	<li>
	  <p>Ewing R.P. and <strong>Q.H. Hu</strong>. 2005. <em>Water imbibition into rock as affected by  sample shape, pore connectivity, and antecedent water content</em>. Lawrence  Livermore National Laboratory, Livermore, CA, UCRL-ABS-214818.</p>
	</li>
	<li>
	  <p>Rose, T.P., G.F. Eaton, R.W. Williams, P. Zhao, G.B. Hudson, J.E. Moran, <strong>Q.H. Hu</strong>, and L.J. Harris. 2005. FY  2003 hot well data summary. In <em>Hydrologic  Resources Management Program and Underground Test Area FY 2003 progress report</em>.  pp. 1–16. Rose, T. P., G.F. Eaton, and A.B. Kersting (Editors). Lawrence  Livermore National Laboratory, Livermore, CA, UCRL-TR-206661.</p>
	</li>
	<li>
	  <p>Rose, T.P., G.F. Eaton, G.B. Hudson, R.W. Williams, <strong>Q.H. Hu</strong>, J.E. Moran, and L.J. Harris. 2005. FY 2003 environmental  well data summary. In <em>Hydrologic  Resources Management Program and Underground Test Area FY 2003 progress report</em>.  pp. 17–39. Rose, T. P., G.F. Eaton, and A.B. Kersting (Editors). Lawrence  Livermore National Laboratory, Livermore, CA, UCRL-TR-206661. </p>
	</li>
	<li>
	  <p>Moran, J.E., <strong>Q.H.  Hu</strong>, P. Zhao, R. Williams, E. Nelson. 2005. <em>Transport and biogeochemical cycling of Iodine-129 from nuclear fuel  reprocessing facilities</em>. Lawrence Livermore National Laboratory, Livermore,  CA, UCRL-TR-209668, 10 pp. </p>
	</li>
	<li>
	  <p>Burton, E., B. Bourcier, S. Coleman, B. Daily,  B. Esser, J., <strong>Q.H. Hu</strong>, B. Hudson, P. Krauter, J. Moran, K. O'Brien, D.  Bishop, R. Newmark and J. Reynolds. 2004. <em>New tools for  characterization and selective treatment of perchlorate contamination plumes</em>. Lawrence Livermore National  Laboratory, Livermore, CA, UCRL-ABS-206789. </p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.</strong>, D.K. Smith, T. Rose, L.  Glascoe, C. Steefel and M. Zavarin. 2003. <em>Radionuclide mobility at the  Nevada Test Site</em>.<strong> </strong>Lawrence Livermore National Laboratory, Livermore,  CA, UCRL-TR-200953, 66 pp. </p>
	</li>
	<li>
	  <p>McNab, W., B. Esser, H. Beller, and <strong>Q.H. Hu</strong>. 2003. <em>Radionuclide releases to soils: Distribution, fate, and possible cleanup  options</em>. White Paper for Chem-Bio-Rad Initiatives, Lawrence Livermore  National Laboratory, Livermore, CA. </p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.</strong> and J.S.Y. Wang. 2001. <em>Chemical analysis of water samples collected  during Cross Drift bulkhead entries</em><strong>. </strong>Lawrence Berkeley National Laboratory, Berkeley, CA, LBNL-49178, 6 pp. </p>
	</li>
	<li>
	  <p><strong>Hu, Q.H., </strong>T.  Kneafsey, J.S.Y. Wang, J. Roberts, and S. Carlson. 2001. <em>Summary report on Phase 1 feasibility study of in-drift diffusion</em>.  Lawrence Berkeley National Laboratory, Berkeley, CA, LBNL-49063, 33 pp. </p>
	</li>
	<li>
	  <p>Moridis,  G.J., <strong>Q.H. Hu</strong>. Y.S. Wu, and G.S.  Bodvarsson. 2001. <em>Preliminary 3-D  site-scale studies of radioactive colloid transport in the unsaturated zone of  Yucca Mountain, Nevada</em>. Lawrence Berkeley National Laboratory, Berkeley,  CA, LBNL-45876, 57 pp.</p>
	</li>
	<li>
	  <p>Ahlers,  C.F., Y.S. Wu, <strong>Q.H. Hu</strong>, G. Li, H.H.  Liu, J. Liu, L. Pan. 2001. <em>Unsaturated  Zone Flow Processes and Analysis</em>. MDL-NBS-HS-000012 REV00, Bechtel SAIC  Company, Las Vegas, Nevada; Lawrence Berkeley National Laboratory, Berkeley,  CA.</p>
	</li>
	<li>
	  <p>Bodvarsson,  G.S., C.F. Ahlers, M. Cushey, F.H. Doves, S.A. Finsterle, C.B. Haukwa, J.  Hinds, C.K. Ho, J. Houseworth, <strong>Q.H. Hu</strong>,  H.H. Liu, M. Pendleton, E.L. Sonnenthal, A.J. Unger, J.S.Y. Wang, M. Wilson,  and Y.S. Wu. 2000. <em>Unsaturated zone flow  and transport process model report</em>. Report TDR-NBS-HS-000002. REV00,  Lawrence Berkeley National Laboratory, Berkeley, California, CRWMS M&amp;O, Las  Vegas, Nevada, 589 pp.</p>
	</li>
	<li>
	  <p>Moridis,  G.J. and <strong>Q.H. Hu</strong>. 2000. <em>Radioactive transport modeling</em>. Earth  Sciences Division Annual Report 1999-2000, Lawrence Berkeley National  Laboratory, Berkeley, CA, LBNL-47002. </p>
	</li>
	<li>
	  <p>Moridis,  G.J., <strong>Q.H. Hu</strong>. Y.S. Wu, and G.S.  Bodvarsson. 2000. <em>Modeling studies of  radionuclide transport in the unsaturated zone of Yucca Mountain, Nevada</em>.  Lawrence Berkeley National Laboratory, Berkeley, CA, LBNL-45870, 366 pp.</p>
	</li>
	<li>
	  <p>Moridis,  G.J. and <strong>Q.H. Hu</strong>. 2000. <em>Radionuclide transport models under ambient  conditions</em>. Las Vegas, Nevada, CRWMS M&amp;O, MDL-NBS-HS-000008.</p>
	</li>
	<li>
	  <p>Wang,  J.S.Y., R.C. Trautz, P.J. Cook, R. Salve, and <strong>Q.H. Hu</strong>. 2000<em>. In-situ field  testing of processes</em>. LBID-2323, Lawrence Berkeley National Laboratory, Berkeley,  CA.</p>
	</li>
	<li>
	  <p>Stringfellow,  W.T., <strong>Q.H. Hu</strong>, R. TerBerg, and G.  Castro. 1999. <em>Simultaneous analysis of  multiple fluorobenzoate tracers in the presence of interfering compounds</em>.  Lawrence Berkeley National Laboratory, Berkeley, CA, LBNL-46976, 55 pp.</p>
	</li>
	<li>
	  <p><strong>Hu, Q.H.</strong>, P. Persoff and J.S.Y. Wang.  1999. <em>Laboratory measurement of water  imbibition into low-permeability welded tuff</em>. Earth Sciences Division  Annual Report 1998-1999, pp. 63-64. Lawrence Berkeley National Laboratory, Berkeley, CA,  LBNL-43816.</p>
	</li>
	<li>
	  <p>Y.W.  Tsang, J. Apps, J.T. Birkholzer, B. Freifeld, <strong>Q.H. Hu</strong>, J. Peterson, E. Sonnenthal, and N. Spycher. 1999. <em>Yucca Mountain Single Heater Test Final  Report</em>. Yucca Mountain Site Characterization Project. Lawrence Berkeley  National Laboratory, Berkeley, CA, LBNL-42537, 270 pp.</p>
	</li>
	<li>
	  <p>R.C.  Trautz, J.S.Y. Wang, P.J. Cook, R. Salve, A.L. James, <strong>Q.H. Hu</strong>, and S. Finsterle. 1998. <em>Flow Path Characterization and Drift Seepage Evaluation at the Niches</em>.  Ambient Testing, Yucca Mountain Site Characterization Project. Lawrence  Berkeley National Laboratory, Berkeley, CA, Level 3 Milestone: SP33PBM4.</p>
	</li>
	<li>
	  <p>Tsang,  Y.W., B. Freifeld, <strong>Q.H. Hu</strong>, and J.  Peterson. 1998. <em>Hydrological measurements</em>.  Chapter 2. Single Heater Test Final TDIF Submittal and Final Report, Yucca  Mountain Site Characterization Project. By Y.W. Tsang, J. Apps, J.T.  Birkholzer, B. Freifeld, <strong>Q.H. Hu</strong>, J.  Peterson, E. Sonnenthal, and N. Spycher. Level 4 Milestone: SP1190M4 and SPY  147M4. Lawrence Berkeley National Laboratory, Berkeley, CA, 35 pp.</p>
	</li>
</ol>
<table width='960'><td align='right' class=''><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></table>
<?php } elseif(isset($_GET['i']) && $_GET['i']==6) { ?>
(Presenting Author in Italics) <br>
<ol>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, Z.Y. Gao, S. Peng, R.P. Ewing, S. Dultz, S. Hamamoto,  and B Webber. Multiple Approaches to Characterizing Pore Structure in Barnett  Shale. 2013 GSA South-Central Section Annual Meeting, Austin, TX, April 4-5,  2013. </p>
	</li>
	<li>
	  <p><em>Gao, Z.Y.</em>, and <strong>Q.H. Hu</strong>. Evaluating the Wettability of Different Reservoir Rocks by  Spontaneous Imbibition. 2013 GSA South-Central Section Annual Meeting, Austin,  TX, April 4-5, 2013. </p>
	</li>
	<li>
	  <p><em>Ewing, R.P.</em>, <strong>Q.H. Hu</strong>, and A.G. Hunt. Pore Topology-Based Interpretations of Gas  Production Decline Curves. 2013 GSA South-Central Section Annual Meeting,  Austin, TX, April 4-5, 2013.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, S. Dultz, S. Hamamoto, and R.P. Ewing. Multiple Approaches  to Characterizing Pore Structure in Natural Rock. 2012 Fall Meeting for  American Geophysical Union, San Francisco, CA, December 3–7, 2012. </p>
	</li>
	<li>
	  <p>Peng, S., <strong><em>Q.H. Hu</em></strong>, and R.P. Ewing.  Gas Recovery in Fractured Barnett Shale. 2012 Fall Meeting for American  Geophysical Union, San Francisco, CA, December 3–7, 2012. </p>
	</li>
	<li>
	  <p>Gao, Z.Y., <strong><em>Q.H. Hu</em></strong>, and R.P. Ewing.  Nanopores and Tortuous Pathways in the Barnett Shale. 2012 Fall Meeting for  American Geophysical Union, San Francisco, CA, December 3–7, 2012. </p>
	</li>
	<li>
	  <p><em>Ewing, R.P.</em>, <strong>Q.H. Hu</strong>, and C.X. Liu. Pore-to-Grain Upscaling of Intragranular  Diffusion. 2012 Fall Meeting for American Geophysical Union, San Francisco, CA,  December 3–7, 2012. </p>
	</li>
	<li>
	  <p><em>Kamoshida, T.</em>, S. Hamamoto, K. Kawamoto, T.  Sakaki, T. Komatsu, Z.Y.Gao, and <strong>Q.H. Hu</strong>.  Effects of Particle Size and Shape, and Soil Structure on Thermal Properties of  Non-aggregated and Aggregated Soils. 2012 Fall Meeting for American Geophysical  Union, San Francisco, CA, December 3–7, 2012. </p>
	</li>
	<li>
	  <p><em>Zhang, X.Y.</em>, C.X. Liu, <strong>Q.H. Hu</strong>, and X.L. Hu. Uncertainty Analysis and Extrapolation of Additive  Uranyl Surface Complexation Kinetic Models. 2012 Fall Meeting for American  Geophysical Union, San Francisco, CA, December 3–7, 2012. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, S. Peng, Z.Y. Gao, and R.P. Ewing. Pore Structure and Gas  Recovery in Barnett Shale. <a href="https://gsa.confex.com/gsa/2009SC/finalprogram/session_23780.htm">Session  &ldquo;Petroleum Geology: Past to Present, From the Appalachias  to China, Pore Size to Basin Scale Topics</a>&rdquo;,2012 Geological Society of America Annual Meeting and  Exposition, Charlotte, NC, November 4–7, 2012. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, Z.Y. Gao, S. Peng, and R.P. Ewing. Low Pore Connectivity in  Barnett Shale. <a href="https://gsa.confex.com/gsa/2009SC/finalprogram/session_23780.htm">Session  &ldquo;Hydrogeology and Geochemistry of Shales</a>&rdquo;,2012 Geological Society of America  Annual Meeting and Exposition, Charlotte, NC, November 4–7, 2012. </p>
	</li>
	<li>
	  <p><em>Webber</em><em>, B.</em>,P. Corbettc, K.T.  Sempled, U. Ogbonnayad, W.S. Teele, C.A. Masiellof, Q.J. Fisherg, J.J Valenza  II, Yi-Qiao Song, and <strong>Q.H. Hu</strong>. An  NMR Study of Porous Rock and Biochar Containing Organic Material. The 11th International Bologna Conference on Magnetic Resonance in Porous  Media (MRPM11), the University of  Surrey, Guildford, United Kingdom, September 9-13, 2012. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> Shale Gas Production: Water Resources Issues and Pore  Structure Effect. July 25, 2012, Woodlands, TX. Briefing to Assistant Secretary  of DOE, Chris Smith (one of three invited speakers)</p>
    </li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong>. Processes Influencing Fluid Flow and Chemical Transport in  Porous Media. 2012 Groundwater Forum, July 6-7, 2012, Baoding, China.(invited speaker) </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong>. Shale Gas Production and Groundwater Issues. 2012  Groundwater Forum, July 6-7, 2012, Baoding, China.(invited  keynote speaker) </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> Shale Gas Production and Water  Resources Management. 2012 IPACES Annual Conference, July 2-3, 2012, Guangzhou,  China.<strong> (</strong>invited speaker<strong>)</strong></p>
	</li>
	<li>
	  <p><em>Kendall, M.R</em>., A.S. Madden, M.E.  Madden, and<strong>Q.H. Hu</strong><em>.</em><strong> </strong>Influence of Arsenic Incorporation  on Jarosite Dissolution Rates and Reaction Products.<strong> </strong>The 22th  Annual V.M. Goldschmidt Conference  2012: Earth in Evolution, June 24–29,  2012, Montreal, Canada.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong><strong>,</strong> Z.Y. Gao, S.  Peng, and R.P.  Ewing. Pore  Structure Inhibits Gas Diffusion in the Barnett Shale. 2012 AAPG  Southwest Section Convention, May 19–22, 2012, Fort Worth, TX. </p>
	</li>
	<li>
	  <p><em>Gao, Z.Y.</em>, and <strong>Q.H. Hu</strong>. Application of Mercury  Intrusion Porosimetry in Pore Structure Characterization. 2012 AAPG Southwest Section Convention, May 19–22, 2012, Fort Worth, TX. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, R.P. Ewing, S. Peng, and Z.Y. Gao. Effects of Pore-Scale Physics  on Uranium Geochemistry in Hanford Sediments.  Subsurface Biogeochemical Research Contractor-Grantee Workshop, Department of  Energy Office of Science, April 30 – May 2,  2012, Washington, DC. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong><strong>,</strong> Z.Y. Gao, S.  Peng, and R.P.  Ewing. Integrated  Experimental and Modeling Approaches to Studying the Fracture-Matrix  Interaction in Gas Recovery from  Barnett Shale. RPSEA  Unconventional Gas Conference 2012 – Geology, the Environment, Hydraulic  Fracturing, April 17<strong>–</strong>18, 2012,  Canonsburg, PA. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong><strong>,</strong> Z.Y. Gao, S. Peng, and R.P. Ewing. Pore  Structure and Chemical Diffusion in the Barnett Shale. 2011 Fall  Meeting for American Geophysical Union, December 13<strong>–</strong>17, 2011, San  Francisco, CA. </p>
	</li>
	<li>
	  <p><em>Peng, S.,<strong> </strong></em><strong>Q.H. Hu</strong>,<strong></strong>and S. Hamamoto. Rock  Diffusivity: Gas Diffusion Measurements and its Correlation to Porosity,  Pore-Size Distribution, and Permeability. 2011 Fall Meeting for American Geophysical Union,  December 13<strong>–</strong>17, 2011, San  Francisco, CA. </p>
	</li>
	<li>
	  <p><em>Ewing,<strong> </strong>R.P.</em> and <strong>Q.H. Hu</strong>. Pattern  and Scale in Intra-Granular Diffusion. 2011  ASA-CSSA-SSSA International Annual Meetings, October 16–19, 2011, San Antonio, TX.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> and R.P. Ewing. Effects of Pore-Scale Physics on Uranium Geochemistry in Hanford  Sediments. Subsurface Biogeochemical Research  Contractor-Grantee Workshop, Department of Energy Office of Science, April 26–28, 2011, Washington, DC. </p>
	</li>
	<li>
	  <p><em>Ewing, R.P</em>., C.X., Liu, and <strong>Q.H. Hu.</strong> Scale-Dependence  of Intra-granular Diffusion. Subsurface  Biogeochemical Research Contractor-Grantee Workshop, Department of Energy  Office of Science, April 26–28, 2011, Washington, DC. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><strong>.</strong>, X.G. Liu, S. Dultz, R.P.  Ewing, and H.D. Rowe<strong>.</strong> Fracture-Matrix Interaction and Gas Recovery in the Barnett Shale. AAPG/SEG/SPE  Hedberg Conference &ldquo;Critical Assessment of Shale Resource Plays&rdquo;, December  5–10, 2010, Austin, TX.</p>
	</li>
	<li>
	  <p><em>Gao, X.B.</em>, Y.X. Wang, and <strong>Q.H. Hu</strong>. Release  Potential of Arsenic from Sediments into the Groundwater under the Effect of  pH, Phosphate, and Biocarbonate. Thirteen International Symposium on Water-Rock  Interaction, August 16–19, 2010,  Guanajuato, Mexico.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> Speciation and Transport Behavior of 99Tc  and 129I. 20th Annual Goldschmidt Conference 2010: Earth, Energy, and the Environment,  June 13<strong>–</strong>18, 2010, Knoxville, TN. </p>
	</li>
	<li>
	  <p>Liu, X.G. and<em> <strong>Q.H. Hu</strong>.</em><strong> </strong>Application of Laser  Ablation-ICP-MS in Environmental Fate and Transport Studies.<strong> </strong>20th Annual<strong> </strong>Goldschmidt Conference 2010: Earth,  Energy, and the Environment, June 13–18,  2010, Knoxville, TN<strong>. </strong><strong></strong></p>
	</li>
	<li>
	  <p><em>Gao, X.B.</em>,<strong>Q.H.</strong> <strong>Hu</strong>, Y.X., Wang, and X.G. Liu.  Biocarbonate Competition in the Desorption of Arsenic Species from the  Sediments. 20th Annual Goldschmidt  Conference 2010: Earth, Energy, and the Environment, June 13<strong>–</strong>18,  2010, Knoxville, TN. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong>.  Contaminant Transport in Unsaturated Fractured rock: Interacting Imbibition,  Diffusion, and Sorption Processes. Japan Geosciences Union International  Symposium 2010, May 23<strong>–</strong>28, 2010,  Chiba, Japan.(invited speaker)</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, G.X. Sun, X.B. Gao, R.  Zuo, and J.S. Wang. Conversion, Sorption, and Transport of Arsenic Species in Geological Media. As 2010: The Third International Congress on Arsenic in  the Environment: Arsenic in Geosphere and Human Diseases. May 17<strong>–</strong>21, 2010,  Tainan, Taiwan. </p>
	</li>
	<li>
	  <p><em>Teng, Y.G.</em>, R.  Zuo, J.S. Wang, and <strong>Q.H.</strong><strong> Hu</strong><em>.</em> Removal of Arsenic (As3+ and  As5+) from Aqueous Solution Using Natural and Modified Attapulgite as Adsorbent. As 2010: The Third International Congress on Arsenic in the  Environment: Arsenic in Geosphere and Human Diseases. May 17<strong>–</strong>21, 2010,  Tainan, Taiwan. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, and R.P. Ewing. Effects of Pore-Scale Physics on Uranium Geochemistry in Hanford  Sediments. Subsurface Biogeochemical Research  Contractor-Grantee Workshop, Department of Energy Office of Science, March 29<strong>–</strong>31, 2010,  Washington, DC. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, X.G. Liu, and R.  Zuo. Preferential Radionuclide Transport in a  Tuff with Altered Zone: Micro-scale Mapping. 2009  Fall Meeting for American Geophysical Union, December 14<strong>–</strong>18, 2009,  San Francisco, CA. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> 2009. Realistic Quantification of Radionuclide Retardation in Intact Rock. 12th  International Conference on Chemistry and Migration Behavior of Actinides and  Fission Products in the Geosphere (Migration&rsquo;09). September 20–25, 2009, Kennewick, Washington, USA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><strong>.</strong> Iodine Speciation and Biogeochemistry. 2009  International Symposium on Endemic Diseases and Geological Environment. August  10–14, 2009, Changchun, China. (invited keynote speaker)</p>
	</li>
	<li>
	  <p><em>Zhu,  Y.-G.</em>, X. Zhang, Q.  Huang, F.-J. Zhao, <strong>Q.H. Hu</strong>, and P.N. Williams. Arsenic Uptake by and  Speciation in Macrophytes. 10th International Conference on the Biogeochemistry  of Trace Elements, July 13–16, 2009, Chihuahua, Mexico.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong>, and R.P.  Ewing. Pore Connectivity in  Natural Rock: Evidence and Implications. 2009 GSA South-Central Section  meeting, March 16–17, 2009, Dallas, TX.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, A.Möri, and A.  Martin. Radionuclide Transport in  Fractured Granite at the Grimsel Test Site. 2008 Fall  Meeting for American Geophysical Union, December 15<strong>–</strong>19, 2008, San Francisco, CA. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> and J.E. Moran.  Distribution and Transport of Iodine Species in the Environment. 2008 Joint  GSA-ASA-CSSA-SSSA International Annual Meetings, October 5<strong>–</strong>9, 2008, Houston,  TX. </p>
	</li>
	<li>
	  <p><em>Ewing R.P.</em> and <strong>Q.H. Hu</strong>. Imbibition into Soil and Rock:  What&rsquo;s the Same? What&rsquo;s Different? 2008 Joint GSA-ASA-CSSA-SSSA International  Annual Meetings, October 5<strong>–</strong>9, 2008, Houston,  TX. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> and R.P<em>. </em>Ewing. Simultaneous Water Flow and Contaminant Transport in Unsaturated  Rock. 2008 Joint GSA-ASA-CSSA-SSSA International  Annual Meetings, October 5<strong>–</strong>9, 2008, Houston, TX.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> Fate  and Transport Studies at the Intersections of Water, Environment, Energy, and  National Security. College of Science Research Day, University of Texas at Arlington,  November 3, 2008, Arlington, TX. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> Fate and  Transport of Contaminants in the Subsurface: Coupled Physical, Chemical, and  Biological Processes. Remediation Benchmark and Standards of Polluted  Environment, Forum of the Chinese Academy of Sciences, July 7<strong>–</strong>9, 2008,  Shenyang, China. (invited speaker) </p>
	</li>
	<li>
	  <p>Lu, G.P., B. Gilbert, L. Tomutsa, M. Zhang,<strong><em> Q.H.  Hu, </em></strong>Q.J. Kang, and D.X. Zhang. Micro-Scale Flow and Transport Studies in Various  Porous Geological Media Using Lattice Boltzmann Methods.  Computational Methods in Water Resources XVII International Conference, July 6<strong>–</strong>10, 2008,  San Francisco, CA.</p>
	</li>
	<li>
	  <p>Maxwell, R.M., R.L. Detwiler, <strong><em>Q.H. Hu, </em></strong>and A.F.B.  Tompson. Understanding the Interplay of Increased Pressure, Residual Heat and Geologic  and Geochemical Environment on Radionuclide Migration from Underground Nuclear  Tests. Computational Methods in Water Resources XVII International Conference,  July 6<strong>–</strong>10, 2008, San Francisco, CA. </p>
	</li>
	<li>
	  <p><em>Ewing, R.P.</em> and <strong>Q.H. Hu</strong>. Contaminant Release from Intragranular Pores. 2007 ASA-CSSA-SSSA International Annual Meetings,  November 4<strong>–</strong>8, 2007, New Orleans, LA.</p>
	</li>
	<li>
	  <p><em>Fischer, R. P.,</em> M. Sutton,<strong> </strong>D. Gates-Anderson, J. Gray, <strong>Q.H. Hu</strong>, W. McNab, and B. Viani<strong><em>.</em></strong> Decontamination  of Terrorist-Dispersed Radionuclides from Surfaces in Urban Environments. 2007 American Nuclear Society Topical Meeting on  Decommissioning, Decontamination and Reutilization,  September 16<strong>–</strong>19, 2007, Chattanooga, TN. <strong></strong></p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> Integrated Studies on  Chemical Migration in Solid Samples: LA/ICP-MS and Numerical Modeling. Chemical  &amp; Biological Countermeasures Division, Nonproliferation, Homeland and  International Security Directorate, Lawrence Livermore National Laboratory, September 6<strong>–</strong>7, 2007, Livermore,  CA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> and A. Möri. Radionuclide Transport in Fracture-Granite Interface Zones. 11th  International Conference on Chemistry and Migration Behavior of Actinides and  Fission Products in the Geosphere (Migration&rsquo;07), August 26<strong>–</strong>31, 2007, Munich, Germany.</p>
	</li>
	<li>
	  <p><em>Möri, A.</em>, M. Mazurek, and <strong>Q.H. Hu</strong>. In  situ Experiments on Matrix Diffusion in Fractured Crystalline Rock. Twelfth  International Symposium on Water-Rock Interaction, July 31<strong>–</strong>August  5, 2007, Kunming, China.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q</em></strong><strong><em>.H.</em></strong> Radionuclides in the Environment. 9th International Conference on the  Biogeochemistry of Trace Elements, July 15–19, 2007, Beijing, China.</p>
	</li>
	<li>
	  <p><em>Sutton</em>,<strong> </strong><em>M.</em>,R.P. Fischer, J. Dominick, D. Gates-Anderson, J. Gray, <strong>Q.H. Hu</strong>, W. McNab, and B. Viani<strong><em>.</em></strong> Simulating Cs Radiological  Dispersal Devices for Deposition, Dose and Decontamination Studies. The 52nd  Annual Meeting of the Health Physics Society, July 8<strong>–</strong>12, 2007,  Portland, OR.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> Applications of Laser Ablation-ICP/MS in Understanding  Radionuclide Transport. The 233rd American Chemical Society National Meeting  and Exposition, March 25<strong>–</strong>29, 2007,  Chicago, IL.</p>
	</li>
	<li>
	  <p><em>Gates-Anderson, D</em>., R. Fischer, M. Sutton,<strong> </strong>J. Gray, <strong>Q.H. Hu</strong>, W. McNab, and B. Viani<strong><em>.</em></strong> Decontamination of Terrorist-dispersed  Radionuclides from Surfaces in Urban Environments.  2007 Waste Management Symposium, February 25<strong>–</strong>March 1,  2007, Tucson, AZ.<strong></strong></p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> A New Approach to Quantifying Radionuclide Retardation under Unsaturated  Conditions. 2006 Fall Meeting for American  Geophysical Union, December 11<strong>–</strong>15, 2006, San Francisco, CA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> Surface Deposition and Post-detonation Redistribution of Cesium onto Concrete  from a Mock RDD Event. Joint Conference of LLNL with EPA National Homeland  Security Research Center, November<strong> </strong>13, 2006, Livermore, CA.</p>
	</li>
	<li>
	  <p><em>Viani, B.E.</em>, R.P. Fischer, D.D.  Gates-Anderson, J.J. Gray, <strong>Q.H. Hu</strong>,  W.W. McNab, and M. Sutton. Physical and Chemical Properties of Porous Urban  Surfaces that Impact the Decontamination of Chemical and Radionuclide Agents: A  Concrete Example from an Urban Transit System. Decontamination Conference,  Denver, CO, 2006. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>,  R.P. Ewing, and C.I. Steefel. Interacting Processes Affecting Contaminant  Transport in Unsaturated Fractured rock. 2006 Annual Meeting for the Geological  Society of America, October 22<strong>–</strong>25,  2006, Philadelphia, PA.</p>
	</li>
	<li>
	  <p><em>Moran, J.E.</em>, <strong>Q.H. Hu</strong>, P. Zhao, and E. Nelson. Predicting the Fate and Transport of 129iodine  in the Environment through Studies of Stable Iodine. Japanese AMS Society  Meeting, 2006. <strong></strong></p>
	</li>
	<li>
	  <p><em>Zavarin, M.</em>, Zhao, P., <strong>Q.H. Hu</strong>, T.P. Rose, and A.B. Kersting.  Radionuclide Distribution in Debris from Underground Nuclear Tests Detonated in  Silicate and Carbonate Rocks. Pu Futures-The Science 2006, July 9<strong>–</strong>13, 2006, Pacific Grove, CA.   <strong></strong></p>
	</li>
	<li>
	  <p><em>M</em><em>öri, A.</em> and<strong>Q.H. Hu</strong>. LA/ICP-MS Measurements on  Selected EP Core Samples. 2nd Experiment Team Meeting of Long-Term Diffusion of  National Cooperative for the Disposal of Radioactive Waste (Nagra), June 8<strong>–</strong>9, 2006, Meiringen, Switzerland.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>,  R.P. Ewing, L. Tomutsa, and M.J. Singleton. Pore Connectivity, Episodic Flow,  and Unsaturated Diffusion in Fractured Tuff. 2006 International High Level Radioactive Waste Management Conference<strong>, </strong>April 30<strong>–</strong>May 4, 2006, Las  Vegas, NV.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H</em></strong><em>.</em> Application of Laser  Ablation-Inductively Coupled Plasma-Mass Spectrometry. Joint Conference of LLNL  with EPA National Homeland Security Research Center, August<strong> </strong>9, 2006,  Livermore, CA.</p>
	</li>
	<li>
	  <p><em>Zhao, P.,</em> <strong>Q.H. Hu</strong>, T.P. Rose, G.J. Nimz, and M. Zavarin. 2006. Distribution  and Transport of Long-lived Soluble Fission Products. Seventh International  Conference Methods and Applications of Radioanalytical Chemistry. April 3<strong>–</strong>7, Kailua-Kona, Hawaii. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, Y. Sun, and R.P. Ewing. Radionuclide Transport  in Fractured Tuff under Episodic Flow Conditions. 2005 Fall Meeting for  American Geophysical Union, December 5<strong>–</strong>9, 2005, San  Francisco, CA.</p>
	</li>
	<li>
	  <p><em>Ewing, R.P.</em> and <strong>Q.H. Hu</strong>. Water Imbibition into Rock as  Affected by Sample Shape, Pore Connectivity, and Antecedent Water Content. 2005  ASA-CSSA-SSSA International Annual Meetings, November 6<strong>–</strong>10, 2005, Salt  Lake City, UT.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, P. Zhao, J.E. Moran, T.P. Rose, and A.B.  Kersting. Integrated Approaches to Studying Speciation and Migration of  Radionuclides in Various Media. 10th International Conference on Chemistry and  Migration Behavior of Actinides and Fission Products in the Geosphere  (Migration&rsquo;05). September 18<strong>–</strong>23, 2005,  Avignon, France.</p>
	</li>
	<li>
	  <p><em>Zavarin, M<strong>.</strong></em>, M.R. Johnson, S.K. Roberts, R. Pletcher,<strong>Q.H.  Hu</strong>, P. Zhao, A.B. Kersting, E. Ramon,and J. Walensky. Applying Mechanistic  Modeling at the Field Scale: Radionuclide Transport at the Nevada Test Site.  10th International Conference on Chemistry and Migration Behavior of Actinides  and Fission Products in the Geosphere (Migration&rsquo;05). September 18<strong>–</strong>23, 2005,  Avignon, France.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong>, R.P. Ewing, C.I. Steefel, L. Tomutsa, and G.B.  Hudson. Multiple Approaches to Studying Diffusion Processes in Geological  Media. The 15th Annual Goldschmidt  Conference, May 20<strong>–</strong>25, 2005, Moscow, ID. (invited speaker) </p>
	</li>
	<li>
	  <p><em>Steefel,<strong> </strong>C.I.</em>,  S.L. Brantley, A.K. Navarre, and <strong>Q.H. Hu</strong>. Rate Control in Low-porosity  Diffusion-reaction Systems.<strong> </strong>The 15th Annual Goldschmidt Conference<strong>, </strong>May 20<strong>–</strong>25, 2005,<strong> </strong>Moscow, ID<strong>.</strong></p>
	</li>
	<li>
	  <p><em>Moran,  J.E.</em>, <strong>Q.H.</strong> <strong>Hu</strong>, E. Nelson, and P. Zhao. Experimental Results from Iodine  Speciation and Transport Studies. The 15th Annual Goldschmidt  Conference, May 20–25, 2005,<strong>&nbsp;<br>
	    </strong>Moscow, ID.</p>
	</li>
	<li>
	  <p><em>Rose</em><em>, T.P.</em>, D. Finnegan,<strong> Q.H. Hu</strong>, G. Eaton, P. Zhao, J.  Thompson, and B. Martinez. Radiochemical Analysis of Near-field Groundwaters:  Recent Work and an Historical Perspective. Underground Test Area 2005 Technical  Information Exchange Meeting, May 4, 2005, Las Vegas, NV. </p>
	</li>
	<li>
	  <p><strong>Hu, Q</strong><strong>.H.</strong>,  J.E. Moran, T.P. Rose, D.K. Smith, and <em>Y.G.  Zhu</em>. Integrated Approaches to Studying Speciation and Behavior of Iodine  and Technetium. 8th International Conference on the Biogeochemistry of Trace  Elements, April 3–7, 2005, Adelaide, Australia.</p>
	</li>
	<li>
	  <p><em>Zavarin, M</em>., M.R. Johnson, S.K.  Roberts, <strong>Q.H. Hu</strong>, P. Zhao, and A.B.  Kersting. Applying Mechanistic Modeling at the Field Scale: Radionuclide  Transport at the Nevada Test Site.  The  229th Annual American Chemical Society, March 13<strong>–</strong>17, 2005, San Diego, CA.</p>
	</li>
	<li>
	  <p><em>Roberts, S.</em>, M. Johnson, M. Zavarin, R.  Pletcher, <strong>Q.H. Hu</strong>, A. Kersting, E.  Ramon, P. Zhao, and J. Walensky. Laboratory Investigation of Radionuclide  Sorption and Migration in Fractured Nevada Test Site Rock. The 229th Annual  American Chemical Society, March 13<strong>–</strong>17,  2005, San Diego, CA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q</em></strong><strong><em>.H</em></strong>. Pore Connectivity, Episodic  Flow, and Unsaturated Diffusion in Fractured Tuff. Science and Technology  Program Natural Barriers Thrust Area for Science &amp; Technology and International of Office of Civilian  Radioactive Waste Management, March 16, 2005, Berkeley, CA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q</em></strong><strong><em>.H.</em></strong> and R.P. Ewing. Multiple  Approaches to Studying Pore Connectivity in Rock Matrices. 2004 Fall Meeting  for American Geophysical Union, December 13<strong>–</strong>17,  2004, San Francisco, CA. <a target="_blank" href="../assets/researchPDF/2005 Goldschmidt diffusion.pdf" title="Download PDF, 54KB"><img width="20" src="../images/pdf.png" /></a>
</p>
	</li>
	<li>
	  <p><em>Burton, E</em>., B. Bourcier, S.  Coleman, B. Daily, B. Esser, J., <strong>Q.H. Hu</strong>, B. Hudson, P. Krauter, J.  Moran, K. O'Brien, D. Bishop, R. Newmark, and J. Reynolds. New Tools for Characterization and Selective  Treatment of Perchlorate Contamination Plumes. ESTCP-SERDP Joint Symposium, Partners in Environmental Technology Technical Symposium &amp; Workshop  November 30<strong>–</strong>December 2, 2004<strong>,</strong> Washington,  D.C. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q</em></strong><strong>.<em>H</em></strong>. Water Research in China.  Water Initiatives program,  Lawrence Livermore National Laboratory, November 29, 2004, Livermore, CA.</p>
	</li>
	<li>
	  <p>Hudson, G.B., H.R. Beller, B. K. Esser, A.R.  Grayson, <strong><em>Q.H. Hu</em></strong>, S.R. Kane, R.N. Leif, J.E. Moran, and C. Moody-Bartel.  Emerging Contaminants in Water  Resources: Status, Challenges, and a Case Study. 2nd International  Conference on Soil Pollution and Remediation (SOILREM 2004), November 9<strong>–</strong>12, 2004, Nanjing, P.R. China. </p>
	</li>
	<li>
	  <p><strong><em>Hu, Q.H.</em></strong> Radionuclides as Persistent Toxic Substances. The China International Symposium  on Persistent Toxic Substances.  November 7<strong>–</strong>11, 2004, Beijing, P.R.  China.</p>
	</li>
	<li>
	  <p><strong>Hu,  Q</strong><strong>.H.</strong> and <em>R.P. Ewing</em>. New Approaches  to Examining Chemical Sorption, Diffusion, and Transport in Unsaturated Rock. 2004 ASA-CSSA-SSSA International Annual  Meetings, October 31<strong>–</strong>November 4, 2004, Seattle, WA.</p>
	</li>
	<li>
	  <p><em>Ewing,<strong> </strong>R.P.</em> and <strong>Q.H. Hu</strong>. Effect of  Pore-scale Structure on Diffusive Transport. 2004 ASA-CSSA-SSSA International Annual Meetings, October 31<strong>–</strong>November 4, 2004, Seattle, WA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q</em></strong><strong>.<em>H.</em></strong> and R.P. Ewing. Effect of  Pore Connectivity on Contaminant Transport in Rock Matrices. 2004 Western  Pacific Geophysics Meeting, August 16<strong>–</strong>20,  2004, Honolulu, Hawaii.</p>
	</li>
	<li>
	  <p><em>Ewing,<strong> </strong>R.P.</em> and <strong>Q.H. Hu</strong>. Diffusion  Iso-surfaces in Low-connectivity Structured Rock. 2004 Joint Assembly, May 17<strong>–</strong>21, 2004, Montreal, Canada.</p>
	</li>
	<li>
	  <p><em>Burton, E.,</em> <strong>Q.H. Hu</strong>, M. Johnson, A.B. Kersting, S.K. Roberts, T.P. Rose, M.  Zavarin, and P. Zhao. Laboratory Investigations of Radionuclide Sorption and  Migration in Fractured NTS Rocks. Underground Test Area 2004 Technical  Information Exchange Meeting, May 1, 2004, Las Vegas, NV. </p>
	</li>
	<li>
	  <p><em>Zhao, P</em>., Y. Sun, <strong>Q.H. Hu</strong>, and J.E. Moran. Reactive  Transport of Iodide in Clay Minerals: Experimental and Modeling Efforts. The  227th Annual American Chemical Society, March 28<strong>–</strong>April 1, 2004, Anaheim, CA.</p>
	</li>
	<li>
	  <p><strong><em>Hu, Q</em><em>.H.</em></strong> and D.K. Smith. Field-scale Migration of 99Tc  and 129I at the Nevada Test Site. 2004 Materials Research Society  Spring Meeting, April 12<strong>–</strong>16, 2004,  San Francisco, CA.	</p>
	  </li>
	<li><strong><em>Hu, Q</em></strong>.<strong><em>H</em></strong>. Some Issues about  Radionuclide Transport in Fractured Rock. 1st Long-Term Diffusion  Planning Meeting of National Cooperative for the Disposal of Radioactive Waste  (Nagra), January 22, 2004, Wettingen,  Switzerland.
    </li>
    <li><p><strong><em>Hu, Q</em></strong><strong>.<em>H</em>.</strong> and D.K. Smith. Radionuclide  Mobility at the Nevada Test Site. On-Site Review of Science and Technology Program at Office of Civilian Radioactive Waste Management, December 15,  2003, Livermore, CA.</p></li>
    <li>
      <p><strong><em>Hu, Q</em></strong><strong>.<em>H</em>.</strong>, J.E. Moran, and P. Zhao.  Transport of Iodine species in the Terrestrial Environment. 2003 Fall Meeting  for American Geophysical Union, December 8<strong>–</strong>12,  2003, San Francisco, CA. </p>
    </li>
    <li>
      <p><strong><em>Hu, Q</em></strong><strong>.<em>H</em></strong>., T. Kneafsey, J.S.Y. Wang,  J. Roberts, and S. Carlson. Characterizing Unsaturated Diffusion in Porous  Granular Tuff.  Fall meeting for American  Geophysical Union, December 6<strong>–</strong>10,  2002, San Francisco, CA.</p>
    </li>
    <li>
      <p><em>Salve, R</em>., H.H. Liu, and <strong>Q.H. Hu</strong>.  Tracer Transport along a Vertical Fault Located in Welded Tuffs. Fall meeting  for American Geophysical Union, December 6<strong>–</strong>10,  2002, San Francisco, CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> Experimental Studies on Grout-fluid-CO2 interactions. Nuclear Waste Program Meeting, Lawrence  Berkeley National Laboratory, September 6, 2002, Berkeley, CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> Pore Connectivity Effects on Contaminant  Transport in Rock Matrices. Program Review for ESD 2001 Mini-Grant Program,  Lawrence Berkeley National Laboratory, January 28, 2002, Berkeley, CA.<strong></strong></p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong><strong> </strong>and J.S.Y. Wang. Direct and  High-resolution Measurements of Retardation and Transport in Whole Rock Samples  under Unsaturated Conditions. Fall meeting for American Geophysical Union,  December 10<strong>–</strong>14, 2001, San Francisco,  CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> Phase 1 Feasibility Study of Invert Diffusion. Nuclear Waste Program Meeting, Lawrence Berkeley National Laboratory,  November 2, 2001, Berkeley, CA.</p>
    </li>
    <li>
      <p><em>Ewing, R.P.</em> and<strong>Q.H.</strong><strong>Hu</strong>.  Correlation Structure Effects on Edge-accessible Porosity and Chemical Distance  near the Percolation Threshold. International Conference on the Electrical  Transport and Optical Properties of Inhomogeneous Media, July 15<strong>–</strong>19, 2001, Snowbird, Utah.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> Applications of Laser Ablation-ICP-MS in Investigating Diffusion, Sorption, and  Transport in Tuff. Nuclear Waste  Program Meeting, Lawrence Berkeley National Laboratory, Berkeley, CA, May 24,  2001.</p>
    </li>
    <li>
      <p><em>Moridis, G.</em>, <strong>Q.H.</strong> <strong>Hu, </strong>and Y. Wu.  Modeling Studies of Radionuclide Transport in the Unsaturated Zone at Yucca  Mountain, Nevada. Fall meeting for American Geophysical Union, December 15<strong>–</strong>19, 2000, San Francisco, CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> Synthesis of Geochemical Information.  Realistic Case Analysis/Model Report Interactive Review, October 22, 2000,  Berkeley, CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.,</em></strong> and R.P. Ewing. Pore Connectivity Effects on Solute Transport in Rocks.  International Groundwater Symposium, March 25<strong>–</strong>28, 2000, Berkeley, CA.</p>
    </li>
    <li>
      <p>Moridis<em>, </em>G. and <strong><em>Q.H.</em></strong><em> <strong>Hu</strong></em>.  Unsaturated Zone Radionuclide Transport  Models. Unsaturated Zone Process Model Report Interactive Review, January 11,  2000, Berkeley, CA.</p>
    </li>
    <li>
      <p><em>Li, Li</em>, M.L. Brusseau, <strong>Q.H.</strong> <strong>Hu, </strong>and L. Xie. Contaminant Biodegradation during Transport in  Porous Media: Mathematical Modeling and Residence Time Dependent Growth  Coefficients. Fall meeting for American Geophysical Union, December 6<strong>–</strong>10, 1998, San Francisco, CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong>,  J.S. Wang, P. Persoff, and R.C. Trautz. Water Imbibition and Tracer Penetration  into Welded Tuff. Fall meeting for American Geophysical Union, December 6<strong>–</strong>10, 1998, San Francisco, CA.</p>
    </li>
    <li>
      <p><strong>Hu, Q.H.</strong> and <em>Chin-Fu Tsang</em>. A Review of some Characteristics of Tracer Tests in  Fractured Rocks: Progress Report. Program Meeting in Japan, 1998.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> Water Imbibition and Tracer Penetration into Rocks: Laboratory studies. Nuclear  Waste Program Meeting, Lawrence Berkeley National Laboratory, Berkeley, CA,  July 22, 1998.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong>,  M.L Brusseau, N.T. Nelson, and K. Gupta. A Diffusivity Tracer-test Method for  Investigating the Influence of Diffusion-mediated Processes on Solute  Transport.  Spring meeting for American  Geophysical Union, May 27<strong>–</strong>30, 1997,  Baltimore, Maryland.  </p>
    </li>
    <li>
      <p><em>Piatt, J.J</em>., M.L. Brusseau, J. Wang and <strong>Q.H. Hu</strong>. Measuring Biodegradation  Potential in the Subsurface. Spring meeting for American Geophysical Union, May  27<strong>–</strong>30, 1997, Baltimore, Maryland.</p>
    </li>
    <li>
      <p><em>Brusseau, M.L.</em>, J.J. Piatt, <strong>Q.H. Hu</strong>, and J.M. Wang. The Use of  Biotracers for Measuring Biodegradation Potential in the Subsurface. The 210th  Annual American Chemical Society, April 13<strong>–</strong>17,  1997, San Francisco, CA. </p>
    </li>
    <li>
      <p><em>Gupta, K</em>., <strong>Q.H.</strong> <strong>Hu, </strong>and M.L.  Brusseau. Advanced Characterization of a Superfund Site: Effect of Core-scale  Heterogeneity on Trichloroethene Transport. The 210th Annual American Chemical  Society, April 13<strong>–</strong>17, 1997, San  Francisco, CA.</p>
    </li>
    <li>
      <p>Brusseau, M.L., <em>J.J. Piatt</em>, <strong>Q.H. Hu</strong>, and J.M. Wang. Measuring  Biodegradation Potential in the Subsurface. &ldquo;Superfund Basic Research Program:  A Decade of Improving Health Through Multi-Disciplinary Research&rdquo;, February 23<strong>–</strong>26, 1997, Chapel Hill, North Carolina. </p>
    </li>
    <li>
      <p><em>Huber, M.S.</em>, <strong>Q.H. Hu</strong>, M.L. Brusseau, and R.M. Miller. Spatial Distribution of  Bacteria in 2,4-D-contaminated Soil Columns Containing Macropores. The 96th  General Meeting of American Society for Microbiology, May 27<strong>–</strong>31, 1996, New Orleans, Louisiana.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> and M.L. Brusseau. Effect of Rate-limited Sorption and Mass Transfer on Solute  Transport in Structured Porous Media. The 87th Annual Meeting for Soil Science  Society of America, October 29<strong>–</strong>November  3, 1995, St. Louis, Missouri.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> and M.L. Brusseau. The Effect of Solute Size on Transport in Aggregated Media.  The 208th Annual American Chemical Society, April 2<strong>–</strong>7, 1995, Anaheim, CA.</p>
    </li>
    <li>
      <p><strong><em>Hu, Q.H.</em></strong> and M.L. Brusseau. Dispersion and Diffusion of Multicomponent Solutions during  Transport in Porous Media.  The 207th  Annual American Chemical Society, March 13<strong>–</strong>18,  1994, San Diego, CA.</p>
    </li>
    <li>
      <p><em>Wang, X.</em>, <strong>Q.H. Hu</strong>, and M.L. Brusseau. The Solubilization and Enhanced  Transport of Low-Polarity Organic Compounds by Cyclodextrin. The 207th Annual  American Chemical Society, March 13<strong>–</strong>18,  1994, San Diego, CA.</p>
    </li>
    <li>
      <p><strong>Hu, Q.H.</strong> and <em>R. Xu.</em> Emission of Greenhouse Gases from Soils. Sino-Japanese  Symposium on Air Pollution, Nov. 27<strong>–</strong>31,  1991, Tokyo, Japan. </p>
    </li>
</ol>
<table width='960'><td align='right' class=''><a style='font-size:12px; font-weight:bold;' href='#top'>BACK TO TOP</a></table>
<?php } ?>
    
</section>

<?php include "../template/footer.php"; ?>