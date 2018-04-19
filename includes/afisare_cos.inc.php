<?php
require 'dbconnection.inc.php';

$idc = $_SESSION['idc'];
$sql = "SELECT * FROM `produsec` WHERE idc = '$idc'";

$result = $conn->query($sql);

while($row = mysqli_fetch_row($result)){
	
	$sql = "SELECT * FROM `produse` WHERE id = '$row[0]'";
	$res = $conn->query($sql);
	$res = mysqli_fetch_assoc($res);
	$pret = $row[2] * $res['pret'];
    echo '<p>Produs: ' . $res['textm'] . ', cantitate: ' .  $row[2]  . '<b> pret </b> ' . $pret . ' de lei</p>';
	
}