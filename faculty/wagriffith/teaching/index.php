
<?php include "../template/header.php"; include "../../../includes/db.php";  ?>

<style>
.paragraph {
	display: block;
}
#book {
	width:0px;
	overflow:hidden;
	height:20px;
						 -webkit-transition:width 0.25s ease;
	 -moz-transition:width 0.25s ease;
	 -ms-transition:width 0.25s ease;
	 transition:width 0.25s ease;
	padding-left:10px;
}
#bookS:hover #book {
	width:30px;
						 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
#bookS {
	height:40px;
	vertical-align:middle;
	color:#666;
}
#bookS a {
	color:#666;
}
#bookS:hover {
	text-decoration:underline;
}
.item {
	background-color:#FFF;
	margin:10px;
	margin-bottom:20px;
	border-radius:3px;
	padding:20px;
						 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}
.item:hover {
	box-shadow:1px 1px 5px #999;
	border-radius:3px;
						 -webkit-transition:all 0.25s ease;
	 -moz-transition:all 0.25s ease;
	 -ms-transition:all 0.25s ease;
	 transition:all 0.25s ease;
}

</style>

<h5 class="currentBar">Home &raquo; Teaching</h5>
<section style="width:960px">

<h1>Teaching Experience</h1>

<p class="paragraph" style="text-indent:3em">
Teaching has been a major focus for me since I graduated from college in 1999.  After graduating from the College of William and Mary as a Geology major and History minor, I moved to Houston, Texas to become a middle school science and US History teacher as a Teach for America corps member.  I earned my secondary teaching credentials in the state of Texas by the end of my first year of teaching, and I have been passionate about teaching ever since.  The following is a list of the coursesI teach at UT-Arlington.
</p>

<h2>Courses Taught:</h2>

<?php
	$sql = mysql_query("SELECT * FROM _agriffith_courses");
	while ($row = mysql_fetch_array($sql)) {
?>
	<div class="item">
    	<h3><?php echo $row['title']; ?></h3>
        <p class="paragraph"><?php echo $row['description']; ?></p>
        <?php if (strlen ($row['book']) > 0 && strlen($row['book_link']) > 0) {
		?>
        <table><tr><td>
        	<table>
            	<tr id="bookS">
                	<td>
                    	<img style="" src="../images/icons/book.png" height="24" />
                    </td>
                    <td style="padding-left:10px;">
                    	 <a target="_blank" href="<?php echo $row['book_link']; ?>"><?php echo $row['book']; ?></a><td><div id="bookIm"><a target="_blank" href="<?php echo $row['book_link']; ?>"></a>
   
                    </td>
                </tr>
            </table>
       </td></tr></table>
        <?php } elseif (strlen ($row['book']) > 0 ) {
		?>
        <table><tr><td><table>
            	<tr>
                	<td>
                    	<img style="" src="../images/icons/book.png" height="24" />
                    </td>
                    <td style="padding-left:10px;">
                    	 <?php echo $row['book']; ?>
   
                    </td>
                </tr>
            </table>
			</td></tr></table>
        <?php }?>
    </div>
<?php
	}
?>
</section>

<?php include "../template/footer.php"; ?>