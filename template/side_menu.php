<?php
$url_get = $_GET['i'];
?>

<div id="side_menu" style="width:250px">
	<nav>
    	<ul> 
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
				// uforum
				echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'uforum')
					echo 'class="selected"';
				echo 'href="http://president.ucar.edu/university-relations/uforum" target="_blank"><div class="menu_li">UFORUM</div></a></li>';
				
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
                                // grad students
                                echo '<li><a ';
				if (isset($_GET['s']) && $_GET['s'] == 'grad')
					echo 'class="selected"';
				echo 'href="index.php?i=people&s=grad"><div class="menu_li">Grad Students</div></a></li>';
				
			
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
							/*echo '<li><a href="index.php?i=academics&s=graduate&u=egta"><div class="menu_li">Enhanced GTA';
							if (isset($_GET['u']) && $_GET['u'] == 'egta')
								echo ' &raquo;';
							echo '</div></a></li>';*/
							echo '<li><a href="assets/Request_Recommendation.pdf"><div class="menu_li">Request for Recommendation';
							
							echo '</div></a></li>';
							
							
							echo '<li><a target="_blank" href="http://grad.pci.uta.edu/students/finances/fellowships/uta/"><div class="menu_li">Fellowships for Graduate Students';
							
							echo '</div></a></li>';
						echo '</ul>';
					}
					// certificates
					echo '<li><a ';
					if (isset($_GET['s']) && $_GET['s'] == 'certificates')
					echo 'class="selected"';
				echo 'href="index.php?i=academics&s=certificates"><div class="menu_li">Certificates</div></a></li>';
			}
			// research
			if ($_GET['i'] == 'research') {
			echo '<li><a class="selected"';
				echo 'href="index.php?i=research"><div class="menu_li">Research</div></a></li>';
				echo'
                <ul id="sub_menu">
                	<a href="#Biostr"><li><div class="menu_li">Biostratigraphy</div></li></a>
					<a href="#Climat"><li><div class="menu_li">Climate Research Group</div></li></a>
                    <a href="#Enviro"><li><div class="menu_li">Environmental Geochemistry</div></li></a>
                    <a href="#Geoche"><li><div class="menu_li">Geochemistry </div></li></a>
					<a href="#Geomec"><li><div class="menu_li">Geomechanics </div></li></a>
                    <a href="#Hydrog"><li><div class="menu_li">Hydrogeology </div></li></a>
                    
                    <a href="#Neotec"><li><div class="menu_li">Neotectonics-Geodesy</div></li></a>
					<a href="#Paleoc"><li><div class="menu_li">Paleoceanography</div></li></a>
                    
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
			// search			
			if ($_GET['i'] == 'search') {
				echo '<li><a class="selected"';
				echo 'href="index.php?i=search"><div class="menu_li">Search</div></a></li>';
			}
			// alumni
			if ($_GET['i'] == 'alumni') {
				// ees alumni
                                echo '<li><a ';
				if ($_GET['s'] == 'al') 
					echo 'class="selected"';
				echo 'href="?i=alumni&s=al"><div class="menu_li">EES Alumni</div></a></li>';
                                // alumni members
                                echo '<li><a ';
				if ($_GET['s'] == 'members') 
					echo 'class="selected"';
				echo 'href="?i=alumni&s=members"><div class="menu_li">Members</div></a></li>';
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
				
				echo '<li><a ';
				if ($_GET['s'] == 'change' || $_GET['s'] == 'edit' || $_GET['s'] == 'delete') 
					echo 'class="selected"';
				echo 'href="index.php?i=field-trip&s=change"><div class="menu_li">Edit/Delete</div></a></li>';
				
			}
			
		}

		?>
        </ul>
        </nav>
</div>