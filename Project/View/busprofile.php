<?php
session_start();

if(!isset($_SESSION["uname"]))
{
    header("location:../View/buslogin.php");
}

?>

<html>

Hi, Busadmin <?php echo $_SESSION["uname"]; ?>

Click Here to Logout <a href="../Control/buslogout.php"> Logout </a>


</html>