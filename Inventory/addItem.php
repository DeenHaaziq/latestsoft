<?php

require_once("../config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

// set page title
$title = "Add Supplier";

include 'header_inventory.php';
?>


<div class="row">
        <div class="col-lg-12">
        <h3>Add Item</h3>
       
        
        <!--End of main menu-->
        <div>
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="addItem_validation.php">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Item Description:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="item_description" class="form-control" name="item_description" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Warrenty Period:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="item_warrantyperiod" class="form-control" name="item_warrantyperiod" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Unit Price:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="item_unitprice" class="form-control" name="item_unitprice" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Category:</label>
                    <div class="col-lg-6">
                        <select name="item_category_code" class="form-control" required>
                        <option value="">Select a Category</option>
                        <?php
                            include 'otherSQLqueries.php';
                            while ($row = mysql_fetch_array($query_run))
                                {
                                    echo "<option value=".$row['category_code'].">".$row['category_description']."</option>";
                                }
                        ?>       
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Pricing Profie:</label>
                    <div class="col-lg-6">
                         <select name="item_pricingprofile_code" class="form-control" required>
                         <option value="">Select a Pricing Profile</option>
                        <?php
                            include 'otherSQLqueries.php';
                            while ($row = mysql_fetch_array($list_pricingprofiles))
                                {
                                    echo "<option value=".$row['pricingprofile_code'].">".$row['pricingprofile_name']."</option>";
                                }
                        ?>       
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier:</label>
                    <div class="col-lg-6">
                        <select name="item_supplier_code" class="form-control" required>
                        <option value="">Select a Supplier</option>
                        <?php
                            include 'otherSQLqueries.php';
                            while ($row = mysql_fetch_array($list_suppliers))
                                {
                                    echo "<option value=".$row['supplier_code'].">".$row['supplier_name']."</option>";
                                }
                        ?>       
                        </select>
                    </div>
                </div>
        
               
                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button> 
                    </div>
                </div>

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
            </fieldset>
        </form>
        </div>
        <!--End of add module form-->

        <div style="height: 10px;">&nbsp;</div>


        <div style="height: 20px;">&nbsp;</div>
        <a href="../logout.php"><button class="btn btn-lg btn-danger" type="button"><i class="fa fa-sign-out"></i>Logout</button></a>

        </div>

</div>
<?php include '../footer.php'; ?>