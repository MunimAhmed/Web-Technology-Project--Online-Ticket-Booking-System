<?php
include ("../Model/busmodel.php");

$cname=$lnum=$fname=$lname=$uname=$gr=$lang=$dg=$em=$cp=$fu="";
if(isset($_POST["submit"]))
{
    $companyname= $_REQUEST['companyname']; 

    if(empty($companyname) || strlen($companyname)<6)
    {
        $cname= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $cname= "Company name = ".$companyname;
    }
    $licensenumber= $_REQUEST['licensenumber']; 
    if(empty($licensenumber) || strlen($licensenumber)<8)
    {
        $lnum=  "Please enter a valid License Number";
    }
    else
    {
        $lnum= "Licence Number is valid";
    }
    $firstname= $_REQUEST['firstname']; 

    if(empty($firstname) || strlen($firstname)<4)
    {
        $fname= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $fname= "First name = ".$firstname;
    }
    

    $lastname= $_REQUEST['lastname'];
    if(empty($lastname) || strlen($lastname)<4)
    {
        $lname= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $lname= "Last name = ".$lastname;
    }  
    $username= $_REQUEST['username'];
    if(empty($username) || strlen($username)<6)
    {
        $uname= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $uname= "User name = ".$username;
    } 

    $gender=$_POST["gender"];

    if(isset($_POST["gender"]))
    {
        $gr= "Gender =".$_POST["gender"] ;
    }
    else{
        $gr= "Please select your gender ";
    } 

   
    if(isset($_POST["Moderator"]) && isset($_POST["Editor"]) && isset($_POST["Viewer"]))
    {
        $lang= "  ".$_POST["Moderator"]."  ".$_POST["Editor"]."  ".$_POST["Viewer"];
        
    } 
    else if(isset($_POST["Editor"]) && isset($_POST["Viewer"]))
    {
        $lang= "  ".$_POST["Editor"]."  ".$_POST["Viewer"];
        
    }
    else if(isset($_POST["Moderator"]) && isset($_POST["Viewer
    "]))
    {
        
        $lang= "  ".$_POST["Moderator"]."  ".$_POST["Viewer"];
    }
    else if(isset($_POST["Moderator"]) && isset($_POST["Editor"]))
    {
        $lang= "  ".$_POST["Moderator"]."  ".$_POST["Editor"];
        
    }
    else if(isset($_POST["Viewer
    "]))
    {
        $lang= "  ".$_POST["Viewer
        "];
        
    }
    else if(isset($_POST["Editor"]))
    {
        $lang= "  ".$_POST["Editor"];
        
    }
    else if(isset($_POST["Moderator"]))
    {
        $lang= "  ".$_POST["Moderator"];
         
    }
else
{
    $lang= "Please select Type Of Access Needed";
}
    $email= $_REQUEST['email'];

    $email= $_REQUEST['email'];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        $em= "Please enter a valid email";
    }
    else{
        $mydb= new DB();
        $conobj=$mydb->opencon();
        $results=$mydb->searchemail( $conobj, "bus_emp", $email);
           if($results->num_rows>0){
            $em= "Email already exists";
           }
           else{
            $em= "Email Address = ".$email;
            }
        $mydb->closecon($conobj);
        }

        $password= $_REQUEST['password']; 
        $confirmpassword=$_REQUEST['confirmpassword'];
    
            if(empty($password) || strlen($password)<6)
            {
                $cp=  "The Password Field Must Be At Least 5 Characters";
            }
            else if($password != $confirmpassword)
            {
                $cp= "The Confirm Password Confirmation Does not Match";
            }
            else
            {
                $cp= "Password is valid";
            }

    $filename=$_FILES["myfile"]["name"];
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
    {
        $fu= "File Uploaded";
    }
    else
    {
        $fu= "File Cannot Upload";
    }

if(empty($companyname) || strlen($companyname)<6 || empty($licensenumber) || strlen($licensenumber)<8 || empty($firstname) || strlen($firstname)<4 || 
empty($lastname) || strlen($lastname)<4 || empty($username) || strlen($username)<6 || empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) || 
empty($password) || strlen($password)<6 || $password != $confirmpassword || $results->num_rows>0)
 {
     echo "No data Saved";
 }
 else{
    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb-> InsertData($companyname, $licensenumber, $firstname, $lastname, $username, $gender,  $lang, $email, $password, $filename, "bus_emp", $conobj);
    $mydb->closecon($conobj);
 }
 

}
?>