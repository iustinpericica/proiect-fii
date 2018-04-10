<?php

session_start();


require_once 'dbconnection.inc.php';

$username = $_SESSION['user'];

$result = $conn->query("SELECT * FROM users WHERE user_name = '$username' ");

$row = mysqli_fetch_assoc($result);

echo json_encode($row);


if(isset($_GET['password']))if($_GET['password'] === 'change'){
	$newpass = $_POST['nowpass'];
	$lastpass = $_POST['lastpass'];
	if($lastpass!==$row['user_password']){header('Location: ../php/cont.php?password=different');die();}
	if($lastpass===$row['user_password']){header('Location: ../php/cont.php?password=same');die();}
	$sql = "UPDATE users SET user_password = '$newpass' WHERE user_name = '$username' ";
	$result = $conn->query($sql);
};