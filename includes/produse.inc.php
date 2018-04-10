<?php

require "dbconnection.inc.php";
error_reporting(0);
$var = $_GET['id'];

$result = $conn->query("SELECT * FROM produse WHERE id='$var' ");
$res = mysqli_fetch_assoc($result);

$data->descriere = $res['textm'];
$data->stoc = $res['stoc'];
$data->pret = $res['pret'];

$json = json_encode($data);

echo $json;