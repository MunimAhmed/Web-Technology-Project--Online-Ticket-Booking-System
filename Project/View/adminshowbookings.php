<?php //include ("../View/Header.php");
include ("../Control/adminsessioncheck.php");

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
       
    </div>
</body>
</html>