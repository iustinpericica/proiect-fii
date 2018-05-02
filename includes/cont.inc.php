<?php

session_start();

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


require_once 'dbconnection.inc.php';

$username = make_safe($_SESSION['user']);

$result = $conn->query("SELECT * FROM users WHERE user_name = '$username' ");

$row = mysqli_fetch_assoc($result);

echo json_encode($row);


if(isset($_GET['password']))if($_GET['password'] === 'change'){
	$newpass = make_safe($_POST['nowpass']);
	$lastpass = make_safe($_POST['lastpass']);
	if($lastpass!==$row['user_password']){header('Location: ../php/cont.php?password=different');die();}
	if($lastpass===$row['user_password']){header('Location: ../php/cont.php?password=same');die();}
	$newpass = md5($newpass);
	$sql = "UPDATE users SET user_password = '$newpass' WHERE user_name = '$username' ";
	$result = $conn->query($sql);
};