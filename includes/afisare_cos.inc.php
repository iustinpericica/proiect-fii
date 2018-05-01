<?php
require 'dbconnection.inc.php';


$idc = $_SESSION['idc'];

$sql = "SELECT * FROM `produsec` WHERE idc = '$idc'";

$result = $conn->query($sql);

while($row = mysqli_fetch_row($result)){
	
	$sql = "SELECT * FROM produse WHERE id = '$row[0]';";
	$res = $conn->query($sql);
	$res = mysqli_fetch_assoc($res);
	$pret = $row[2] * $res['pret'];
	
	if($row[4] != '') {
		echo '<p>Produs: ' . $res['textm'] . ', marime:<b> ' .  $row[3]  . '</b>, grosime:<b> ' .  $row[4]  . '</b>, cantitate: ' .  $row[2]  . '<b> pret </b> ' . $pret . ' de lei</p>';
	}

	else echo '<p>Produs: ' . $res['textm'] . ', marime: <b>' .  $row[3] . '</b>, cantitate: ' .  $row[2]  . '<b> pret </b> ' . $pret . ' de lei</p>';
    
    
	
}