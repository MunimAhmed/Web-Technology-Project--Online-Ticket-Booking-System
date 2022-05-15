<?php
class DB
{
    //connection function
    function opencon(){
$DBHostname="localhost";
$DBUsername="root";
$DBPass="1234";
$DBName="otbs";

$conn=new mysqli($DBHostname, $DBUsername, $DBPass, $DBName);
if($conn->connect_error)
{
    echo "Unable to create connection object".$conn->connect_error;
}
return $conn;
    }
//query function
function InsertData($fname, $lname, $uname, $phone, $email, $password, $role, $filename, $tablename, $conn)
  {
    $sqlstr="INSERT INTO $tablename (fname, lname, uname, phone, email, password, role, filename) values ('$fname', ' $lname', '$uname', '$phone', '$email', '$password', '$role', '$filename')";
    if($conn->query($sqlstr)==TRUE)
    {
    echo "Data Inserted Successfully";
    }
    else{
        echo "Cant insert Data".$conn->err;
    }
  }
//fetch data
function fetchdata($conn, $tablename)
 {
    $sqlstr="Select * FROM $tablename";
    $results=$conn->query($sqlstr);
    return $results;
 }
 //num of results
function resultsnum($conn, $tablename)
{
    $sqlstr="Select * From $tablename";
    $results=$conn->query($sqlstr);
    return $results;
}

function logincheck($conn, $tablename, $uname, $password)
{
    $sqlstr="Select * from $tablename Where uname='$uname' and password='$password'";
    $results=$conn->query($sqlstr);
    return $results;
}

function searchemail($conn, $tablename, $email)
 {
    $sqlstr="Select email From $tablename WHERE email='$email'";
    $result_email=$conn->query($sqlstr);
    return $result_email;
 }

function updatepassword($tablename, $conn, $email, $password)
{
    $sqlstr="UPDATE $tablename SET password='$password' WHERE email = '$email'";
    if($conn->query($sqlstr)==TRUE)
    {
        echo "update success";
    }
    else
    {
        echo "cant update";
    }
}

function searchData($conn, $tablename, $fname)
{
    $sqlstr="Select * From $tablename WHERE fname='$fname'";
    $results=$conn->query($sqlstr);
    return $results;
}
//update data
function updateData($tablename, $conn, $fname, $lname, $uname, $phone, $email, $password, $role, $filename, $olduname)
{
    $sqlstr="UPDATE $tablename SET fname='$fname', lname='$lname' , uname='$uname', phone='$phone' , email= '$email' , password = '$password', role = '$role' , filename = '$filename' WHERE uname = '$olduname'";
    if($conn->query($sqlstr)==TRUE)
    {
        echo "update success";
    }
    else
    {
        echo "cant update";
    }
}
function deleteData($tablename, $conn, $id)
{
    $sqlstr="DELETE FROM $tablename WHERE company_id = $id";
    if($conn->query($sqlstr)==TRUE)
    {
        echo "delete success";
    }
    else
    {
        echo "cant delete";
    }
}
function customerdeleteData($tablename, $conn, $id)
{
    $sqlstr="DELETE FROM $tablename WHERE customer_id = $id";
    if($conn->query($sqlstr)==TRUE)
    {
        echo "delete success";
    }
    else
    {
        echo "cant delete";
    }
}
//close function
function closecon($conn){
    $conn->close();
}

function searchUser($conn,$tablename,$fname)
{
$sqlstr="SELECT * FROM $tablename WHERE name='$fname'";
$results=$conn->query($sqlstr);
return $results;
}

}
?>