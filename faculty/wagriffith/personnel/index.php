
<?php include "../template/header.php"; include "../../../includes/db.php"; ?>
<h5 class="currentBar">Home &raquo; Personnel</h5>
<section style="width:960px">

<style>
#email_link:hover {
	text-decoration:underline;
	color:#666;
}
#email_link {
	color:#666;
}

.tint img:hover {
	opacity:0.5;
	transition:all 0.25s ease-in-out;
}
.tint img {
	opacity:1;
		 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
#tint {
	background-color:#000; height:300px; width:300px; margin-top:-290px; position:relative;
	opacity:0;
		 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
#tint:hover {
	opacity:0.5;
	border-radius:3px;
	box-shadow:1px 1px 1px #000;
		 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
a:hover span {
	color:#666;
		 -webkit-transition:opacity 0.25s ease;
	 -moz-transition:opacity 0.25s ease;
	 -ms-transition:opacity 0.25s ease;
	 transition:opacity 0.25s ease;
}
a:hover {
	text-decoration:underline;
}
#profile #profile_pic {
	 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
#profile:hover #profile_pic {
	-webkit-transform:scale(1.2,1.2);
	-moz-transform:scale(1.2,1.2);
	-ms-transform:scale(1.2,1.2);
	transform:scale(1.2,1.2);
	 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
</style>


<table>
<tr>
<?php
	$sql = mysql_query("SELECT * FROM _agriffith_personnel");
	$p_count = 0;
	while ($row = mysql_fetch_array($sql)) {
		if ($p_count%3 == 0) {
			echo '</tr><tr>';
		}
		
?>
	<td style="width:320px;" align="center">
    <div id="profile" style=" background-color:#FFFFFF; width:300px; height:450px; box-shadow:1px 1px 1px #CCC; border-radius:2px; padding-top:10px; margin-bottom:20px;">
    	
        <div style="width:280px; height:280px; overflow:hidden; ">
        	
            <img id="profile_pic" width="300" src="../images/personnel/<?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?>">
            
       
        </div>
        <a href="profile.php?ID=<?php echo $row['ID']; ?>">
         <div id="tint"></div>
        </a>
        
        
        <div style="text-align:left; padding:10px;">
        	<a href="profile.php?ID=<?php echo $row['ID']; ?>"><h3 style="font-size:18px"><?php echo $row['name'].'<br>'; ?></h3></a>
            <span style="color:#666;">
			<?php
            	$list = explode(',', $row['title']);
				if (isset($list[0]) && strlen($list[0]) > 0) echo $list[0].'<br>';	
				if (isset($list[1])) echo $list[1].'<br>';	
			?>
            <?php
            	if (strlen ($row['email']) > 0) {
			?>
					Email: <a id="email_link" href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email'].'<br>'; ?></a>
			<?php
				}
				if (strlen ($row['description']) > 0 || strlen($row['deg1']) > 0) {
					if (strlen($row['title']) == 0)
						echo '<br /><br />';
			?>
            	<a id="3dots" href="profile.php?ID=<?php echo $row['ID']; ?>"><span style="font-size:30px; font-weight:bold; margin-left:250px; position:absolute">...</span></a>            <?php
				}
			?>
            </span>
        </div>
    </div>
    </td>

<?php
	$p_count++;
	}
?>    
</tr>
</table>
</section>

<?php include "../template/footer.php"; ?>