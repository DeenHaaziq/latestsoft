<?php

require '../database_connection.php';

$list_categories = "SELECT * FROM category;";
$query_run = mysql_query($list_categories);


$list_pricingprofiles = "SELECT pricingprofile_code, pricingprofile_name FROM pricingprofile;";
$list_pricingprofiles = mysql_query($list_pricingprofiles);


$list_suppliers = "SELECT supplier_code, supplier_name FROM supplier;";
$list_suppliers = mysql_query($list_suppliers);


?>