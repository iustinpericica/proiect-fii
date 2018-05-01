<?php
session_start();
$idp = $_GET['idp'];
$idc = $_SESSION['idc'];
$marime = $_GET['marime'];
if(isset($_GET['grosime'])) $grosime = $_GET['grosime'];
require_once "dbconnection.inc.php";
if(isset($grosime)) $sql1 = "DELETE FROM produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime' AND grosime = '$grosime';";
else $sql1 = "DELETE FROM produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime';";
$result = $conn->query($sql1);
if($result){header('Location: ../php/cart.php?sters=true');};