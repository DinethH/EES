
<?php include "../template/header.php"; include "../../../includes/db.php"; ?>
<h5 class="currentBar">Home &raquo; Research
<?php
	if ($_GET['GID'] == 1)
		echo ' &raquo; Fault &amp; Earthquake Mechanics';
	else if ($_GET['GID'] == 2)
		echo ' &raquo; The Stability of Underground Openings';
	else if ($_GET['GID'] == 3)
		echo ' &raquo; Clastic Intrusions';
?>
</h5>
<section style="width:1024px">

<style>
	#side_menu {
		
	}
	#pubs {
		list-style:none;
		text-indent:-2em;
	}
	#pubs li {
		padding-bottom:10px;
		text-align:justify;
	}
	p {
		text-indent:2em;
		text-align:justify;
	}
	#page_nav li {
		display:inline;
		padding:5px;
		background:#FFF;
		border-radius:2px;
		box-shadow:1px 1px 1px #000000;
	}
	#page_nav a:hover li {
		background:#FFC;
		color:black;
	}
	#page_nav .active li {
		background:#333;
		color:#FFF;
	}
	#page_nav {
		text-align:right;
	}
	#captopnList li {
		list-style:upper-alpha;
		text-align:justify;
	}
	figcaption {
		font-size:14px;
		color:#666;
	}
	figure {
		padding:7px;
		border:solid #e7e7e7;
		border-radius:3px;
		transition:all 0.25s ease;
		margin: 0px auto;
	}
	figure:hover {
		border:solid #999;
		box-shadow:1px 1px 5px #999;
		border-radius:3px;
		transition:all 0.25s ease;
	}
	#r_page_c {
		animation: fadein 0.25s;
		-moz-animation: fadein 0.25s; /* Firefox */
		-webkit-animation: fadein 0.25s; /* Safari and Chrome */
		-o-animation: fadein 0.25s; /* Opera */

	}
	@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
	}
	@-moz-keyframes fadein { /* Firefox */
		from {
			opacity:0;
		}
		to {
			opacity:1;
		}
	}
	@-webkit-keyframes fadein { /* Safari and Chrome */
		from {
			opacity:0;
		}
		to {
			opacity:1;
		}
	}
	@-o-keyframes fadein { /* Opera */
		from {
			opacity:0;
		}
		to {
			opacity: 1;
		}
	}​
.publication {
	display: block;
	margin:5px;
	padding:10px;
	padding-right:3px;
	padding-left:33px;
	
	
	border:solid #e7e7e7;
	border-radius:3px;
}
.publication:hover {
	box-shadow:1px 1px 5px #999;
	border-radius:3px;
	transition:all 0.25s ease;
}
</style>

<div id="wrapper" align="left">

	<table class="clearfix" width="1024px">
        <tr>
            <td valign="top">
                <div id="side_menu" style="width:250px">
                <nav>
                    <ul>
              			<?php
							if ((int)$_GET['GID'] == 1) {
						?>
                            
                         <li><a <?php if (isset($_GET['s']) && $_GET['s'] == 'fs' || !isset($_GET['s']) ) echo 'class="selected"'; ?> href="?GID=1&s=fs"><div class="menu_li">Field Studies</div></a></li>
                        <li><a <?php if (isset($_GET['s']) && $_GET['s'] == 'es') echo 'class="selected"'; ?> href="?GID=1&s=es"><div class="menu_li">Experimental Studies</div></a>
                        <li><a <?php if (isset($_GET['s']) && $_GET['s'] == 'ns') echo 'class="selected"'; ?> href="?GID=1&s=ns"><div class="menu_li">Numerical Studies</div></a>
      
                    	<?php
							}
						?>
                        
                        <?php
							if ((int)$_GET['GID'] == 2) {
						?>
                            
                         <li><a <?php if (isset($_GET['s']) && $_GET['s'] == 'ov' || !isset($_GET['s']) ) echo 'class="selected"'; ?> href="?GID=2&s=ov"><div class="menu_li">Overview</div></a></li>
      
                    	<?php
							}
						?>
                        
                        
                        
                        <?php
							if ((int)$_GET['GID'] == 3) {
						?>
                            
                         <li><a <?php if (isset($_GET['s']) && $_GET['s'] == 'ci' || !isset($_GET['s']) ) echo 'class="selected"'; ?> href="?GID=3&s=ci"><div class="menu_li">Overview</div></a></li>
      
                    	<?php
							}
						?>
                        
                        
                        
                         <?php
							if ((int)$_GET['GID'] == 4) {
						?>
                            
                         <li><a <?php if (isset($_GET['s']) && $_GET['s'] == 'nsf' || !isset($_GET['s']) ) echo 'class="selected"'; ?> href="?GID=3&s=nsf"><div class="menu_li">Overview</div></a></li>
      
                    	<?php
							}
						?>
                    </ul>
                </nav>
                </div>
            </td>
            <td align="left"  valign="top" style="padding-left:30px;">
                      
             		<div id="r_page_c" style="width:700px;">
					<?php
                        if ((int)$_GET['GID'] == 1) {
							echo '<h1>Fault &amp; Earthquake Mechanics</h1>';
                            include("fem.php");
							?>
                            <menu id="page_nav">
                        	<?php
								if (isset($_GET['s']) && $_GET['s'] == 'fs' || !isset($_GET['s']) ) {
								
							?>
                            <a href="?GID=1&s=fs"  class="active"><li>1</li></a>
                            <a href="?GID=1&s=es"><li>2</li></a>
                            <a href="?GID=1&s=ns"><li>3</li></a>
                            <a href="?GID=1&s=es"><li>&gt;&gt;</li></a>
							<?php
								}
								elseif ($_GET['s'] == 'es') {
								
							?>
                            <a href="?GID=1&s=fs"><li>&lt;&lt;</li></a>
                        	<a href="?GID=1&s=fs"><li>1</li></a>
                            <a href="?GID=1&s=es"  class="active"><li>2</li></a>
                            <a href="?GID=1&s=ns"><li>3</li></a>
                            <a href="?GID=1&s=ns"><li>&gt;&gt;</li></a>
							<?php
								}
								elseif ($_GET['s'] == 'ns') {
								
							?>
                            <a href="?GID=1&s=es"><li>&lt;&lt;</li></a>
                        	<a href="?GID=1&s=fs"><li>1</li></a>
                            <a href="?GID=1&s=es"><li>2</li></a>
                            <a href="?GID=1&s=ns"  class="active"><li>3</li></a>
                            <?php
								}
							?>
                        	
                        </menu>
                        <?php
						} else if ((int)$_GET['GID'] == 2) {
							echo '<h1 style="">Incorporating topographic stress perturbations and geological structures into stability forecasting in underground mines </h1>';
                            include("suo.php");
						} else if ((int)$_GET['GID'] == 3) {
							echo '<h1>A field-based geomechanical study of the formation, deformation, and internal structure of reservoir-scale sandstone dikes, Sheep Mountain Anticline, WY</h1>';
                            include("ci.php");
					
						} else if ((int)$_GET['GID'] == 4) {
							echo '<h1>Collaborative Research: Developing a link between dynamic friction and fracture mechanics models of earthquake rupture using a new dynamic double-direct shear apparatus</h1>';
                            include("nsf.php");
						}
                        
                    ?>  
                        
                                            
                    <?php
						
					?>      
                    </div>
            </td>
		</tr>
	</table>
<br />
</div>



    
</section>

<?php include "../template/footer.php"; ?>