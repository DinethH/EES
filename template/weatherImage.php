<?php
include "../includes/db.php";

$sql = "SELECT * FROM weather";
$results = mysql_query($sql);
$row = mysql_fetch_array($results);


header ("Content-type: image/png");
echo $row['image'];
?>