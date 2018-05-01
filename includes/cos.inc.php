<?php

require "dbconnection.inc.php";
session_start();

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}

$idp=  $_GET['id'];


if(!isset($_SESSION['idc'])){
   $string = 'Location: ../php/produs.php?produs=';
   $string.= "$idp&cos=false";
   header($string); 
   die();
}

if(isset($_GET['id']) && isset($_GET['cantitate'])){


   $idc =  make_safe($_SESSION['idc']);
   $cant = make_safe($_GET['cantitate']);
   $marime = make_safe($_GET['marime']);
    if(isset($_GET['grosime'])){
   $grosime = make_safe($_GET['grosime']);
   $res = $conn->query("SELECT * FROM produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime' AND grosime = '$grosime'");
   $res = mysqli_fetch_assoc($res);
   if($res)$cantitate = $res['cant'] + $cant;
   if($res)$conn->query("UPDATE produsec SET cant = $cantitate WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime' AND grosime = '$grosime'");
   if(!$res)$sql = "INSERT INTO produsec(idp , idc , cant , marime , grosime) VALUES('$idp' , '$idc' , '$cant' , '$marime' , '$grosime');";
   if(!$res) $conn->query($sql);
   $string = 'Location: ../php/produs.php?produs=';
   $string.= "$idp&cos=true";
   header($string); 
   }

   else{
      $res = $conn->query("SELECT * FROM produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime'");
   $res = mysqli_fetch_assoc($res);
   if($res)$cantitate = $res['cant'] + $cant;
   if($res)$conn->query("UPDATE produsec SET cant = $cantitate WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime'");
   if(!$res)$sql = "INSERT INTO produsec(idp , idc , cant , marime) VALUES('$idp' , '$idc' , '$cant' , '$marime');";
   if(!$res) $conn->query($sql);
   $string = 'Location: ../php/produs.php?produs=';
   $string.= "$idp&cos=true";
   header($string); 
   }


};