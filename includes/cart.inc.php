<?php

function toArr(){
    return func_get_args();
}


session_start();
require_once "dbconnection.inc.php";
if(!isset($_SESSION['idc'])){echo "<h3>Permission denied</h3>";die();}

$idc = $_SESSION['idc'];


$res  =  $conn->query("SELECT * FROM produsec WHERE idc = '$idc' ");

$idp = array();
$cant = array();
$marime = array();
$grosime = array();

if($res){

  while($row=mysqli_fetch_row($res)){
     array_push($idp ,  $row[0]);
     array_push($cant , $row[2]);
     array_push($marime, $row[3]);
     array_push($grosime, $row[4]);
}
  mysqli_free_result($res);

}

$c = array_map ('toArr',$idp,$cant , $marime , $grosime);
echo json_encode($c);
