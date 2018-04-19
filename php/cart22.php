<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principala</title>
	<link href="../css/prestyle.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="../css/animate.css" type="text/css" rel="stylesheet">
	<link href="../css/style.css" type="text/css" rel="stylesheet">
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
   	 if(this.responseText<=19) $('#pret_cos').html(this.responseText + ' lei');
   	else  $('#pret_cos').html(this.responseText + ' de lei');
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
		<input type="text" name="search" placeholder="cautati" id="Search">
	    <button id="btn_search"  class="btn"><i class="fa fa-search" style="font-size:17px;margin-right:20%;"></i></button>
		<button id="btn_cart"  class="btn"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos">0 lei</span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
</header>
	

<div class="row">
	<div class="col-md-6 col-xs-6 col-sm-6 col-xl-6"><button class="btn btn-elegant btn-block" id="persoana_fizica_btn" style="font-size:20px;">Sunt persoana <b>fizica</b></button></div>
	<div class="col-md-6 col-xs-6 col-sm-6 col-xl-6"><button class="btn btn-elegant btn-block" id="persoana_juridica_btn" style="font-size:20px;">Sunt persoana <b>juridica</b></button></div>
</div>

<div id="form">
</div>

<script type="text/javascript">
	
	$('#persoana_fizica_btn').click(function(){
	   $('#form').html('<div class="login-box animated fadeInUp" id="persoana_fizica_form">\
			<div class="box-header">\
				<h2>Date de facturare-Persoana fizica</h2>\
			</div>\
			<div class="row"><div class="col-md-6 col-xs-6 col-xl-6 col-sm-6" id="date_livrare_btn"><button class="btn btn-default">Completeaza cu datele de la livrare:</button></div>\
			<div class="col-md-6 col-xs-6 col-xl-6 col-sm-6" id="date_facturare_btn"><button class="btn btn-default">Completeaza cu ultimele date de facturare:</button></div><br>\
		   </div>\
		<form method="POST" action="../includes/cart22.inc.php?date=fizica">\
			<br>\
			<label for="nume">Nume: </label>\
			<br>\
			<input type="text" id="nume" name="nume"><br>\
			<label for="prenume">Prenume: </label>\
			<br>\
			<input type="text" id="prenume" name="prenume"><br>\
		    <br>\
			<label for="numar_telefon">Numar de telefon: </label>\
			<br/>\
			<input type="text" id="numar_telefon" name="numar_telefon"><br>\
			 <button  class="btn btn-success" id="pas_urmator">Pasul urmator</button>\
		</form>\
</div>');
	});

$('#persoana_juridica_btn').click(function(){
	$('#form').html('<div class="login-box animated fadeInUp" >\
			<div class="box-header">\
				<h2>Date de facturare-Persoana juridica</h2>\
			</div>\
			<div class="row">\
			<div class="col-md-12 col-xs-12 col-xl-12 col-sm-12" id="date_facturare_juridica__btn"><button class="btn btn-default">Completeaza cu ultimele date de facturare:</button></div><br>\
		   </div>\
		<form method="POST" action="../includes/cart22.inc.php?date=juridica">\
			<br>\
			<label for="nume_companie">Nume companie: </label>\
			<br>\
			<input type="text" id="nume_companie" name="nume_companie"><br>\
			<label for="cui">CUI(cod unic de inregistrare): </label>\
			<br>\
			<input type="text" id="cui" name="cui"><br>\
		    <br>\
			<label for="numar_comert">Numar de inregistrare in Registrul Comertului: </label>\
			<br/>\
			<input type="text" id="numar_comert" name="numar_comert"><br>\
			<label for="banca">Banca: </label>\
			<br>\
			<input type="text" id="banca" name="banca"><br>\
			<label for="cont">Cont: </label><br>\
			<input type="text" id="cont" name="cont"><br>\
			<br>\
			<h4>Sediul central</h4>\
			<label for="judet">Judet: </label><br>\
			<input type="text" id="judet" name="judet"><br>\
			<br>\
			<label for="localitate">Localitate: </label><br>\
			<input type="text" id="localitate" name="localitate"><br>\
			<br>\
			<label for="adresa">Adresa: </label><br>\
			<input type="text" id="adresa" name="adresa"><br>\
			<br>\
			 <button class="btn btn-success" id="pas_urmator">Pasul urmator</button>\
		</form>\
</div>');
});
	
</script>

<script>
	$(document).on("click", "#date_livrare_btn", function(){
      var req = new XMLHttpRequest();
      req.onload = function(){
         var data = JSON.parse(this.responseText);
         $('#nume').val(data['nume']);
         $('#prenume').val(data['prenume']);
         $('#numar_telefon').val(data['numar_telefon']);
      };
      req.open('GET' , '../includes/cart22.inc.php?request=livrare' , true);
      req.send();
});

     $(document).on("click", "#date_facturare_btn", function(){
      var req = new XMLHttpRequest();

      req.onload = function(){
         var data = JSON.parse(this.responseText);
        
         $('#nume').val(data['nume']);
         $('#prenume').val(data['prenume']);
         $('#numar_telefon').val(data['numar_telefon']);
         
      };
      req.open('GET' , '../includes/cart22.inc.php?request=fizica' , true);
      req.send();
});
    
</script>

<!-- pentru juridica -->

<script type="text/javascript">
	
   $(document).on("click", "#date_facturare_juridica__btn", function(){
        var req =  new XMLHttpRequest();
        req.onload  =  function(){
        	var data= JSON.parse(this.responseText);
        	$('#nume_companie').val(data['nume_companie']);
        	$('#cui').val(data['cui']);
        	$('#numar_comert').val(data['cdirc']);
        	$('#banca').val(data['banca']);
        	$('#cont').val(data['cont']);
        	$('#judet').val(data['judet']);
        	$('#localitate').val(data['localitate']);
        	$('#adresa').val(data['adresa']);
        }
        req.open('GET' , '../includes/cart22.inc.php?request=juridica' ,true);
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
var ok_search=true;
$('#Search').css('visibility' , 'hidden');
$('#btn_search').click(function(){
	if(ok_search==true){
	$('#Search').css('visibility' , 'visible');
	ok_search=false;
	}
	else{
		$('#Search').css('visibility' , 'hidden');
		ok_search=true;
	}
});


$('#home_page').click(function(){
	window.location.replace("index.php");
});

$('#fb').click(function(){
	window.location.replace("https://www.google.com");
});

	
$('#insta').click(function(){
	window.location.replace("https://www.google.com");
});

$('#to_be_replaced').click(function(){
	
	window.location.replace("LogIn.php");
});

$('#shop').click(function(){
	window.location.replace("shop.php");
});

$('#btn_cart').click(function(){
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