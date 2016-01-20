
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
#pro_pic {
	border-radius:5px;
	box-shadow:1px 1px 3px #000;
}
p {
	font-size:16px;
}
#others {
	border-radius:3px;
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
a:hover {
	text-decoration:underline;
}
</style>




<h5 class="currentBar">Home &raquo; Personnel &raquo; <?php echo $row['name']; ?></h5>
<section style="width:960px">

<div itemscope itemtype="http://data-vocabulary.org/Person">
	<table>
    <tr>
    <td style="width:380x;">
    	<span style="display:none;" itemprop="photo"><?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?></span>
        <img id="pro_pic" height="300px;" src="../images/personnel/<?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?>">
   	</td>
    
    <td style="padding-left:30px;">
    	
        <h1><span itemprop="name"><?php echo $row['name']; ?></span></h1>
        <p style="line-height:30px;">
			<span itemprop="title"><?php echo $row['title']; ?></span><br>
         <?php if (strlen($row['email']) > 0) { ?>
        Email: <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; } ?></a><br>
        <?php if (strlen($row['mentis']) > 0) { ?>
        Faculty Profile: <a target="_blank" href="<?php echo $row['mentis']; ?>"><span itemprop="url"><?php echo $row['mentis']; } ?></span></a>
        
        </p>
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
        
        <p>
        	<?php echo $row['description']; ?>
        </p>        
   
    </td>
    </tr>
    </table>
    
   
</div>
<br>

<div class="bottom_border"></div>

<div style="margin-right:0px; text-align:right;">
	<table align="right">
    	<tr>
        	<?php
				$sql = mysql_query("SELECT * FROM _agriffith_personnel WHERE ID !=$ID");
				while ($row = mysql_fetch_array($sql)) {
			?>
        	<td style="padding:5px;">
            	<a title="<?php echo $row['name']; ?>" href="profile.php?ID=<?php echo $row['ID']; ?>"><img id="others" alt="<?php echo $row['name']; ?>" height="50px;" src="../images/personnel/<?php if (strlen($row['img']) > 0) echo $row['img']; else echo 'default.jpg'; ?>"></a>
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