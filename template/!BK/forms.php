<div id="wrapper" align="left">
<table class="clearfix" style="padding-left:10px;" width="1024px">
	<tr>
    	<td width="1024" id="current_bar">
        	<?php include "current_bar.php"; ?>
        </td>
    </tr>
	<tr>
    	<td valign="top" width="100">
			<?php include "side_menu.php"; ?>
		</td>
        <td align="left" width="900" valign="top">
        
        	<?php
				if ($_GET['i'] == 'forms' && isset($_GET['s']) && $_GET['s'] == 'ner' )
					include "template/forms_news_event.php";
			?>        
		</td>
	</tr>
</table>
</div>