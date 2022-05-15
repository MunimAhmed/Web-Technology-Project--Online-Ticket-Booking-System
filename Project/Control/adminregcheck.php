<?php

include ("../Model/model.php");

$fname=$lname=$uname=$role=$phone=$email=$password=$confirmpassword=$filename=$a=$b=$c=$role=$d=$e=$f=$g=$errrole="";


if(isset($_POST["submit"]))
{
    $fname= $_REQUEST['fname']; 

    if(empty($fname
    ))
    {
        $a= "Name can not be empty";
    }
    elseif( strlen($fname)<2)
    {
        $a="Please Enter a Valid Name with more than 2 character";
    }
    else
    {
        $aa= "First name = ".$fname;
    }
    

    $lname= $_REQUEST['lname'];
    if(empty($lname) || strlen($lname)<2)
    {
        $b= "Name can not be empty";
    }
    elseif(strlen($lname)<2)
    {
        $a="Please Enter a Valid Name with more than 2 character";
    }
    else
    {
        $bb= "Last name = ".$lname;
    }
    $uname= $_REQUEST['uname'];
    if(empty($uname) || strlen($uname)<5)
    {
        $c= "Please enter a valid user name with more than 5 characters";
    }
    else
    {
        $cc= "User name = ".$uname;
    }

    if(isset($_POST['role']))
    {
        $role=$_POST['role'];
        $errrolee= "Role =".$role ;
    }
    else{
        $errrole= "Please select your Role ";
    } 
    $phone= $_REQUEST['phone'];
    if(empty($phone))
    {
        $d= "Please enter your phone number";
    }
    elseif(strlen($phone)<11)
    {
        $d= "Please enter a valid phone number";
    }
    else
    {
        $dd= "Phone number =".$phone;
    }
    

    $email= $_REQUEST['email'];
    if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)){
        $e= "Please enter a valid email";
    }
    else{
        $mydb= new DB();
        $conobj=$mydb->opencon();
        $results=$mydb->searchemail( $conobj, "admin", $email);
           if($results->num_rows>0){
            $e= "Email already exists";
           }
           else{
            $ee= "Email Address = ".$email;
            }
        $mydb->closecon($conobj);
        }

            /*$data1 = file_get_contents('admindata.json');
            $mydata1 = json_decode($data1);

            foreach($mydata1 as  $key => $udata1){    
               if($udata1->email==$_REQUEST['email']){
               $e="Email already used";
               */
    

            
       
    $password= $_REQUEST['password']; 
    $confirmpassword=$_REQUEST['confirmpassword'];

        if(empty($password) || strlen($password)<8)
        {
            $f=  "Please enter a valid password";
        }
        else if($password != $confirmpassword)
        {
            $f= "Password didn't match";
        }
        else
        {
            $ff= "Password is valid";
        }

    $filename= $_FILES["myfile"]["name"];

        if (($file_size = $_FILES['myfile']['size'] > 2097152)){
            $g= 'File too large. File must be less than 2 megabytes.'; 
        }
    
        else{
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
        {
            $gg= "File Uploaded";
        }
        else
        {
            $g= "File Cannot Upload";
        }
    }
 
if(empty($fname) || strlen($fname)<2 || empty($lname) || strlen($lname)<2 || empty($uname) || strlen($uname)<5 || 
   empty($phone) || strlen($phone)<11 || empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email) || 
   empty($password) || strlen($password)<8 || $password != $confirmpassword || $results->num_rows>0)
{
    echo "No data Saved";
}

else{

    $mydb=new DB();
    $conobj=$mydb->opencon();
    $mydb->InsertData($fname, $lname, $uname, $phone, $email, $password, $role, $filename, "admin", $conobj);
    $mydb->closecon($conobj);


    /* //storing data using JSON
$formdata = array(
    'uname'=> $_POST["uname"],
    'password'=>$_POST['password'],
    'fname
    '=> $_POST["fname
    "],
    'lname$lname'=> $_POST["lname$lname"],
    'role'=> $_POST["role"],
    'email'=>$_POST['email'],
    'phone'=>$_POST['phone'],
    'filename'=>$_FILES["myfile"]["name"]
    
 );
 $existingdata = file_get_contents('admindata.json');
 $tempJSONdata = json_decode($existingdata);
 $tempJSONdata[] =$formdata;

 $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 

 if(file_put_contents("admindata.json", $jsondata)) {
      echo "Data successfully Saved <br>";
      echo "You can Login Now";
      echo "<html> <a href='../View/adminlogin.php'> Click Here </a> </html>";

  }
 else 
 {
      echo "No data saved";
 }*/
}

}

?>