<?php
include ("../View/Header.php");
include ("../Control/buslogincheck.php");
?>


<html>

<head>
<link rel="stylesheet" type="text/css" href="../CSS/main.css">
</head>

<body>



<div class='main-body'>
    
    <form class='bus-login-form' action="" method="post" enctype="multipart/form-data">
            <p class='form-title'> Sign In  </p> <hr>
            
            <div class='form-fields'>

                <div class='form-field'>
                    <label> Username : </label>
                    <input type = "text" name= "username" > 
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
             <a href="../View/busregistration.php"> Create Your Bus Comapany Employee Account </a> 
        </p> 
    </form>

</div>
</body>
</html>

<?php
include ("../View/Footer.php");
?>
