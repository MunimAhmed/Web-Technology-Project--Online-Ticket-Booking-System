<?php
include ("../View/Header.php");
include "../Control/adminnewpasswordcheck.php";
?>


<html>
<fieldset>
<center>
<body>
    <h5> Create Your New password  </h5> 
    
<form action="" method="post" >
    
<table>


<td> Enter New Password </td>
<td> <input type = "password" name= "password"  placeholder="Password must be 6 characters"><br> </td> 
<td><?php echo $passwordErr ?></td></tr>



<tr>
<td> Confirm New Password </td>
<td> <input type = "password" name= "confirmpassword"  placeholder="Please re-enter password"><br> </td> 
<td><?php echo $passwordErr ?></td></tr>



<tr><td><input type="submit" name="Submit" value="Submit">
    </td></tr>
</table>
</body>
</center>
</html>



<?php
include ("../View/Footer.php");
?>
