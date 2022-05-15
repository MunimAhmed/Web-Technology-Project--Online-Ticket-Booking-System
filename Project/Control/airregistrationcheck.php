<?php
$a=$b=$c=$d=$e=$f=$g=$h=$i="";
if(isset($_POST["submit"]))
{
    $companyname= $_REQUEST['companyname']; 

    if(empty($companyname) || strlen($companyname)<6)
    {
        $a= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $a= "Company name = ".$companyname;
    }
    
    if(isset($_POST["role"]))
    {
        $b= "Role =".$_POST["role"] ;
    }
    else{
        $b= "Please select your Role ";
    } 
    $firstname= $_REQUEST['firstname']; 

    if(empty($firstname) || strlen($firstname)<4)
    {
        $c= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $c= "First name = ".$firstname;
    }
    

    $lastname= $_REQUEST['lastname'];
    if(empty($lastname) || strlen($lastname)<4)
    {
        $d= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $d= "Last name = ".$lastname;
    }  
    $username= $_REQUEST['username'];
    if(empty($username) || strlen($username)<6)
    {
        $e= "The Name Must Be At Least 5 Characters";
    }
    else
    {
        $e= "User name = ".$username;
    } 
    if(isset($_POST["gender"]))
    {
        $f= "Gender =".$_POST["gender"] ;
    }
    else{
        $f= "Please select your gender ";
    } 
   
    $email= $_REQUEST['email'];

        if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
        {
            $g= "Please enter a valid email";
        }
        else
        {
            $g= "Email Address = ".$email;
        }

        $password= $_REQUEST['password']; 
        $confirmpassword=$_REQUEST['confirmpassword'];
    
            if(empty($password) || strlen($password)<6)
            {
                $h=  "The Password Field Must Be At Least 5 Characters";
            }
            else if($password != $confirmpassword)
            {
                $h= "Password Does not Match";
            }
            else
            {
                $h= "Password is valid";
            }
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "../Files/".$_FILES["myfile"]["name"]))
    {
        $i= "File Uploaded";
    }
    else
    {
        $i= "File Cannot Upload";
    }
    $formdata = array(
        'companyname'=> $_POST["companyname"],
        'role'=> $_POST["role"],
        'firstName'=> $_POST["firstname"],
        'lastName'=> $_POST["lastname"],
        'username'=> $_POST["username"],
        'gender'=> $_POST["gender"],
        'email'=>$_POST["email"],
        'password'=> $_POST["password"],
        'confirmpassword'=>$_POST["confirmpassword"]
     );
     $existingdata = file_get_contents('airdata.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
     if(file_put_contents('airdata.json', $jsondata)) {
          echo "Data successfully saved <br>";
          Header("location: ../View/airlogin.php");
      }
     else 
     {
          echo "no data saved";
     }
}
?>