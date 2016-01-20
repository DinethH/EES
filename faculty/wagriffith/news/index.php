
<?php include "../template/header.php"; include "../../../includes/db.php";  include "../../../includes/functions.php";?>
<h5 class="currentBar">Home &raquo; News</h5>
<section style="width:960px">

<style>
#news_group {

}
#news_group li {
	list-style:none;
	font-size:16px;
	text-align:justify;
	margin-bottom:20px;
	border-left:3px solid #CCC;
	padding-left:15px;
	
}
.date_group {
	width:200px;
	color:#333;
	font-size:24px;
	text-shadow:1px 1px 1px #FFFFFF;
}
.divider {
	background-color:#CCC;
	width:3px;
}
.news_item {
		/*border:solid #e7e7e7;*/
		border-radius:3px;
					 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
.news_item:hover {
		
		/*box-shadow:1px 1px 5px #999;
		border-radius:3px;
			 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;*/
}
.hoverBorder:hover {
	box-shadow:1px 1px 5px #999;
	border-radius:3px;
						 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;	
}
</style>






<?php
	$sql = mysql_query("SELECT * FROM _agriffith_news ORDER BY date DESC");
	$dates = array();
	$count = 1;
	while ($row = mysql_fetch_array($sql)) {
		if (!in_array((substr($row['date'],0,7)), $dates)) {
			//$dates[$count] = getMonthName(substr($row['date'],5,2)).", ".substr($row['date'],0,4);
			$dates[$count] = substr($row['date'],0,7);
		}
		$count++;
	}
	
?>


<?php
	foreach ($dates as $date) {
?>
	<div class="hoverBorder" style="background-color:#FFF; border-radius:2px; margin:20px; padding:10px;">
	<table cellpadding="0" cellspacing="0">
	<tr>
    	<td class="date_group" valign="top">
    		<?php echo getMonthName(substr($date,5,2)).", ".substr($date,0,4); ?>
        </td>

       	<td width="15" valign="top">
        </td>
    
    	<td valign="top">
        	<span id="news_group">
           	<?php
				$sql2 = mysql_query("SELECT * FROM _agriffith_news WHERE date LIKE '$date%' ORDER BY date");
				while ($row = mysql_fetch_array($sql2)) {
					echo "<li class='news_item'>".$row['description']."</li>";
				}
			?>  
            </span>  
        </td>
    </tr>
	</table>
	</div>
<?php
	}
?>


</section>

<?php include "../template/footer.php"; ?>