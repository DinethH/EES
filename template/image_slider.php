
<link rel="stylesheet" href="assets/nivo/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="assets/nivo/nivo-slider.css" type="text/css" media="screen" />
<!-- slide show -->
<div class="slider-wrapper theme-default" style="float:left" >
    <div id="slider" class="nivoSlider" style="width: 800px; height: 450px;">
    
    	<?php
			$img_array = array("img_1", "img_4");
			$img_array_rand = array("img_3", "img_2", "img_6", "img_7", "img_8", "img_9", "img_10", "img_11");
			shuffle($img_array_rand);
			array_push($img_array, $img_array_rand[0], $img_array_rand[1], $img_array_rand[2]);
			shuffle($img_array);
			
			
		?>
     
    	<img src="assets/nivo/demo/images/<?php echo $img_array[0]; ?>" data-thumb="images/img_1.jpg" alt="" />
    	<a href="#">
   
        <img src="assets/nivo/demo/images/<?php echo $img_array[1]; ?>" data-thumb="images/img_2.jpg" alt="" />
        </a>
         
    	<img src="assets/nivo/demo/images/<?php echo $img_array[2]; ?>" data-thumb="images/img_3.jpg" alt="" />
        <img src="assets/nivo/demo/images/<?php echo $img_array[3]; ?>" data-thumb="images/img_4.jpg" alt="" />
        <img src="assets/nivo/demo/images/<?php echo $img_array[4]; ?>" data-thumb="images/img_4.jpg" alt="" />
      
         <!--
        <a href="http://www.uta.edu/ees/index.php?i=news&s=archive&year=2012&id=173"><img src="assets/nivo/demo/images/special_01.jpg" data-thumb="images/special_01.jpg.jpg" alt="" /></a> -->
    	
	</div>
<div id="htmlcaption" class="nivo-html-caption"></div>
    

                <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
                <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
                <script type="text/javascript">
                $(window).load(function() {
                    $('#slider').nivoSlider();
                });
                </script>
