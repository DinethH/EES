<?php
$url = $_SERVER["REQUEST_URI"];
$url2 = explode ('/', $url);
$url3 = explode ('?', $url);

/*** version 2 ***/
if (isset($_GET['i'])) {
	echo "Home";
	// news
	if ($_GET['i'] == 'news')
		echo " &raquo; News";
		if (isset($_GET['s'])) {
			if ($_GET['s'] == 'archive')
				echo " &raquo; Archive";
				if (isset($_GET['year']))
					echo " &raquo; ".$_GET['year'];
		}
	// events
	if ($_GET['i'] == 'events')
		echo " &raquo; Events";
		if (isset($_GET['s'])) {
			if ($_GET['s'] == 'calendar')
				echo " &raquo; Calendar"; 
			if ($_GET['s'] == 'fieldcamps')
				echo " &raquo; Field Camps";
		}
	// people
	if ($_GET['i'] == 'people')
		echo " &raquo; People";
		if (isset($_GET['s'])) {
			if ($_GET['s'] == 'faculty')
				echo " &raquo; Faculty"; 
			elseif ($_GET['s'] == 'emeritus')
				echo " &raquo; Emeritus"; 
			elseif ($_GET['s'] == 'staff')
				echo " &raquo; Staff"; 
                        elseif ($_GET['s'] == 'grad')
                                echo " &raquo; Grad Students";
		}
	// academics
	if ($_GET['i'] == 'academics')
		echo " &raquo; Academics";
		if (isset($_GET['s'])) {
			if ($_GET['s'] == 'undergraduate')
				echo " &raquo; Undergraduate";
			
		}
		if (isset($_GET['s'])) {
			if ($_GET['s'] == 'graduate')
				echo " &raquo; Graduate"; 
		}
	// research
	if ($_GET['i'] == 'research')
		echo " &raquo; Research";
	// alumni
	if ($_GET['i'] == 'alumni')
		echo " &raquo; Alumni";
	// forms
	if ($_GET['i'] == 'forms')
		echo " &raquo; Forms";
	// contact us
	if ($_GET['i'] == 'contact')
		echo " &raquo; Contact Us";
	// geo links
	if ($_GET['i'] == 'geolinks') {
		echo " &raquo; Geo Links";
	}
	// field trip sign up
	if ($_GET['i'] == 'field-trip') {
		echo " &raquo; Field Trip";
		if ($_GET['s'] == 'signup')
			echo ' &raquo; Signup';
		if ($_GET['s'] == 'view')
			echo ' &raquo; View';
		if ($_GET['s'] == 'edit')
			echo ' &raquo; Edit';
		if ($_GET['s'] == 'change')
			echo ' &raquo; Change';
	}
	// search
	if ($_GET['i'] == 'search')
		echo " &raquo; Search";
	// Dig-IT
	if ($_GET['i'] == 'dig-it') {
		echo " &raquo; DIG-IT";
	}
}

?>