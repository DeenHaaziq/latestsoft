<?php

require_once("../config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("../index.php");
}

// set page title
$title = "Delete Category";

include 'header_inventory.php';

?>


<div class="row">
        <div class="col-lg-12">
       
        
        <!--End of main menu-->
        <div>
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="deleteItem_validation.php">
           <table class="table table-bordered"><th>Category Name</th><th></th>
           <?php
           include 'otherSQLqueries.php';
           while($rows=mysql_fetch_array($query_run))
           {

                echo "<tr>
                        <td>".$rows['category_description']."</td>
                        <td><input type='checkbox' name='selector[]' value=".$rows['category_code']."/></td>
                      <tr>";
           }

           ?>
           </table>

           <input type="submit" class="btn btn-primary" value="Remove Category"  />

        </form>
        </div>
        <!--End of add module form-->

        <div style="height: 10px;">&nbsp;</div>


        <div style="height: 20px;">&nbsp;</div>
        <a href="../logout.php"><button class="btn btn-lg btn-danger" type="button"><i class="fa fa-sign-out"></i>Logout</button></a>

        </div>

</div>
<?php include '../footer.php'; ?>