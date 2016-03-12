<?php

require_once("../config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

// set page title
$title = "Sales Order";

include 'header_sales.php';
?>


<div class="row">
        <div class="col-lg-12">
        <h3>Sales  Order Edited</h3>
        <div style="margin-top: 1%;">
                <input type="radio" name="sales_order_type" value="sales_order" onclick="showdiv_salesOrderForm();"> Orders
                <input type="radio" name="sales_order_type" value="direct_sales" style="margin-left: 1%;" onclick="showdiv_DirectsalesOrderForm();"> Direct Sales
        </div>
        
        <!--Start of orders form-->
        <div style="width:100%; height:50%; border-style: solid; margin-top: 1%;" id="sales_order_form" name="sales_order_form" >
            
        <form class="form-horizontal" name="contact_form_orders" id="contact_form_orders" method="post" action="addItem_validation.php">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group" style="margin-top: 2%;">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Sales Order Number :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="sales_order_no" class="form-control" name="sales_order_no" required="" >
                    </div>
                </div>

                <div class="form-group" style="margin-top: -6%; left: -10%;">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Order Date :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="order_date" class="form-control" name="order_date" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Item Code :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="item_code" class="form-control" name="item_code" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Item Code :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="item_code" class="form-control" name="item_code" required="" >
                    </div>
                </div>

                <!-- Dynamically row generate table starts here -->
        <div class="row clearfix">
        <div class="col-md-12 column">
            <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Unit Price
                        </th>
                        <th class="text-center">
                            Discount
                        </th>
                        <th class="text-center">
                            Total Price
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr id='addr0'>
                        <td>
                        1
                        </td>
                        <td>
                        <input type="text" name='name0' id="name0"  placeholder='Unit Price' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='mail0' id="mail0" placeholder='Discount' class="form-control"/>
                        </td>
                        <td>
                        <input type="text" name='mobile0' id="mobile0" placeholder='Total Price' class="form-control" onclick="getInputValue();" />
                        </td>
                    </tr>
                    <tr id='addr1'></tr>
                </tbody>
            </table>
        </div>
    </div>
    <a id="add_row" class="btn btn-primary">Add Row</a><a id='delete_row' class="btn btn-primary" style="margin-left: 1%;">Delete Row</a>
    <button class="btn btn-lg btn-danger" type="button" onclick="getInputValue();">Add value</button>
    <!-- Dynamically row generate table ends here -->
               
               
                <div class="form-group" style="margin-top: 10%;">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                    </div>
                </div>

                
                
                <div style="height: 10px;">&nbsp;</div>    
            </fieldset>
        </form>

        </div>
        <!--End of orders form-->

        <!--Start of direct sales form-->
        <div style="width:100%; height:50%; border-style: solid; margin-top: -49%; visibility: hidden;" id="direct_sales_form" name="direct_sales_form">
            
        <form class="form-horizontal" name="contact_form_orders" id="contact_form_orders" method="post" action="addItem_validation.php">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group" style="margin-top: 2%;">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Direct Sales Order Number :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="sales_order_no" class="form-control" name="sales_order_no" required="" >
                    </div>
                </div>

                <div class="form-group" style="margin-top: -6%; left: -10%;">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Order Date :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="order_date" class="form-control" name="order_date" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Item Code :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="item_code" class="form-control" name="item_code" required="" >
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required"></span>Item Code :</label>
                    <div class="col-xs-2">
                        <input type="text" value="" id="item_code" class="form-control" name="item_code" required="" >
                    </div>
                </div>
               
               
                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                    </div>
                </div>

                
                
                <div style="height: 10px;">&nbsp;</div>    
            </fieldset>
        </form>

        </div>
        <!--End of direct sales form-->



        <div style="height: 10px;">&nbsp;</div>


        <div style="height: 20px;">&nbsp;</div>
        <a href="../logout.php"><button class="btn btn-lg btn-danger" type="button" style="margin-top:23%;"><i class="fa fa-sign-out"></i>Logout</button></a>

        </div>

</div>
<?php include '../footer.php'; ?>

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

<script type="text/javascript">
    function getInputValue()
{
    //var unitprice = document.getElementById("name0").value;
    //var discount = document.getElementById("mail0").value;
    //var total = +unitprice + +discount;
    //document.getElementById("mobile0").value = total;
    //alert(total);
        var i;

        for (i = 0; i < 100; i++) 
        { 
            {
            var name = 'name'+i;
            var mail = 'mail'+i;
            var mobile = 'mobile'+i;
            var unitprice = document.getElementById(name).value;
            var discount = document.getElementById(mail).value;
            var total = +unitprice + +discount;
            document.getElementById(mobile).value = total;
            }

            alert(total);
        }

        
   
}
</script>


<script src="../autoGenerateTable.js"></script>