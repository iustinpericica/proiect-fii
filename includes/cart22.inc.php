<?php
require_once "dbconnection.inc.php";
session_start();
$idc = $_SESSION['idc'];
if(isset($_GET['request'])){
	if($_GET['request'] === 'livrare'){
         $sql = "SELECT * FROM date WHERE idc = '$idc';";
         $result1 = $conn->query($sql);
         $result1 = mysqli_fetch_assoc($result1);
         echo json_encode($result1);
         die();
	}
	else if($_GET['request'] === 'fizica'){
		$sql = "SELECT * FROM date_facturare WHERE idc = '$idc';";
         $result1 = $conn->query($sql);
         $result1 = mysqli_fetch_assoc($result1);
         if(!$result1){echo 'nf';die();}
         echo json_encode($result1);}
	
	   else if($_GET['request'] === 'juridica'){
	   	 $sql = "SELECT * FROM date_facturare_juridica WHERE idc = '$idc';";
         $result1 = $conn->query($sql);
         $result1 = mysqli_fetch_assoc($result1);
         if(!$result1){echo 'nj';die();}
         echo json_encode($result1);
	   

	}
}

else {
	if(isset($_GET['date'])){
		if($_GET['date'] === 'fizica'){
			$_SESSION['facturare'] = 'fizica';
			$nume = $_POST['nume'];
			$prenume = $_POST['prenume'];
			$numar_telefon = $_POST['numar_telefon'];
			if($nume ===''){header('Location: ../php/cart22.php?numef=empty');die();}
			if($prenume ===''){header('Location: ../php/cart22.php?prenumef=empty');die();}
			if($numar_telefon ===''){header('Location: ../php/cart22.php?numar_telefonf=empty');die();}	
			$sql1 = "UPDATE date_facturare SET nume = '$nume' , prenume = '$prenume' , numar_telefon = '$numar_telefon' WHERE idc='$idc';";
			$sql = "INSERT INTO date_facturare(idc , nume , prenume , numar_telefon) VALUES ('$idc' , '$nume' , '$prenume' , '$numar_telefon');";
			$result = $conn->query($sql);
            if(!$result)$conn->query($sql1);
		}
		else if($_GET['date'] === 'juridica'){
			$_SESSION['facturare'] = 'juridica';
			$nume_companie = $_POST['nume_companie'];
			$cui = $_POST['cui'];
			$numar_comert = $_POST['numar_comert'];
			$banca = $_POST['banca'];
			$cont = $_POST['cont'];
			$judet = $_POST['judet'];
			$localitate = $_POST['localitate'];
			$adresa = $_POST['adresa'];
			if($nume_companie ===''){header('Location: ../php/cart22.php?nume_companie=empty');die();}
		    if($cui ===''){header('Location: ../php/cart22.php?cui=empty');die();}
			if($numar_comert ===''){header('Location: ../php/cart22.php?numar_comert=empty');die();}
			if($banca ===''){header('Location: ../php/cart22.php?banca=empty');die();}
			if($cont ===''){header('Location: ../php/cart22.php?cont=empty');die();}
		    if($judet ===''){header('Location: ../php/cart22.php?judet=empty');die();}
		    if($localitate ===''){header('Location: ../php/cart22.php?localitate=empty');die();}
		    if($adresa ===''){header('Location: ../php/cart22.php?adresa=empty');die();}
			$sql = "INSERT INTO date_facturare_juridica(nume_companie , cui , cdirc , banca , cont , judet , localitate , adresa ,idc) VALUES('$nume_companie' , '$cui' , '$numar_comert' , '$banca' , '$cont' , '$judet' , '$localitate' , '$adresa' , '$idc');";
			$result1 = $conn->query($sql);
			if(!$result1){
				$sql1 = "UPDATE date_facturare_juridica SET nume_companie = '$nume_companie' , cui = '$cui' , cdirc = '$numar_comert' , banca = '$banca' , cont = '$cont' , judet = '$judet' , localitate = '$localitate' , adresa = '$adresa' WHERE idc = '$idc';";
				$result2 = $conn->query($sql1);
				
			}
		}
		header('Location: ../php/cart3.php');
  }
}
	


