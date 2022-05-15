<?php
$passwordErr="";
include ("../Model/model.php");

if(isset($_POST["Submit"]))

{
     
     $_SESSION["email"]=$_POST["email"];
     $mydb= new DB();
     $conobj=$mydb->opencon();
     $results=$mydb->searchemail($conobj, "admin", $_POST['email']);
     if($results->num_rows>0)
     {
          $password= $_REQUEST["password"]; 
          $confirmpassword=$_REQUEST["confirmpassword"];
          
                  if(empty($password) || strlen($password)<6)
                  {
                      $passwordErr=  "Please enter a valid password";
                  }
                  else if($password != $confirmpassword)
                  {
                      $passwordErr= "Password didn't match";
                  }
                  else
                  {
                      $mydb= new DB();
                      $conobj=$mydb->opencon();
                      $results=$mydb->updatepassword("admin", $conobj, $_POST['email'], $password);
                      Header("location: ../View/adminlogin.php");  
                  }  
          }

     else{
           echo "<h1> Email not Found </h1>" ;
     }

}

?>
