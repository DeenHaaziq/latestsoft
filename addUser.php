<?php

require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

// set page title
$title = "Add User";






include 'header.php';
?>
<div class="row">
    <div class="col-lg-12">
        <h3>Displaying menu in a group list</h3>
        <div class="well well-sm">
            <ul>
               <li><a href="addUser.php">Add User</a></li>
               <li><a href="purchases.php">purchases</a></li>
               <li><a href="stocks.php">stocks</a></li>

            </ul>
        </div>
        <!--End of main menu-->
        <div>
 <form class="form-horizontal" name="contact_form" id="contact_form" method="post" action="addUserFunc.php">
            <input type="hidden" name="mode" value="login" >

            <fieldset>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>Username:</label>
                    <div class="col-lg-6">
                        <input type="text" value="" placeholder="User Name" id="username" class="form-control" name="username" required="" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="username"><span class="required">*</span>User Rolle:</label>
                    <div class="col-lg-6">
                   
                        <select class="form-control">
                            <option value="volvo">Super Admin</option>
                            <option value="saab">Admin</option>
                    
                        </select> 
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="user_password"><span class="required">*</span>Password:</label>
                    <div class="col-lg-6">
                        <input type="password" value="" placeholder="Password" id="user_password" class="form-control" name="user_password" required="" >
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
        <!--End of add module form-->

        <div style="height: 10px;">&nbsp;</div>


        <div style="height: 20px;">&nbsp;</div>
        <a href="logout.php"><button class="btn btn-lg btn-danger" type="button"><i class="fa fa-sign-out"></i>Logout</button></a>

    </div>

</div>
<?php include 'footer.php'; ?>