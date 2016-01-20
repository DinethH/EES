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
                if (!isset($_GET['id'])) {
                    if (!isset($_GET['year']))
						$selectedYear = NULL;
					else
						$selectedYear = $_GET['year'];
                    include "template/news_page.php";
                }  
                if (isset($_GET['i']) & $_GET['i']=='news' && isset($_GET['id'])) {
                    include "template/news_item.php";
                }
				/*
                if (isset($_GET['i']) && $_GET['i']=='news' && isset($_GET['s']) && $_GET['s']=='archive' && !isset($_GET['id'])) {
                    include "template/news_archive.php";
					
                }
				*/
            ?>         
            </td>
		</tr>
	</table>
<br />
</div>
