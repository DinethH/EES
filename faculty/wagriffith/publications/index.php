
<?php include "../template/header.php";include "../../../includes/db.php"; ?>

<style>
.publication {
	display: block;
	
	text-indent: -2em;
	margin:5px;
	padding-right:3px;
	padding-left:33px;
	
	
	border:solid #e7e7e7;
	border-radius:3px;
	
}
.publication:hover {
	box-shadow:1px 1px 5px #999;
	border-radius:3px;
						 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
.size {
	background-color:#FFF;
	padding:5px;
	border-radius:2px;
	visibility:hidden;
	font-weight:bold;
}
a:hover + .size {
	visibility:visible;
}
</style>

<h5 class="currentBar">Home &raquo; Publications</h5>
<section style="width:960px">

<h1>Publications</h1><br>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type!='review' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">
	<p>
	<?php echo $row['description']; ?>
    <?php
		if (strlen($row['pdf']) > 0) {	
	?>
    	
        	<a href="../assets/publications/<?php echo $row['pdf'] ?>"><img alt="<?php echo $row['pdf'] ?>" width="20" src="../images/pdf.png"></a>
            <span class="size">size: <?php echo round(filesize('../assets/publications/'.$row['pdf'])/1024); ?> KB</span>
        
    <?php
		}
	?>
    </p>
</div>
<?php }
?>


<br>

<h1>Articles in Review/Revision/Preparation</h1><br>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_publications WHERE type='review' ORDER BY ID DESC");
	while ($row = mysql_fetch_array($sql)) {
?>
<div class="publication">
	<p><?php echo $row['description']; ?></p>
</div>
<?php }
?>

<p><br>*denotes student author</p>
  
    
</section>

<?php include "../template/footer.php"; ?>