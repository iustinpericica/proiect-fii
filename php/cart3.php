<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principala</title>
	<link href="../css/prestyle.css" type="text/css" rel="stylesheet">
	<link href="../css/cart3.css" type="text/css" rel="stylesheet">
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
   	 if(this.responseText<=19) $('#total1').html(this.responseText + ' lei');
    else  $('#total1').html(this.responseText + ' de lei');
   };
   total_req.open('GET' , '../includes/total.inc.php?show=true' , true);
   total_req.send();
</script>

<?php

if(!isset($_SESSION['cart22']))die();
?>


 <div class='row container-fluid' style='margin-top:15px;' id='banner2'>
	 
	  <div class="col-md-1 col-sm-1" ><a href="contact.php" style="font-size:20px;">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="shop.php" style="font-size:20px;">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="cont.php" style="font-size:20px;" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="harta.php" style="font-size:20px;">Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		
		<button id="btn_cart"  class="btn btn-default" ><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
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

<div class="row container-fluid"><h2 class="text-center">Sumar comanda:</h2>
   
   <div class="col-md-4 col-sm-4 col-xs-12 col-xl-4 text-center">

   	<div class="box"><i class="fa fa-check" style="display: inline;"></i>
   	 <div class="row">
   	 <div class="col-md-4 col-xs-0 col-sm-4 col-xl-4"></div>
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"><h3 style="display: inline; border-bottom: 1px solid  black;"> Detalii livrare</h3></div>
   	 
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"><button class="btn btn-default" id="schimba_livrare">Schimba</button></div></div>
     <p>Strada: <span class="strada"></span></p>
     <p>Oras: <span id="oras"></span></p>
     <p>Judet: <span id="judet"></span></p>
     <p>Numar de telefon: <span id="numar_telefon"></span></p>
 </div>
</div>
 <div class="col-md-4 col-sm-4 col-xs-12 col-xl-4 text-center" ><div class="box" ><i class="fa fa-check" style="display: inline;"></i>
 	<div class="row">
   	 <div class="col-md-4 col-xs-0 col-sm-4 col-xl-4"></div>
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"><h3 style="display: inline; border-bottom: 1px solid  black;"> Detalii facturare</h3></div>
   	 
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"><button class="btn btn-default" id="schimba_facturare">Schimba</button></div></div>
     <div id="de_pus_facturare">
     	<p>Nume companie: <span id="nume_companie"></span></p>
     	<p>Cod unic de identificare: <span id="cui"></span></p>
     	<p>Numar de inregistrare in regimul comertului: <span id="numar_comert"></span></p>
     	<p>Banca: <span id="banca"></span></p>
     	<p>Cont: <span id="cont"></span></p>
     	<p>judet: <span id="judetc"></span></p>
     	<p>Localitate: <span id="localitate"></span></p>
     	<p>Adresa: <span id="adresa"></span></p>

     </div>
</div>
</div>

<script>
  $('#schimba_facturare').click(function(){
  	window.location.replace('cart22.php');
  });

  var sesiune ="<?php echo $_SESSION['facturare']; ?>";
  sesiune.toString();
  if(sesiune === 'juridica'){

        var req =  new XMLHttpRequest();
        req.onload  =  function(){
        	var data= JSON.parse(this.responseText);
        	$('#nume_companie').html(data['nume_companie']);
        	$('#cui').html(data['cui']);
        	$('#numar_comert').html(data['cdirc']);
        	$('#banca').html(data['banca']);
        	$('#cont').html(data['cont']);
        	$('#judetc').html(data['judet']);
        	$('#localitate').html(data['localitate']);
        	$('#adresa').html(data['adresa']);
        }
        req.open('GET' , '../includes/cart22.inc.php?request=juridica' ,true);
        req.send();
  }
  else{

  	  $('#de_pus_facturare').html('<p>Nume : <span id="numecl"></span></p><p>Prenume: <span id="prenumecl"></span></p><p>Numar de telefon: <span id="numar_telefoncl"></span></p>');
  	  var req = new XMLHttpRequest();

      req.onload = function(){
         var data = JSON.parse(this.responseText);
        
         $('#numecl').html(data['nume']);
         $('#prenumecl').html(data['prenume']);
         $('#numar_telefoncl').html(data['numar_telefon']);
         
      };
      req.open('GET' , '../includes/cart22.inc.php?request=fizica' , true);
      req.send();
  }
</script>

   <div class="col-md-4 col-sm-4 col-xs-12 col-xl-4 text-center" ><div class="box" ><i class="fa fa-check" style="display: inline;"></i>
   	<div class="row">
   	 <div class="col-md-4 col-xs-0 col-sm-4 col-xl-4"></div>
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"><h3 style="display: inline; border-bottom: 1px solid  black;"> Detalii plata</h3></div>
   	 
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"></div></div>
    <p>Livrare prin curier</p>
    <p>Plata se face la <b>ramburs</b></p>
    <br>
</div>
 </div>

</div>

<div class="row">
 <div class="col-md-6 col-sm-6 col-xs-12 col-xl-6 text-center" >
  <div class="box" ><i class="fa fa-check" style="display: inline;"></i>
   	<div class="row">
   	 <div class="col-md-4 col-xs-0 col-sm-4 col-xl-4"></div>
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"><h3 style="display: inline; border-bottom: 1px solid  black;"> Detalii produse</h3></div>
   	 
   	 <div class="col-md-4 col-xs-12 col-sm-4 col-xl-4"></div></div>
   	 <div class="row">
   	 	<?php require_once "../includes/afisare_cos.inc.php"; ?>
   	 </div>
   	 <div class="row">
   	 	<h2>Total: <span id="total1"></span></h2>
   	 </div>
   	 <div class="row text-center container-fluid"><button id="trimite" class="btn btn-success">Trimite comanda</button></div>
    </div>
  </div>



</div>


<script type="text/javascript">
  $('#trimite').click(function(){
    
    window.location.replace('../includes/comanda.inc.php');
  })
</script>

<script type="text/javascript">
	
	var req = new XMLHttpRequest();
	req.onload = function(){
		var data =  JSON.parse(this.responseText);
        $('.strada').html(data['strada']);
        $('#oras').html(data['oras']);
        $('#judet').html(data['judet']);
        $('#numar_telefon').html(data['numar_telefon']);
        $('#nume').html(data['nume']);
        $('#prenume').html(data['prenume']);
        $('#email').html(data['email']);
	};
    req.open('GET' , '../includes/cart3.inc.php' , true);
    req.send();
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

$('#schimba_livrare').click(function(){
    window.location.replace('cart2.php');
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