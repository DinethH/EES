
<?php $index = 1; ?>
<?php 
    include "template/header.php";
    include '../../includes/db.php';
?>
<section>
<br />
      
	<div style="width:700px; margin:0 auto; padding:30px; background:#CCC; border-radius:5px; -moz-box-shadow: 0 0 5px 5px #888;
-webkit-box-shadow: 0 0 5px 5px#888;
box-shadow: 0 0 5px 5px #888;">
		<?php
            $query = "SELECT * FROM _hunt_home LIMIT 1";
            $results = mysql_query($query);
            $row = mysql_fetch_array ($results);  
        ?>
        <table>
            <tr>
                <td>
                    <img src="template/viewimage.php" height="300" />
                </td>
                <td style="padding-left:20px;">
                	<span><h1>Andrew Hunt, Ph.D.</h1></span>
                    <span style="font-size:18px;">"<?php echo $row['message']; ?>"</span>    
                </td>
            </tr>
        </table>
    </div>
  
<br />
</section>

<?php include "template/footer.php"; ?>