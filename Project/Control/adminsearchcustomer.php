<?php
include ("../Model/model.php");
if($_POST["name"]=="")
{
    echo "empty input";
}
else{
    

    $mydb=new DB();
    $conobj=$mydb->opencon();
    
    $mydata=$mydb->searchUser($conobj, "customer",$_POST["name"]);
    if($mydata->num_rows > 0)
    {

    
        while($row=$mydata->fetch_assoc())
        {
     
          echo $row["name"];
           
        }


    }
    else{
        echo "no data found";
    }
    

}


?>