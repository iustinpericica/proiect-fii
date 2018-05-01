<?php session_start();
?>
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
	 
	  <div class="col-md-1 col-sm-1" ><a href="contact.php" style="font-size:20px;">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="shop.php" style="font-size:20px;">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="cont.php" style="font-size:20px;" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="harta.php" style="font-size:20px;" >Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		
		<button id="btn_cart"  class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
	   </div>
	</div>
	
</header>

<div class="container-fluid" id="alertaa"></div>

<?php if(isset($_SESSION['idc'])){
     
	echo '<div class="row" id="mesaje">
</div>
 <div class="row">
 	<div class="col-md-8 col-xs-12 col-sm-6 col-xl-8" id="produse_cos">
 		
    </div>
 	<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4" id="detalii_cos">
 		<p class="text-center">Sumar comanda</p>
 		<p>Total cost produse: <span id="total"></span></p>
 		<p>Cost livrare: <span id="livrare"></span></p>
 		<button type="button" class="btn btn-success" id="pu">Pasul urmator:</button>
    </div>
 </div>';}
?>	

<script>
  jQuery.ajaxSetup({async:false});
	$('#pu').click(function(){
        window.location.replace('cart2.php');
	});
	var date;
	var p;

	$.get('../includes/cart.inc.php' , function(data){
		data = JSON.parse(data);
    console.log(data);
    
		for(i in data){
            
            p = data[i][0];
            var string = '../includes/produse.inc.php?id=';
            
            string += p;
            marime = data[i][2];
            grosime = data[i][3].toString();

            $.get(string , function(date){

             date = JSON.parse(date);
             
             var string1 = '<div class="row img-thumbnail" style="margin-bottom: 20px;">\
      <div class="col-md-4 col-xs-6 col-xl-4 col-sm-6"><img src="../images/sock' + date['idp'] + '1.jpg" class="img-responsive" alt="sock1"></div>\
      <div class="col-md-8 col-xs-6 col-xl-8 col-sm-6">' +  date["descriere"] +'</div>\
      Marime:' + marime + '';
      if(grosime != 0) {string1+='<br>Grosime: '; string1+=grosime; }

      string1+='<br>Cantitate: <input type="number"  name="cantitate" value="' + date['cantitate']  + '"><br>\
      <button class="btn btn-warning" onclick="actualizeaza();">Actualizeaza cantitatea</button>\
      <button class="btn btn-danger" id=' +  date['idp']  + ' onclick = "fdelete(' + date['idp'] + ',' + marime + ','  +  grosime  + ' );">Sterge produsul</button>\
      </div>\
      ';

             $('#produse_cos').append(string1); 
          

   });          
            
			
		};
	});
	
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

var fdelete = function(id , marime , grosime){
  var string = "../includes/sterge_cos.inc.php?idp=";
  string += id;
  string+= '&marime=';
  string+=marime;
  if(grosime){string+='&grosime=';string+=grosime;}
  window.location.replace(string);
};


var actualizeaza = function(){

   var value = $(this).siblings('input').val();
   alert(value);

};

</script>


<!-- TOTAL PRODUSELELELELLELELELELE -->
<script>
   var total_req = new  XMLHttpRequest();
   total_req.onload = function(){
   	 $('#total').html(this.responseText);
   	 if(this.responseText>150)$('#livrare').html("Gratuit!");
   	 else $('#livrare').html('20 de Lei -Nemo Express');
   };
   total_req.open('GET' , '../includes/total.inc.php?show=true' , true);
   total_req.send();
</script>

<script>
	// ----    ADAUG PRETUL TOTALULUI DIN COS --
   var total_req = new  XMLHttpRequest();
   total_req.onload = function(){
   	 if(this.responseText<=19&&this.responseText>0) $('#pret_cos').html(this.responseText + ' lei');
   	 else  if(this.responseText>19)$('#pret_cos').html(this.responseText + ' de lei');
   	 if(this.responseText<1){$('#alertaa').append('<h2>Adauga cateva produse in cos initial..</h2>');
   	 	                     $('#pu').remove();
                             $('#detalii_cos').remove();
   	 	                 }

   };
   total_req.open('GET' , '../includes/total.inc.php?show=true' , true);
   total_req.send();
</script>

<?php if(!isset($_SESSION['idc'])){echo '<h3 class="red-text text-center">Mai intai fa-ti un cont!</h3>';}
?>	
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