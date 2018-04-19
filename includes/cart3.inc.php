<?php 
require_once "dbconnection.inc.php";
session_start();
$idc = $_SESSION['idc'];
$sql = "SELECT * FROM `produsec` WHERE idc = '$idc'";

$result = $conn->query($sql);

$produsec = mysqli_fetch_assoc($result);



$sql = "SELECT * FROM `date` WHERE idc = '$idc'";

$result = $conn->query($sql);

$date = mysqli_fetch_assoc($result);



$sql = "SELECT * FROM `users` WHERE user_id = '$idc'";

$result = $conn->query($sql);
$nume = mysqli_fetch_assoc($result);


$data = ['oras' => $date['oras'] , 'judet' => $date['judet'] , 'numar_telefon' => $date['numar_telefon'] , 'strada' => $date['strada']  , 'nume' => $nume['user_last'] , 'prenume' => $nume['user_first'] , 'email' => $nume['user_email']];
echo json_encode($data);

