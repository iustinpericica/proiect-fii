<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cont</title>
	<link href="../css/style.css" type="text/css" rel="stylesheet">
	<link href="../css/prestyle.css" type="text/css" rel="stylesheet">
	<link href="../css/animate.css" type="text/css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../mdb/css/mdb.min.css" rel="stylesheet">
    <link href="../css/cont.css" type="text/css" rel="stylesheet">
</head>

<header class="container-fluid"> 
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
	 
	  <div class="col-md-1 col-sm-1" ><a href="contact.php" style="font-size:20px;">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="shop.php" style="font-size:20px;">Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="cont.php" style="font-size:20px;" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="harta.php" style="font-size:20px;">Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		
		<button id="btn_cart" class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
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

<div class="container-fluid" style="font-size:20px;">

<div class="text-center" id="contul_meu" style="font-size:30px;">Contul meu </div>

<div class="text-center" style="width:40%;font-size:20px;">
  Salut, <?php echo $_SESSION['user']?>

 </div>

<div class="row">
  <div class="col-md-1 col-xs-2 col-sm-1 col-xl-1 border"></div>

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

<div class="row container-fluid" id="comenzi_date" style="font-size:20px;margin-left: 15px;">
	
</div>	

<script>
   jQuery.ajaxSetup({async:false});
   var v_comenzi = [];
   var req = new XMLHttpRequest();
   req.onload = function(){
   	  v_comenzi = JSON.parse(this.responseText);
   }
   req.open('GET' , '../includes/comenzi_id.inc.php');
   req.send();

</script>

<script>
	$('#comenzi').click(function(){
   $('#comenzi_date').html(' ');
   for(i in v_comenzi){
   var id_comanda = v_comenzi[i];
   var data;
   var url = '../includes/comenzi.inc.php?id=';
   url+=id_comanda;
   $.get(url , function(data){
       data = JSON.parse(data);
       console.log(data);
       var datac = data['data'];
       var pret = data['pret'];
       var produse = data['produse'];

       var string='';
       for(i in produse){
              var url = '../includes/produse_text.inc.php?idp=';
              url+=produse[i][1].toString();
       	  	  $.get(url , function(dataa){
                  dataa = JSON.parse(dataa);
                  var photo = '../images/sock';
                  photo+=produse[i][1];
                  photo+='1';
                  var cant = 'c';
                  cant+=produse[i][5];
                  string += '<div class="row container-fluid"><img class="img-responsive img-thumbnail imgdf col-md-2 col-xs-12 col-sm-6 col-xl-4" src="' + photo + '.jpg"><br>Produs:' + dataa['text']  + ', marime: ' + produse[i][2] + ' Grosime:' + produse[i][3] + 'pret: <b>' + data['livrare']['pret'] + '</b> de lei, cantitate cumparata:<b>' + cant + '</b></div><br><br>'
       	  	  });
       	  
       	  

       }
       var date_facturare = data['facturare'];
       var date_livrare = data['livrare'];
       var facturare='';
       if(date_facturare['nume_companie']){
       	 facturare+='Nume companie: ';
       	 facturare+=date_facturare['nume_companie'];
       	 facturare+='<br>';

       	 facturare+='CUI: ';
       	 facturare+=date_facturare['cui'];
       	 facturare+='<br>';

       	 facturare+='Numar de inregistrare in registrul comertului: ';
       	 facturare+=date_facturare['numar_inregistrare'];
       	 facturare+='<br>';

       	 facturare+='Banca: ';
       	 facturare+=date_facturare['banca'];
       	 facturare+='<br>';

       	 facturare+='Cont: ';
       	 facturare+=date_facturare['cont'];
       	 facturare+='<br>';

         facturare+='Adresa: ';
       	 facturare+=date_facturare['adresa'];
       	 facturare+='<br>';

       	 facturare+='Judet: ';
       	 facturare+=date_facturare['judet'];
       	 facturare+='<br>';

       	 facturare+='Localitate: ';
       	 facturare+=date_facturare['localitate'];
       	 facturare+='<br>';
       }
       else {
         facturare+='Nume: ';
         facturare+=date_facturare['nume'];
         facturare+='<br>';

         facturare+='Prenume: ';
         facturare+=date_facturare['prenume'];
         facturare+='<br>';

         facturare+='Numar de telefon: ';
         facturare+=date_facturare['numar_telefon'];
         facturare+='<br>';


       }

      livrare='';
      livrare+='<b>Pret</b>: ';
      livrare+=date_livrare['pret'];
      livrare+='<br>';
      
      livrare+='Judet: ';
      livrare+=date_livrare['judet'];
      livrare+='<br>';

      livrare+='Oras: ';
      livrare+=date_livrare['oras'];
      livrare+='<br>';
      
      livrare+='Strada: ';
      livrare+=date_livrare['strada'];
      livrare+='<br>';

      livrare+='Numar locuinta: ';
      livrare+=date_livrare['numar'];
      livrare+='<br>';

      livrare+='Numar de telefon: ';
      livrare+=date_livrare['numar_telefon'];
      livrare+='<br>';

       $('#comenzi_date').append('<div class="row container-fluid"><b style="font-size:25px;">Plasata pe: ' + datac + ' Pret total: ' + pret + 'de lei</b></div><br><div class="text-center">Id comanda: ' + id_comanda + '</div><br><br>' + string + '\
    <div class="row container-fluid"></div><br>\
    <div class="row container-fluid">Facturare:<br>' + facturare + '</div><br><br>\
    <div class="row container-fluid">Livrare:<br>' + livrare +  '</div><br><br>\
    <div class="row container-fluid">Metoda de plata-ramburs </div>');

   });
   
   
}

});

</script>




<script>
$('#content_date').css('visibility' , 'hidden');
$('#schimba_parola').css('visibility' , 'hidden');
</script>
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


 <style>
  #logo{
    height:100px;
  }

  @media only screen and (max-width: 600px) {
   #logo{
    height:50px;
  }
}

</style>



</html>