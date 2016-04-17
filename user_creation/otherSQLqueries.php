<?php

require '../database_connection.php';

$list_groups = "SELECT * FROM role;";
$query_run_group = mysql_query($list_groups);

$list_branches = "SELECT * FROM branch;";
$query_run_branches = mysql_query($list_branches);


$list_pricingprofiles = "SELECT pricingprofile_code, pricingprofile_name FROM pricingprofile;";
$list_pricingprofiles = mysql_query($list_pricingprofiles);


$list_suppliers = "SELECT supplier_code, supplier_name FROM supplier;";
$list_suppliers = mysql_query($list_suppliers);


?>