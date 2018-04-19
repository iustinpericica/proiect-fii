<?php

require_once "dbconnection.inc.php";
session_start();
$oras = $_GET['oras'];
$numar_telefon = $_GET['numar_telefon'];
$judet = $_GET['judet'];
$strada = $_GET['strada'];
$numar = $_GET['numar'];
$nume = $_GET['nume'];
$prenume = $_GET['prenume'];
$idc = $_SESSION['idc'];

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