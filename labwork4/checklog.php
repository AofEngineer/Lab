<?php
session_start();
$myfile = fopen("login.txt", "r");
$str = fread($myfile,filesize("login.txt"));
$finduser = $_POST["username"];
$findpass = $_POST["password"];

if( strpos( $str, $finduser ) && strpos( $str, $findpass )) {   
    $_SESSION['loggedin'] = TRUE;  
    header("Location: upload.php");
} else { 
    header('Location: home.php');    
}
?>