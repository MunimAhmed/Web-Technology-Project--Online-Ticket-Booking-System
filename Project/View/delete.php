<?php
include "../Model/model.php";

if(isset($_GET['airdeleteid']))
{
$id=$_GET['airdeleteid'];
$mydb= new DB();
$conobj=$mydb->opencon();
$results=$mydb->deleteData("air_company", $conobj, $id);
$mydb->closecon($conobj);
header('location:adminshowaircompany.php');
}
else{
    echo "Delete Not Possible";
}

if(isset($_GET['busdeleteid']))
{
$id=$_GET['busdeleteid'];
$mydb= new DB();
$conobj=$mydb->opencon();
$results=$mydb->deleteData("bus_company", $conobj, $id);
$mydb->closecon($conobj);
header('location:adminshowbuscompany.php');
}
else{
    echo "Delete Not Possible";
}

if(isset($_GET['customerdeleteid']))
{
$id=$_GET['customerdeleteid'];
$mydb= new DB();
$conobj=$mydb->opencon();
$results=$mydb->customerdeleteData("customer", $conobj, $id);
$mydb->closecon($conobj);
header('location:adminshowcustomers.php');
}
else{
    echo "Delete Not Possible";
}



?>