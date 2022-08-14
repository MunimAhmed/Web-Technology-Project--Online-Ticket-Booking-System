<?php
include ("../View/Header.php");
include "../Control/customerregcheck.php";
?>

<?php
setcookie("user_detect2","visited", time()+86400*30,"/");
echo "<br>";
if(isset($_COOKIE["user_detect2"]))

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
    <script src="../JS/customerjs.js" defer></script>

    <form class='customer-reg-form' action="" method="post" enctype="multipart/form-data" id="form">
    <p class='form-title'> Sign Up </p> <hr>
    <div class='form-fields'>
       <div class='form-field'>
       <label>Name: </td>
        <input type="text" name="Name" id="Name" >
         <?php echo $nameErr ?> 
        <small>Error Message</small>
        </div> 


        <div class='form-field'>
        <label>User name: </label>
         <input type="text" name="uname" id="uname"> 
        <?php echo $unameErr ?> 
        <small>Error Message</small>
        </div> 

        <div class='form-field'>
        <label>Email: </label>
        <input type="text" name="Email" id="Email"> 
        <?php echo $emailErr ?>
        <small>Error Message</small>
        </div> 

        <div class='form-field'>
        <label> Phone Number:</label>
        <input type="text" name="PhoneNo" id="PhoneNo"> 
        <?php echo $numberErr ?>
        <small>Error Message</small>
        </div>      


        <div class='form-field'>
        <label>  Pick your Gender: </label>
        <input type="radio" name="Gender" value="Male">Male
        <input type="radio" name="Gender" value="Female">Female
        <input type="radio" name="Gender" value="Others">Others
        </div> 

        <div class='form-field'>
        <label>  Password: </label>
        <input type="password" name="password" placeholder="Password must be 6 characters" id="password"> 
        <?php echo $passwordErr ?>
        <small>Error Message</small>
        </div> 

        <div class='form-field'>
        <label> Re-enter password:  </label>
        <input type="password" name="confirmpassword" placeholder="Please re-enter password" id="confirmpassword">
       <?php echo $confirmpasswordErr ?>
        <small>Error Message</small>
        </div> 

        <div class='form-field'>
        <label> Upload your NID card copy  </label>
        <label> Please choose a file </label>
        <input type="file" name="myfile" > 
        <?php echo $fileUpErr ?> 
        </div> 

        <div class='form-btns'>
       <input type="submit" name="Signup" value="Signup"> 
        <input type="reset" value="Reset"> 
        </div> 
        <div class='form-field'>
        <label> Already Have an account? <a href= "../View/customerlogin.php"> Sign in </a>  </label>
        </div> 



</form>
</div>
</div>
</html>

<?php
include ("Footer.php");
?>

