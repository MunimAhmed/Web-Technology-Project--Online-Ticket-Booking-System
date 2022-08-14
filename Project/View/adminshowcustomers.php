<?php //include ("../View/Header.php");
include ("../Control/adminsessioncheck.php");


?>

<html>
   <head>
      <title> Admin Panel </title>
      <script src="../JS/showcustomer.js" defer></script>
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
<div class="table">
   <div class='searchbar' >
      <input type="search" id='search-input'>
   </div>

   <div>
      <p id='message'></p>
   </div>
   <table >
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Username</th>
					<th>Customer Id</th>
               <th>Gender</th>
					<th>Password</th>
               <th>Delete</th>
				</tr>
			</thead>
         <?php
include ("../Model/model.php");


 $mydb= new DB();
 $conobj=$mydb->opencon();
 $results=$mydb->resultsnum($conobj, "customer");
 if($results->num_rows>0)
 {
while($row=$results->fetch_assoc())
 {
     echo "<tr>";
     echo "<td>".$row['name']."</td>";
     echo "<td>". $row['email']."</td>";
     echo "<td>". $row['phone']."</td>";
     echo "<td>". $row['uname']."</td>";
     echo "<td>". $row['customer_id']."</td>";
     echo "<td>". $row['gender']."</td>";
     echo "<td>". $row['password']."</td>";
     echo "<td>" .'<button id="anchor"> <a href="delete.php? customerdeleteid='.$row['customer_id'].'">Delete </a> </button>' ."</td>";
     echo "</tr>";
 }
 echo "</table>";
}
else{
    echo "No Data Found";
}
?>
      </table>
      </div>
    </div>
</body>
</html>