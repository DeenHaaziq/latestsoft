<?php

require '../database_connection.php';

$deleterow = $_POST['selector'];
//echo $deleterow;


foreach ($deleterow as $id) {
//echo $id;
$query="DELETE FROM category WHERE category_code = '".$id."';"; 
$result=mysql_query($query) or die('Error, query failed');
//echo '<br>';

header ('location:deleteCategory.php');

}
?>    