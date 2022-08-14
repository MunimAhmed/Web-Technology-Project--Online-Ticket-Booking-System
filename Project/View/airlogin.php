<?php
include ("../View/Header.php");
include ("../Control/airlogincheck.php");
?>


<html>
<center>
<body>
    <h1> Sign In to Your Business Account </h1> <hr>
    
<form action="" method="post" enctype="multipart/form-data">
    
<table>
<tr>
<td> Username : </td>
<td> <input type = "text" name= "username" ><br> </td> 
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" > <br> </td> 
</tr>
<tr>
<td> <input type="submit" value="Login" name="submit"> 
<input type="reset" value="Reset"> <br> </td> </tr> 
<tr> <td> Dont't have an account? <a href="../View/airregistration.php"> Register </a> </td> </tr>
<tr> <td> <br> <br> <br> <br> </td> </tr>
</table>
</body>
</center>
</html>

<?php
include ("../View/Footer.php");
?>
