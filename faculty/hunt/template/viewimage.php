<?php

include '../../../includes/db.php';
$query = "SELECT * FROM _hunt_home LIMIT 1";
$results = mysql_query($query);
$row = mysql_fetch_array ($results);


header("Content-type: jpg");
print $row['image'];

?>