<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$group_name = $_POST['role_rolecode'];

echo $group_name;

$group_availability_Check = "SELECT role_rolecode FROM role WHERE group_name = '$group_name';";
$query_run = mysql_query($group_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Group already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:add_group.php");

				}
				else
				{
					$sql = "INSERT INTO role (role_rolecode) VALUES ('$group_name')";

						if(mysql_query($sql))
						{

						$msg2 ='Group ' .$group_name. ' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: add_group.php');

						} 
						else
						{

						$msg3 ="Couldn't add group. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: add_group.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

