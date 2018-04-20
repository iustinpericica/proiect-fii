<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Pagina principala</title>
  <link href="../css/prestyle.css" type="text/css" rel="stylesheet">
  <link href="../css/shop.css" type="text/css" rel="stylesheet">
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
    <div class="col-md-4 col-xs-6 col-sm-2 text-center">
      <button id="shop" class="btn btn-elegant">Shop</span></button>
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

    

    <input type="text" name="search" id="input_search" placeholder="cautati" >
    <button id="btn_search" class="btn"> <i class="fa fa-search" style="font-size:17px;margin-right:20%;"> </i> </button>
    
    <button id="btn_cart" class="btn"> <i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
    
     
  </div>
</div>

</header>
 

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

<div class="text-center container-fluid row" id="shop">
	    Shop
	  </div>
<!-- PRODUSE IN FRRONT-END -->
<div class="container-fluid row">
	   <div class="col-md-2 col-sm-3 col-xs-4 col-xl-2" id="meniu_filtrare"  >
		   
		  
	     <ul style="width:100%;margin:0;">
	       
		  <li>
		   Pentru:
			  <br>
			  <ul>
			  <li>Femei <i class="fa fa-female" style="font-size:20px"> </i> <input type="checkbox"  id="woman" name="woman"></li><br>
			  <li>Barbati <i class="fa fa-male" style="font-size:20px"> </i> <input type="checkbox" id="man" name="man"></li><br>
			  <li>Copii <i class="fa fa-child" style="font-size:20px"> </i> <input type="checkbox" id="children" name="children"></li><br>
			  </ul>
			 </li>
		   </ul>
	<button id="arata" class="btn btn-info">Arata: </button>
			
  </div>
	
	   <div class="col-md-10 col-sm-9 col-xs-8 col-xl-10">
	  
		  <div class="row"  style="margin-bottom:20px;">
		  <div class="col-md-2 col-xs-2 col-sm-2 col-xl-2">Sortare dupa:</div>
		  <div class="col-md-2 col-xs-2 col-sm-2 col-xl-2">
			  
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Selectati:
                      <span class="caret"></span>
	        </button>
                <ul class="dropdown-menu">
                  <li><a id="crescator">Pret crescator</a></li>
                  <li><a id="descrescator">Pret descrescator</a></li>
                  <li><a id="relevanta">Relevanta</a></li>
                </ul>
          </div>
	    </div>
		 
<div class="row" id="products">
		<?php require_once "../includes/shop.inc.php";?>
 </div>

</div>
<script>
      
       $('#arata').click(function(){
        var string = "shop.php?";
        var ok=false;
       if($('#man').prop('checked')) {ok=true;string+="man=true";}
       if($('#woman').prop('checked') && ok==true){string+='&';string+="woman=true";}
       else if($('#woman').prop('checked')){string+="woman=true";ok=true;}
       if($('#children').prop('checked')&&ok==true){string+='&';string+="children=true";}
       else if ($('#children').prop('checked')){string+='children=true';};
       window.location.replace(string);
       });

       $('#crescator').click(function(){
          var string = "shop.php?pret=crescator";
          if($('#man').prop('checked')) string+="&man=true";
          if($('#woman').prop('checked'))string+="&woman=true";
          if($('#children').prop('checked'))string+="&children=true";
          window.location.replace(string);
       });

       $('#descrescator').click(function(){
          var string = "shop.php?pret=descrescator";
          if($('#man').prop('checked')) string+="&man=true";
          if($('#woman').prop('checked'))string+="&woman=true";
          if($('#children').prop('checked'))string+="&children=true";
          window.location.replace(string);
       });

       $('#relevanta').click(function(){
         var string = "shop.php?";
       if($('#man').prop('checked')) string+="&man=true";
       if($('#woman').prop('checked'))string+="&woman=true";
       if($('#children').prop('checked'))string+="&children=true";
       window.location.replace(string);
       });

       var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
    if($_GET['man'] ==='true'){$('#man').prop('checked', true);}
    if($_GET['woman'] ==='true'){$('#woman').prop('checked', true);}
    if($_GET['children'] ==='true'){$('#children').prop('checked', true);}
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

$('#btn_search').click(function(){
  $text = $('#input_search').val();
  window.location.replace('shop.php?search=' + $text);
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


<script>
$('#1').click(function(){
  window.location.replace("../produse/1.p.php");
});

$('#2').click(function(){
  window.location.replace("../produse/2.p.php");
});

$('#3').click(function(){
  window.location.replace("../produse/3.p.php");
});

$('#4').click(function(){
  window.location.replace("../produse/4.p.php");
});

$('#5').click(function(){
  window.location.replace("../produse/5.p.php");
});

$('#6').click(function(){
  window.location.replace("../produse/6.p.php");
});

$('#7').click(function(){
  window.location.replace("../produse/7.p.php");
});

$('#8').click(function(){
  window.location.replace("../produse/8.p.php");
});

$('#9').click(function(){
  window.location.replace("../produse/9.p.php");
});

$('#10').click(function(){
  window.location.replace("../produse/10.p.php");
});
</script>
	  
  </body>
  </html>

