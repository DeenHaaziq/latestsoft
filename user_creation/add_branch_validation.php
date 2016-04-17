<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$branch_name = $_POST['branch_name'];
$branch_contact_no = $_POST['branch_contact_no'];
$branch_adddress = $_POST['branch_adddress'];
$branch_email = $_POST['branch_email'];
$branch_fax = $_POST['branch_fax'];

$branch_availability_Check = "SELECT branch_name FROM branch WHERE branch_name = '$branch_name';";
$query_run = mysql_query($branch_availability_Check);
				
				if (mysql_num_rows($query_run)==1)
				{
					$msg1 ='Branch already exist.';
					$_SESSION['msg'] = $msg1 ;
					header("location:add_branch.php");

				}
				else
				{
					$sql = "INSERT INTO branch (branch_name, branch_contact_no, branch_adddress, branch_email, branch_fax) VALUES ('$branch_name', '$branch_contact_no', '$branch_adddress', '$branch_email', '$branch_fax')";

						if(mysql_query($sql))
						{

						$msg2 ='Branch ' .$branch_name. ' Successfully added';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: add_branch.php');

						} 
						else
						{

						$msg3 ="Couldn't add branch. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: add_branch.php');

						}
				}
			

// attempt insert query execution



 

// close connection

//mysql_close($DB);

