<?php
include ("../View/Header.php");
include "../Control/busregcheck.php"
?>

<html>

<body>

<div class='main-body'>


    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script src="../JS/busjs.js" defer></script>

    <form class='bus-reg-form' action="" method="post" enctype="multipart/form-data" id="form">
    <p class='form-title'> Register Your Business Account </p> <hr>


    <div class='form-fields'>
        <div class='form-field'>
            <label> Company Name : </label>
            <input type="text" name="companyname" id="companyname" > 
            <small>Error Message</small>
            <p> <?php echo $cname ?> </p>
        </div>

        <div class='form-field'>
            <label> License Number : </label>
            <input type="text" name="licensenumber" id="licensenumber"  > 
            <small>Error Message</small>
            <p> <?php echo $lnum ?> </p>
        </div>

        <div class='form-field select'>
            <label> Get Access As: </label>
            <input type = "checkbox" name="Moderator" value="Moderator"> <span>Moderator</span> 
            <input type = "checkbox" name="Editor" value="Editor"> <span>Editor</span> 
            <input type = "checkbox" name="Viewer" value="Viewer"> <span>Viewer</span> 
            <p> <?php echo  $lang?> </p>
        </div>

        <div class='form-field'>
            <label> First Name : </label>
            <input type="text" name="firstname" id="fname" >
            <small>Error Message</small>
            <p> <?php echo $fname ?> </p>
        </div>

        <div class='form-field'>
            <label> Last Name : </label>
            <input type="text" name="lastname"  id="lname"  >
            <small>Error Message</small>
            <p> <?php echo $lname ?> </p>
        </div>


        <div class='form-field'>
            <label> User Name : </label>
            <input type="text" name="username"  id="uname">
            <small>Error Message</small> 
            <p> <?php echo $uname ?> </p>
        </div> 

        <div class='form-field select'>
            <label> Gender: </label>
            <input type="radio" name="gender" value="Male" > <span>Male</span>
            <input type="radio" name="gender" value="Female" > <span>female</span> 
            <p> <?php echo $gr ?> </p>
        </div> 

        <div class='form-field'>
            <label> Email : </label>
            <input type = "text" name= "email" id="email" >
            <small>Error Message</small> 
            <p> <?php echo $em?> </p>
        </div> 

        <div class='form-field'>
            <label> Password : </label>
            <input type = "password" name= "password" id="password" >
            <small>Error Message</small> 
            <p> <?php echo $cp ?> </p>
        </div> 

        <div class='form-field'>
            <label> Confirm Password : </label>
            <input type = "password" name= "confirmpassword" id="confirmpassword"  > 
            <small>Error Message</small>
            <p> <?php echo $cp ?> </p>
        </div> 

        <div class='form-field'>
            <label> Please choose a file </label>
            <input type="file" name="myfile" >
            <p> <?php echo $fu ?> </p>
        </div>
    </div>

    <div class='form-btns'>
        <input type="submit" value="Submit" name="submit" >
        <input type="reset" value="Reset" > 
    </div>
    <div class='form-field'>  
        <label> Already Have an account? </label> 
        <a href= "../View/buslogin.php"> Sign in </a>
    </div>
</div>
</body>

</html>

<?php
include ("../View/Footer.php");
?>
