<?php

require "dbconnection.inc.php";
session_start();
error_reporting(0);

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


$var = make_safe($_GET['id']);
$idc = make_safe($_SESSION['idc']);
$result = $conn->query("SELECT * FROM produse WHERE id='$var'");
$res = mysqli_fetch_assoc($result);
if(isset($_GET['grosime'])){
$grosime = make_safe($_GET['grosime']);
$marime = make_safe($_GET['marime']);
$sql = "SELECT * FROM produsec WHERE idp='$var' AND idc = '$idc' AND marime = '$marime' AND grosime = '$grosime';";
}

else {
	$marime = make_safe($_GET['marime']);
$sql = "SELECT * FROM produsec WHERE idp='$var' AND idc = '$idc' AND marime = '$marime';";
}
$result = $conn->query($sql);
$res1 = mysqli_fetch_assoc($result);
//echo $sql;

$data->descriere = $res['textm'];
$data->idp = $res['id'];
$data->stoc = $res['stoc'];
$data->pret = $res['pret'];
$data->material = $res['material'];
$data->pentru = $res['pentru'];
$data->cantitate = $res1['cant'];
$data ->culoare  = $res['culoare'];
$data->model = $res['model'];
$data->sex = $res['tip'];
$data->marime = $res['marime'];
$data->textm = $res['textm'];
$json = json_encode($data);

echo $json;
