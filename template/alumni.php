<style>
h6 {
	margin-right:60px;
}
</style>
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
                    if ($_GET['s'] == 'al') {
                        ?>
                            <h6>CONNECT WITH US</h6>
                                <a target="_blank" href="https://www.facebook.com/uta.geology" title="Connect with our Facebook Group"><img class="fade" width="50" src="images/facebookalumni.png"/></a>
                                <a target="_blank" href="http://www.linkedin.com/groups?gid=1898433&trk=NUS_JGRP_grp_nm&goback=.hom" title="Connect with our LinkedIn Alumni Group"><img class="fade" width="50" src="images/linkedinalumni.png"/></a>
                            <h6>CAREERS &amp; OPPORTUNITIES</h6>
                                <p>Have internships or career opportunities to offer? <a href="http://localhost:81/ees/index.php?i=contact" >Let us know</a>
                                </p>
                            <h6>SHARE YOUR EXPERIENCES</h6>
                                <p><a href="?i=contact">Share your experiences with us. </a>
                                </p>
                        <?php
                    }
                    else if ($_GET['s'] == 'members') {
                        include "alumni_members.php";
                    }
                ?>
                
            
            </td>
		</tr>
	</table>
<br />
</div>

<br>
