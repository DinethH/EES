
<?php include "../template/header.php"; ?>
<h5 class="currentBar">Home &raquo; Research
<?php
	if (isset($_GET['GID']) && $_GET['GID'] == 1)
		echo ' &raquo; Fault &amp; Earthquake Mechanics';
?>
</h5>
<section style="width:960px">
<div>

<style>
h2 {

}
#areas td {
	padding:7px;
	
}
.card {
	 background-color:#FFFFFF; 
	 box-shadow:1px 1px 1px #CCC; 
	 border-radius:2px;
	 padding:7px;
}
#topic {
	font-size:16px;;
	text-align:left;
}
#tint {
	background-color:#000; height:207px; width:304px; margin-top:0; position:absolute;
	opacity:0;
		 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
#tint:hover {
	opacity:0.5;
	border-radius:3px;
	box-shadow:1px 1px 1px #000;
		 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
#active span {
	display:none;
	
}

#active:hover {
	text-decoration:underline;
}
.active {

}
.expired {

}
span {
	color:#999;
}
span:hover {
	color:#000;
}
#topic:hover {
	text-decoration:underline;
}
</style>


<h1>Areas of Research</h1><br>
<p>All research applications involve solving geomechanical problems using some combination of fieldwork and modeling (theoretical, physical, or both). 
</p>
<table id="areas" align="center">
	<tr>
    	<td>
        <a href="research.php?GID=1"><div id="tint"></div></a>
        
        	<a href="research.php?GID=1">
            <div class="card">
            	<img width="290px;" src="../images/research/fems.jpg">
                <div id="topic">
            	  <strong>Fault  &amp; Earthquake Mechanics</strong>
            	</div>
                <span class="3dots" style="font-size:20px; font-weight:bold; margin-left:267px;">...</span>
            </div>
            </a>
        </td>
        
        <td>
         <a href="research.php?GID=2"><div id="tint"></div></a>
        	<a href="research.php?GID=2">
        	<div  class="card">
            	<img width="290px;" src="../images/research/niohs.jpg">
                 <div id="topic">
            	  <strong>Stability of Underground Openings</strong>
            	</div>
                 <span style="font-size:20px; font-weight:bold; margin-left:267px;">...</span>
            </div>
           	</a>
        </td>
        
        <td>
         <a href="research.php?GID=3"><div id="tint"></div></a>
        	<a href="research.php?GID=3">
        	<div  class="card">
            	<img width="290px;" src="../images/research/prefs.jpg">
                <div id="topic">
            	  <strong>Clastic Intrusions</strong>
            </div>
             <span style="font-size:20px; font-weight:bold; margin-left:267px;">...</span>
            </div>
            </a>
        </td>
    </tr>
</table>
<br>

<h1>Funded Projects</h1>
	
    <div class="active">

	<em><h2>Active</h2></em>
    
    <a id="active" href="research.php?GID=4"><ul>
      <li><strong>Collaborative  Research: Developing a link between dynamic friction and fracture mechanics  models of earthquake rupture using a new dynamic double-direct shear apparatus</strong> (funded by NSF Geophysics program)<span style="font-weight:bold;"> ...</span></li>
    </ul></a>
   <a id="active" href="research.php?GID=3"><ul>
      <li><strong>A  field-based geomechanical study of the formation, deformation, and internal  structure of reservoir-scale sandstone dikes, Sheep Mountain Anticline, WY</strong> (funded by Petroleum Research Fund)<span style="font-weight:bold;"> ...</span></li>
    </ul></a>
    <a id="active" href="research.php?GID=2"><ul>
      <li><strong>Incorporating  topographic stress perturbations and geological structures into stability  forecasting in underground mines</strong> (funded by National Institute for  Occupational Health and Safety)<strong></strong><span style="font-weight:bold;"> ...</span></li>
    </ul></a>
    
    </div>
    
    
    <div class="expired">
<em><h2>Expired</h2></em>
    <ul>
      <li><strong>New  perspectives on earthquake mechanics: A multidisciplinary study of  physico-chemical processes during the seismic cycle</strong> (funded by NSF International  Postdoctoral Research Fellowship Program)</li>
    </ul>
    </div>
    
    
    
</div>
</section>

<?php include "../template/footer.php"; ?>