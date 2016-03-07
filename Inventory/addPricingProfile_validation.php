<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$pricingprofile_name = $_POST['pricingprofile_name'];
$pricingprofile_bottom_price = $_POST['pricingprofile_bottom_price'];
$pricingprofile_line_discount = $_POST['pricingprofile_line_discount'];

$Pricing_Profile_availability_Check = "SELECT pricingprofile_name FROM pricingprofile WHERE pricingprofile_name = '$pricingprofile_name';";
$query_run = mysql_query($Pricing_Profile_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Pricing Profile already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:addPricingProfile.php");

				}
				else
				{
					$sql = "INSERT INTO pricingprofile (pricingprofile_name, pricingprofile_bottom_price, pricingprofile_line_discount) VALUES ('$pricingprofile_name','$pricingprofile_bottom_price','$pricingprofile_line_discount')";

						if(mysql_query($sql))
						{

						$msg2 ='Pricing profile ' .$pricingprofile_name. ' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: addPricingProfile.php');

						} 
						else
						{

						$msg3 ="Couldn't add Pricing Profile. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: addPricingProfile.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

