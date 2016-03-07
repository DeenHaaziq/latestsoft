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
        <h3>Add Category</h3>
       
        
        <!--End of main menu-->
        <div>
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="addSupplier_validation.php">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier Name:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_name" class="form-control" name="supplier_name" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier Address:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_address" class="form-control" name="supplier_address" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier Contact No:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_contact" class="form-control" name="supplier_contact" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier Email:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_email" class="form-control" name="supplier_email" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier NIC BR:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_NIC" class="form-control" name="supplier_NIC" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier Title:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_title" class="form-control" name="supplier_title" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Supplier Type:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" id="supplier_type" class="form-control" name="supplier_type" required="" >
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