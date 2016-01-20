
    
    <div id="wrapper" align="left">

<table class="clearfix" style="padding-left:10px" width="1024">
	<tr>
    	<td width="1024" id="current_bar">
        	<?php include "current_bar.php"; ?>
        </td>
    </tr>
	<tr valign="top">
    	<td width="100">
			<?php include "side_menu.php"; ?>
		</td>
        
        <td>
<div style="width:700px; padding-right:50px;"> 
	<?php
		if (isset($_GET['s']) && $_GET['s']=='undergraduate')
			include "undergraduate.php";
		if (isset($_GET['s']) && $_GET['s']=='graduate')
			include "graduate.php";
		if (isset($_GET['u']) && $_GET['u'] == 'core')
			include "graduate_core_courses.php";
	
	?>
</div>
        </td>
	</tr>
</table>





    </div>



<!-- CONTAINER END -->

<!-- OUTER WRAPPER END -->

