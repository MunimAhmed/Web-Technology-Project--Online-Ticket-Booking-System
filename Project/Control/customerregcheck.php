<?php
include "../Model/customermodel.php";


$nameErr=$unameErr=$emailErr=$numberErr=$GenderErr=$passwordErr= $confirmpasswordErr=$fileUpErr="";
$name=$uname=$email=$number=$password= $confirmpassword=$gender="";
if(isset($_POST["Signup"])){
$name = $_POST["Name"];
if(empty("Name"))

$name= $_POST['Name']; 

    if(empty($name) || strlen($name)<2)
{
    $nameErr="Enter Name ehich must be at least 2 Characters ";
}
else{
    $nameErr="you have entered your name";
}

echo "<br>";
$uname= $_POST["uname"];
if(empty($uname) || strlen($uname)<4)
{
    $unameErr="Username must be 4 characters";
}
else{
    $unameErr="You have entered your user name";
}
echo "<br>";

$email = $_POST["Email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $emailErr= "Please enter valid email";
}
else {
$mydb= new DB();
$connobj=$mydb->opencon();
$results=$mydb->searchemail( $connobj, "customer", $email);
   if($results->num_rows>0){
    $e= "Email already exists";
   }
   else{
    $ee= "Email Address = ".$email;
    }
$mydb->closecon($connobj);
}

echo "<br>";
$number = $_POST["PhoneNo"]; 
if(is_numeric($number))
{

    $numberErr="You have entered phone number";
}
else{
    $numberErr= "enter phone number";
}

echo "<br>";


if(isset($_POST["Gender"]))
{

    $GenderErr= "You selected gender";
}
else{
    $GenderErr= "Please select your gender";
}

echo "<br>";

$password= $_POST["password"]; 
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
            $passwordErr= "Password is valid";
        }
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
         {
            $fileUpErr= "File is Uploaded";
         }
         else
         {
            $fileUpErr= "File Cannot be Uploaded";
         }
if(empty($name) || strlen($name)<2 || empty($uname) || strlen($uname)<4 || 
         empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) || !is_numeric($number) || !isset($_POST["Gender"]) ||
         empty($password) || strlen($password)<6 || $password != $confirmpassword || $results->num_rows>0)
      {
          echo "No data Saved";
      }
      
      else{
      
          $mydb=new DB();
          $connobj=$mydb->opencon();
          $mydb->InsertData("$name", "$uname", "$email", "$number", "$password", "$gender", "customer", $connobj);
          $mydb->closecon($connobj);
      
      }

}
?>
