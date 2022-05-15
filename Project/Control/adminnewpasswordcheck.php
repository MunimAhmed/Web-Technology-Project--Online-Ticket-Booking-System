<?php
$passwordErr="";


if(isset($_POST["Submit"])){
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
            $results=$mydb->updatepassword("admin", $conn, $_POST['email'], $password);
            $passwordErr= "Password Changed" ;
            Header("location: ../View/adminlogin.php");  
        }  
}
?>
