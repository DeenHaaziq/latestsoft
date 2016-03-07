<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$supplier_name = $_POST['supplier_name'];
$supplier_address = $_POST['supplier_address'];
$supplier_contact = $_POST['supplier_contact'];
$supplier_email = $_POST['supplier_email'];
$supplier_NIC = $_POST['supplier_NIC'];
$supplier_title = $_POST['supplier_title'];
$supplier_type = $_POST['supplier_type'];

$supplier_availability_Check = "SELECT supplier_name FROM supplier WHERE supplier_name = '$supplier_name';";
$query_run = mysql_query($supplier_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Supplier already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:addSupplier.php");

				}
				else
				{
					$sql = "INSERT INTO supplier (supplier_name, supplier_address, supplier_contact_no, supplier_email, supplier_NIC_BR, supplier_title, supplier_type) VALUES ('$supplier_name','$supplier_address','$supplier_contact','$supplier_email', '$supplier_NIC', '$supplier_title', '$supplier_type' )";

						if(mysql_query($sql))
						{

						$msg2 ='Supplier ' .$supplier_name. ' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: addSupplier.php');

						} 
						else
						{

						$msg3 ="Couldn't add supplier. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: addSupplier.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

