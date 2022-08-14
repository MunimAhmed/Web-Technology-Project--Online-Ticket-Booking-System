<?php
//include ("../View/Header.php");
include ("../Control/adminlogincheck.php");
setcookie("user_detect","visited", time()+86400*30,"/");

if(isset($_COOKIE["user_detect"]))

{
    echo "</p>  You have visited me before </p> ";
  }
  else{
    echo "<p>  You are visiting me for the first time <p> ";
  }
?>

<html>
  <head>
  <title> Login as Admin </title>
</head>
<link rel="stylesheet" type="text/css" href="../CSS/adminstyle.css">
<script src="../JS/adminlogin.js" defer></script>




<body>
<div class='main-body'>
    <div class="loginbox">
  <img src="../Files/avatar.jpg" class="avatar">
  <h1> Login As Admin </h1>
<form action="" method="post" enctype="multipart/form-data" id="form">
    
<div class='login-field'>
  <p> Username : </p>
  <input type = "text" name= "uname" placeholder="Enter Username"   id="uname">
  <small></small>
</div>

 <div  class='login-field'>
   <p> Password : </p>
   <input type = "password" name= "password" placeholder="Enter Password"  id="password"> 
   <small></small>
</div>


<input type="submit" value="Login" name="submit"> <br>
<p2> <?php echo $err ?> </p2> <br>
<a href= "adminforgot.php"> Forgot password? </a> <br>  
 <a href="../View/adminreg.php"> Create a new account as Admin </a> 
</form>
</div>
</div>

</body>
</html>

<?php
// include ("../View/Footer.php");
?>
