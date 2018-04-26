<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principala</title>
	<link href="../css/animate.css" type="text/css" rel="stylesheet">
	<link href="../css/style.css" type="text/css" rel="stylesheet">
	<link href="../css/prestyle.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../mdb/css/mdb.min.css" rel="stylesheet">
</head>
<body class="container-fluid">
<header> 
	<div class="container-fluid row" id="banner">
	  <div class="col-md-4 col-xs-6 col-sm-2 text-center" >
		  <button id="shop" class="btn btn-elegant">Shop</span>
		</div>
	  <div class="col-md-6 col-xs-0 col-sm-6">
		
		</div>
	
		<div class="col-md col-xs col-sm">
		  <i class="fa fa-facebook-f" id="fb" style="font-size:20px;margin-right:10px;"></i>
		  <i class="fa fa-instagram"  id="insta" style="font-size:20px;"></i>
		</div>
	</div>
     <div class="row container-fluid">
	     <div class="col-md-2 col-sm-4 col-xs-6" style="font-family:Consolas, 'Andale Mono', 'Lucida Console', 'Lucida Sans Typewriter', Monaco, 'Courier New', 'monospace';font-size:25px;cursor:pointer;" id="home_page">
		   El Maro
		 </div>
		 
		 <div class="col-md-7 col-xs-0 col-sm-4">
		   
		 </div>
		 
		 <div class="col-md-3 col-xs-6 col-sm-4">
		    <button class="btn btn-elegant animated shake" id="to_be_replaced">Log In</button>
		 </div>
	   </div>
<?php 

if(isset($_GET['news'])&&$_GET['news']==='succes'){
$string = "<div class='alert alert-success' role='alert' id='alertnews'>
  Felicitari! Te-ai abonat la newslatter-ul nostru !
</div>";
echo $string;
}
?>

<script>
	// ----    ADAUG PRETUL TOTALULUI DIN COS --
   var total_req = new  XMLHttpRequest();
   total_req.onload = function(){
   	  if(this.responseText<=19&&this.responseText>0) $('#pret_cos').html(this.responseText + ' lei');
   	 else  if(this.responseText>19)$('#pret_cos').html(this.responseText + ' de lei');
   };
   total_req.open('GET' , '../includes/total.inc.php?show=true' , true);
   total_req.send();
</script>





 <div class='row container-fluid' style='margin-top:15px;' id='banner2'>
	 
	  <div class="col-md-1 col-sm-1" ><a href="contact.php">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="shop.php">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="cont.php" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="harta.php">Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		
		<button id="btn_cart"  class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
</header>

<?php if(!isset($_SESSION['idc'])){echo '<h3 class="red-text text-center">Fa-ti un cont mai intai</h3><script>


$("#home_page").click(function(){
	window.location.replace("index.php");
});

$("#fb").click(function(){
	window.location.replace("https://www.google.com");
});

	
$("#insta").click(function(){
	window.location.replace("https://www.google.com");
});

$("#to_be_replaced").click(function(){
	
	window.location.replace("LogIn.php");
});

$("#shop").click(function(){
	window.location.replace("shop.php");
});

$("#btn_cart").click(function(){
    window.location.replace("cart.php");
});

</script>';die();};?>

<h2>Completeaza datele de livrare: </h2>
<h3>Sau completeaza <b>automat</b> dupa datele salvate</h3><button class="btn btn-elegant" id="completeaza_automat">Completeaza automat</button>
<h4>Daca nu ai date salvate, la finalul formularului apasa butonul de salvare a datelor</h4>

<div class="row" id="erori">
</div>

<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Date de contact</h2>
			</div>
		<form method="POST" action="../includes/cart2.inc.php">
			<label for="nume">Nume: </label>
			<br>
			<input type="text" id="nume" name="nume"><br>
			<label for="prenume">Prenume: </label>
			<br>
			<input type="text" id="prenume" name="prenume"><br>
			<label for="oras">Oras: </label>
			<br>
			<input type="text" id="oras" name="oras"><br>
			<label for="judet">Judet: </label>
			<br>
			<input type="text" id="judet" name="judet"><br>
			<label for="strada">Strada: </label>
			<br>
			<input type="text" id="strada" name="strada"><br>
			<label for="numar">Numar locuinta:</label>
			<br>
			<input type="text" id="numar" name="numar"><br>
			<label for="numar_telefon">Numar de telefon: </label>
			<br/>
			<input type="text" id="numar_telefon" name="numar_telefon"><br>
			 <button type="button" name="btn_date_automate" id="btn_date_automate" class="btn btn-elegant xs" >Salveaza aceste date si pentru urmatoarele comenzi</button>
			 <button type="button" class="btn btn-success" id="pas_urmator">Pasul urmator</button>
		</form>
</div>

<script>

$('#pas_urmator').click(function(){
var nume = $('#nume').val();
var prenume = $('#prenume').val();
var oras = $('#oras').val();
var judet = $('#judet').val();
var strada = $('#strada').val();
var numar = $('#numar').val();
var numar_telefon = $('#numar_telefon').val();

if(!nume)$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi numele!</div>');
else if(!prenume)$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi prenumele!</div>');
else if(!oras)$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi orasul!</div>');
else if(!judet) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi judetul!</div>');
      else if(!strada) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi strada!</div>');
            else if(!numar) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi numarul adresei!</div>');
                 else if(!numar_telefon) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi numarul de telefon!</div>');
                     else window.location.replace('../includes/date.inc.php?oras=' + oras + '&judet=' + judet + '&strada=' + strada + '&numar=' + numar + '&numar_telefon=' + numar_telefon + '&cart3=true' + '&nume=' + nume + '&prenume=' + prenume);
	});

	$('#btn_date_automate').click(function(){
var oras = $('#oras').val();
var judet = $('#judet').val();
var strada = $('#strada').val();
var numar = $('#numar').val();
var nume = $('#nume').val();
var prenume = $('#prenume').val();
var numar_telefon = $('#numar_telefon').val();
if(!nume)$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi numele!</div>');
else if(!prenume)$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi prenumele!</div>');
else if(!oras)$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi orasul!</div>');
else if(!judet) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi judetul!</div>');
      else if(!strada) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi strada!</div>');
            else if(!numar) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi numarul adresei!</div>');
                 else if(!numar_telefon) $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Ai uitat sa completezi numarul de telefon!</div>');
                     else window.location.replace('../includes/date.inc.php?oras=' + oras + '&judet=' + judet + '&strada=' + strada + '&numar=' + numar + '&numar_telefon=' + numar_telefon + '&nume=' + nume + '&prenume=' + prenume);
	});
</script>

<script>
	
var $_GET = {};
 document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
    if($_GET['succes']==='false'){$('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft blue-text" style="font-size:15px;">Se pare ca deja ai avut datele introduse o data, asa ca le-am actualizat!</div>');}

});
</script>

