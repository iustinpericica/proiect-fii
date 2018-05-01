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
	 
	  <div class="col-md-1 col-sm-1" ><a href="../php/contact.php" style="font-size:20px;">Contact</a></div>
	  <div class="col-md-1 col-sm-1"><a href="../php/shop.php" style="font-size:20px;"> Magazin</a></div>
	  <div class="col-md-1 col-sm-1"><a href="../php/cont.php" id="cont_replaced" style="font-size:20px;">Contul tau</a></div>
	  <div class="col-md-1 col-sm-1"><a href="../php/harta.php" style="font-size:20px;">Harta</a></div> 
	  <div class="col-md-4 col-sm-4"></div>
	  <div class="col-md-4 col-sm-4">
		<button id="btn_cart"  class="btn btn-default"><i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
		
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
   	  if(this.responseText<=19&&this.responseText>0) $('#pret_cos').html(this.responseText + ' lei');
   	 else  if(this.responseText>19)$('#pret_cos').html(this.responseText + ' de lei');
   };
   total_req.open('GET' , '../includes/total.inc.php?show=true' , true);
   total_req.send();
</script>
	


<div class="row">
 <div class="col-md-5 col-xs-12 col-col-sm-5 col-xl-5" id="poza" class="container-fluid ">	
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

    else if($_GET['cos'] == 'false'){
    	$('#mergi_cos').append('<div class="row" style="font-size:17px;"><div class="red-text"><h2>Fa-ti un cont mai intai!</h2></div></div>');
    }

    var idp = $_GET['produs'];
    if(idp){
    	$('#poza').html(' ');
    	$('#poza').append('\
<div class="container" style="width:100%">\
  <h2>Pozele produsului</h2>  \
  <div id="myCarousel" class="carousel slide" data-ride="carousel">\
    <!-- Indicators -->\
    <ol class="carousel-indicators">\
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>\
      <li data-target="#myCarousel" data-slide-to="1"></li>\
    </ol>\
\
    <!-- Wrapper for slides -->\
    <div class="carousel-inner">\
      <div class="item active">\
        <img src="../images/sock' +  idp  +   '1.jpg" alt="poza 1" class="img-fluid">\
      </div>\
\
      <div class="item">\
        <img src="../images/sock' +  idp  +   '2.jpg" alt="poza 2" class="img-fluid">\
      </div>\
    \
    <!-- Left and right controls -->\
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">\
      <span class="glyphicon glyphicon-chevron-left"></span>\
      <span class="sr-only">Previous</span>\
    </a>\
    <a class="right carousel-control" href="#myCarousel" data-slide="next">\
      <span class="glyphicon glyphicon-chevron-right"></span>\
      <span class="sr-only">Next</span>\
    </a>\
  </div>\
</div>');
}

});
</script>
<div class="row container-fluid">
  Material: <span id="material"></span>
</div>


<div class="row container-fluid"><br>
  Recomandare: <span id="pentru"></span>
</div><br>

<div class="row container-fluid"><br>
  ID produs: <span id="idp"></span>
</div><br>

<div class="container-fluid" id="marimi">
  


</div>


   <div class="row container-fluid">
    <div id="divmodel">Model: <span id="model"></span></div><br><br>
    Culoare: <br><div class="square" style="height:50px;width:50px;border-radius:5px;box-shadow: 3px 3px grey;"></div><br>
    <div id="divacelasi">
    <p>Acelasi produs cu alt model sau culoare:</p>
    <div id="acelasi" class="row">
      


    </div><br>
  </div>
   	<div class="col-md-2 col-xs-6 col-sm-2 col-xl-2">Pret: <span id="pret"></span> lei</div>
   	 <div class="col-md-3 col-xs-6 col-sm-3 col-xl-3">Cantitate: <input type="number" id="cantitate_dorita" name="cantitate" style="width:100%;"></div>
   	 <div class="col-md-3 col-xs-6 col-sm-3 col-xl-3"><button class="btn btn-elegant" id="btn_cumpara" style="font-size:10px;">Adauga in cos!</button></div>
   	 <div class="col-md-4 col-xs-6 col-sm-4 col-xl-4">cantitate ramasa <span id="cantitate"></span></div>
 </div>

</div>

</div>


<script>

var schimba = function(a){
   string = "produs.php?produs=";
   string+=a;
   window.location.replace(string);
};



jQuery.ajaxSetup({async:false});

