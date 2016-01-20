<?php
$USER = "idineth_idineth";
$PASSWORD = "trustnoone";
$HOST = "localhost";
$DATABASE = "idineth_ees";

//my sql
$conn=mysql_connect($HOST,$USER,$PASSWORD) or die ("Unable to connect to the database:".mysql_error());

//select database
mysql_select_db($DATABASE,$conn) or die ("Unable to select the database:".mysql_error());

?>