<?php 
$dbServername ="192.168.95.100:4067";
$dbUsername ="root";
$dbPassword ="root";
$dbName ="local";


$conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die($mysqli_connect->error);


?>