
<?php include "../template/header.php"; include "../../../includes/db.php"; ?>

<?php
	$ID = (int) $_GET['ID'];
	if (is_int($ID)) {
		$sql = mysql_query("SELECT * FROM _agriffith_personnel WHERE ID=$ID");
		$p_count = 0;
		$row = mysql_fetch_array($sql);
		
	
?>
<style>
h1, h2 {
	background:none;
	margin:0px;
	padding:0px;
}
.circular {
	width: 200px;
	height: 200px;
	border-radius: 100px;
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	overflow:hidden;
	box-shadow:2px 2px 10px #999;
	}
#others {
		width: 50px;
	height: 50px;
	border-radius: 25px;
	-webkit-border-radius: 25px;
	-moz-border-radius: 25px;
	overflow:hidden;
	box-shadow:1px 1px 3px #000;
	 filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */

    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */
							 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
#others:hover {
	filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
    -webkit-filter: grayscale(0%);
							 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
.others_name {
	background-color:#FFF;
	border-radius:5px;
	padding:5px;
	display:block;
	position:absolute;
	margin-top:-100px;
	margin-left:-50px;
	visibility:hidden
}
.ot:hover .others_name {
	visibility:visible;
}
#contact_table td {
	padding-right:10px;
}
#profile_header {
	background-image: url(../images/personnel/profile_background.jpg);
	border-radius:3px;
}
.gradient {
	/* IE9 SVG, needs conditional override of 'filter' to 'none' */
	background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjU2JSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwLjY1Ii8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDAwMDAiIHN0b3Atb3BhY2l0eT0iMC42NSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
	background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.65) 56%, rgba(0,0,0,0.65) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(56%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 56%,rgba(0,0,0,0.65) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 56%,rgba(0,0,0,0.65) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 56%,rgba(0,0,0,0.65) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.65) 56%,rgba(0,0,0,0.65) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#a6000000',GradientType=0 ); /* IE6-8 */
	border-radius:3px;
	
	width:960px;
	height:250px;
	margin-top:-250px;
}
.bio {
	width:450px;
	float:left;
	background-color:#FFF;box-shadow:1px 1px 1px #CCC; border-radius:2px; padding:10px;
	margin-top:20px;
	border-top:6px solid #FF8080;
}
.education {
	width:450px;
	float:right;
	background-color:#FFF;box-shadow:1px 1px 1px #CCC; border-radius:2px; padding:10px;
	margin-top:20px;
	border-top:6px solid #FFFF80;
}
.clearfix:after { content: "."; display: block; height: 0; clear: both; visibility: hidden; }
.clearfix { display: inline-block; }
* html .clearfix { height: 1%; } /* Hides from IE-mac \*/
.clearfix { display: block; }

#degt1 {
	min-width:30px;
	padding-right:20px;
	height:30px;
}
#degt2 {
	width:60px;
	height:30px;
}
#degt3 {
	width:300px;
	height:30px;
}

</style>




<h5 class="currentBar">Home &raquo; Personnel &raquo; <?php echo $row['name']; ?></h5>
<section style="width:960px" class="clearfix">

