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


 <div class='row container-fluid' style='margin-top:15px;' id='banner2'>
	 
	  <div class="col-md-1 col-sm-1" ><a href="../php/contact.php">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="../php/shop.php">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="../php/cont.php" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="../php/harta.php">Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		<input type="text" name="search" placeholder="cautati" id="Search">
	    <button id="btn_search"  class="btn"><i class="fa fa-search" style="font-size:17px;margin-right:20%;"></i></button>
		<button id="btn_cart"  class="btn"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos">0 lei</span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
</header>
	
<script>
	$(document).on("click", "#mergi", function(){
        window.location.replace('../php/cart.php');
   });

	// ----    ADAUG PRETUL TOTALULUI DIN COS --
   var total_req = new  XMLHttpRequest();
   total_req.onload = function(){
   	 if(this.responseText<=19) $('#pret_cos').html(this.responseText + ' lei');
   	else  $('#pret_cos').html(this.responseText + ' de lei');
   };
   total_req.open('GET' , '../includes/total.inc.php?show=true' , true);
   total_req.send();x
</script>

<div class="row">
 <div class="col-md-5 col-xs-12 col-col-sm-5 col-xl-5">
 	<div class="view overlay">
    <img src="../images/sock6.jpg" class="img-fluid" alt="">
    <div class="mask flex-center rgba-brown-strong">
        
    </div>
</div>
 </div>
 <div class="col-md-7 col-xs-12 col-sm-7 col-xl-7">
   <p class="text-center" style="font-size:20px;" id="descriere">Descriere:</p>
   <p id="textm"></p>
   <br><br>
   <div id="mergi_cos">  	 
</div>
<script>
	var $_GET = {};
	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
    	if($_GET['cos'] == 'true'){

           $('#mergi_cos').append('<div class="row" style="font-size:17px;">Produsul tau a fost adaugat in cos, acum poti sa:</div>\
   	 <div class="row"> \
   	 	<div class="col-md-6 col-xs-6 col-sm-6 col-xl-6" style="font-size: 20px;">Continui sa navighezi pe aceasta pagina sau</div>\
   	 	<div class="col-md-6 col-xs-6 col-sm-6 col-xl-6"><button class="btn btn-default" id="mergi">Mergi la cos</button></div>\
   </div>\
   <br><br>');
    }


});

</script>
   <div class="row">
   	<div class="col-md-2 col-xs-2 col-sm-2 col-xl-2">Pret: <span id="pret"></span> lei</div>
   	 <div class="col-md-3 col-xs-3 col-sm-3 col-xl-3"><input type="number" id="cantitate_dorita" name="cantitate"></div>
   	 <div class="col-md-3 col-xs-3 col-sm-3 col-xl-3"><button class="btn btn-elegant" id="btn_cumpara" style="font-size:10px;">Adauga in cos!</button></div>
   	 <div class="col-md-4 col-xs-4 col-sm-4 col-xl-4">cantitate ramasa <span id="cantitate"></span></div>
 </div>

</div>

</div>


<script>
 var req = new XMLHttpRequest();
 req.onload= function(){
    var res = JSON.parse(this.responseText);
    $('#cantitate').replaceWith(res['stoc']);
    $('#pret').replaceWith(res['pret']);
    $('#textm').replaceWith(res['textm']);
 };
 req.open('GET' , '../includes/produse.inc.php?id=6' , true);
 req.send();
</script>

<!-- ADAUG IN COSULET -->

<script>
	$('#btn_cumpara').click(function(){
       if($('#cantitate_dorita').val()<1)alert('alege o cantitate pozitiva..');
       else {
       	  cant = $('#cantitate_dorita').val();
       	  string = "../includes/cos.inc.php?id=6&cantitate=";
       	  string += cant;
       	  window.location.replace(string);
       }
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
	window.location.replace("../php/index.php");
});

$('#fb').click(function(){
	window.location.replace("https://www.google.com");
});

	
$('#insta').click(function(){
	window.location.replace("https://www.google.com");
});

$('#to_be_replaced').click(function(){
	
	window.location.replace("../php/LogIn.php");
});

$('#shop').click(function(){
	window.location.replace("../php/shop.php");
});

$('#btn_cart').click(function(){
    window.location.replace("../php/cart.php");
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