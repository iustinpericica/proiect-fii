<?php


require "dbconnection.inc.php";
session_start();

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


if(isset($_GET['id']) && isset($_GET['cantitate'])){

   $idc =  make_safe($_SESSION['idc']);
   $idp=  make_safe($_GET['id']);
   $cant = make_safe($_GET['cantitate']);
   $marime = make_safe($_GET['marime']);
   if(isset($_GET['grosime'])){
   $grosime = make_safe($_GET['grosime']);
   if($cant == 0){$conn->query("DELETE FROM  produsec WHERE idc = '$idc' AND idp = '$idp' AND grosime = '$grosime' AND marime = '$marime'");}
       
   $conn->query("UPDATE produsec SET cant = $cant WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime' AND grosime = '$grosime'");}
   else {
   	if($cant == 0){$conn->query("DELETE FROM  produsec WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime'");}
       
   $conn->query("UPDATE produsec SET cant = $cant WHERE idc = '$idc' AND idp = '$idp' AND marime = '$marime'");
}
   
   $string = 'Location: ../php/cart.php';
   header($string);  
   
};