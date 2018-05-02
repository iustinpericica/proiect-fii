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
		  <button id="shop" class="btn btn-elegant">Shop</button>
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
   total_req.send();x
</script>





 <div class='row container-fluid' style='margin-top:15px;' id='banner2'>
	 
	  <div class="col-md-1 col-sm-2 col-xs-12" style="font-size:20px;margin-bottom:15px;"><a href="contact.php">Contact</a></div>
	  <div class="col-md-1 col-sm-2 col-xs-12" style="font-size:20px;margin-bottom:15px;"><a href="shop.php">Magazin</a></div>
	  <div class="col-md-1 col-sm-2 col-xs-12" style="font-size:20px;margin-bottom:15px;"><a href="cont.php" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-2 col-xs-12" style="font-size:20px;margin-bottom:15px;"><a href="harta.php">Harta</a></div> 
	  <div class="col-md-4 col-sm-0 col-xs-12" style="font-size:20px;"></div>
	  <div class="col-md-4 col-sm-4 col-xs-12">
		
		<button id="btn_cart"  class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
	  
</header>
	
<?php
if(isset($_COOKIE['user']) && !isset($_SESSION['user'])){
	echo '<div class="row container-fluid text-center">Se pare ca te-ai mai conectat la noi, vrei sa mergi la pagina de LogIn?<button id="mergi" class="btn btn-default">Mergi</button> saaaau <button class="btn btn-danger" id="uita">Uita de mine :(</button></div>
	<script>
    $("#mergi").click(function(){
       window.location.replace("LogIn.php");
    });
    $("#uita").click(function(){
       window.location.replace("../includes/uita.inc.php");
    });
    </script>
	'
       
	  ;
}
?>

<div class="container-fluid" style="margin-bottom:50px;margin-top: 50px;">

<div class="bgimg-1">
  <div class="caption">
    <span class="border">Despre noi</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">- El Maro -</h3>
  <p style="font-size: 18px;">
  	Noi suntem ElMaro, ne mandrim cu traditie din anul 1975, de atunci am ramas pe piata, datorita calitatii produselor, fabricate in Romania, orasul Roman. Avem o gama variata de produse, de la dresuri pana la sosete de sport. Am fost sponsorii celor mai mari campionate de tenis din Romania si inca o facem cand ni se iveste ocazia.
  </p>
</div>

<div class="bgimg-2">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color:black">Datam din 1975</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p class="text-center" style="font-size: 20px;">Lideri in Romania</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"><button id="shop2" class="btn btn-elegant">Mergi la produsele noastre si nu vei fi dezamagit</button></span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <p class="text-center" style="font-size: 20px;">Calitatea sosetelor provenita din cusatura fina si firele proaspat produse</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="caption">
    <button class="btn btn-elegant" id="sus">Mergi sus</button>
  </div>
</div>

</div>
<footer class="container-fluid">
  <div class="row">
	 <div class="col-md-5 center-block text-center">
	 <img src="../images/logo.png" class="img-fluid " id="logo">
	 </div>
	  <div class="col-md-7">
	    <div class="row">
			<div class="col-md-4">
			  <ul class="lista-footer">
			     El Maro
			   <li id="despre">Despre</li>
			   <li id="contactf">Contact</li>
			   <li id="fii">Fii unul de al nostru!</li>
			   </ul>
			</div>
			
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <ul  class="lista-footer">Shop
			    <li id="cum_comand">Cum comand?</li>
				<li id="livrare">Livrare </li>
				<li id="termeni">Termeni&Conditii</li>
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

<script type="text/javascript">
   
   $('#despre').click(function(){window.location.replace('despre.php');});
   $('#contactf').click(function(){window.location.replace('contact.php');});
   $('#fii').click(function(){window.location.replace('fii.php');});
   $('#cum_comand').click(function(){window.location.replace('cum_comand.php');});
   $('#livrare').click(function(){window.location.replace('livrare.php');});
   $('#termeni').click(function(){window.location.replace('termeni.php');});

</script>

</body>
	
<style>
  #logo{
  	height:100px;
  }

  @media only screen and (max-width: 600px) {
   #logo{
  	height:50px;
  }
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("../images/sock31.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("../images/background1.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("../images/sock31.jpg");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}


/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}


</style>

<script>


$('#sus').click(function(){
       $('html, body').animate({scrollTop : 0},800);
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

$('#shop2').click(function(){
	window.location.replace("shop.php");
});

$('#btn_cart').click(function(){
    window.location.replace("cart.php");
});



</script>
   



<?php
 

 if(isset($_SESSION['user'])){

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