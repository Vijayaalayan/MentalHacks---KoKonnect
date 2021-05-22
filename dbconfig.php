<?php
session_start();
$username = "root";
$password = "toor";
$host = "localhost";
$db = "loginregister";
$conn = mysqli_connect($host,$username,$password,$db);
// if(!$conn){
//     echo "Error";
// }else{
//     echo "Connection Successful";
// }
?>