<?php 
include "../template/header.php";
include "../../../includes/db.php"; 
if (!isset($_GET['i'])) {
	$_GET['i'] = 'members';
}

?>
<h5 class="currentBar">Home &raquo; Current &amp; Past Students</h5>


<script type="text/javascript"
	src="../../../js/trip_slide.js"></script>
    
<script type="text/javascript">    
<!--
  var viewer = new PhotoViewer();
  viewer.add('../images/group/current/group-2011.jpg');
  viewer.add('../images/group/current/christina.jpg');
  viewer.add('../images/group/current/erika.jpg');
  viewer.add('../images/group/current/bbq.jpg');
  viewer.add('../images/group/current/cheng.jpg');
  viewer.add('../images/group/current/jia.jpg');
  viewer.add('../images/group/current/philip.jpg');
  viewer.add('../images/group/current/rob.jpg');
  viewer.add('../images/group/current/sheng.jpg');
  viewer.add('../images/group/current/shoi.jpg');
  viewer.add('../images/group/current/steven.jpg');
  viewer.add('../images/group/current/toru.jpg');
  viewer.add('../images/group/current/zhi.jpg');
  viewer.add('../images/group/current/Gao conducts batch sorption tests.jpg');
  viewer.add('../images/group/current/Gordon guest-lectures Hydrogeology course.jpg');
  viewer.add('../images/group/current/Group members in Oct 2009.jpg');
  viewer.add('../images/group/current/Ian & Rob work with imbibition.jpg');
  viewer.add('../images/group/current/Liu is exams the imbibition of shale.jpg');
  viewer.add('../images/group/current/Pukar conducts imbibition test.jpg');
  viewer.add('../images/group/current/Ray prepares samples for ICP-MS analyses.jpg');
  viewer.add('../images/group/current/Sun Guoxin uses LC-ICP-MS for arsenic studies.jpg');
    viewer.add('../images/group/current/oct2013.jpg');
  viewer.add('../images/group/current/dan.jpg');
  viewer.add('../images/group/current/sep2013.jpg');
  viewer.add('../images/group/current/simon.jpg');
  viewer.add('../images/group/current/jon.jpg');
  viewer.add('../images/group/current/ugo.jpg');
  viewer.add('../images/group/current/taka.jpg');
  viewer.add('../images/group/current/nathan.jpg');
  viewer.add('../images/group/current/ian-def.jpg');
//--></script>
<section style="width:960px">
    <style>
	#people td {
		padding:5px;
		text-align:left;
	}

</style>
   
  <br /><h2 style="margin:0" class="grayB">Students</h2><br /><br />


    
    <a href="?i=members"><h3 style="margin-left:0px;" class="button white">Members</h3></a>
    <a href="?i=photos"><h3 class="button white">Photos</h3></a>
    
  <br>
