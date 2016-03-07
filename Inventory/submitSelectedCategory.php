<?php

require_once("../config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}


$i = $_POST['selector'];

//echo $i;

require '../database_connection.php';

$edit_categories = "SELECT * FROM category where category_code = $i;";
$query_run = mysql_query($edit_categories);
$rows=mysql_fetch_array($query_run);


$title = "Edit Category";

include 'header_inventory.php';

?>

<div class="row">
        <div class="col-lg-12">
        
        <!--End of main menu-->
        <div>
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="editCategory_validation.php">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Category Name:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" placeholder=<?php echo $rows['category_description']; ?> id="category_name" class="form-control" name="category_name" required="" >
                    </div>
                </div>

                <input type="hidden" name="old_category" value=<?php echo $rows['category_description']; ?> >
               
                <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit">Edit</button> 
                    </div>
                </div>

                <div style="font-size: 14px; color:#F00;"> 
            
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