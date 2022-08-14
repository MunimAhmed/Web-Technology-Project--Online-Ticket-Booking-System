<?php
include ("../View/Header.php");
include "../Control/customerlogincheck2.php";
?>

<?php

setcookie("user_detect","visited", time()+86400*30,"/");

if(isset($_COOKIE["user_detect"]))

{
    echo "You have visited me before";
  }
  else{
    echo "You are visiting me for the first time";
  }
?>
<html>

    <head>

</head>
<hr>
<div class='main-body'>

    <link rel="stylesheet" type="text/css" href="../CSS/customerStyle.css">



    <form class='customer-login-form'  action="" method="post" enctype="multipart/form-data">
    <p class='form-title'> Login to your account  </p> <hr>

    <div class='form-fields'>
    <div class='form-field'>
    <label> Username : </label>
    <input type = "text" name= "uname" > 
                </div>

    <div class='form-field'>
    <label> Password : </label>
    <input type = "password" name= "password" >
                </div>
            </div>

            <div class='form-btns'> 
            <input type="submit" value="Login" name="submit" class='submit-btn'> 
            <input type="reset" value="Reset" class='reset-btn'>
            </div>

            <p class='form-reg-link'>

            <label>Don't have an account? </label> <a href="../View/customerreg.php"> Sign Up </a> 
            </p> 

            <a href="">Forget password</a>

</div>

</form>

</html>

<?php
include ("Footer.php");
?>