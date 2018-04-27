<?php

require "dbconnection.inc.php";
session_start();
error_reporting(0);
$var = $_GET['id'];
$idc = $_SESSION['idc'];
$result = $conn->query("SELECT * FROM produse WHERE id='$var'");
$res = mysqli_fetch_assoc($result);

$sql = "SELECT * FROM produsec WHERE idp='$var' AND idc = '$idc';";

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
$data->textm = $res['textm'];
$json = json_encode($data);

echo $json;