<br>




    <?php if (isset($_GET['i']) && $_GET['i']=='members') { ?>
  <h3 class="news">Current Research Group Members</h3><br /><br />

<div>
<table id="people" width="100%" style="text-align:justify">
    	<tr>
	<?php
		$count = 1;
		$sql = mysql_query("SELECT * FROM _hu_current_students WHERE type = 1");
		while ($row = mysql_fetch_array($sql)) {
			
	?>
        	<td width="100px"><img width="100" src="../images/members/<?php 
																	if (strlen($row['img']) > 0) {
																		echo $row['img']; 
																	} else {
																		echo 'default.jpg';
																	}
																	
																	?>" /></td>
            <td><strong><?php echo $row['name']; ?></strong><br /><span style="font-size:14px;"><?php echo $row['text2']; ?></span></td>
    <?php
			if ($count % 2 == 0) {
				echo '</tr><tr>';
			}
			$count++;
		}
	?>
        </tr>
    </table>
</div>
     <br />
   


  <h3 class="news">Past Graduate Students</h3><br /><br />

<div>
<table id="people" width="100%" style="text-align:justify">
    	<tr>
	<?php
		$count = 1;
		$sql = mysql_query("SELECT * FROM _hu_current_students WHERE type = 2");
		while ($row = mysql_fetch_array($sql)) {
			
	?>
        	      	<td width="100px"><img width="100" src="../images/members/<?php 
																	if (strlen($row['img']) > 0) {
																		echo $row['img']; 
																	} else {
																		echo 'default.jpg';
																	}
																	
																	?>" /></td>
            <td><strong><?php echo $row['name']; ?></strong><br /><span style="font-size:14px;"><?php echo $row['text2']; ?></span></td>
    <?php
			if ($count % 2 == 0) {
				echo '</tr><tr>';
			}
			$count++;
		}
	?>
        </tr>
    </table>


</div>  
  <br />
  <h3 class="news">Past Post-Doctoral Researchers</h3><br /><br />
<div>
<table id="people" width="100%" style="text-align:justify">
    	<tr>
	<?php
		$count = 1;
		$sql = mysql_query("SELECT * FROM _hu_current_students WHERE type = 3");
		while ($row = mysql_fetch_array($sql)) {
			
	?>
        	      	<td width="100px"><img width="100" src="../images/members/<?php 
																	if (strlen($row['img']) > 0) {
																		echo $row['img']; 
																	} else {
																		echo 'default.jpg';
																	}
																	
																	?>" /></td>
            <td><strong><?php echo $row['name']; ?></strong><br /><span style="font-size:14px;"><?php echo $row['text2']; ?></span></td>
    <?php
			if ($count % 2 == 0) {
				echo '</tr><tr>';
			}
			$count++;
		}
	?>
        </tr>
    </table>
</div>  		
  <br />
  <h3 class="news">Past Visiting Researchers</h3><br /><br />
<div>
<table id="people" width="100%" style="text-align:justify">
    	<tr>
	<?php
		$count = 1;
		$sql = mysql_query("SELECT * FROM _hu_current_students WHERE type = 4");
		while ($row = mysql_fetch_array($sql)) {
			
	?>
        	      	<td width="100px"><img width="100" src="../images/members/<?php 
																	if (strlen($row['img']) > 0) {
																		echo $row['img']; 
																	} else {
																		echo 'default.jpg';
																	}
																	
																	?>" /></td>
            <td><strong><?php echo $row['name']; ?></strong><br /><span style="font-size:14px;"><?php echo $row['text2']; ?></span></td>
    <?php
			if ($count % 2 == 0) {
				echo '</tr><tr>';
			}
			$count++;
		}
	?>
        </tr>
    </table>
</div>    	
 <br />       
  <h3 class="news">Past Undergraduate Students</h3><br /><br />
 <div>
 <table id="people" width="100%" style="text-align:justify">
    	<tr>
	<?php
		$count = 1;
		$sql = mysql_query("SELECT * FROM _hu_current_students WHERE type = 5");
		while ($row = mysql_fetch_array($sql)) {
			
	?>
        	      	<td width="100px"><img width="100" src="../images/members/<?php 
																	if (strlen($row['img']) > 0) {
																		echo $row['img']; 
																	} else {
																		echo 'default.jpg';
																	}
																	
																	?>" /></td>
            <td><strong><?php echo $row['name']; ?></strong><br /><span style="font-size:14px;"><?php echo $row['text2']; ?></span></td>
    <?php
			if ($count % 2 == 0) {
				echo '</tr><tr>';
			}
			$count++;
		}
	?>
        </tr>
    </table>
</div>       	
 <br />       
  <h3 class="news">Past High-School Students</h3><br /><br />
 <div>
 <table id="people" width="100%" style="text-align:justify">
    	<tr>
	<?php
		$count = 1;
		$sql = mysql_query("SELECT * FROM _hu_current_students WHERE type = 6");
		while ($row = mysql_fetch_array($sql)) {
			
	?>
        	      	<td width="100px"><img width="100" src="../images/members/<?php 
																	if (strlen($row['img']) > 0) {
																		echo $row['img']; 
																	} else {
																		echo 'default.jpg';
																	}
																	
																	?>" /></td>
            <td><strong><?php echo $row['name']; ?></strong><br /><span style="font-size:14px;"><?php echo $row['text2']; ?></span></td>
    <?php
			if ($count % 2 == 0) {
				echo '</tr><tr>';
			}
			$count++;
		}
	?>
        </tr>
    </table>
</div>       
    
    <?php }  elseif (isset($_GET['i']) && $_GET['i']=='photos') {
		include("photos.php");
		} ?>
    
</section>

<?php include "../template/footer.php"; ?>