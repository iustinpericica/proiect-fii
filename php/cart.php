<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Cos</title>
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
<div class="row" id="mesaje">
</div>
 <div class="row">
 	<div class="col-md-8 col-xs-12 col-sm-6 col-xl-8" id="produse_cos">
 		
    </div>
 	<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4">
 		<p class="text-center">Sumar comanda</p>
 		<p>Total cost produse: <span id="total"></span></p>
 		<p>Cost livrare: <span id="livrare"></span></p>
 		<button type="button" class="btn btn-success" id="pu">Pasul urmator:</button>
    </div>
 </div>

<script>

	$('#pu').click(function(){
        window.location.replace('cart2.php');
	});
	var req = new XMLHttpRequest();
	var data;
	var date;
	var p;
	req.onload = function(){
		data = JSON.parse(this.responseText);
		for(i in data){
            var relatii = new XMLHttpRequest();
            p = data[i][0];
            relatii.onload = function(){
                 date = JSON.parse(this.responseText);
                 $('#produse_cos').append('<div class="row img-thumbnail" style="margin-bottom: 20px;">\
 			<div class="col-md-4 col-xs-6 col-xl-4 col-sm-6"><img src="../images/sock' + date['idp'] + '.jpg" class="img-responsive" alt="sock1"></div>\
 			<div class="col-md-8 col-xs-6 col-xl-8 col-sm-6">' +  date["descriere"] +'</div>\
 			Cantitate: <input type="number" id = c' +  date['idp']  + ' name="cantitate" value="' + date['cantitate']  + '"><br>\
 			<button class="btn btn-warning" id = u' +  date['idp']  + '>Actualizeaza cantitatea</button>\
 			<button class="btn btn-danger" id=' +  date['idp']  + '>Sterge produsul</button>\
 	    </div>\
 	    ');
            }
            var string = '../includes/produse.inc.php?id=';
            string += data[i][0];
           //console.log(data[i][0]);
            relatii.open('GET' , string , true);
            
            //console.log(data[i][0]);
            relatii.send();
            
            //console.log(data[i][0]);
			
		};
	};
	req.open('GET' , '../includes/cart.inc.php' , true);
	req.send();
</script>


<!-- ALERTA DE STERGERE -->

<script>
	var $_GET = {};
	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
    if($_GET['sters'] === 'true'){$('#mesaje').append('<div class="alert alert-danger">\
  <strong>Success!</strong> Ai sters produsul din cos!.\
</div>');
}
});

</script>

<script>
$(document).on("click", "#1", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=1");
});

$(document).on("click", "#2", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=2");
});
$(document).on("click", "#3", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=3");
});
$(document).on("click", "#4", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=4");
});
$(document).on("click", "#5", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=5");
});
$(document).on("click", "#6", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=6");
});
$(document).on("click", "#7", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=7");
});
$(document).on("click", "#8", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=8");
});
$(document).on("click", "#9", function(){
   window.location.replace("../includes/sterge_cos.inc.php?idp=9");
});
$(document).on("click", "#10", function(){
   window.location.replace("../includes/cos.inc.php?idp=10");
});

$(document).on("click", "#u1", function(){
   var cant = $('#c1').val();
   window.location.replace("../includes/cosupdate.inc.php?id=1&cantitate=" + cant);
});

$(document).on("click", "#u2", function(){
   var cant = $('#c2').val();
   window.location.replace("../includes/cosupdate.inc.php?id=2&cantitate=" + cant);
});
$(document).on("click", "#u3", function(){
  var cant = $('#c3').val();
   window.location.replace("../includes/cosupdate.inc.php?id=3&cantitate=" + cant);
});
$(document).on("click", "#u4", function(){
   var cant = $('#c4').val();
   window.location.replace("../includes/cosupdate.inc.php?id=4&cantitate=" + cant);
});
$(document).on("click", "#u5", function(){
   var cant = $('#c5').val();
   window.location.replace("../includes/cosupdate.inc.php?id=5&cantitate=" + cant);
});
$(document).on("click", "#u6", function(){
   var cant = $('#c6').val();
   window.location.replace("../includes/cosupdate.inc.php?id=6&cantitate=" + cant);
});
$(document).on("click", "#u7", function(){
   var cant = $('#c7').val();
   window.location.replace("../includes/cosupdate.inc.php?id=7&cantitate=" + cant);
});
$(document).on("click", "#u8", function(){
   var cant = $('#c8').val();
   window.location.replace("../includes/cosupdate.inc.php?id=8&cantitate=" + cant);
});
$(document).on("click", "#u9", function(){
   var cant = $('#c9').val();
   window.location.replace("../includes/cosupdate.inc.php?id=9&cantitate=" + cant);
});
$(document).on("click", "#u10", function(){
   var cant = $('#c10').val();
   window.location.replace("../includes/cosupdate.inc.php?id=10&cantitate=" + cant);
});
</script>


<!-- TOTAL PRODUSELELELELLELELELELE -->
<script>
   var total_req = new  XMLHttpRequest();
   total_req.onload = function(){
   	 $('#total').html(this.responseText);
   	 if(this.responseText>150)$('#livrare').html("Gratuit!");
   	 else $('#livrare').html('20 de Lei -Nemo Express');
   };
   total_req.open('GET' , '../includes/total.inc.php' , true);
   total_req.send();
</script>

<script>
	// ----    ADAUG PRETUL TOTALULUI DIN COS --
   var total_req = new  XMLHttpRequest();
   total_req.onload = function(){
   	 $('#pret_cos').html(this.responseText + '  de lei');
   };
   total_req.open('GET' , '../includes/total.inc.php' , true);
   total_req.send();x
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