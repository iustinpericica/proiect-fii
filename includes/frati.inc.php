<?php

require_once "dbconnection.inc.php";

$idp = $_GET['id'];

$sql = "SELECT * FROM produse WHERE id = '$idp';";

$res = $conn -> query($sql);

$res = mysqli_fetch_assoc($res);

$grupa = $res['grupa'];

if($grupa != 0){

$sql1 = "SELECT * FROM produse WHERE grupa = '$grupa';";

$res1 = $conn -> query($sql1);

$produse = array();

while($row = mysqli_fetch_row($res1)){
	array_push($produse, $row[0]);
}

echo json_encode($produse);

}

else echo 'grupai';