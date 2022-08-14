
<?php
//include ("../View/Header.php");
include "../Control/adminforgotcheck.php";
?>



<html>
    <fieldset>
<center>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
    
        <br>
        <br>
        <br>
        <br>
    <head> Update Your Password </head>
<table>
<tr>
<td> Insert Your Email: </td>
<td> <input type = "text" name= "email" ><br> </td> 
</tr>
<tr>
<td> Enter New Password </td>
<td> <input type = "password" name= "password"  placeholder="Password must be 6 characters"><br> </td> 
<td><?php echo $passwordErr ?></td></tr>



<tr>
<td> Confirm New Password </td>
<td> <input type = "password" name= "confirmpassword"  placeholder="Please re-enter password"><br> </td> 
<td><?php echo $passwordErr ?></td></tr>

<tr><td><input type="submit" name="Submit" value="Submit">
        </td>
        <td><input type="reset" name="Reset" value="Reset"></tr>
</table>
</body>
</center>
</html>

<?php
//include ("../View/Footer.php");
?>
