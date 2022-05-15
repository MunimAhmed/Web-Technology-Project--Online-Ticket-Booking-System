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
function InsertData($name, $uname, $email, $number, $password, $gender, $tablename, $conn)
    {
    $sqlstr="INSERT INTO $tablename (name, uname, email, phone, password, gender) values ('$name', ' $uname', '$email', '$number', '$password', '$gender')";
    if($conn->query($sqlstr)==TRUE)
    {
    echo "Data Inserted Successfully";
    }
    else{
        echo "Cant insert Data".$conn->err;
}
}

function searchemail($conn, $tablename, $email)
 {
    $sqlstr="Select email From $tablename WHERE email='$email'";
    $result_email=$conn->query($sqlstr);
    return $result_email;
 }
function logincheck($conn, $tablename, $uname, $password)
 {
     $sqlstr="Select * from $tablename Where uname='$uname' and password='$password'";
     $results=$conn->query($sqlstr);
     return $results;
} 
 function closecon($conn){
    $conn->close();
}
}