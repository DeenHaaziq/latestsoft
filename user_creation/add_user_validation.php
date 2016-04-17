<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$u_username = $_POST['u_username'];
$u_password = $_POST['u_password'];
$u_rolecode = $_POST['u_rolecode'];
$u_branch = $_POST['u_branch'];

//echo $u_username;
//echo $u_password;
//echo $u_rolecode;


$user_availability_Check = "SELECT u_username FROM system_users WHERE u_username = '$u_username';";
$query_run = mysql_query($user_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Username already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:add_user.php");

				}
				else
				{
					$sql = "INSERT INTO system_users (u_username, u_password, u_rolecode, u_branch) VALUES ('$u_username', '$u_password', '$u_rolecode', '$u_branch')";

						if(mysql_query($sql))
						{

						$msg2 ='User '.$u_username.' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: add_user.php');

						} 
						else
						{

						$msg3 ="Couldn't add user. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: add_user.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

