<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$category_category_description = $_POST['category_name'];
$old_category_name = $_POST['old_category'];
//echo $category_category_description;


//to get the category ID
$category_id = "SELECT * FROM category WHERE category_description = '$old_category_name';";
$query_run = mysql_query($category_id);
$rows=mysql_fetch_array($query_run);
$category_code = $rows['category_code'];

//echo $category_code;


$category_availability_Check = "SELECT category_description FROM category WHERE category_description = '$category_category_description';";
$query_run = mysql_query($category_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Category already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:submitSelectedCategory.php");

				}
				else
				{
					$sql = "UPDATE category SET category_description = '$category_category_description' WHERE category_code = $category_code;";

						if(mysql_query($sql))
						{

						$msg2 ='Category ' .$category_category_description. ' Successfully Updated.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: editCategory.php');

						} 
						else
						{

						$msg3 ="Couldn't add category. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: submitSelectedCategory.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

