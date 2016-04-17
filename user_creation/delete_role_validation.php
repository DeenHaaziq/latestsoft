<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$u_rolecode = $_POST['u_rolecode'];
$editRow = $_POST['selector'];


foreach ($editRow as $id) 
{

$id2 = substr($id, 0, -1);

$query="DELETE FROM role_rights WHERE rr_rolecode = '$u_rolecode' AND rr_modulecode = '$id2';"; 
$result=mysql_query($query) or die(mysql_error());

header ('location:delete_role.php');
				

}
// attempt insert query execution



 

// close connection

//mysql_close($DB);