<script>
	$('#completeaza_automat').click(function(){
       var req = new XMLHttpRequest();
       req.onload = function(){
       	 var data = this.responseText;
       	 if(data === 'nu') $('#erori').append('<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 animated bounceInLeft red-text" style="font-size:15px;">Salveaza cateva date initital!</div>');
       	 else {
       	 data =JSON.parse(this.responseText);
       	 $('input[name=oras]').val(data['oras']);
       	 $('input[name=judet]').val(data['judet']);
       	 $('input[name=strada]').val(data['strada']);
       	 $('input[name=numar]').val(data['numar']);
       	 $('input[name=numar_telefon]').val(data['numar_telefon']);
       	 $('input[name=nume]').val(data['nume']);
       	 $('input[name=prenume]').val(data['prenume']);
       	}

       } 
       req.open('GET' , '../includes/datecart.inc.php' , true);
       req.send();
	});
</script>

<footer class="container-fluid">
  <div class="row">
	 <div class="col-md-5" >
	 #poza
	 </div>
	  <div class="col-md-7">
	    <div class="row">
			<div class="col-md-4">
			  <ul class="lista-footer">
			     El Maro
			   <li>Despre</li>
			   <li>Contact</li>
			   <li>Fii unul de al nostru!</li>
			   </ul>
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <ul  class="lista-footer">Shop
			    <li>Cum comand?</li>
				<li>Livrare </li>
				<li>Termeni&Conditii</li>
			  </ul>
			</div>
			  
			<div class="col-md-4">
			  Aboneaza-te la Newsletter
			  <form method="post" action="../includes/news.inc.php">
			  E-mail:<input name="email" placeholder="exemplu@yahoo.com">
			  <div class="row">Nume:<input name="nume" placeholder="Nume"></div>
			  <button value="submit" type="submit" class="btn btn-elegant">Submit</button>
			  </form>
			</div>
		  </div>
	  </div>
	</div>
</footer>
</body>
	
<script>


$("#home_page").click(function(){
	window.location.replace("index.php");
});

$("#fb").click(function(){
	window.location.replace("https://www.google.com");
});

	
$("#insta").click(function(){
	window.location.replace("https://www.google.com");
});

$("#to_be_replaced").click(function(){
	
	window.location.replace("LogIn.php");
});

$("#shop").click(function(){
	window.location.replace("shop.php");
});

$("#btn_cart").click(function(){
    window.location.replace("cart.php");
});

</script>
   
<?php
 

 if(isset($_SESSION['user']) && isset($_SESSION['password'])){

 	echo "<script>
           $('#to_be_replaced').html('Contul meu');
           $('#to_be_replaced').click(function(){
	
	       window.location.replace('cont.php');
         });
         $('#to_be_replaced').addClass('shake');
           </script>
 	";
 }
else {
	echo "<script>
           $('#cont_replaced').html('Log In);
           $('#cont_replaced').click(function(){
	
	       window.location.replace('LogIn.php');
         });
         
           </script>
 	";
}
 ?>




</html>