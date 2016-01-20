<?php
$url_get = $_GET['i'];
?>

<div id="side_menu" style="width:250px">
	<nav>
    	<ul>
        <?php 
		if ($url_get == "events") {
			/*
			echo '
				<li><a ';
				if ($_GET['t']=='news') { echo 'class="selected"';}
				
				echo 'href="index.php?i=events&t=news"><div class="menu_li">News</div></a></li>
				<li><a ';
				echo '<li><a ';
				if ($_GET['t']=='archive') { echo 'class="selected"';}
				
				echo 'href="index.php?i=events&t=archive"><div class="menu_li">Archive</div></a></li>
				<li><a ';
				if ($_GET['t']=='events') { echo 'class="selected"';}
				
				echo 'href="index.php?i=events&t=events"><div class="menu_li">Events</div></a></li>
				<li><a ';
				if ($_GET['t']=='fieldcamps') { echo 'class="selected"';}
				
				echo 'href="index.php?i=events&t=fieldcamps"><div class="menu_li">Field Camps</div></a></li><li><a ';
				if ($_GET['t']=='calendar') { echo 'class="selected"';}
				
				echo 'href="index.php?i=events&t=calendar"><div class="menu_li">Calendar</div></a></li><li><a ';
				if ($_GET['t'] == 'request') { echo 'class="selected"';}
				echo 'href="index.php?i=events&t=request"><div class="menu_li">Request</div></a></li>';
				*/
		}
		/*elseif ($url_get == "people") {
			echo '
				<li><a ';
				if ($_GET['p']=='faculty' || $_GET['p'] == 'adjunct') { echo 'class="selected"';}
				
				echo 
				' href="index.php?i=people&p=faculty"><div class="menu_li">Faculty</div></a></li>
				<li><a ';
				if ($_GET['p']=='emeritus') { echo 'class="selected"';}
				
				echo 
				' href="index.php?i=people&p=emeritus"><div class="menu_li">Emeritus Faculty</div></a></li>
				<li><a ';
				if ($_GET['p']=='staff') { echo 'class="selected"';}
				
				echo 
				' href="index.php?i=people&p=staff"><div class="menu_li">Staff</div></a></li>';
				//if ($_GET['p']=='update') { echo 'class="selected"';}
				
				//echo 
				//' href="index.php?i=people&p=update"><div class="menu_li">Update Request</div></a></li>
				//';
		}*/
		/*elseif ($url_get == "academics") {
			echo '
				<li><a ';
				if ($_GET['a']=='undergraduate') { echo 'class="selected"';}
				echo 'href="?i=academics&a=undergraduate&b=degrees"><div class="menu_li">Undergraduate</div></a></li>';
				?>
				
				<ul id="sub_menu">
					<a href="?i=academics&a=undergraduate&b=degrees"><li>Degrees</li></a>
					<a href="?i=academics&a=undergraduate&b=requirements"><li>Requirements</li></a>
					<a href="?i=academics&a=undergraduate&b=courses"><li>Course Descriptions</li></a>
				</ul>
				
			<?php	
				echo '<li><a ';
				if ($_GET['a']=='graduate') { echo 'class="selected"';}
				echo 'href="?i=academics&a=graduate&b=degrees"><div class="menu_li">Graduate</div></a></li>
				';
				?>
                <ul id="sub_menu">
					<a href="?i=academics&a=graduate&b=degrees"><li>Degrees</li></a>
					<a href="?i=academics&a=graduate&b=requirements"><li>Requirements</li></a>
					<a href="?i=academics&a=graduate&b=courses"><li>Course Descriptions</li></a>
				</ul>
                <?php
		}*/
		/*
		elseif ($url_get == 'research') {
	echo '
				<li><a class="selected"';
				echo 'href="index.php?i=research"><div class="menu_li">Research</div></a></li>';
				?>
                <ul id="sub_menu">
                	<a href="#Biostr"><li>Biostratigraphy</li></a>
                    <a href="#Enviro"><li>Environmental Geochemistry</li></a>
                    <a href="#Geoche"><li>Geochemistry </li></a>
                    <a href="#Hydrog"><li>Hydrogeology </li></a>
                    <a href="#Marine"><li>Marine Geology and Geophysics</li></a>
                    <a href="#Neotec"><li>Neotectonics-Geodesy</li></a>
                    <a href="#Palecli"><li>Paleoclimate Modeling</li></a>
                    <a href="#Sedime"><li>Sedimentology </li></a>
                    <a href="#Struct"><li>Structural Geology and Tectonics</li></a>
                </ul>
                
                
                <?php	
				
		}
		*/
		elseif ($url_get == "search") {
			echo '
				<li><a ';
				if ($_GET['i']=='search') { echo 'class="selected"';}
				echo 'href="http://www.uta.edu/uta/alpha-index.php"><div class="menu_li">A-Z Site Index</div></a></li>';
				
			echo '
				<li><a ';
				if ($_GET['i']=='search') { echo 'class="selected"';}
				echo 'href="http://www.uta.edu/maps/"><div class="menu_li">Maps</div></a></li>';
			echo '
				<li><a ';
				if ($_GET['i']=='search') { echo 'class="selected"';}
				echo 'href="https://webapps.uta.edu/find-people/"><div class="menu_li">Find People</div></a></li>';
        }
		?>
        
        
        
        <?php
		/** vesion 2 **/
		if (isset($_GET['i'])) {
			// news page
			if ($_GET['i'] == 'news') {
				// news
				echo '<li><a ';
				if (!isset($_GET['s']) && (!isset($_GET['year']) || $_GET['year'] == date('Y')))
					echo 'class="selected"';
				echo 'href="index.php?i=news"><div class="menu_li">News</div></a></li>';
				// archive
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s']=='archive' || (isset($_GET['year']) && ($_GET['year']<date('Y'))))
					echo 'class="selected"';
				echo 'href="index.php?i=news&s=archive&year='.(date('Y')-1).'"><div class="menu_li">Archive</div></a></li>';
			}
			// events page
			if ($_GET['i'] == 'events') {
				// events
				echo '<li><a ';
				if (!isset($_GET['s']))
					echo 'class="selected"';
				echo 'href="index.php?i=events"><div class="menu_li">Events</div></a></li>';
				// calendar
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'calendar')
					echo 'class="selected"';
				echo 'href="index.php?i=events&s=calendar"><div class="menu_li">Calendar</div></a></li>';
				
			}
			// people page
			if ($_GET['i'] == 'people') {
				// faculty
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'faculty')
					echo 'class="selected"';
				echo 'href="index.php?i=people&s=faculty"><div class="menu_li">Faculty</div></a></li>';
				// emeritus faculty
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'emeritus')
					echo 'class="selected"';
				echo 'href="index.php?i=people&s=emeritus"><div class="menu_li">Emeritus Faculty</div></a></li>';
				// staff
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'staff')
					echo 'class="selected"';
				echo 'href="index.php?i=people&s=staff"><div class="menu_li">Staff</div></a></li>';
				
			
			}
			// academics
			if ($_GET['i'] == 'academics') {
				// undergraduate
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'undergraduate')
					echo 'class="selected"';
				echo 'href="index.php?i=academics&s=undergraduate"><div class="menu_li">Undergraduate</div></a></li>';
					// undergrad sub menu
					if (isset($_GET['s']) && $_GET['s'] == 'undergraduate') {
						echo '<ul style="clear" class="second_menu">';
							echo '<li><a href="index.php?i=academics&s=undergraduate&u=degrees"><div class="menu_li">Degrees';
						if (isset($_GET['u']) && $_GET['u'] == 'degrees')
							echo ' &raquo;';
						echo '</div></a></li>';
							
							echo '<li><a href="index.php?i=academics&s=undergraduate&u=courses"><div class="menu_li">Courses';
						if (isset($_GET['u']) && $_GET['u'] == 'courses')
							echo ' &raquo;';
						echo '</div></a></li>';
						
						// field camps
					echo '<li><a href="index.php?i=academics&s=undergraduate&u=fieldcamps"><div class="menu_li">Field Camps';
					if (isset($_GET['u']) && $_GET['u'] == 'fieldcamps')
						echo ' &raquo;';
					echo '</div></a></li>';
					echo '</ul>';
						}
				// graduate
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'graduate')
					echo 'class="selected"';
				echo 'href="index.php?i=academics&s=graduate"><div class="menu_li">Graduate</div></a></li>';
					// grad sub menu
					if (isset($_GET['s']) && $_GET['s'] == 'graduate') {
						echo '<ul style="clear" class="second_menu">';
							echo '<li><a href="index.php?i=academics&s=graduate&u=degrees"><div class="menu_li">Degrees';
							if (isset($_GET['u']) && $_GET['u'] == 'degrees')
								echo ' &raquo;';
							echo '</div></a></li>';

							echo '<li><a href="index.php?i=academics&s=graduate&u=gradguide"><div class="menu_li">Graduate Guide';
							if (isset($_GET['u']) && $_GET['u'] == 'gradguide')
								echo ' &raquo;';
							echo '</div></a></li>';
							echo '<li><a href="index.php?i=academics&s=graduate&u=mentoring"><div class="menu_li">Mentoring Program';
							if (isset($_GET['u']) && $_GET['u'] == 'mentoring')
								echo ' &raquo;';
							echo '</div></a></li>';
							echo '<li><a href="index.php?i=academics&s=graduate&u=fellowships"><div class="menu_li">Research Fellowships';
							if (isset($_GET['u']) && $_GET['u'] == 'fellowships')
								echo ' &raquo;';
							echo '</div></a></li>';
							echo '<li><a href="index.php?i=academics&s=graduate&u=fast"><div class="menu_li">Fast Track Program';
							if (isset($_GET['u']) && $_GET['u'] == 'fast')
								echo ' &raquo;';
							echo '</div></a></li>';
							echo '<li><a href="index.php?i=academics&s=graduate&u=egta"><div class="menu_li">Enhanced GTA';
							if (isset($_GET['u']) && $_GET['u'] == 'egta')
								echo ' &raquo;';
							echo '</div></a></li>';
							echo '<li><a href="assets/Request_Recommendation.pdf"><div class="menu_li">Request for Recommendation';
							
							echo '</div></a></li>';
						echo '</ul>';
					}
			}
			// research
			if ($_GET['i'] == 'research') {
			echo '<li><a class="selected"';
				echo 'href="index.php?i=research"><div class="menu_li">Research</div></a></li>';
				echo'
                <ul id="sub_menu">
                	<a href="#Biostr"><li><div class="menu_li">Biostratigraphy</div></li></a>
                    <a href="#Enviro"><li><div class="menu_li">Environmental Geochemistry</div></li></a>
                    <a href="#Geoche"><li><div class="menu_li">Geochemistry </div></li></a>
                    <a href="#Hydrog"><li><div class="menu_li">Hydrogeology </div></li></a>
                    <a href="#Marine"><li><div class="menu_li">Marine Geology and Geophysics</div></li></a>
                    <a href="#Neotec"><li><div class="menu_li">Neotectonics-Geodesy</div></li></a>
                    <a href="#Paleoc"><li><div class="menu_li">Paleoclimate Modeling</div></li></a>
                    <a href="#Sedime"><li><div class="menu_li">Sedimentology</div></li></a>
                    <a href="#Struct"><li><div class="menu_li">Structural Geology and Tectonics</div></li></a>
                </ul>';
			}
			// forms
			if ($_GET['i'] == 'forms') {
				// news/event request form
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'ner')
					echo 'class="selected"';
				echo 'href="index.php?i=forms&s=ner"><div class="menu_li">News/Event</div></a></li>';
				
			}
			// geolinks
			if ($_GET['i'] == 'geolinks') {
				echo '<li><a class="selected"';
				echo 'href="index.php?i=geolinks"><div class="menu_li">Geo Links</div></a></li>';
			}
			// contact us
			if ($_GET['i'] == 'contact') {
				echo '<li><a class="selected"';
				echo 'href="index.php?i=contact"><div class="menu_li">Contact Us</div></a></li>';
			}
			// alumni
			if ($_GET['i'] == 'alumni') {
				// ees alumni
				echo '<li><a class="selected"';
				echo 'href="index.php?i=alumni"><div class="menu_li">EES Alumni</div></a></li>';
				// uta alumni
				echo '<li><a target="_blank"';
				echo 'href="http://www.uta.edu/uta/alumni-friends.php"><div class="menu_li">UTA Alumni/Friends</div></a></li>';
				
			}
			// field trip sign up
			if ($_GET['i'] == 'field-trip') {
				echo '<li><a ';
				if ($_GET['s'] == 'signup') 
					echo 'class="selected"';
				echo 'href="index.php?i=field-trip&s=signup"><div class="menu_li">Sign Up</div></a></li>';
				
				echo '<li><a ';
				if ($_GET['s'] == 'view') 
					echo 'class="selected"';
				echo 'href="index.php?i=field-trip&s=view"><div class="menu_li">View</div></a></li>';
				
			}
		}
		
		
		?>
        </ul>
</div>