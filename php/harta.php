<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principala</title>
	<link href="../css/contact.css" type="text/css" rel="stylesheet">
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
   total_req.send();x
</script>


<script>
      function initMap() {
        var uluru = {lat:46.919845, lng:26.944372};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJeBEhaskF_9AHkzhP051tNVkQIyuMXu8&callback=initMap">
    </script>


 <div class='row container-fluid' style='margin-top:15px;' id='banner2'>
	 
	  <div class="col-md-1 col-sm-1" ><a href="contact.php" style="font-size:20px;">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="shop.php" style="font-size:20px;">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="cont.php" style="font-size:20px;"  id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="harta.php" style="font-size:20px;" >Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		
		<button id="btn_cart"  class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
</header>
<div class="container-fluid" style="font-size:25px;">

 <div id="map">
 </div>
</div>



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



</script>
   

<style type="text/css"> #logo{
  	height:100px;
  }

  @media only screen and (max-width: 600px) {
   #logo{
  	height:50px;
  }</style>

<?php
 

 if(isset($_SESSION['user']) ){

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

</body></html>

