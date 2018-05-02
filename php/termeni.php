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
	 
	  <div class="col-md-1 col-sm-1 col-xs-12" style="font-size:20px;"><a href="contact.php">Contact</a></div>
	  <div class="col-md-1 col-sm-1 col-xs-12" style="font-size:20px;"><a href="shop.php">Magazin</a></div>
	  <div class="col-md-1 col-sm-1 col-xs-12" style="font-size:20px;"><a href="cont.php" id="cont_replaced">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1 col-xs-12" style="font-size:20px;"><a href="harta.php">Harta</a></div> 
	  <div class="col-md-4 col-sm-4 col-xs-12" style="font-size:20px;"></div>
	  <div class="col-md-4 col-sm-4 col-xs-12">
		
		<button id="btn_cart"  class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
	   </div>
	</div>
	  <div style="visibility: hidden">ceva</div>
</header>
	

<div class="container-fluid" style="font-size: 17px;">
	Vanzator – El Maro SRL.<br>

Cumparator – persoana fizica / persoana juridica sau orice entitate juridica care isi face un Cont in Site si efectueaza o Comanda.<br><br><br>

Client – persoana fizica / persoana juridica care are sau obtine acces la CONTINUT, prin orice mijloc de comunicare pus la dispozitie de catre El Maro (electronic, telefonic, etc) sau in baza unui acord de utilizare existent intre El Maro si acesta si care necesita crearea si utilizarea unui CONT.<br><br><br>

Utilizator – orice persoana fizica/juridica inregistrata pe Site, care, prin finalizarea procesului de creare a Contului, si-a dat acordul cu privire la clauzele specifice site-ului din sectiunea Termeni si Conditii Generale.<br><br><br>

Nickname – pseudonim prin care un anumit Utilizator/Client/Cumparator poate adauga Continut pe Site. Nickname-ul este asociat informatiilor din Site ale Utilizatorului/Clientului/Cumparatorului sub denumirea de “Nume Utilizator”.<br><br><br>

Cont – sectiunea din Site formata dintr-o adresa de e-mail si o parola care permite Cumparatorului transmiterea Comenzii si care contine informatii despre Client/Cumparator si istoricul Cumparatorului in Site (Comenzi, facturi fiscale, garantii Bunuri, etc.).<br><br><br>



Site – domeniul www.Elmaro.ro si subdomeniile acestuia.<br><br><br>

Comanda – un document electronic ce intervine ca forma de comunicare intre Vanzator si Cumparator prin care Cumparatorul transmite Vanzatorului, prin intermediul Site-ului intentia sa de a achizitiona Bunuri si Servicii de pe Site.<br><br><br>

Bunuri si Servicii – orice produs sau serviciu, inclusiv documentele si serviciile mentionate in Comanda, care urmeaza a fi furnizate de catre Vanzator, Cumparatorului ca urmare a Contractului incheiat.<br><br><br>

Campanie – actiunea de a expune in scop comercial, un numar finit de Bunuri si/sau Servicii avand un stoc limitat si predefinit, pentru o perioada limitata de timp stabilita de catre Vanzator.<br><br><br>

Contract – reprezinta contractul la distanta incheiat intre Vanzator si Cumparator, fara prezenta fizica simultana a Vanzatorului si a Cumparatorului.<br>

Continut

toate informatiile de pe Site care pot fi vizitate, vizualizate sau altfel accesate prin utilizarea unui echipament electronic;
continutul oricarui e-mail trimis Cumparatorilor de catre Vanzator prin mijloace electronice si/sau orice alt mijloc de comunicare disponibil;
orice informatie comunicata prin orice mijloc de catre un angajat/colaborator al Vanzatorului, Cumparatorului, conform informatiilor de contactare, specificate sau nu de catre acesta;
informatii legate de Bunurile si/sau Serviciile si/sau tarifele practicate de Vanzator intr-o anumita perioada;
informatii legate de Bunurile si/sau Serviciile si/sau tarifele practicate de catre un tert cu care Vanzatorul are incheiate contracte de parteneriat, intr-o anumita perioada;
date referitoare la Vanzator, sau alte date privilegiate ale acestuia.
Review – o evaluare scrisa de catre detinatorul sau beneficiarul unui produs sau serviciu, evaluare redactata pe baza experientei personale si capacitatii acestuia de a realiza comentarii calitative și de a spune daca produsul sau serviciul respecta sau nu specificatiile mentionate de catre producator.


Intrebare – formula de adresare catre alti Utilizatori/Clienti/Cumparatori cu scopul de a obtine informatii despre produsele sau serviciile din pagina respectiva.<br>

Raspuns – informatie scrisa care este transmisa Utilizatorului/Clientului/Cumparatorului care a adresat o Intrebare in Site, in pagina unui anumit produs. Raspunsul reprezinta o explicatie oferita de un Utilizator/Client/Cumparator unui alt Utilizator/Client/Cumparator in cadrul unei discutii.<br>

Document – prezentele Termene si Conditii.<br><br><br>

Newsletter – mijloc de informare periodic, exclusiv electronic, respectiv posta electronica (e-mail, SMS) asupra Bunurilor si Serviciilor si/sau a promotiilor desfasurate de Vanzator intr-o anumita perioada, fara niciun angajament din partea Vanzatorului cu referire la informatiile continute de acesta.


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

</style>

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