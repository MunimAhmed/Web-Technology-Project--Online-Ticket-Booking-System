<?php
session_start();

$data = file_get_contents('airdata.json');
$mydata = json_decode($data);


if(isset($_POST["submit"]))

{
     foreach($mydata as  $key => $udata)
     {
     
                    
               if($udata->username==$_POST["username"] && $udata->password==$_POST["password"])
               {

                    $_SESSION["uname"]=$_POST["username"];
                    $_SESSION["password"]=$_POST["password"];
                    header("location: ../View/profile.php");
               }     
     }
     

     echo "<h1>Your username or password is incorrect !<h1>";
          
}

?>
