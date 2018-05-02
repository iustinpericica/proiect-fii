<?php

require "dbconnection.inc.php";

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


$idp = make_safe($_GET['idp']);
$sql = "SELECT * FROM produse WHERE id = '$idp';";
$result = $conn -> query($sql);
$result = mysqli_fetch_assoc($result);
echo json_encode($result);