<?php

require_once "dbconnection.inc.php";

session_start();

//var_dump($conn);

$idc = $_SESSION['idc'];
$result = $conn->query("SELECT * FROM date WHERE idc = '$idc'");
$row = mysqli_fetch_assoc($result);
echo json_encode($row);