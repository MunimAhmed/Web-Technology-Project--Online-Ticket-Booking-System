<?php
include ("../View/Header.php");
include "../Control/adminregcheck.php";
?>

<html>

<head>
<link rel="stylesheet" type="text/css" href="../CSS/adminstyle.css">
<script src="../JS/adminjs.js" defer></script>
</head>


<body>

    
    
<form action="" method="post" enctype="multipart/form-data" class='admin-reg-frorm' id="form">
<div class='.main-body'>
    <div class='form-fields'>
    <h2> Sign Up as Admin </h2>
    <div class='form-field'>
        <label>  First Name : </label> 
        <input type="text" name="fname" id="fname"> 
       <small>Error Message</small>
    </div> 
    <p> <?php echo $a ?> </p> <br>
    <div class='form-field'>
    
        <label>   Last Name : </label> 
        <input type="text" name="lname"  id="lname"> 
        <small>Error Message</small>
    </div>  
    <p>  <?php echo $b ?>  </p> <br>

    <div class='form-field'>
    
        <label> Username : </label> 
        <input type="text" name="uname" placeholder="Minimum 5 characters" id="uname"> 
        <small>Error Message</small>
    </div>  
    <p> <?php echo $c ?> </p> <br>

    <div class='form-field select'>
        <label> Select Role : </label>
         <input type= "radio" name="role" value="Admin"> <span>Admin</span> 
         <input type= "radio" name="role" value="Moderator"> <span>Moderator</span> 
         <input type= "radio" name="role" value="Analyst"> <span>Analyst</span> 
         <input type= "radio" name="role" value="Editor"> <span>Editor</span> 
    </div>  
    <p>  <?php echo $errrole ?> </p> <br>
    <div class='form-field'>
      
        <label>  Phone Number : </label> 
        <input type ="number" name= "phone" id="phone">
        <small>Error Message</small>
    </div>  
    <p>  <?php echo $d ?></p> <br>
    <div class='form-field'>  
    
        <label>  Email : </label> 
        <input type = "text" name= "email" id="email"> 
        <small>Error Message</small>
    </div>  
    <p> <?php echo $e ?> </p> <br>

    <div class='form-field'>  
    
        <label> Password : </label>
        <input type = "password" name= "password"  placeholder="More than 7 characters" id="password">
        <small>Error Message</small>
    </div>  
    <p> <?php echo $f ?> </p>  <br>

    <div class='form-field'>      
    
        <label> Confirm Password : </label>
        <input type = "password" name= "confirmpassword" placeholder="More than 7 characters" id="confirmpassword"> 
        <small>Error Message</small>
    </div>  
    <p><?php echo $f ?> </p> <br>

    <div class='form-field'> 
     
        <label> Please Submit Your Provided Id </label>
        <input type="file" name="myfile"> 
    </div>  
    <p> <?php echo $g ?> </p> <br>

    <div class='form-field'>  
     <input type="submit" value="Submit" name="submit">
     <input type="reset" value="Reset">
    </div>
    
     <div class='form-field'>  
        <label> Already Have an account? </label> 
        <a href= "../View/adminlogin.php"> Sign in </a>
    </div>

    </div>
</div>
</form>
</body>
</html>

