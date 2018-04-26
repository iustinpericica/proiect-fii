<?php
require_once "dbconnection.inc.php";
require_once "total.inc.php";

$idc = $_SESSION['idc'];
$sql1 = "SELECT * FROM produsec WHERE idc = '$idc';";
$result1 = $conn->query($sql1);
$produse  =  array();
$cantitate = array();


while($row = mysqli_fetch_row($result1)){
      array_push($produse, $row[0]);
      array_push($cantitate, $row[2]); 
};

$sql = "INSERT INTO comenzi(idc";
foreach ($produse as $key => $val) {
     $string = ',p';
     $string.=$val;
     $sql.=$string;
}

foreach ($produse as $key => $val) {
     $string = ',c';
     $string.=$val;
     $sql.=$string;
}

$sql.=') VALUES(';


$sql.=$idc;

foreach ($produse as $key => $val) {
     $string = ',';
     $string.=$val;
     $sql.=$string;
}

foreach ($cantitate as $key => $val) {
     $string = ',';
     $string.=$val;
     $sql.=$string;
}

$sql.=');';

$result = $conn -> query($sql);
$id_comanda = $conn->insert_id;

$sql = "SELECT * FROM date WHERE idc = '$idc';";
$result = $conn -> query($sql);
$result = mysqli_fetch_assoc($result);

$oras = $result['oras'];
$judet = $result['judet'];
$strada = $result['strada'];
$numar = $result['numar'];
$numar_telefon = $result['numar_telefon'];

$sql1 = "INSERT INTO comenzi_livrare(idc , id_comanda , pret , oras , judet , strada , numar , numar_telefon) VALUES('$idc' , '$id_comanda' , '$total' , '$oras' , '$judet' , '$strada' , '$numar' , '$numar_telefon');";

$conn -> query($sql1);

if($_SESSION['facturare'] === 'fizica'){
	$sql = "SELECT * FROM date WHERE idc = '$idc';";
    $result = $conn -> query($sql);
    $result = mysqli_fetch_assoc($result);
    var_dump($result);
    $prenume = $result['prenume'];
    $nume = $result['nume'];
    $numar_telefon = $result['numar_telefon'];
    $sql1 = "INSERT INTO comenzi_facturare_fizica(idc , prenume , nume , numar_telefon,id_comanda) VALUES('$idc' , '$prenume' , '$nume' , '$numar_telefon' , '$id_comanda');";
    $conn -> query($sql1);

}

else{
	$sql = "SELECT * FROM date_facturare_juridica WHERE idc = '$idc';";
	$result = $conn->query($sql);
    $result = mysqli_fetch_assoc($result);
    $nume_companie = $result['nume_companie'];
    $cui = $result['cui'];
    $cod_inregistrare = $result['cdirc'];
    $banca = $result['banca'];
    $cont = $result['cont'];
    $judet = $result['judet'];
    $localitate = $result['localitate'];
    $adresa = $result['adresa'];
    $sql = "INSERT INTO comenzi_facturare_juridica(idc , nume_companie , cui , numar_inregistrare , banca , cont , judet , localitate , adresa , id_comanda) VALUES ('$idc' , '$nume_companie' , '$cui' , '$cod_inregistrare' , '$banca' , '$cont' , '$judet' , '$localitate' , '$adresa' , '$id_comanda');";
    
    $conn -> query($sql);
}

$sql = "SELECT * FROM users WHERE user_id = '$idc';";

$res = $conn -> query($sql);
$res = mysqli_fetch_assoc($res);
$mail = $res['user_email'];
$mailto = $mail;
 $mailSub = "Comanda ElMaro";
$mailMsg = "Salut! Comanda ta a fost inregistrata cu numarul $id_comanda si in scurt timp te va suna un reprezentat al firmei noastre!  Iti multumim ca ai ales ElMaro!
";
   require '../PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; 
   $mail ->IsHTML(true);
   $mail ->Username = "iustin.pericica1@gmail.com";
   $mail ->Password = "mamatata12";
   $mail ->SetFrom("iustin.pericica1@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
       echo "Mail Sent";
   }

header('Location: ../php/cart4.php');