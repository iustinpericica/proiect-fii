<?php

require "dbconnection.inc.php";
session_start();
$idc = $_SESSION['idc'];
error_reporting(0);
$var = $_GET['id'];

$result = $conn->query("SELECT * FROM produse WHERE id='$var' ");
$result1 = $conn->query("SELECT * FROM produsec WHERE idp='$var' AND idc='$idc'");

$res = mysqli_fetch_assoc($result);
$res1 = mysqli_fetch_assoc($result1);

$data->descriere = $res['textm'];
$data->idp = $res['id'];
$data->stoc = $res['stoc'];
$data->pret = $res['pret'];
$data->cantitate = $res1['cant'];
$json = json_encode($data);

echo $json;
