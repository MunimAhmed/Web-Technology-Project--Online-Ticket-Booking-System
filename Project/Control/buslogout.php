<?php
session_start();

if(session_destroy())
{
    header("location: ../View/buslogin.php");
}

?>