<div itemscope itemtype="http://data-vocabulary.org/Person">
	<div id="profile_header" style="padding:20px;">
    <table>
    	<tr>
        	<td>
            	<div class="circular">
                	<span style="display:none;" itemprop="photo"><?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?></span>
        			<img id="pro_pic" width="200px;" src="../images/personnel/<?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?>">
                </div>
            </td>
            <td width="40">
            </td>
            <td style="color:#FFF;" valign="middle">
            	<h1 style="text-shadow:1px 1px 1px #000;"><span itemprop="name"><?php echo $row['name']; ?></span></h1>
                <span style="color:#DFDFDF;">
                <?php
					$list = explode(',', $row['title']);
					$title = $list[0];
					if (isset($list[1]) )
						$department = $list[1];		
				?>
                	<?php if (strlen($title) > 0) { ?><span itemprop="title"><?php echo $title ?></span><?php } ?><br />
                    <?php if (isset($list[1]) && strlen($department) > 0) { ?><span><?php echo $department ?></span><?php } ?><br />
                <?php if (strlen($row['email']) > 0) { ?>
                	<table id="contact_table" cellpadding="0" cellspacing="0" style="font-size:12px">
                    	<tr>
                        	<td valign="middle">
                            	<img style="margin-top:1px;" height="12" alt="email" src="../images/icons/email.png" />
                            </td>
                            <td align="middle">
                            	<a style="color:#DFDFDF;" href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                            </td>
                            <td width="10">
                            </td>
                        	<td>
                            	<?php if (strlen($row['mentis']) > 0) { ?><img height="24" alt="email" src="../images/icons/mentis.png" /><?php } ?>
                            </td>
                            <td>
                            	<a target="_blank" style="color:#DFDFDF;" href="<?php echo $row['mentis']; ?>"><?php echo $row['mentis']; ?></a>
                            </td>
                        </tr>
                    </table>
                <?php } ?>
                </span>
            </td>
        </tr>
    </table>
    </div>
    <div class="gradient">
    </div>
    
    
    
    <div class="clearfix">
    	<?php if (strlen($row['description']) > 0) { ?>
        <div class="bio">
        	<h2>About</h2><br />
        	<?php echo $row['description']; ?>
        </div>
        <?php } ?>
        
        <?php if (strlen($row['deg1']) > 0) { ?>
        <div class="education">
        	<h2>Education</h2><br />
         <!-- degree 1 -->
        <?php if (strlen($row['deg1']) > 0) {
			 $list = explode("|", $row['deg1']);
		?>
         <table style="border:0px; padding:0;" cellpadding="0" cellspacing="0">
        	<tr>
            	<td id="degt1"><?php echo $list['0']; ?></td>
                <td id="degt2"><?php echo $list['1']; ?></td>
                <td id="degt3"><?php echo $list['2']; ?></td>
            </tr>
        </table>
        <?php } ?>
        
        
        <!-- degree 2 -->
        <?php if (strlen($row['deg2']) > 0) {
			 $list = explode("|", $row['deg2']);
		?>
        <table style="border:0px; padding:0;" cellpadding="0" cellspacing="0">
        	<tr >
            	<td style="border-top:1px solid #000;" id="degt1"><?php echo $list['0']; ?></td>
                <td style="border-top:1px solid #000;" id="degt2"><?php echo $list['1']; ?></td>
                <td style="border-top:1px solid #000;" id="degt3"><?php echo $list['2']; ?></td>
            </tr>
        </table>
        <?php } ?>
        
        
        <!-- degree 3 -->
        <?php if (strlen($row['deg3']) > 0) {
			 $list = explode("|", $row['deg3']);
		?>
        <table style="border:0px; padding:0;" cellpadding="0" cellspacing="0">
        	<tr>
            	<td style="border-top:1px solid #000;" id="degt1"><?php echo $list['0']; ?></td>
                <td style="border-top:1px solid #000;" id="degt2"><?php echo $list['1']; ?></td>
                <td style="border-top:1px solid #000;" id="degt3"><?php echo $list['2']; ?></td>
            </tr>
        </table>
        <?php } ?>
        
         <!-- degree 4 -->
        <?php if (isset($row['deg4']) && strlen($row['deg4']) > 0) {
			 $list = explode("|", $row['deg4']);
		?>
         <table style="border:0px; padding:0;" cellpadding="0" cellspacing="0">
        	<tr>
            	<td id="degt1"><?php echo $list['0']; ?></td>
                <td id="degt2"><?php echo $list['1']; ?></td>
                <td id="degt3"><?php echo $list['2']; ?></td>
            </tr>
        </table>
        <?php } ?>
        
        </div>
        <?php } ?>
    </div>
</div>

<br />


<div class="bottom_border"></div>

<div style="margin-right:0px; text-align:right;">
	<table align="right">
    	<tr>
        	<?php
				$sql = mysql_query("SELECT * FROM _agriffith_personnel WHERE ID !=$ID");
				while ($row = mysql_fetch_array($sql)) {
			?>
        	<td style="padding:5px;">
            	<div class="ot"><a title="<?php echo $row['name']; ?>" href="profile.php?ID=<?php echo $row['ID']; ?>"><img id="others" alt="<?php echo $row['name']; ?>" height="50px;" src="../images/personnel/<?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?>"></a>
                <span class="others_name"><?php echo $row['name']; ?></span></div>
            </td>
            <?php } ?>
        </tr>
    </table>
</div>

<br>
<br>

  
    
</section>


<?php

	}
?>

<?php include "../template/footer.php"; ?>