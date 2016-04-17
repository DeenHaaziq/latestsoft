<?php

require_once("../config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}


// set page title
$title = "New Sales Order";

//include '../main_header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Sales Order</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- This script is for autofil-->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- This is for dte picker
    <link rel="stylesheet" href="../bootstrap/css/datepicker.css"> -->
    <link href="../bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

  </head>


 <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Last Chance</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              
            </ul>
          </div>
        </nav>
      </header>

   <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
           
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Sales</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href=""><i class="fa fa-circle-o"></i> Add Category</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Add Item</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Add Suppliers</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Add Pricing Profile</a></li>
              </ul>
            </li>
            
          </ul>


        </section>
        <!-- /.sidebar -->
      </aside>



<div class="content-wrapper" style="overflow:auto;">
        <!-- Content Header (Page header) -->
<section class="content-header">

        <h3>New Sales Order</h3>

       
        
        <!--End of main menu-->
        <div>
        <div class="row">
        <div class="col-lg-12">

        <form class="form-horizontal" method="post" action="sales_order_validation.php">

        <div style="margin-top: 1%;">



                <div class="form-group" style="margin-top: 2%;">
                    <?php 
                    require '../database_connection.php';
                    $query2 = mysql_query("SELECT sales_order_no FROM sales WHERE sales_order_no IN (SELECT max(sales_order_no) FROM sales)");
                    if($row2= mysql_fetch_array($query2))
                    {
                      $order_no=$row2['sales_order_no']+1;
                      //echo $code;
                    }
                    ?>
                    <label><strong>&nbsp;&nbsp;Sales Order Number : </strong></label>
                    <input type="text" name="sales_order_no" style="text-align: right;" id="sales_order_no" value="<?php echo $order_no; ?>">   
                </div>
                <div class="form-group" style="margin-top: -2.6%; margin-left:20%;">
                    <label><strong>Status :</strong></label>  
                    <input type="text" name="sales_status" id="sales_status" value=" New">
                </div>
                <br>
                <input type="radio" name="sales_order_type" value="sales_order" onclick="showdiv_salesOrderForm();"> Orders
                <input type="radio" name="sales_order_type" value="direct_sales" style="margin-left: 1%; " onclick="showdiv_DirectsalesOrderForm();"> Direct Sales
                <a class="btn btn-warning" style="margin-left: 65%;">Halt</a>
                <a class="btn btn-danger" style="margin-left: 1%;">Delete</a>
                <a class="btn btn-success" style="margin-left: 1%;" id="accept_button">Accept</a>
        </div>
        
        <!--Start of orders form-->
        <div style="width:100%; height:50%; border-style: solid; margin-top: 1%;" id="sales_order_form" name="sales_order_form" >
            
        
            <input type="hidden" name="mode" value="login" >

            <fieldset>

                <table style="margin-top:-1%; margin-left:3%;" id="branch_details">
                <tr>
                    <td width="150px;"><label><strong>Customer Details </strong></label></td>
                    <td width="10px;">:</td>
                    <td ><textarea name="customer_details" id="customer_details" class="form-control" rows="4" cols="50" style="margin-top:16%;"></textarea></td>
                </tr>
                </table>

                <table style="margin-top:-5.5%; margin-left:42%;">
                
                    <?php 
                    require '../database_connection.php';
                    $userid = $_SESSION['user_id'];
                    $query2 = mysql_query("SELECT u_branch FROM system_users WHERE u_userid = '$userid';");
                    if($row2= mysql_fetch_array($query2))
                    {
                      $user_branch=$row2['u_branch'];
                      //echo $code;
                    }
                    ?>
                    <tr>
                    <td><label ><strong>Store Location</strong></label></td><td width="10px;">:</td>
                    <td><input class="form-control" type="text" id="branch" name="branch" value="<?php echo $user_branch;?>"></td>
                    </tr>
                

               
                    <?php 
                    require '../database_connection.php';
                    $userid = $_SESSION['user_id'];
                    $query2 = mysql_query("SELECT u_username FROM system_users WHERE u_userid = '$userid';");
                    if($row2= mysql_fetch_array($query2))
                    {
                      $user_name=$row2['u_username'];
                      //echo $code;
                    }
                    ?>

                    <tr>
                    <td><label ><strong>Sales Rep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></label></td><td>:</td>
                    <td><select name="sales_rep" class="form-control" required>
                        <option value="<?php echo $user_name;?>"><?php echo $user_name;?></option>
                        <?php
                            require '../database_connection.php';
                            $userid = $_SESSION['user_id'];
                            $query2 = mysql_query("SELECT u_username FROM system_users WHERE u_userid != '$userid';");
                            while ($row = mysql_fetch_array($query2))
                                {
                                    echo "<option value=".$row['u_username'].">".$row['u_username']."</option>";
                                }
                        ?>       
                    </select>
                    </td>
                    </tr>
              
                    <tr>
                    <td><label ><strong>Payment Type &nbsp;</strong></label></td><td>:</td>
                    <td><select name="payment_type" class="form-control">
                      <option value="cash">Cash</option>
                      <option value="credit">Credit</option>
                      <option value="Cheque">Cheque</option>
                    </select>
                    </td>
                    </tr>

                </table>

                <table style="margin-top:-6%; margin-left:68%;" id="dates">
                <tr>
                <td><label ><strong>Document Date </strong></label></td>
                <td width="10px;">:</td>
                <td><input class="form-control" type="text" id="document_date" name="document_date" value="<?php echo date('Y/m/d'); ?>"></td>
                </tr>

                <tr>
                <td><label ><strong>Order Date </strong></label></td>
                <td width="10px;">:</td>
                <td><div class="input-append date form_date"><input class="form-control" type="text" id="order_date" name="order_date" value="" size="16"><span class="add-on"><i class="icon-th"></i></span></div></td>
                </tr>

                <tr>
                <td><label ><strong>Expiry Date</strong></label></td>
                <td width="10px;">:</td>
                <td><div class="input-append date form_date"><input class="form-control" type="text" id="expiry_date" name="expiry_date" value="" size="16"><span class="add-on"><i class="icon-th"></i></span></div></td>
                </tr>
                
                </table>

                <!-- Dynamically row generate table starts here -->
        <div class="row clearfix" style="margin-top: 3%; margin-left: 1%;">
        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Item Code
                        </th>
                        <th class="text-center">
                            Item Description
                        </th>
                        <th class="text-center">
                            Item Category
                        </th>
                        <th class="text-center">
                            Qty
                        </th>
                        <th class="text-center">
                            Unit Price
                        </th>
                        <th class="text-center">
                            Line Discount
                        </th>
                        <th class="text-center">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0' name='addr0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='code0' id="code0"  onkeyup="autocomplet()" placeholder='Item Code' class="form-control"/>
                        <ul id="itemcode_list_id"></ul>
                        </td>
                        <td>
                        <input type="text" name='desc0' id="desc0" onkeyup="autocomplet2()" placeholder='Description' class="form-control"/>
                        <ul id="itemdesc_list_id"></ul>
                        </td>
                        <td>
                        <input type="text" name='cat0' id="cat0" placeholder='Category' class="form-control" />
                        </td>
                        <td>
                        <input type="text" name='qty0' id="qty0" placeholder='Qty' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='up0' id="up0" placeholder='Unit Price' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='ld0' id="ld0" placeholder='Line Discount' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='total0' id="total0" placeholder='Total' class="form-control" onclick="getInputValue();" />
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row" class="btn btn-primary" style="margin-left: 2%;">Add Row</a>
    <a id='delete_row' class="btn btn-primary" style="margin-left: 1%;">Delete Row</a>
    
    <!-- Dynamically row generate table ends here -->
               
               
                <div class="form-group" style="margin-top: 10%;">
                    <div class="col-lg-6 col-lg-offset-2">

                        <div class="form-group" style="margin-top: -15%; left: -10%; position:absolute;">
                        <label ><strong>Total Amount :</strong></label>
                        <input type="text" name='total_amount' id="total_amount" class="form-control" size="30" onclick="getTotalValue();" />
                        </div>

                        <div class="form-group" style="margin-top: -15%; left: 34%; position:absolute;">
                        <label ><strong>Discount :</strong></label>
                        <input type="text" name='discount' id="discount" placeholder='' class="form-control" size="30" onclick="getTotalValue();" />
                        </div>

                        <div class="form-group" style="margin-top: -15%; left: 80%; position:absolute;">
                        <label ><strong>Net Amount :</strong></label>
                        <input type="text" name='net_amount' id="net_amount" placeholder='' class="form-control" size="100" onclick="getnetTotal();"/>
                        </div>

                    </div>
                </div>

                <a id='' class="btn btn-primary" style="margin-left: 83%; margin-top: -6%;">Save</a>
                <a id='' class="btn btn-primary" style="margin-left: 1%; margin-top: -6%;">Save & Submit</a>
                <a id="clear" class="btn btn-primary" style="margin-left: 1%; margin-top: -6%;" onclick="clear()">Clear</a>
                <input type="submit" class="btn btn-primary" style="margin-left: 1%; margin-top: -6%;" value="Save & Submit">
                
                <div style="height: 10px;">&nbsp;</div>    
            </fieldset>
        </form>

        </div>
        <!--End of orders form-->

        <!--Start of direct sales form-->
        <div style="width:100%; height:50%; border-style: solid; margin-top: -32%; visibility: hidden;" id="direct_sales_form" name="direct_sales_form">
            
           <form class="form-horizontal" name="contact_form_orders" id="contact_form_orders" method="post" action="">
            <input type="hidden" name="mode" value="login" >

            <fieldset>

                <div class="form-group" style="margin-top: 2%;">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Customer Details : </label>
                </div>

                <div class="form-group" style="margin-top: -2%; left: 35%; position:absolute;">
                    <label ><strong>Store Location :</strong></label>
                </div>

                <div class="form-group" style="margin-top: 0%; left: 35%; position:absolute;">
                    <label ><strong>Sales Rep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label>
                </div>

                <div class="form-group" style="margin-top: 2%; left: 35%; position:absolute;">
                    <label ><strong>Payment Type &nbsp;:</strong></label>
                </div>

                <div class="form-group" style="margin-top: -2%; left: 60%; position:absolute;">
                    <label ><strong>Document Date :</strong></label>
                </div>

                <div class="form-group" style="margin-top: 0%; left: 60%; position:absolute;">
                    <label ><strong>Order Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label>
                </div>

                <div class="form-group" style="margin-top: 2%; left: 60%; position:absolute;">
                    <label ><strong>Expiry Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong></label>
                </div>

                <!-- Dynamically row generate table starts here -->
        <div class="row clearfix" style="margin-top: 6%; margin-left: 1%;">
        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic2">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Item Code
                        </th>
                        <th class="text-center">
                            Item Description
                        </th>
                        <th class="text-center">
                            Item Category
                        </th>
                        <th class="text-center">
                            Qty
                        </th>
                        <th class="text-center">
                            Unit Price
                        </th>
                        <th class="text-center">
                            Line Discount
                        </th>
                        <th class="text-center">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='code0' id="code0"  onkeyup="autocomplet()" placeholder='Item Code' class="form-control"/>
                        <ul id="itemcode_list_id"></ul>
                        </td>
                        <td>
                        <input type="text" name='desc0' id="desc0" onkeyup="autocomplet2()" placeholder='Description' class="form-control"/>
                        <ul id="itemdesc_list_id"></ul>
                        </td>
                        <td>
                        <input type="text" name='cat0' id="cat0" placeholder='Category' class="form-control" onclick="getInputValue();" />
                        </td>
                        <td>
                        <input type="text" name='qty0' id="qty0" placeholder='Qty' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='up0' id="up0" placeholder='Unit Price' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='ld0' id="ld0" placeholder='Line Discount' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='total0' id="total0" placeholder='Total' class="form-control"/>
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row" class="btn btn-primary" style="margin-left: 2%;">Add Row</a>
    <a id='delete_row' class="btn btn-primary" style="margin-left: 1%;">Delete Row</a>
    
    <!-- Dynamically row generate table ends here -->
               
               
                <div class="form-group" style="margin-top: 10%;">
                    <div class="col-lg-6 col-lg-offset-2">

                        <div class="form-group" style="margin-top: -15%; left: -10%; position:absolute;">
                        <label ><strong>Total Amount :</strong></label>
                        </div>

                        <div class="form-group" style="margin-top: -15%; left: 38%; position:absolute;">
                        <label ><strong>Discount :</strong></label>
                        </div>

                        <div class="form-group" style="margin-top: -15%; left: 85%; position:absolute;">
                        <label ><strong>Net Amount :</strong></label>
                        </div>

                    </div>
                </div>

                <a id='' class="btn btn-primary" style="margin-left: 83%; margin-top: -6%;">Save</a>
                <a id='' class="btn btn-primary" style="margin-left: 1%; margin-top: -6%;">Save & Submit</a>
                <a id='' class="btn btn-primary" style="margin-left: 1%; margin-top: -6%;">Clear</a>
                
                <div style="height: 10px;">&nbsp;</div>    
            </fieldset>
        </form>

        </div>
        <!--End of direct sales form-->

        <div style="font-size: 14px; color:#F00;"> 
            <?php 
            
            $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

            if (isset ($_SESSION['msg']) ){
            $message = $_SESSION['msg'];
            echo $message;
            }
            if ($pageWasRefreshed ) {
            session_start(); //Must be used before accessing sessions
            unset($_SESSION['msg']); //remove it
            } 
            

            ?> 
        </div>

        <div style="height: 10px;">&nbsp;</div>


        <div style="height: 20px;">&nbsp;</div>
        

        </div>

</div>
        </div>
        <!--End of add module form-->

       

        


</div>
</section>

<?php
      include '../main_footer.php'
     ?>
     <script src="../autoGenerateTable.js"></script>
<!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  
    <script type="text/javascript">
    function showdiv_DirectsalesOrderForm()
{
    document.getElementById('sales_order_form').style.visibility="hidden";
    document.getElementById('direct_sales_form').style.visibility="visible";
    //document.getElementById('payment').style.visibility="visible";
    //var a=document.getElementById('student_details2').style.visibility('hidden');
    //var b=document.getElementById('student_details').style.visibility('hidden');
}
</script>

<script type="text/javascript">
    function showdiv_salesOrderForm()
{
    document.getElementById('sales_order_form').style.visibility="visible";
    document.getElementById('direct_sales_form').style.visibility="hidden";
    //document.getElementById('payment').style.visibility="visible";
    //var a=document.getElementById('student_details2').style.visibility('hidden');
    //var b=document.getElementById('student_details').style.visibility('hidden');
}
</script>

<!--This is to clear input field data--> 
<script type="text/javascript">
    $('#clear').click(function(){
    $('#code0').val('');
    $('#code1').val('');  
    $('#code2').val('');      
    $('#code3').val('');  
    $('#code4').val('');  
    $('#code5').val('');  
    $('#code6').val('');  
    $('#code7').val('');  
    $('#code8').val('');  
    $('#code9').val('');  
    $('#code10').val('');  
    $('#code11').val('');  
    $('#code12').val('');  
    $('#code13').val('');  
    $('#code14').val('');  
    $('#code15').val('');  
    $('#code16').val('');  
    $('#code17').val('');  
    $('#code18').val('');  
    $('#code19').val('');  
    $('#code20').val('');

    $('#desc0').val('');
    $('#desc1').val('');    
    $('#desc2').val('');    
    $('#desc3').val('');        
    $('#desc4').val('');    
    $('#desc5').val('');    
    $('#desc6').val('');    
    $('#desc7').val('');    
    $('#desc8').val('');    
    $('#desc9').val('');    
    $('#desc10').val('');    
    $('#desc11').val('');    
    $('#desc12').val('');    
    $('#desc13').val('');    
    $('#desc14').val('');    
    $('#desc15').val('');    
    $('#desc16').val('');    
    $('#desc17').val('');    
    $('#desc18').val('');    
    $('#desc19').val('');  
    $('#desc20').val('');
    $('#cat0').val('');
    $('#cat1').val('');   
    $('#cat2').val('');   
    $('#cat3').val('');   
    $('#cat4').val('');   
    $('#cat5').val('');             
    $('#cat6').val('');   
    $('#cat7').val('');   
    $('#cat8').val('');   
    $('#cat9').val('');   
    $('#cat10').val('');   
    $('#cat11').val('');   
    $('#cat12').val('');   
    $('#cat13').val('');   
    $('#cat14').val('');   
    $('#cat15').val('');   
    $('#cat16').val('');   
    $('#cat17').val('');   
    $('#cat18').val('');   
    $('#cat19').val('');   
    $('#cat20').val('');   
    $('#qty0').val('');  
    $('#qty1').val('');  
    $('#qty2').val('');  
    $('#qty3').val('');  
    $('#qty4').val('');  
    $('#qty5').val('');  
    $('#qty6').val('');  
    $('#qty7').val('');  
    $('#qty8').val('');  
    $('#qty9').val('');  
    $('#qty10').val('');  
    $('#qty11').val('');  
    $('#qty12').val('');  
    $('#qty13').val('');  
    $('#qty14').val('');  
    $('#qty15').val('');  
    $('#qty16').val('');  
    $('#qty17').val('');  
    $('#qty18').val('');  
    $('#qty19').val('');  
    $('#qty20').val('');  
    $('#up0').val(''); 
    $('#up1').val(''); 
    $('#up2').val(''); 
    $('#up3').val(''); 
    $('#up4').val(''); 
    $('#up5').val(''); 
    $('#up6').val(''); 
    $('#up7').val(''); 
    $('#up8').val(''); 
    $('#up9').val(''); 
    $('#up10').val(''); 
    $('#up11').val(''); 
    $('#up12').val(''); 
    $('#up13').val(''); 
    $('#up14').val(''); 
    $('#up15').val(''); 
    $('#up16').val(''); 
    $('#up17').val(''); 
    $('#up18').val(''); 
    $('#up19').val(''); 
    $('#up20').val(''); 
    $('#ld0').val('');
    $('#ld1').val(''); 
    $('#ld2').val(''); 
    $('#ld3').val(''); 
    $('#ld4').val(''); 
    $('#ld5').val(''); 
    $('#ld6').val(''); 
    $('#ld7').val(''); 
    $('#ld8').val(''); 
    $('#ld9').val(''); 
    $('#ld10').val(''); 
    $('#ld11').val(''); 
    $('#ld12').val(''); 
    $('#ld13').val(''); 
    $('#ld14').val(''); 
    $('#ld15').val(''); 
    $('#ld16').val(''); 
    $('#ld17').val(''); 
    $('#ld18').val(''); 
    $('#ld19').val(''); 
    $('#ld20').val(''); 
    $('#ld21').val(''); 
    $('#total0').val(''); 
    $('#total1').val(''); 
    $('#total2').val(''); 
    $('#total3').val(''); 
    $('#total4').val(''); 
    $('#total5').val(''); 
    $('#total6').val(''); 
    $('#total7').val(''); 
    $('#total8').val(''); 
    $('#total9').val(''); 
    $('#total10').val(''); 
    $('#total11').val(''); 
    $('#total12').val(''); 
    $('#total13').val(''); 
    $('#total14').val(''); 
    $('#total15').val(''); 
    $('#total16').val(''); 
    $('#total17').val(''); 
    $('#total18').val(''); 
    $('#total19').val(''); 
    $('#total20').val(''); 

    $('#expiry_date').val('');
    $('#order_date').val('');
});
</script>
<!-- ENd of input field clear script-->

<script type="text/javascript">
    function getInputValue()
{
    var unitprice0 = document.getElementById("qty0").value;
    var discount0 = document.getElementById("up0").value;
    var total0 = unitprice0 * discount0;
    document.getElementById("total0").value = total0;


}
</script>

<script type="text/javascript">
    function getInputValue1()
{
   var unitprice1 = document.getElementById("qty1").value;
    var discount1 = document.getElementById("up1").value;
    var total1 = unitprice1 * discount1;
    document.getElementById("total1").value = total1;  

}
</script>

<script type="text/javascript">
    function getInputValue2()
{
   var unitprice2 = document.getElementById("qty2").value;
    var discount2 = document.getElementById("up2").value;
    var total2 = unitprice2 * discount2;
    document.getElementById("total2").value = total2;  

}
</script>

<script type="text/javascript">
    function getInputValue3()
{
   var unitprice3 = document.getElementById("qty3").value;
    var discount3 = document.getElementById("up3").value;
    var total3 = unitprice3 * discount3;
    document.getElementById("total3").value = total3;  

}
</script>

<script type="text/javascript">
    function getInputValue4()
{
   var unitprice4 = document.getElementById("qty4").value;
    var discount4 = document.getElementById("up4").value;
    var total4 = unitprice4 * discount4;
    document.getElementById("total4").value = total4;  

}
</script>

<script type="text/javascript">
    function getInputValue5()
{
   var unitprice5 = document.getElementById("qty5").value;
    var discount5 = document.getElementById("up5").value;
    var total5 = unitprice5 * discount5;
    document.getElementById("total5").value = total5;  

}
</script>

<script type="text/javascript">
    function getInputValue6()
{
   var unitprice6 = document.getElementById("qty6").value;
    var discount6 = document.getElementById("up6").value;
    var total6 = unitprice6 * discount6;
    document.getElementById("total6").value = total6;  

}
</script>

<script type="text/javascript">
    function getInputValue7()
{
   var unitprice7 = document.getElementById("qty7").value;
    var discount7 = document.getElementById("up7").value;
    var total7 = unitprice7 * discount7;
    document.getElementById("total7").value = total7;  

}
</script>

<script type="text/javascript">
    function getInputValue8()
{
   var unitprice8 = document.getElementById("qty8").value;
    var discount8 = document.getElementById("up8").value;
    var total8 = unitprice8 * discount8;
    document.getElementById("total8").value = total8;  

}
</script>

<script type="text/javascript">
    function getInputValue9()
{
   var unitprice9 = document.getElementById("qty9").value;
    var discount9 = document.getElementById("up9").value;
    var total9 = unitprice9 * discount9;
    document.getElementById("total9").value = total9;  

}
</script>

<script type="text/javascript">
    function getInputValue10()
{
   var unitprice10 = document.getElementById("qty10").value;
    var discount10 = document.getElementById("up10").value;
    var total10 = unitprice10 * discount10;
    document.getElementById("total10").value = total10;  

}
</script>

<script type="text/javascript">
    function getInputValue11()
{
   var unitprice11 = document.getElementById("qty11").value;
    var discount11 = document.getElementById("up11").value;
    var total11 = unitprice11 * discount11;
    document.getElementById("total11").value = total11;  

}
</script>

<script type="text/javascript">
    function getInputValue12()
{
   var unitprice12 = document.getElementById("qty12").value;
    var discount12 = document.getElementById("up12").value;
    var total12 = unitprice12 * discount12;
    document.getElementById("total12").value = total12;  

}
</script>

<script type="text/javascript">
    function getInputValue13()
{
   var unitprice13 = document.getElementById("qty13").value;
    var discount13 = document.getElementById("up13").value;
    var total13 = unitprice13 * discount13;
    document.getElementById("total13").value = total13;  

}
</script>

<script type="text/javascript">
    function getInputValue14()
{
   var unitprice14 = document.getElementById("qty14").value;
    var discount14 = document.getElementById("up14").value;
    var total14 = unitprice14 * discount14;
    document.getElementById("total14").value = total14;  

}
</script>

<script type="text/javascript">
    function getInputValue15()
{
   var unitprice15 = document.getElementById("qty15").value;
    var discount15 = document.getElementById("up15").value;
    var total15 = unitprice15 * discount15;
    document.getElementById("total15").value = total15;  

}
</script>

<script type="text/javascript">
    function getInputValue16()
{
   var unitprice16 = document.getElementById("qty16").value;
    var discount16 = document.getElementById("up16").value;
    var total16 = unitprice16 * discount16;
    document.getElementById("total16").value = total16;  

}
</script>

<script type="text/javascript">
    function getInputValue17()
{
   var unitprice17 = document.getElementById("qty17").value;
    var discount17 = document.getElementById("up17").value;
    var total17 = unitprice17 * discount17;
    document.getElementById("total17").value = total17;  

}
</script>

<script type="text/javascript">
    function getInputValue18()
{
   var unitprice18 = document.getElementById("qty18").value;
    var discount18 = document.getElementById("up18").value;
    var total18 = unitprice18 * discount18;
    document.getElementById("total18").value = total18;  

}
</script>

<script type="text/javascript">
    function getInputValue19()
{
   var unitprice19 = document.getElementById("qty19").value;
    var discount19 = document.getElementById("up19").value;
    var total19 = unitprice19 * discount19;
    document.getElementById("total19").value = total19;  

}
</script>

<script type="text/javascript">
    function getInputValue20()
{
   var unitprice20 = document.getElementById("qty20").value;
    var discount20 = document.getElementById("up20").value;
    var total20 = unitprice20 * discount20;
    document.getElementById("total20").value = total20;  

}
</script>

<script type="text/javascript">
    $('#total1').click(function(){
    var unitprice1 = document.getElementById("qty1").value;
    var discount1 = document.getElementById("up1").value;
    var total1 = +unitprice1 + +discount1;
    document.getElementById("total1").value = total1;     
});
</script>

<script type="text/javascript" src="../bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    
  $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  
</script>

<script type="text/javascript">
    $(".form_date").datetimepicker({
        format: "dd MM yyyy"
    });
</script> 

<script type="text/javascript">
    function getTotalValue()
{
  var rowCount = $('#tab_logic tr').length;

   if (rowCount == 3) 
    {
        var t0 = document.getElementById("total0").value;
        var total_amount1 = +t0;
        //alert(total_amount1);
        document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 4) 
    {
      var t0 = document.getElementById("total0").value;
      var t1 = document.getElementById("total1").value;
      var total_amount1 = +t0 + +t1;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 5) 
    {
      var t0 = document.getElementById("total0").value;
      var t1 = document.getElementById("total1").value;
      var t2 = document.getElementById("total2").value;
      var total_amount1 = +t0 + +t1 + +t2;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 6) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 7) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 8) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 9) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 10) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

     if (rowCount == 11) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 12) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 13) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 14) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 15) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 16) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 17) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 18) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
    var t15 = document.getElementById("total15").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14 + +t15;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

    if (rowCount == 19) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
    var t15 = document.getElementById("total15").value;
    var t16 = document.getElementById("total16").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14 + +t15 + +t16;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

     if (rowCount == 20) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
    var t15 = document.getElementById("total15").value;
    var t16 = document.getElementById("total16").value;
    var t17 = document.getElementById("total17").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14 + +t15 + +t16 + +t17;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }


     if (rowCount == 21) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
    var t15 = document.getElementById("total15").value;
    var t16 = document.getElementById("total16").value;
    var t17 = document.getElementById("total17").value;
    var t18 = document.getElementById("total18").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14 + +t15 + +t16 + +t17 + +t18;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }


     if (rowCount == 22) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
    var t15 = document.getElementById("total15").value;
    var t16 = document.getElementById("total16").value;
    var t17 = document.getElementById("total17").value;
    var t18 = document.getElementById("total18").value;
    var t19 = document.getElementById("total19").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14 + +t15 + +t16 + +t17 + +t18 + +t19;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }

     if (rowCount == 23) 
    {
      var t0 = document.getElementById("total0").value;
   var t1 = document.getElementById("total1").value;
   var t2 = document.getElementById("total2").value;
   var t3 = document.getElementById("total3").value;
   var t4 = document.getElementById("total4").value;
   var t5 = document.getElementById("total5").value;
   var t6 = document.getElementById("total6").value;
    var t7 = document.getElementById("total7").value;
    var t8 = document.getElementById("total8").value;
    var t9 = document.getElementById("total9").value;
    var t10 = document.getElementById("total10").value;
    var t11 = document.getElementById("total11").value;
    var t12 = document.getElementById("total12").value;
    var t13 = document.getElementById("total13").value;
    var t14 = document.getElementById("total14").value;
    var t15 = document.getElementById("total15").value;
    var t16 = document.getElementById("total16").value;
    var t17 = document.getElementById("total17").value;
    var t18 = document.getElementById("total18").value;
    var t19 = document.getElementById("total19").value;
    var t20 = document.getElementById("total20").value;
      var total_amount1 = +t0 + +t1 + +t2 + +t3 + +t4 + +t5 + +t6 + +t7 + +t8 + +t9 + +t10 + +t11 + +t12 + +t13 + +t14 + +t15 + +t16 + +t17 + +t18 + +t19 + +t20;
      //alert(total_amount1);
      document.getElementById("total_amount").value = total_amount1;  
    }
}


</script>

<script type="text/javascript">
    function getnetTotal()
{
   var totalprice = document.getElementById("total_amount").value;
    var discount = document.getElementById("discount").value;
    var discount_amount = (totalprice * discount)/100 ;
    var net_total = +totalprice - +discount_amount
    net_total +=' /=';
    document.getElementById("net_amount").value = net_total;  

}
</script>

      </body>
      </html>