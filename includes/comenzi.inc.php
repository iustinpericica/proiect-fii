<?php
require_once "dbconnection.inc.php";

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


session_start();
$id = make_safe($_GET['id']);

$sql = "SELECT * FROM comenzi_produse WHERE id_comanda = '$id';";
$result = $conn -> query($sql);

class Date{
    public $produse = array();
    public $livrare = array();
    public $facturare = array();
    public $data;
    public $pret;
};
$echo = new Date();

while($row = mysqli_fetch_row($result)){
	array_push($echo->produse, $row);
}

$sql4 = "SELECT * FROM comenzi WHERE id = '$id';";
$res4 = $conn -> query($sql4);
$res4 = mysqli_fetch_assoc($res4);
$echo->pret = $res4['pret'];
$echo->data = $res4['data'];


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


