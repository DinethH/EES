
<?php include "../template/header.php"; ?>
<h5 class="currentBar">Home &raquo; Research
<?php
	if (isset($_GET['GID']) && $_GET['GID'] == 1)
		echo ' &raquo; Fault &amp; Earthquake Mechanics';
?>
</h5>
<section style="width:960px">

<style>
h2 {
	padding:0px;
	margin:0px;
	color:#FFF; 
	text-shadow:none;
	text-align:left;
	font-size:18px;
}
#research_desc {
	background-color:#000; opacity:0.5; width:360px; height:200px; margin-top:-70px;
	padding:20px;
						 -webkit-transition:margin-top 0.25s ease;
	 -moz-transition:margin-top 0.25s ease;
	 -ms-transition:margin-top 0.25s ease;
	 transition:margin-top 0.25s ease;
}
figure:hover #research_desc {
	margin-top:-200px;
						 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
.r_desc {
	color:#FFF;
}
</style>

<table>

<tr>
	<td>
    	<a href="research.php?GID=1">
        <figure style="overflow:hidden; height:300px; width:400px; border-radius:3px;">
    	<img width="400px" height="300px" style="background-color:#6C9;">
        <div id="research_desc">
        	<h2>Fault &amp; Earthquake Mechanics</h2>
            <p class="r_desc">Field investigations of geologic structures, whether direct via exhumed faults or indirect (e.g. remote sensing, boreholes, seismic reflection), are necessary to construct, constrain, and validate models...
            </p>
        </div>
        </figure>
        </a>
    </td>
	<td>
    	<a href="research.php?GID=2">
        <figure style="overflow:hidden; height:300px; width:400px;">
    	<img width="400px" height="300px" style="background-color:#6C9">
        <div id="research_desc">
        	<h2>The Stability of Underground Openings</h2>
            <p class="r_desc">A newly developed interest since moving to Akron is the stability of underground excavations, with emphasis on roof stability in underground limestone and coal mines in eastern Ohio ...
            </p>
        </div>
        </figure>
        </a>
    </td>

</tr>

<tr>
<td>
    	<a href="research.php?GID=3">
        <figure style="overflow:hidden; height:300px; width:400px;">
    	<img width="400px" height="300px" style="background-color:#6C9;">
        <div id="research_desc">
        	<h2>Clastic Intrusions</h2>
            <p class="r_desc">
            </p>
        </div>
        </figure>
        </a>
    </td>
<td>
    	<a href="research.php?GID=4">
        <figure style="overflow:hidden; height:300px; width:400px;">
    	<img width="400px" height="300px" style="background-color:#6C9;">
        <div id="research_desc">
        	<h2>Item 4</h2>
            <p class="r_desc">
            </p>
        </div>
        </figure>
        </a>
    </td>

</tr>

</table>
  
    
</section>

<?php include "../template/footer.php"; ?>