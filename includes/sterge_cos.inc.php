<?php
session_start();
$idp = $_GET['idp'];
$idc = $_SESSION['idc'];
require_once "dbconnection.inc.php";
$result = $conn->query("DELETE FROM produsec WHERE idc = '$idc' AND idp = '$idp'");
if($result){header('Location: ../php/cart.php?sters=true');};