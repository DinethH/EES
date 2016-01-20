<!doctype html>
<head>


<link rel="stylesheet" href="../../assets/nyroModal/styles/nyroModal.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../../assets/nyroModal/js/jquery.nyroModal.custom.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!--[if IE 6]>
	<script type="text/javascript" src="js/jquery.nyroModal-ie6.min.js"></script>
<![endif]-->
<script type="text/javascript">
$(function() {
  $('.nyroModal').nyroModal();
});
</script>


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
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.3.custom.css" />
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

if ($currentPage=='hu') {
	echo  "Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='about') {
	echo  "About &raquo; Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='news-and-events') {
	echo  "News &amp; Events &raquo; ";
	if (!isset($_GET['i']) || (isset($_GET['i']) && $_GET['i']=='recent')) echo 'Recent'; else echo 'Past'; 
	echo " &raquo; Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='research') {
	echo  "Research &raquo; ";
	if (!isset($_GET['i']) || (isset($_GET['i']) && $_GET['i']=='current')) echo 'Current'; else echo 'Past'; 
	echo " &raquo; Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='professional-services') {
	echo  "Professional Services &raquo; ";
	echo " Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='publications') {
	echo  "Publications &raquo; ";
	echo " Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='useful-links') {
	echo  "Useful Links &raquo; ";
	echo " Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='search') {
	echo  "Search &raquo; ";
	echo " Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='lab-capabilities') {
	echo  "Lab Capabilities &raquo; ";
	echo " Dr. \"Max\" Qinhong Hu";
}
elseif ($currentPage=='students') {
	echo  "Current &amp; Past Students &raquo; ";
	echo " Dr. \"Max\" Qinhong Hu";
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
    	<img usemap="#Map"; border="0"  width="900" src="<?php if (isset($index)) echo "images/logo.png"; else echo "../images/logo.png"; ?>" />
        
        <map name="Map">
  <area shape="rect" coords="37,35,325,132" href="http://www.uta.edu/" target="_blank">
  <area shape="rect" coords="434,33,882,62" href="http://www.uta.edu/ees" target="_blank">
  <area shape="rect" coords="333,29,425,135" href="http://www.uta.edu/ees/faculty/hu">
  <area shape="rect" coords="436,63,656,96" href="http://www.uta.edu/ees/faculty/hu">
</map>
<br>
<br>

	</div>
<!-- LOGO END -->

<!-- CONTAINER START -->
<div id="container">
	<div id="menubar">
    
		<ul id="menu">
        	<li><a name="nav" href="<?php if (isset($index)) echo "."; else echo "../"?>">Home</a></li>
            <li><a name="nav" href="<?php if (isset($index)) echo "about/"; else echo "../about" ?>">About</a></li>
            <li><a name="nav" href="<?php if (isset($index)) echo "news-and-events/"; else echo "../news-and-events" ?>">News &amp; Events</a>
            <ul>
                	<li><a name="nav" href="<?php if (isset($index)) echo "news-and-events/"; else echo "../news-and-events" ?>">Recent</a></li>
                    <li><a name="nav" href="<?php if (isset($index)) echo "news-and-events/?i=past"; else echo "../news-and-events/?i=past" ?>">Past</a></li>
                </ul>
            </li>
            <li><a name="nav" href="<?php if (isset($index)) echo "research/"; else echo "../research" ?>">Research</a>
            	<ul>
                	<li><a name="nav" href="<?php if (isset($index)) echo "research/"; else echo "../research" ?>">Current</a></li>
                    <li><a name="nav" href="<?php if (isset($index)) echo "research/?i=past"; else echo "../research/?i=past" ?>">Past</a></li>
                </ul>
            </li>
            <li><a name="nav" href="<?php if (isset($index)) echo "professional-services/"; else echo "../professional-services" ?>">Professional Services</a></li>
            <li><a name="nav" href="<?php if (isset($index)) echo "publications/"; else echo "../publications" ?>">Publications</a></li>
            <li><a name="nav" href="<?php if (isset($index)) echo "useful-links/"; else echo "../useful-links" ?>">Useful Links</a></li>
		</ul>
	</div>

