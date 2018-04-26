<?php
require_once "dbconnection.inc.php";
session_start();
$idc = $_SESSION['idc'];

$sql = "SELECT * FROM comenzi WHERE idc = '$idc';";
$result = $conn->query($sql);

$comenzi = array();

while($row = mysqli_fetch_row($result)){
	array_push($comenzi, $row[0]);
}

echo json_encode($comenzi);