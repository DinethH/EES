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
				if ($_GET['i'] == 'events' && !isset($_GET['s']) && !isset($_GET['id']))
					include "template/events_page.php";
				elseif (isset($_GET['s']) && $_GET['s'] == 'calendar' && !isset($_GET['id']))
					include "template/events_calendar.php";
				elseif (isset($_GET['id']))
					include "template/event_item.php";
			?>        
		</td>
	</tr>
</table>
</div>