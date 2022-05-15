<?php
include ("../Model/busmodel.php");

session_start();

$err="";

if(isset($_POST["submit"]))

{
    
     $mydb= new DB();
     $conobj=$mydb->opencon();
     $results=$mydb->logincheck($conobj, "bus_emp", $_POST['username'], $_POST['password']);
     if($results->num_rows>0)
     {
          $_SESSION["uname"]=$_POST["username"];
          $_SESSION["password"]=$_POST["password"];
          header("location: ../View/busprofile.php");
     }
    

    $err="Your username or password is incorrect";
          
}

?>

