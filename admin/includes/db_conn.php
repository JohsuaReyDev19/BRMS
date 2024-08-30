<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connect failed " . mysqli_connect());
}
?>