<?php
//////////Establishing Database connection
$server = "localhost";
$username = "root";
$password = "";
$dbname = "cleancare";
    
$connection = mysqli_connect($server, $username, $password, $dbname);

$errors = array();
    
if(!$connection){
die("En espera de los recursos");
}
?>