<?php

require_once "dbconnection.inc.php";
session_start();
if(isset($_SESSION['idc']))$idc = $_SESSION['idc'];
else die();
$sql = "SELECT * FROM produsec WHERE idc = '$idc' ;";
$result = $conn->query($sql);

$total = 0;
if ($result)
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
       $idp = $row[0];
       $sql1 = "SELECT * FROM produse WHERE id = '$idp';";
       $res1 = $conn->query($sql1);
       $res1 = mysqli_fetch_assoc($res1);
       $pret = $res1['pret'];
       $total = $total + $row[2] * $pret;
       
    }
  // Free result set
  mysqli_free_result($result);
}

if(isset($_GET['show']))echo $total;