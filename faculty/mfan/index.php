
<?php $index = 1; ?>
<?php include "template/header.php"; ?>

<style>
h1 {
	border:none;
	padding:10px;
	border-top-right-radius:20px;
        box-shadow: 1px 1px 1px 1px grey;

}
.infocard {
    background-color: white;
    margin: 0;
    padding: 10px;
    border-bottom-left-radius: 20px;
    box-shadow: 1px 1px 1px 1px grey;
    
}
.infocard2  {
    background-color: #FFC;
    position: absolute;
    width: 450px;
    padding: 13px;
    margin-left: 480px;
    margin-top: -182px;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 1px 1px 1px 1px grey;
    border-left: none;
}
.aboutme p {
    
     padding-left: -1.5em;
    text-indent:1.5em;
}
.aboutme p:first-line {
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
#research   {
    float: left;
    width: 48%;
    text-align: left;
}
#bio    {
    float: right;
    width: 47%;
    text-align: left;
    padding-left: 10px;
}
    .clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
.clearfix { display: inline-block; }
* html .clearfix { height: 1%; } /* Hides from IE-mac \*/
.clearfix { display: block; }
</style>
<section style="width:960px;" class="clearfix">

 
        


    <div style="width: 50%">
<h1>Majie Fan</h1>


    <div class="infocard">
    <p>Assistant professor (Fall 2011 to present)<br> 
        University of Texas at Arlington<br> <span>Department of Earth and Environmental Sciences</span><br>
    Office: Geoscience 235<br>
    Lab: Geoscience 137, and 230 (Light Stable Isotope Lab)<br>
    </p>
    </div>
</div>
<div class="infocard2">Email: <a href="mailto:mfan@uta.edu">mfan@uta.edu</a><br>
    Phone: 817-272-9092<br>
    Fax: 817-272-2628<br>
    Mail: University of Texas at Arlington, Department of Earth and Environmental Sciences, 500 Yates Street, Box 19049, Arlington, TX 76019<br>
    </div>
    
    
    <br>
    <div style="background-color: white; padding: 12px; border-radius: 3px; height: 418px;box-shadow: 1px 1px 1px 1px grey;">
        <img src="images/aboutme/aboutme_home.png" width="935" >
    </div>
<br>

<p>


<div class="aboutme">
    <div id="research">
        <div class="card">    
            <div style="height: 7px; background-color: #f59a9a; width: 150%; margin-left: -50px; margin-top: -10px;"></div>
            <h2>Sedimentary Record of Tectonics and Paleoclimate </h2>
            <p>
                My students and I apply field-based, laboratory, and numerical modeling approaches to understand basin evolutions, tectonic processes responsible for the formation of mountains, and associated climatic and environmental changes. The research tools we use include sedimentology and stratigraphy, isotope geochemistry and geochronology, and basin subsidence modeling.
            </p>
            <p>
                My latest main research interests include applying sedimentology and geochemistry to reconstruct paleotopography, paleoclimate, and paleoenvironment in western North America Cordillera system, and document the spatial and temporal patterns of surface uplift and rock uplift. Such researches provide critical insights into geodynamic processes responsible for mountain building, interactions among orogeny, surface uplift and climate, and reconstructions of the Earth’s history into deep past.
                    
            </p>
        </div>
        <br>
        <div class="card">   
            <div style="height: 7px; background-color: #00cc66; width: 150%; margin-left: -50px; margin-top: -10px;"></div>
            <p>
                I am looking for one talented and enthusiastic PhD student to begin as early as Fall 2014. I also welcome any dedicated visiting scientist or postdoc to discuss potential collaborations and proposals with me.
            </p>
        </div>
    </div>
    
    
    
    <div id="bio" class="card">
        <div style="height: 7px; background-color: #9ac7f5; width: 150%; margin-left: -50px; margin-top: -10px;"></div>
    <h2>Short Bio</h2>
    <p>
        
I was born and grow up in the Gansu Province in northwestern China. During my childhood, I lived in cave houses in the rural area of northwestern China for many years. These cave houses are called Yaodong in Chinese, and represent a unique dwelling style on the Chinese Loess Plateau. When I was a kid, I always wondered about the frequent color variations from light yellow to dark brown.  Not until I entered Lanzhou University, China, I learned from an introductory geology class that the color variations were caused by climate changes, and loess deposits represent millions of years of aridification in central Asia caused by the uplift of the Tibetan Plateau and global cooling. This initiated my ardent pursuit to geology.
    </p>
    <p>
        The summer before I entered graduate school in the Lanzhou University, I was very lucky, and involved in an international collaboration project between the Lanzhou University and the University of Arizona. I worked as a field assistant to assist the fieldwork of two US geologists in the northeastern corner of the Tibetan Plateau. I learned from them way more than the help I could provide at that time. This experience further solidified my career path. 
    </p>
    <p>
        I earned my PhD at the University of Arizona in 2009, and worked as a postdoc researcher at the University of Wyoming before I moved to University of Texas at Arlington in the fall of 2011. I am enjoying teaching and research at UTA.
    </p>
    <p>


    </p>
    </div>
</div>

</section>

<?php include "template/footer.php"; ?>