var string = "../includes/frati.inc.php?id=";
string+=$_GET['produs'];

$.get(string , function(data){
   if(data != 'grupai'){
   data = JSON.parse(data);
   for( i in data){
    id1 = data[i];
    var string1 = '../includes/produse.inc.php?id=';
    string1 += id1;
    $.get(string1 , function(data1){
        
        data1 = JSON.parse(data1);
        console.log(data1);
        if(data1['idp'] != $_GET['produs']){
        $('#acelasi').append('<div class="col-md-2 col-xs-4 col-sm-3 col-xl-2" style="border: 1px solid black;cursor: pointer;" onclick="schimba(' + id1 + ');"><div style="height:50px;width:50px;border-radius:5px;box-shadow: 3px 3px grey;background-color:' + data1['culoare'] + '"></div> <br>Model: <span class="modela">' + data1['model']  +   '</span></div>');}



    });

   }
 }
 else $('#divacelasi').remove();
});

 var req = new XMLHttpRequest();
 req.onload= function(){
    var res = JSON.parse(this.responseText);
    console.log(res);
    $('#cantitate').replaceWith(res['stoc']);
    $('#pret').replaceWith(res['pret']);
    $('#textm').replaceWith(res['textm']);
    $('#material').replaceWith(res['material']);
    $('#pentru').replaceWith(res['pentru']);
    $('#idp').replaceWith(res['idp']);
    $('.square').css('background-color' , res['culoare']);
    if(res['model']!=0)$('#model').replaceWith(res['model']);
    else $('#divmodel').remove();
    if(res['marime']!='dres'){
      if(res['marime']!='universala'){
      var marime = JSON.parse(res['marime']);
      var string = 'Marime: <select id="marime">'
      for( i in marime){
        string+= '<option value="';
        string+=marime[i];
        string+='">';
        string+=marime[i];
        string+="</option>";
       
      }
      $('#marimi').append(string);
      $('#marimi').append('<br><br>')
    }
    else {var marime = "Marime: universala";$('#marimi').append(marime);$('#marimi').append('<br>');}
  }

    else {
      $('#marimi').append('Marime: <select id="marime">\
  <option value="2">2</option>\
  <option value="3">3</option>\
  <option value="4">4</option>\
  <option value="5">5</option>\
  <option value="6">6</option>\
</select>\
\
<br><br><br>\
\
Grosime: <select id="grosime">\
  <option value="20DEN">20DEN</option>\
  <option value="40DEN">40DEN</option>\
  <option value="70DEN">70DEN</option>\
</select><br><br>');
    }
 };
 var string = '../includes/produse.inc.php?id=';
 var idp = $_GET['produs'];
 string+=idp;
 req.open('GET' , string , true);
 req.send();
</script>

<!-- ADAUG IN COSULET -->

<script>
  


	$('#btn_cumpara').click(function(){

       var e = document.getElementById("marime");
       var marime_selectata = e.options[e.selectedIndex].text;
       if(document.getElementById('grosime') !== null){
        var g = document.getElementById("grosime");
        var grosime_selectata = g.options[g.selectedIndex].text;
       }
       


       if($('#cantitate_dorita').val()<1)alert('alege o cantitate pozitiva..');

       else {
       	  cant = $('#cantitate_dorita').val();
       	  string = "../includes/cos.inc.php?id=";
       	  string+=idp.toString();
       	  string+='&cantitate=';
       	  string += cant;
          string+='&marime=';
          string+=marime_selectata;
          if(grosime_selectata != null) {string+='&grosime=';string+=grosime_selectata;}
       	  window.location.replace(string);
       }
	});
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
   

<style type="text/css">
   #logo{
    height:100px;
  }

  @media only screen and (max-width: 600px) {
   #logo{
    height:50px;
  }
</style>

<?php
 
 if(isset($_SESSION['user']) && isset($_SESSION['password'])){

 	echo "<script>
           $('#to_be_replaced').html('Contul meu');
           $('#to_be_replaced').click(function(){
	
	       window.location.replace('../php/cont.php');
         });
         $('#to_be_replaced').addClass('shake');
           </script>
 	";
 }
else {
	echo "<script>
           $('#cont_replaced').html('Log In);
           $('#cont_replaced').click(function(){
	
	       window.location.replace('../php/LogIn.php');
         });
         
           </script>
 	";
}
 ?>


</html>