<?php
include "../Model/customermodel.php";
session_start();

$err="";

if(isset($_POST["submit"]))

{
     $mydb= new DB();
     $conobj=$mydb->opencon();
     $results=$mydb->logincheck($conobj, "customer", $_POST['uname'], $_POST['password']);
     if($results->num_rows>0)
     {
          $_SESSION["uname"]=$_POST["uname"];
          $_SESSION["password"]=$_POST["password"];
          header("location: ../View/customerprofile.php");
     }
     $err="Your username or password is incorrect";
          
          
}

?>
