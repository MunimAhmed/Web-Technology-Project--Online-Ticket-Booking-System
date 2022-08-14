<?php
include ("../View/Header.php");
include "../Control/airregistrationcheck.php"
?>

<html>
<center>
<body>
    <h1> Register Your Business Account </h1> <hr>
    
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td> Company Name : </td>
<td> <input type="text" name="companyname" > </td>
<td> <?php echo $a ?> </td>
</tr>
</tr>
<td> Role : </td>
<td> <input type = "radio" name="role" value="Moderator">Passenger Service Agent <br>
     <input type = "radio" name="role" value="Editor">Sales Manager <br>
     <input type = "radio" name="role" value="Schedule Coordinator">Schedule Coordinator <br>
     <input type = "radio" name="role" value="Ticket Agent">Ticket Agent <br>
     <input type = "radio" name="role" value="Aviation Attorney">Aviation Attorney</td>
     <td> <?php echo  $b?> </td>
</tr>
<tr>
<td> First Name : </td>
<td> <input type="text" name="firstname" > </td>
<td> <?php echo $c ?> </td>
</tr>
<tr>
<td> Last Name : </td>
<td> <input type="text" name="lastname" > </td>
<td> <?php echo $d ?> </td>
</tr>
<tr>
<td> User Name : </td>
<td> <input type="text" name="username" > </td>
<td> <?php echo $e ?> </td>
</tr>
<tr>
<td> Gender: </td>
<td> 
<input type="radio" name="gender" value="Male" >Male
<input type="radio" name="gender" value="Female" >female 
</td>
<td> <?php echo $f ?> </td>
</tr>
<tr>
</tr>
<tr>
<td> Email : </td>
<td> <input type = "text" name= "email" > </td>
<td> <?php echo $g?> </td>
</tr>
<tr>
<td> Password : </td>
<td> <input type = "password" name= "password" > </td>
<td> <?php echo $h ?> </td>
</tr>
<tr>
<td> Confirm Password : </td>
<td> <input type = "confirmpassword" name= "confirmpassword" > </td>
<td> <?php echo $h ?> </td>
</tr>
<tr>
<td> Select Your Company ID </td>
<td> <input type="file" name="myfile" > </td>
<td> <?php echo $i ?> </td>
</tr>
<tr>
<td> <input type="submit" value="Sign up" name="submit" >
<input type="reset" value="Reset" > </td>
</tr>
</table>
</body>
</center>
</html>

<?php
include ("../View/Footer.php");
?>
