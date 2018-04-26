<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="useri";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if($conn->connect_error){
	echo $conn->connect_error;
	die();
}

