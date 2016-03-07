<?php

$host_name ="localhost"; //Insert the host name
$dbusername ="root";  // insert user name 
$dbpassword=""; 		// Insert password;
$db_name ="multi-admin" ;		//insert Database name

$conn = mysql_connect("$host_name","$dbusername","$dbpassword") or die ( mysql_error() ."    Unable to connect to server");

mysql_select_db($db_name) or die (mysql_error() ."    Can not connet to the Database ");

?>