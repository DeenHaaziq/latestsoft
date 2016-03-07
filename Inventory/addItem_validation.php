<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$item_description = $_POST['item_description'];
$item_warrantyperiod = $_POST['item_warrantyperiod'];
$item_unitprice = $_POST['item_unitprice'];
$item_category_code = $_POST['item_category_code'];
$item_pricingprofile_code = $_POST['item_pricingprofile_code'];
$item_supplier_code = $_POST['item_supplier_code'];

$item_availability_Check = "SELECT item_description FROM item WHERE item_description = '$item_description';";
$query_run = mysql_query($item_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Item already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:addItem.php");

				}
				else
				{
					$sql = "INSERT INTO item (item_description, item_warrantyperiod, item_unitprice, item_category_code, item_pricingprofile_code, item_supplier_code) VALUES ('$item_description','$item_warrantyperiod','$item_unitprice','$item_category_code', '$item_pricingprofile_code', '$item_supplier_code')";

						if(mysql_query($sql))
						{

						$msg2 ='Supplier ' .$supplier_name. ' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: addItem.php');

						} 
						else
						{

						$msg3 ="Couldn't add supplier. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: addItem.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

