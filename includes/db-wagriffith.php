<?php
$USER = "wagriff";
$PASSWORD = "eysG8pMUDE";
$HOST = "webdb.uta.edu";
$DATABASE = "wagriff";

//my sql
$conn=mysql_connect($HOST,$USER,$PASSWORD) or die ("Unable to connect to the database:".mysql_error());

//select database
mysql_select_db($DATABASE,$conn) or die ("Unable to select the database:".mysql_error());

?>