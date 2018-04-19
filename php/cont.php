<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pagina principala</title>
	<link href="../css/style.css" type="text/css" rel="stylesheet">
	<link href="../css/prestyle.css" type="text/css" rel="stylesheet">
	<link href="../css/cont.css" type="text/css" rel="stylesheet">
	<link href="../css/animate.css" type="text/css" rel="stylesheet">
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
	 
	  <div class="col-md-1 col-sm-1" ><a href="contact.php">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="shop.php">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="cont.php" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="harta.php">Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		
		<button id="btn_cart"  class="btn"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos">0 lei</span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
</header>

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

<div class="container-fluid" style="font-size:20px;">

<div class="text-center" id="contul_meu" style="font-size:30px;">Contul meu </div>

<div class="text-center" style="width:40%;font-size:20px;">
  Salut <?php echo $_SESSION['user']?>

 </div>

<div class="row">
  <div class="col-md-1 col-xs-2 col-sm-1 col-xl-1 border"></div>
  <div class="col-md-2 col-xs-8 col-sm-4 col-xl-2 text-center" id="contul_meu_1"> Contul meu </div>
  <div class="col-md-1 col-xs-2 col-sm-1 col-xl-1 border"></div>
  <div class="col-md-8 col-xs-0 col-sm-6 col-xl-8"></div>
</div>
<br>
<div class="row comenzi_cont" id="comenzi">
  
  <div class="col-md-4 col-xs-10 col-sm-6 col-xl-4 " id="btn_comenzi"> Comenzile mele</div>
  <div class="col-md-2 col-xs-2 col-sm-2 col-xl-2"><i class="fa fa-arrow-right" style="font-size:24px"></i></div>
  <div class="col-md-6 col-xs-0 col-sm-4 col-xl-6"></div>
</div>
<br>
<div class="row comenzi_cont" id="date" >
  
  <div class="col-md-4 col-xs-10 col-sm-6 col-xl-4 " id="btn_date"> Datele mele</div>
  <div class="col-md-2 col-xs-2 col-sm-2 col-xl-2"><i class="fa fa-arrow-right" style="font-size:24px"></i></div>
  <div class="col-md-6 col-xs-0 col-sm-4 col-xl-6"></div>
</div>
<br>
<div class="row comenzi_cont" id="parola">
  
  <div class="col-md-4 col-xs-10 col-sm-6 col-xl-4 " id="btn_schimba"> Schimba parola mea</div>
  <div class="col-md-2 col-xs-2 col-sm-2 col-xl-2"><i class="fa fa-arrow-right" style="font-size:24px"></i></div>
  <div class="col-md-6 col-xs-0 col-sm-4 col-xl-6"></div>
</div>
<br>
<div class="row comenzi_cont" id="logout">
  
  <div class="col-md-4 col-xs-10 col-sm-6 col-xl-4" id="btn_logout">Log out</div>
  <div class="col-md-2 col-xs-2 col-sm-2 col-xl-2"><i class="fa fa-arrow-right" style="font-size:24px"></i></div>
  <div class="col-md-6 col-xs-0 col-sm-4 col-xl-6"></div>
</div>

</div>	


<script>
   $('#date').click(function(){

      $('#content_date').css('visibility' , 'visible');
   	  var req=new XMLHttpRequest();
   	  req.onload = function(){
   	  	var data = JSON.parse(this.responseText);
   	  	$('#nume').replaceWith(data['user_last']);
   	  	$('#prenume').replaceWith(data['user_first']);
   	  	$('#email').replaceWith(data['user_email']);
   	  	 $('#telefon').replaceWith(data['user_nrtelefon']);
   	  }
   	  req.open('GET' , "../includes/cont.inc.php" , true);

   	  req.send();
   });


   $('#parola').click(function(){
     $('#schimba_parola').css('visibility' , 'visible');
     $('#schimba_div').addClass('fadeInUp');
   });

   $('#logout').click(function(){
      
      window.location.replace('../includes/logout.inc.php');

   });
</script>


<br>
<div id="content_date" style="font-size:20px;margin-left: 15px;">
	<p>Nume: <span id="nume"></span></p>
	<p>Prenume: <span id="prenume"></span></p>
	<p>E-Mail: <span id="email"></span></p>
	<p>Numar de telefon: <span id="telefon"></span></p>
</div>
<br><br>


<div id="comenzi_date" style="font-size:20px;margin-left: 15px;">
	
</div>	

<div id="schimba_parola">
  
  <div class="login-box animated" id="schimba_div">
			<div class="box-header">
				<h2>Schimba parola: </h2>
			</div>
		 <form action="../includes/cont.inc.php?password=change" method="POST">
			<label for="username">Parola veche</label>
			<br/>
			<input type="password" name="lastpass"><br>
			<label for="password">Parola noua: </label><br>
			<input type="password" name="nowpass"><br>
			<label for="password">Confirmati parola noua: </label><br>
			<input type="password" name="repass"><br>
			<input type="submit" name="submit">
			<br/>
		</form>
	</div>
</div>


<script>
$('#content_date').css('visibility' , 'hidden');
$('#schimba_parola').css('visibility' , 'hidden');
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