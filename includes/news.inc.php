<?php

require "dbconnection.inc.php";

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


$nume = make_safe($_POST['nume']);
$email = make_safe($_POST['email']);

if(!$nume){header('Location: ../php/index.php?nume=empty');die();}
if(!$email){header('Location: ../php/index.php?password=empty');die();}
echo $email;
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){header('Location: ../php/index.php?email=wrong');die();}

$sql = "INSERT INTO news(name,email) VALUES('$nume' , '$email')";

$result = $conn->query($sql);

header('Location: ../php/index.php?news=succes');


