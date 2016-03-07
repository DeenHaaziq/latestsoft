<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$category_category_description = $_POST['category_name'];


$category_availability_Check = "SELECT category_description FROM category WHERE category_description = '$category_category_description';";
$query_run = mysql_query($category_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Category already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:addCategory.php");

				}
				else
				{
					$sql = "INSERT INTO category (category_description) VALUES ('$category_category_description')";

						if(mysql_query($sql))
						{

						$msg2 ='Category ' .$category_category_description. ' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: addCategory.php');

						} 
						else
						{

						$msg3 ="Couldn't add category. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: addCategory.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

