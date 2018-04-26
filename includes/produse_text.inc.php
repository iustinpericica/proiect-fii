<?php

require "dbconnection.inc.php";
$idp = $_GET['idp'];
$sql = "SELECT * FROM produse WHERE id = '$idp';";
$result = $conn -> query($sql);
$result = mysqli_fetch_assoc($result);
echo json_encode($result);