<?php
$dbname ="test_users";
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die('connection failed'.mysqli_connect_error());
}
?>