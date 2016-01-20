<?php 
include "../template/header.php"; 
include '../../../includes/db.php';

?>
<style>
.main li {
	line-height:28px;
}
.sideMenu {
	position:fixed;
	background:#CCC;
	width:25px;
	margin-left:979px;
	top:%50;
	-webkit-transition:all 0.5s ease;
	-moz-transition:all 0.5s ease;
	-ms-transition:all 0.5s ease;
	transition:all 0.5s ease;
	overflow:hidden;
	white-space:nowrap;
	padding:10px;
	border-bottom-left-radius:10px; 
	border-top-left-radius:10px;
	box-shadow:0px 1px 1px #000;
}
.sideMenu:hover {
	width:200px;
	margin-left:804px;
	-webkit-transition:all 0.5s ease;
	-ms-transition:all 0.5s ease;
	-moz-transition:all 0.5s ease;
	transition:all 0.5s ease;
}
h3 {
	font-size:12px;
	padding:3px;
	border-radius:2px;	
	color:#000;
	line-height:6px;
}
h3:hover {
	color:#F90;
}


</style>


<h5 class="currentBar">Home &raquo; Background</h5>

<div class="sideMenu">
<?php
	$query = "SELECT * FROM _hunt_background";
	$results = mysql_query($query);
	while ($row = mysql_fetch_array($results)) {
?>
	<a href="#<?php echo substr($row['title'],0,4); ?>"><h3><?php echo $row['title']; ?></h3></a>
<?php
	}
?>

</div>
    
<section class="main">
    <?php
        $query = "SELECT * FROM _hunt_background";
        $results = mysql_query($query);
		while ($row = mysql_fetch_array($results)) {
	?>		
		<a name="<?php echo substr($row['title'],0,4); ?>"><h1 style="font-size:18px"><?php echo $row['title']; ?></h1></a>
        		
	<?php
		echo "<span class=\"text\">".$row['text']."</span>";
		}
    ?>
    	



</section>
<br />
<br />
<?php include "../template/footer.php"; ?>