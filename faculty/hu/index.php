
<?php $index = 1; ?>
<?php include "template/header.php"; ?>

<table>
	<tr>
    <td>
    <section>
        <h1 class="grayB">"Max" Qinhong Hu Ph.D.</h1>
        <p>
      For nearly twenty years, Dr. Hu's educational training and work experience have focused on fluid flow and chemical transport in porous and fractured media, in the intersection of the hydrosphere, geosphere, and biosphere with relevance to sustainable energy (shale gas and oil production, nuclear energy and waste disposal, and geothermal exploration), environment, and water resources management. His current research interests include the application of various innovative experimental and theoretical approaches to characterizing nano-scale pore structure, and its emergent behavior of chemical transfer in various geologic media (e.g., enhanced hydrocarbon production in unconventional reservoirs; long-term contaminant release from contaminated sediments and aquifers). 
        </p>
        <p>
        His research has produced 80+ publications in peer-reviewed journals, with a current h-index of 15. Moreover, he has delivered 154, from a total of 214, oral presentations to scientific conferences and technical meetings of diverse audiences (including professional peers, project reviewers, project managers, oil and gas industry, and representatives of government agencies). As a subject expert, he has been invited to perform a total of 144 manuscript reviews for 66 different journals on multidisciplinary topics, in addition to proposal reviews for NSF, DOE, U.S. Civilian Research & Development Program, Austrian Science Foundation, Louisiana Board of Regents, South Carolina’s Institutions of Higher Education, and the Environmental Molecular Sciences Laboratory of Pacific Northwest National Laboratory. Early in 2013 he has also participated in the panel review for NSF and EPA proposals.
        </p>
        <p>
        Dr. Hu has been a principal investigator for a total of 31 projects at $4.3 million funding from a variety of funding agencies and companies (e.g., ConocoPhillips, DOE-NETL-RPSEA, NSF, DOE-Office of Science, DOE-OBES, Arcadis Inc., NAGRA). He is a member of numerous professional societies (AAAS, AAPG, ACS, AGU, GS, GSA, InterPore, IPACES, SPE), and was elected to the Fellow of GSA in 2013. In addition, he is Associate Editors for the <em>Journal of Contaminant Hydrology, Journal of Earth Science</em>, and an Editorial Board member for the <em>Journal of Environmental Radioactivity</em>.  
        </p>
        
        <h2 class="grayB">Course Taught</h2>
        <ul>
            <li>Lower-division Undergraduate Courses:
                <ul>
                    <li>Earth Systems (Physical Geology)</li>
                </ul>
            </li>
            <li>Upper-division Undergraduate/Graduate Courses:
                <ul>
                    <li>Hydrogeology</li>
                    <li>Contaminant Hydrogeology</li>
                    <li>Tech Sessions (weekly department seminars)</li>
                    <li>Analytical Methods in Environmental Sciences</li>
                </ul>
            </li>
            <li>Graduate Courses:
                <ul>
                    <li>Reservoir Characterization</li>
                </ul>
            </li>
        </ul>
        
        
        <h2 class="grayB">Research Interest</h2>
            <ul id="ri">
                <li>Fracture-matrix interaction (solute moving between rock fracture and rock matrix)</li>
                <li>Various innovative approaches in pore network characterization </li>
                <li>Nano-petrophysics and shale-hydrocarbon production</li>
                <li>Pore connectivity of natural rock and its effect on fluid flow and chemical diffusion </li>
                <li>Coupled processes affecting production behavior of shale gas and oil</li>
                <li>Micro-scale elemental profiling with laser ablation-ICP-MS</li>
                <li>Permeability and diffusivity in tight rock</li>
                <li>Hydraulic fracturing for shale-gas development and its impact on water resources</li>
                <li>Contaminant fate and transport in vadose and saturated zones</li>
                <li>Coupled physical, chemical, and biological processes on reactive transport in porous media</li>
                <li>Biogeochemistry of trace and redox-sensitive elements</li>
                <li>Penetration and remediation of Radiological Dispersion Device particles in urban infrastructure</li>
                <li>Sources and transport of radionuclides in the environment</li>
                <li>Urban hydrogeology</li>
            </ul>
    </section>
    </td>
    
    <td>
    <aside>
   		<a href="about/" title="Dr. &quot;Max&quot; Hu"><div><img src="images/max.jpg" width="220" alt="Dr. &quot;Max&quot; Hu"/>
        	<figcaption class="orangeB">Dr. &quot;Max&quot; Qinhong Hu at his desk &raquo;</figcaption>
        </div></a><br>
        <a href="lab-capabilities/" title="Laboratory Capabilities"><div><img src="images/lab.jpg" width="220" alt="Laboratory Capabilities"/>
        	<figcaption class="orangeB">Laboratory Capabilities &raquo;</figcaption>
        </div></a><br>
        <a title="Current and Past Students" href="students"><div><img src="images/students.jpg" width="220" alt="Current and Past Students"/>
        	<figcaption class="orangeB">Current and Past Students &raquo;</figcaption>
        </div></a>
        <br>
        <?php //require_once("modal.php"); ?>
       
     
        <script>
		
		
		 $(function() {
    $( "#dialog-message" ).dialog({
      modal: true,
      width: 480,
	  height: 410
    });
  });
		</script>
<style>
	#dialog-message {
		display:none;
	}
</style>
       <!-- <div id="dialog-message" title="UT Arlington Caving Trip">
  <p>
   <iframe width="420" height="315" src="//www.youtube.com/embed/qsm7VWZq_M8" frameborder="0" allowfullscreen></iframe>
  </p>
</div>
-->
<script>
$("#video-caving").click(function () {
	$("#dialog-message").toggle( "fold", 1000 );
});
</script>

        <a id="video-caving"  title="UT Arlington Caving Trip" href="https://www.youtube.com/watch?v=qsm7VWZq_M8"><div><img src="images/caving.jpg" width="220" alt="Current and Past Students"/>
        	<figcaption class="orangeB">UT Arlington Caving Trip &raquo;</figcaption>
        </div></a>
<script>
$("#video-caving").click(function () {
	$("#dialog-message").toggle( "fold", 1000 );
});
</script>
    </aside>
    </td>
    </tr>
</table>

<?php include "template/footer.php"; ?>