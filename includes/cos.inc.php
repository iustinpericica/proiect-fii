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
   $sql = "INSERT INTO produsec(idp , idc , cant) VALUES('$idp' , '$idc' , '$cant');";
   $conn->query($sql);
   $string = 'Location: ../produse/';
   $string .= $idp;
   $string.='.p.php';
   header($string);  
};