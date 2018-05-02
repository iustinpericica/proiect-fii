<?php

require_once "dbconnection.inc.php";
session_start();

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


$oras = make_safe($_GET['oras']);
$numar_telefon = make_safe($_GET['numar_telefon']);
$judet = make_safe($_GET['judet']);
$strada = make_safe($_GET['strada']);
$numar = make_safe($_GET['numar']);
$nume = make_safe($_GET['nume']);
$prenume = make_safe($_GET['prenume']);
$idc = make_safe($_SESSION['idc']);

$sql = "INSERT INTO date(idc , oras , judet , strada , numar , numar_telefon , nume , prenume) VALUES('$idc' , '$oras' , '$judet' , '$strada' , '$numar' , '$numar_telefon' , '$nume' , '$prenume');";
$result = $conn->query($sql);
if($_GET['cart3'] === 'true'){
	                           if(!$result){$sql = "UPDATE  date  SET oras =  '$oras' , judet = '$judet' , strada = '$strada' , numar = '$numar' , numar_telefon = '$numar_telefon' , nume='$nume' , prenume = '$prenume' WHERE idc = '$idc';";
      $conn->query($sql);}
	                           header('Location: ../php/cart22.php');die();};
if($result)header('Location: ../php/cart22.php?succes=true');
else {$sql = "UPDATE  date  SET oras =  '$oras' , judet = '$judet' , strada = '$strada' , numar = '$numar' , numar_telefon = '$numar_telefon' , nume = '$nume' , prenume = '$prenume' WHERE idc = '$idc';";
      $conn->query($sql);
	  header('Location: ../php/cart22.php?succes=false');
	}