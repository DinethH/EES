
<?php $index = 1; ?>
<?php include "template/header.php"; ?>

<style>
h1 {
	border:none;
	padding:10px;
	border-top-right-radius:20px;
	border-bottom-left-radius:20px;
	box-shadow:1px 1px 1px #000;

}
#home_image:hover #shadow {
	 opacity:0.5;
	 
	 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
#shadow {
	background-color:#000; width:950px; height:396px;
	opacity:0;
	margin-top:-402px;
	-webkit-transition:opacity 0.25s ease;
	-moz-transition:opacity 0.25s ease;
	-ms-transition:opacity 0.25s ease;
	transition:opacity 0.25s ease;
}
</style>
<section style="width:960px;">


        <div id="home_image" style="height:402px; width:950px; overflow:hidden;">
        <img  src="images/GeomechanicsFigure.jpg" width="950px;">
        <div id="shadow"></div>
        </div>

<br>
<br>

<h1>Griffith Structural Geology and Geomechanics Group</h1>
<br>

<p>Griffith and students in the Structural Geology and Geomechanics Group work in the general realm of structural geology and rock  mechanics, with emphasis on the development and dynamic behavior of brittle structures observed in rocks using experimental and continuum mechanical models. Fractures influence our daily lives more than most people care to realize. Our particular research interests vary from the physics of earthquake rupture to roof stability in underground mines, but the underlying theme of our work involves collecting structural data the field and studying that data in the context of physics-based models to learn about the processes that govern the formation, growth, and mechanical behavior of fractures in the earth’s crust.</p>

</section>

<?php include "template/footer.php"; ?>