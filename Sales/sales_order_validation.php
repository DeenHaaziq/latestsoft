<?php

include '../config.php';
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

require '../database_connection.php';

$sales_order_no = $_POST['sales_order_no'];
$sales_status = 'Published';
$sales_order_type = $_POST['sales_order_type'];
$customer_details = $_POST['customer_details'];
$branch = $_POST['branch'];
$sales_rep = $_POST['sales_rep'];
$payment_type = $_POST['payment_type'];
$document_date = $_POST['document_date'];
$order_date = $_POST['order_date'];
$expiry_date = $_POST['expiry_date'];

$total_amount = $_POST['total_amount'];
$discount = $_POST['discount'];
$net_amount = $_POST['net_amount'];

 $userid = $_SESSION['user_id'];
 $query2 = mysql_query("SELECT u_username FROM system_users WHERE u_userid = '$userid';");
 if($row2= mysql_fetch_array($query2))
 {
    $user_name=$row2['u_username'];
    //echo $code;
 }

$code0 = $_POST['code0'];
$desc0 = $_POST['desc0'];
$cat0 = $_POST['cat0'];
$qty0 = $_POST['qty0'];
$up0 = $_POST['up0'];
$ld0 = $_POST['ld0'];
$total0 = $_POST['total0'];

$code1 = $_POST['code1'];
$desc1 = $_POST['desc1'];
$cat1 = $_POST['cat1'];
$qty1 = $_POST['qty1'];
$up1 = $_POST['up1'];
$ld1 = $_POST['ld1'];
$total1 = $_POST['total1'];

$code2 = $_POST['code2'];
$desc2 = $_POST['desc2'];
$cat2 = $_POST['cat2'];
$qty2 = $_POST['qty2'];
$up2 = $_POST['up2'];
$ld2 = $_POST['ld2'];
$total2 = $_POST['total2'];

$code3 = $_POST['code3'];
$desc3 = $_POST['desc3'];
$cat3 = $_POST['cat3'];
$qty3 = $_POST['qty3'];
$up3 = $_POST['up3'];
$ld3 = $_POST['ld3'];
$total3 = $_POST['total3'];

$code4 = $_POST['code4'];
$desc4 = $_POST['desc4'];
$cat4 = $_POST['cat4'];
$qty4 = $_POST['qty4'];
$up4 = $_POST['up4'];
$ld4 = $_POST['ld4'];
$total4 = $_POST['total4'];

$code5 = $_POST['code5'];
$desc5 = $_POST['desc5'];
$cat5 = $_POST['cat5'];
$qty5 = $_POST['qty5'];
$up5 = $_POST['up5'];
$ld5 = $_POST['ld5'];
$total5 = $_POST['total5'];

$code6 = $_POST['code6'];
$desc6 = $_POST['desc6'];
$cat6 = $_POST['cat6'];
$qty6 = $_POST['qty6'];
$up6 = $_POST['up6'];
$ld6 = $_POST['ld6'];
$total6 = $_POST['total6'];

$code7 = $_POST['code7'];
$desc7 = $_POST['desc7'];
$cat7 = $_POST['cat7'];
$qty7 = $_POST['qty7'];
$up7 = $_POST['up7'];
$ld7 = $_POST['ld7'];
$total7 = $_POST['total7'];

$code8 = $_POST['code8'];
$desc8 = $_POST['desc8'];
$cat8 = $_POST['cat8'];
$qty8 = $_POST['qty8'];
$up8 = $_POST['up8'];
$ld8 = $_POST['ld8'];
$total8 = $_POST['total8'];

$code9 = $_POST['code9'];
$desc9 = $_POST['desc9'];
$cat9 = $_POST['cat9'];
$qty9 = $_POST['qty9'];
$up9 = $_POST['up9'];
$ld9 = $_POST['ld9'];
$total9 = $_POST['total9'];

$code10 = $_POST['code10'];
$desc10 = $_POST['desc10'];
$cat10 = $_POST['cat10'];
$qty10 = $_POST['qty10'];
$up10 = $_POST['up10'];
$ld10 = $_POST['ld10'];
$total10 = $_POST['total10'];

$code11 = $_POST['code11'];
$desc11 = $_POST['desc11'];
$cat11 = $_POST['cat11'];
$qty11 = $_POST['qty11'];
$up11 = $_POST['up11'];
$ld11 = $_POST['ld11'];
$total11 = $_POST['total11'];

$code12 = $_POST['code12'];
$desc12 = $_POST['desc12'];
$cat12 = $_POST['cat12'];
$qty12 = $_POST['qty12'];
$up12 = $_POST['up12'];
$ld12 = $_POST['ld12'];
$total12 = $_POST['total12'];

$code13 = $_POST['code13'];
$desc13 = $_POST['desc13'];
$cat13 = $_POST['cat13'];
$qty13 = $_POST['qty13'];
$up13 = $_POST['up13'];
$ld13 = $_POST['ld13'];
$total13 = $_POST['total13'];

$code14 = $_POST['code14'];
$desc14 = $_POST['desc14'];
$cat14 = $_POST['cat14'];
$qty14 = $_POST['qty14'];
$up14 = $_POST['up14'];
$ld14 = $_POST['ld14'];
$total14 = $_POST['total14'];

$code15 = $_POST['code15'];
$desc15 = $_POST['desc15'];
$cat15 = $_POST['cat15'];
$qty15 = $_POST['qty15'];
$up15 = $_POST['up15'];
$ld15 = $_POST['ld15'];
$total15 = $_POST['total15'];

$code16 = $_POST['code16'];
$desc16 = $_POST['desc16'];
$cat16 = $_POST['cat16'];
$qty16 = $_POST['qty16'];
$up16 = $_POST['up16'];
$ld16 = $_POST['ld16'];
$total16 = $_POST['total16'];

