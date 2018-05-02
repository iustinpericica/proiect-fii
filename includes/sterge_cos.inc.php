<?php
session_start();

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


$idp = make_safe($_GET['idp']);

$idc = make_safe($_SESSION['idc']);
$marime = make_safe($_GET['marime']);
if(isset($_GET['grosime'])) $grosime = $_GET['grosime'];
require_once "dbconnection.inc.php";
if(isset($grosime)) $sql1 = "DELETE FROM produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime' AND grosime = '$grosime';";
else $sql1 = "DELETE FROM produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime';";
$result = $conn->query($sql1);
if($result){header('Location: ../php/cart.php?sters=true');};