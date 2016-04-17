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

// This is to check available rights for the selected group
$right_availability_Check = "SELECT rr_rolecode, rr_modulecode FROM role_rights WHERE rr_rolecode = '$u_rolecode' AND rr_modulecode = '$id2';";
$query_run = mysql_query($right_availability_Check);
if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Role already assigned.';
					$_SESSION['msg'] = $msg1 ;
					header("location:add_role.php");

				}
				else
				{
//echo $id2;
					$query="INSERT INTO role_rights (rr_rolecode, rr_modulecode, rr_create, rr_edit, rr_delete, rr_view) VALUES ('$u_rolecode', '".$id2."', 'Yes', 'Yes', 'Yes', 'Yes')";
					$result=mysql_query($query) or die(mysql_error());

					header ('location:add_role.php');
				}

}
// attempt insert query execution



 

// close connection

//mysql_close($DB);

