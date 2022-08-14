<?php //include ("../View/Header.php");
include ("../Control/adminsessioncheck.php");
include ("../Control/editadminaccountcheck.php");
?>

<html>
   <head>
      <title> Admin Panel </title>
</head>
<link rel="stylesheet" type="text/css" href="../CSS/adminstyle.css">
<body>
   <div id="header">
      <img src="../Files/adminpanel.png" alt="adminLogo" id="adminlogo"><br>
      Hi Admin, <a href= "../View/adminprofile.php" id="anchor"> <?php echo $_SESSION["uname"]; ?>  </a> <br>
   </div>

   <div id="sidebar">
   <li id="list">  <a href= "adminprofile.php" > Dashboard </a> </li>
   <li id="list">  <a href= "admineditaccount.php" > Edit Profile </a> </li>
   <li id="list"> <a href = "adminshowbuscompany.php" > Bus Company List </a>  </li>
   <li id="list"> <a href = "adminshowaircompany.php" > Air Company List </a> </li>
   <li id="list"> <a href="adminshowschedules.php"> Schedules </a> </li>
   <li id="list"> <a href="adminshowbookings.php"> Bookings </a> </li>
   <li id="list"> <a href= "adminshowcustomers.php"> Customers </a> </li>
   <li id="list"> <a href="../Control/logout.php"> Logout </a> </li>
   </div>

   <div id="data">
       <br>
       <br>
   <h1> Update Your Account </h1>
<center>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td> First Name : </td>
<td> <input type="text" name="fname"> </td>
<td> <?php echo $a ?> </td>
</tr>
<tr>
<td> Last Name : </td>
<td> <input type="text" name="lname"> </td>
<td> <?php echo $b ?> </td>
</tr>
<tr>
<td> Username : </td>
<td> <input type="text" name="uname" placeholder="Minimum 5 characters"> </td>
<td> <?php echo $c ?> </td>
</tr>
<tr>
    <td> Select Role : </td>
    <td> <input type= "radio" name="role" value="Admin"> Admin 
    <input type= "radio" name="role" value="Moderator"> Moderator <br>
    <input type= "radio" name="role" value="Analyst"> Analyst
    <input type= "radio" name="role" value="Editor"> Editor </td>
    <td> <?php echo $errrole ?> </td>
</tr>
<tr>
<td> Phone Number : </td>
<td> <input type ="text" name= "phone"> </td>
<td> <?php echo $d ?> </td>
</tr>


<tr>
<td> Email : </td>
<td> <input type = "text" name= "email"> </td>
<td> <?php echo $e ?> </td>

<tr>
<td> Password : </td>
<td> <input type = "password" name= "password"  placeholder="More than 7 characters"> </td>
<td> <?php echo $f ?> </td>
</tr>

<tr>
<td> Confirm Password : </td>
<td> <input type = "password" name= "confirmpassword" placeholder="More than 7 characters"> </td>
<td> <?php echo $f ?> </td>
</tr>

<tr>
<td> Please Submit Your Provided Id </td>
<td> <input type="file" name="myfile"> </td>
<td> <?php echo $g ?> </td>
</tr>

<tr>
<td> <input type="submit" value="Update" name="submit">
<input type="reset" value="Reset"> </td>
</tr>
<tr>
   </div>
</center>
</body>
</html>