$code17 = $_POST['code17'];
$desc17 = $_POST['desc17'];
$cat17 = $_POST['cat17'];
$qty17 = $_POST['qty17'];
$up17 = $_POST['up17'];
$ld17 = $_POST['ld17'];
$total17 = $_POST['total17'];

$code18 = $_POST['code18'];
$desc18 = $_POST['desc18'];
$cat18 = $_POST['cat18'];
$qty18 = $_POST['qty18'];
$up18 = $_POST['up18'];
$ld18 = $_POST['ld18'];
$total18 = $_POST['total18'];

$code19 = $_POST['code19'];
$desc19 = $_POST['desc19'];
$cat19 = $_POST['cat19'];
$qty19 = $_POST['qty19'];
$up19 = $_POST['up19'];
$ld19 = $_POST['ld19'];
$total19 = $_POST['total19'];

$code20 = $_POST['code20'];
$desc20 = $_POST['desc20'];
$cat20 = $_POST['cat20'];
$qty20 = $_POST['qty20'];
$up20 = $_POST['up20'];
$ld20 = $_POST['ld20'];
$total20 = $_POST['total20'];

if (isset($total0) && isset($total1) && isset($total2) && isset($total3) && isset($total4) && isset($total5) && isset($total6) && isset($total7) && isset($total8)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code3', '$desc3', '$cat3', '$qty3', '$up3', '$ld3', '$total3', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code4', '$desc4', '$cat4', '$qty4', '$up4', '$ld4', '$total4', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code5', '$desc5', '$cat5', '$qty5', '$up5', '$ld5', '$total5', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code6', '$desc6', '$cat6', '$qty6', '$up6', '$ld6', '$total6', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code7', '$desc7', '$cat7', '$qty7', '$up7', '$ld7', '$total7', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code8', '$desc8', '$cat8', '$qty8', '$up8', '$ld8', '$total8', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 9 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}


else if (isset($total0) && isset($total1) && isset($total2) && isset($total3) && isset($total4) && isset($total5) && isset($total6) && isset($total7)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code3', '$desc3', '$cat3', '$qty3', '$up3', '$ld3', '$total3', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code4', '$desc4', '$cat4', '$qty4', '$up4', '$ld4', '$total4', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code5', '$desc5', '$cat5', '$qty5', '$up5', '$ld5', '$total5', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code6', '$desc6', '$cat6', '$qty6', '$up6', '$ld6', '$total6', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code7', '$desc7', '$cat7', '$qty7', '$up7', '$ld7', '$total7', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 8 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}


else if (isset($total0) && isset($total1) && isset($total2) && isset($total3) && isset($total4) && isset($total5) && isset($total6)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code3', '$desc3', '$cat3', '$qty3', '$up3', '$ld3', '$total3', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code4', '$desc4', '$cat4', '$qty4', '$up4', '$ld4', '$total4', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code5', '$desc5', '$cat5', '$qty5', '$up5', '$ld5', '$total5', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code6', '$desc6', '$cat6', '$qty6', '$up6', '$ld6', '$total6', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 7 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}

else if (isset($total0) && isset($total1) && isset($total2) && isset($total3) && isset($total4) && isset($total5)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code3', '$desc3', '$cat3', '$qty3', '$up3', '$ld3', '$total3', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code4', '$desc4', '$cat4', '$qty4', '$up4', '$ld4', '$total4', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code5', '$desc5', '$cat5', '$qty5', '$up5', '$ld5', '$total5', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 6 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}


else if (isset($total0) && isset($total1) && isset($total2) && isset($total3) && isset($total4)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code3', '$desc3', '$cat3', '$qty3', '$up3', '$ld3', '$total3', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code4', '$desc4', '$cat4', '$qty4', '$up4', '$ld4', '$total4', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 5 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}

else if (isset($total0) && isset($total1) && isset($total2) && isset($total3)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code3', '$desc3', '$cat3', '$qty3', '$up3', '$ld3', '$total3', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 4 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}

else if (isset($total0) && isset($total1) && isset($total2)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code2', '$desc2', '$cat2', '$qty2', '$up2', '$ld2', '$total2', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 3 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}


else if (isset($total0) && isset($total1)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES 
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name'),
	       ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code1', '$desc1', '$cat1', '$qty1', '$up1', '$ld1', '$total1', '$total_amount', '$discount', '$net_amount', '$user_name')";
						
						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done 2 rows.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}


else if (isset($total0)) 
{
	$sql = "INSERT INTO sales (sales_order_no, status, sales_order_type, customer_details, branch, sales_rep, payment_type, document_date, order_date, expiry_date, sales_item_code, sales_item_description, sales_item_category, sales_qty, sales_unit_price, sales_line_discount, sales_total, sales_net_total, sales_discount, sales_net_amount, loged_user) 
	       VALUES ('$sales_order_no', '$sales_status', '$sales_order_type', '$customer_details', '$branch', '$sales_rep', '$payment_type', '$document_date', '$order_date', '$expiry_date', '$code0', '$desc0', '$cat0', '$qty0', '$up0', '$ld0', '$total0', '$total_amount', '$discount', '$net_amount', '$user_name')";

						if(mysql_query($sql))
						{

						$msg2 ='Sales successfully done.';
						$_SESSION['msg'] = $msg2 ;
    					header('Location: new_salesOrder.php');

						} 
						else
						{

						$msg3 ="Couldn't make the sale. Please try again.";
						$_SESSION['msg'] = $msg3 ;
    					header('Location: new_salesOrder.php');
						}
	
}
