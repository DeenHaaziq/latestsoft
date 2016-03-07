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
        <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="submitSelectedCategory.php">
           <table class="table table-bordered"><th>Category Name</th><th></th>
           <?php

           $start=0;
          $limit=10;
 
          if(isset($_GET['id']))
            {
              $id=$_GET['id'];
              $start=($id-1)*$limit;
            }
          else
            {
              $id=1;
            }
            //Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items.
            //$query=mysqli_query($dbconfig,"select * from user LIMIT $start, $limit");
            require '../database_connection.php';
            $list_categories = "SELECT * FROM category LIMIT $start, $limit;";
            $query_run = mysql_query($list_categories);
           //include 'otherSQLqueries.php';
           while($rows=mysql_fetch_array($query_run))
           {

                echo "<tr>
                        <td>".$rows['category_description']."</td>
                        <td><input type='radio' name='selector' value=".$rows['category_code']." id=".$rows['category_code']."/></td>
                      <tr>";
           }

           ?>
           </table>

          <!--Pagination start from here. -->
           <ul>
          <?php
          //fetch all the data from database.
          require '../database_connection.php';
          $list_categories2 = "SELECT * FROM category;";
          $query_run2 = mysql_query($list_categories2);
          $rows=mysql_num_rows($query_run2);
          //calculate total page number for the given table in the database
          $total=ceil($rows/$limit);
          if($id>1)
          {
          //Go to previous page to show previous 10 items. If its in page 1 then it is inactive
          echo "<a href='?id=".($id-1)."' class='button'>PREVIOUS</a>";
          }
          if($id!=$total)
          {
          ////Go to previous page to show next 10 items.
          echo "<a href='?id=".($id+1)."' class='button'>NEXT</a>";
          }
          ?>
          
          <?php
          //show all the page link with page number. When click on these numbers go to particular page.
          for($i=1;$i<=$total;$i++)
          {
            if($i==$id) { echo "<li class='current'>".$i."</li>"; }
             
            else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
          }
          ?>
          </ul>

           <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" onclick="loadCategoryID()">Edit Category</button>-->

           <div class="form-group">
                    <div class="col-lg-6 col-lg-offset-2">
                        <button class="btn btn-primary" type="submit" data-toggle="modal">Submit</button> 
                    </div>
            </div>

           </form>

                    <!--
                    <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="editCategory_validation.php">
                    <div class="container">
                    <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
  
      
                    <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Selected Category</h4>
                    </div>
                    <div class="modal-body">
                    <p>Some text in the modal.</p>
          
        
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
      
                    </div>
                    </div>
  
                    </div>

                    </form>
                    -->

            

           
           
    
        </div>
        <!--End of add module form-->

        <div style="height: 10px;">&nbsp;</div>


        <div style="height: 20px;">&nbsp;</div>
        <a href="../logout.php"><button class="btn btn-lg btn-danger" type="button"><i class="fa fa-sign-out"></i>Logout</button></a>

        </div>


        

</div>
<?php include '../footer.php'; ?>