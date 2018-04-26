<?php
require_once "dbconnection.inc.php";
session_start();
$id = $_GET['id'];
$sql = "SELECT * FROM comenzi WHERE id = '$id';";
$result = $conn -> query($sql);
$result = mysqli_fetch_assoc($result);
class Date{
    public $produse = array();
    public $livrare = array();
    public $facturare = array();
};
$echo = new Date();
$echo->produse = $result;
$sql = "SELECT * FROM comenzi_livrare WHERE id_comanda = '$id';";
$result = $conn -> query($sql);
$echo->livrare = mysqli_fetch_assoc($result);
$sql = "SELECT * FROM comenzi_facturare_fizica WHERE id_comanda = '$id';";
$result = $conn -> query($sql);
$result = mysqli_fetch_assoc($result);
if($result){
	$echo->facturare = $result;
}
else{
	$sql = "SELECT * FROM comenzi_facturare_juridica WHERE id_comanda = '$id';";
	
	$result = $conn -> query($sql);
	$echo->facturare = mysqli_fetch_assoc($result);
}




echo json_encode($echo);


