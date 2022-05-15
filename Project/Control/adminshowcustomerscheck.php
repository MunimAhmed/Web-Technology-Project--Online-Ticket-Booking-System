<?php
include ("../Model/model.php");


 $mydb= new DB();
 $conobj=$mydb->opencon();
 $results=$mydb->resultsnum($conobj, "customer");
 if($results->num_rows>0)
 {
     echo "<table>";
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
     echo "</tr>";
 }
 echo "</table>";
}
else{
    echo "No Data Found";
}


?>