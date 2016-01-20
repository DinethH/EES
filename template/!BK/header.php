<!doctype html>
<head>

<!-- meta tags -->
<meta charset="utf-8">
<meta name="description" content="The Department of Earth and Environmental Science at the University of Texas at Arlington" />
<meta name="keywords" content="geology, earth science, environmental science, ut arlington," />
<?php 
	if (isset($_GET['i']) && $_GET['i'] == 'field-trip') {
		echo '<meta name="robots" content="noindex" />';
	}
?>

<!-- style sheets -->
<link rel="stylesheet" type="text/css" href="css/moz.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/menubar.css" />


<!-- dynamic page title -->
<title>
<?php

	if (isset($_GET['i'])) {
		echo ucfirst($_GET['i'])." - ";
		if (isset($_GET['s'])) echo ucfirst($_GET['s'])." - ";
		if (isset($_GET['u'])) echo ucfirst($_GET['u'])." - ";
		if (isset($_GET['year']) && $_GET['year']!=date('Y')) echo ucfirst($_GET['year'])." - ";
		
		echo "Earth and Environmental Sciences - UT Arlington";
	}
	elseif (!isset($_GET['i'])) {
		echo "Earth and Environmental Sciences - UT Arlington";
	}
?>
</title>


<!-- javascripts -->
    
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <p align="center" style="color:#red">Your browser is not supported by this website. Please upgrade your browser to the latest version.</p>
    <![endif]-->

   

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->

    <!--[if !IE]> -->
    <link rel="stylesheet" type="text/css" href="css/webkit.css" />
    <!-- <![endif]-->

	<script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-12352797-21']);
	_gaq.push(['_trackPageview']);
	
	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script>
</head>
<body>

<!-- TOP BAR START -->
<div id="top">
	<div id="top_right" align="right">
		<a name="top"></a>    
       
           
            <ul >
            	<table cellpadding="7">
                	<tr>
                        <td ><li><a href="http://www.uta.edu/uta/alpha-index.php" >A-Z Index</a></li></td> 
                        <td><li><a href="https://webapps.uta.edu/find-people/">Find People</a></li></td>
                        <td><li><a href="http://www.uta.edu/maps/map?id=LS">Maps</a></li></td>
                        <td><li><a href="http://www.uta.edu/cos/index.php">COS Home</a></li> </td>
						<td><li><form action="index.php?i=search" method="post">
                        			<input name="q" type="text" class="search_text_box" onfocus="if (this.value==this.defaultValue){this.value='';}" onblur="if (this.value==''){this.value=this.defaultValue;}" value="<?php if (isset($_POST['q'])) echo $_POST['q']; else echo "Search EES"; ?>" size="20" required /> 
                        </td>
                        <td><input alt="submit" id="top_search_submit" name="top_search_submit" src="images/search.png" type="image"></form></li>
                        </td>
  					</tr>
				</table>
			</ul>
		
    </div>
</div>
<!-- TOP BAR END -->

<div id="body">
<!-- OUTER WRAPPER START -->

<!-- LOGO START -->
	<div id="logo" align="center"> <a href="http://www.uta.edu"><img width="920" alt="logo" src="images/logo.png" /></a>
	</div>
<!-- LOGO END -->

<!-- CONTAINER START -->
<div id="container">
	<div id="menubar">
    
		<ul id="menu">
        	<li><a name="nav" href="index.php">Home</a></li>
        	<li><a href="index.php?i=news">News</a>
                <ul>
                    <li><a href="index.php?i=news">News</a></li>
                    <li><a href="index.php?i=news&s=archive&year=<?php echo date('Y')-1 ?>">Archive</a></li>     
                </ul>
         	</li>
       		<li><a  href="index.php?i=events">Events</a>
            	<ul>
            		<li><a href="index.php?i=events">Events</a></li>
					<li><a href="index.php?i=events&s=calendar">Calendar</a></li>     
            	</ul>
        	</li>
        	<li><a href="index.php?i=people&s=faculty">People</a>
                <ul>
                  	<li><a href="index.php?i=people&s=faculty">Faculty</a></li>
                    <li><a href="index.php?i=people&s=emeritus">Emeritus Faculty</a></li>
                    <li><a href="index.php?i=people&s=staff">Staff</a></li>                        
          		</ul>
        	</li>
        	<li><a href="index.php?i=academics&s=undergraduate">Academics</a>
                <ul>
            		<li><a href="index.php?i=academics&s=undergraduate">Undergraduate</a></li>
 					<li><a href="index.php?i=academics&s=graduate">Graduate</a></li>
                </ul>
           	</li>
        	<li><a href="index.php?i=research">Research</a></li>
        	<li><a href="?i=alumni">Alumni</a></li>
        	<li><a href="index.php?i=forms&s=ner">Forms</a></li>
        	<li><a href="index.php?i=contact">Contact US</a></li>
		</ul>
	</div>