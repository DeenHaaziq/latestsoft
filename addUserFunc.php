<?php

require_once("config.php");
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    // not logged in send to login page
    redirect("index.php");
}

 $sql = "INSERT INTO role(role_rolecode, role_rolename)
VALUES ('John', 'Doe')";



       if($DB === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

 

// Escape user inputs for security

$role_rolecode = mysqli_real_escape_string($DB, $_POST['username']);

$role_rolename = mysqli_real_escape_string($DB, $_POST['user_password']);


 

// attempt insert query execution

$sql = "INSERT INTO role (role_rolecode, role_rolename) VALUES ('$role_rolecode', '$role_rolename')";

if(mysqli_query($DB, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($DB);

}

 

// close connection

mysqli_close($DB);