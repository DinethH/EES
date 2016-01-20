<!doctype html>
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="description" content="Dr. 'Max' Hu's Website: Department of Earth and Environmental Sciences: The University of Texas at Arlington" />
<meta name="keywords" content="Dr. Qinhong 'Max' Hu, hydrogeology, geology, earth science, environmental science, ut arlington," />


<!-- style sheets -->
<?php if (isset($index)) {?>
<link rel="stylesheet" type="text/css" href="../../css/moz.css" />
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<link rel="stylesheet" type="text/css" href="../../css/menubar.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php } else { ?>
<link rel="stylesheet" type="text/css" href="../../../css/moz.css" />
<link rel="stylesheet" type="text/css" href="../../../css/style.css" />
<link rel="stylesheet" type="text/css" href="../../../css/menubar.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<?php } ?>

<!--[if gte IE 9]>
  <style type="text/css">
    .orangeB {
       filter: none;
    }
  </style>



<!-- dynamic page title -->
<title>

<?php 

$uri = $_SERVER['REQUEST_URI']; 
$list = explode('/', $uri);
$count = count($list);

$currentPage = $list[$count-2];

if ($currentPage=='basu') {
	echo  "Dr. Asish R. Basu";
}
elseif ($currentPage=='publications') {
	echo  "Publications &raquo; ";
	echo " Dr. Asish R. Basu";
}
elseif ($currentPage=='edunapp') {
	echo  "Education and Appoinments &raquo; ";
	echo " Dr. Asish R. Basu";
}
elseif ($currentPage=='activities') {
	echo  "Activities &raquo; ";
	echo " Dr. Asish R. Basu";
}
elseif ($currentPage=='affiliations') {
	echo  "Affiliations &raquo; ";
	echo " Dr. Asish R. Basu";
}
elseif ($currentPage=='awards') {
	echo  "Honors and Awards &raquo; ";
	echo " Dr. Asish R. Basu";
}
echo " &raquo; University of Texas Arlington";
?>
</title>
    <!--[if lt IE 9]>
    <script src="../../js/html5.js"></script>
    <p align="center" style="color:#red">Your browser is not supported by this website. Please upgrade your browser to the latest version.</p>
    <![endif]-->
<?php if (isset($index)) {?>
<script type="text/javascript" src="../../js/smooth.pack.js"></script>

<!-- javascripts -->
    
    <!--[if lt IE 9]>
    <script src="../../js/html5.js"></script>
    <p align="center" style="color:#red">Your browser is not supported by this website. Please upgrade your browser to the latest version.</p>
    <![endif]-->

   

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="../../css/ie.css" />
    <![endif]-->

    <!--[if !IE]> -->
    <link rel="stylesheet" type="text/css" href="../../css/webkit.css" />
    <!-- <![endif]-->
<?php } else {?>
<script type="text/javascript" src="../../../js/smooth.pack.js"></script>
<!-- javascripts -->
    
    <!--[if lt IE 9]>
    <script src="../../../js/html5.js"></script>
    <p align="center" style="color:#red">Your browser is not supported by this website. Please upgrade your browser to the latest version.</p>
    <![endif]-->

   

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="../../../css/ie.css" />
    <![endif]-->

    <!--[if !IE]> -->
    <link rel="stylesheet" type="text/css" href="../../../css/webkit.css" />
    <!-- <![endif]-->
    <?php } ?>

</head>
<body style="behavior: url(js/PIE.htc);">

<!-- TOP BAR START -->
<div id="top">
	<div id="top_right" align="right">
		<a name="top"></a>    
       
           
            <ul>
            	<table cellpadding="7">
                	<tr>
                        
                        <td valign="middle"><li><a target="_blank" href="http://www.uta.edu/cos/">COS HOME</a></li> </td>
                        <td valign="middle"><li><a target="_blank" href="http://www.uta.edu/ees/">EES HOME</a></li></td>
						<td><li><form action="<?php if (isset($index)) echo "search/index.php"; else echo "../search/index.php"; ?>" method="post">
                        			<input style="background-color:#CCC;" name="q" type="text" class="search_text_box" onfocus="if (this.value==this.defaultValue){this.value='';}" onblur="if (this.value==''){this.value=this.defaultValue;}" value="<?php if (isset($_POST['q'])) echo $_POST['q']; else echo "search"; ?>" size="20" required /> 
                        </td>
                        <td><input alt="submit" id="top_search_submit" name="top_search_submit" src="<?php if (isset($index)) echo "images/search.png"; else echo "../images/search.png"; ?>" type="image"></form></li>
                        
                       
                        </td>
  					</tr>
				</table>
			</ul>
		
    </div>
</div>
<!-- TOP BAR END -->

<div id="body" <?php if(!isset($index)) echo 'style="behavior: url(../js/PIE.htc);"'; ?>>
<!-- OUTER WRAPPER START -->

<!-- LOGO START -->
	<div class="rounded-corners" id="logo" align="center" style="height:150px; overflow:hidden"> 
    	<a href="http://www.uta.edu/ees/"><img usemap="#Map"; border="0"  width="900" src="<?php if (isset($index)) echo "images/logo.png"; else echo "../images/logo.png"; ?>" /></a>
        

<br>
<br>

	</div>
<!-- LOGO END -->

<!-- CONTAINER START -->
<div id="container">
	<div id="menubar">
    
		<ul id="menu">
        	<li><a name="nav" href="<?php if (isset($index)) echo "."; else echo "../"?>">Home</a></li>
            


    
           
            
            <li><a name="nav" href="<?php if (isset($index)) echo "edunapp/"; else echo "../edunapp" ?>">Education and Appoinments</a></li>
            
              <li><a name="nav" href="<?php if (isset($index)) echo "awards/"; else echo "../awards" ?>">Awards</a></li>
            
            <li><a name="nav" href="<?php if (isset($index)) echo "activities/"; else echo "../activities" ?>">Activities</a></li>
            
            <li><a name="nav" href="<?php if (isset($index)) echo "affiliations/"; else echo "../affiliations" ?>">Affiliations</a></li>
            
             <li><a name="nav" href="<?php if (isset($index)) echo "publications/"; else echo "../publications" ?>">Publications</a></li>
            
          
		</ul>
	</div>

