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
   
    <div class="col-md-1 col-sm-1" ><a href="contact.php" style="font-size:20px;">Contact</a></div>
    <div class="col-md-1 col-sm-1"><a href="shop.php" style="font-size:20px;">Magazin</a></div>
    <div class="col-md-1 col-sm-1"><a href="cont.php"  style="font-size:20px;" id="cont_replaced">Contul tau</a></div>
    <div class="col-md-1 col-sm-1"><a href="harta.php" style="font-size:20px;">Harta</a></div> 
    <div class="col-md-4 col-sm-4"></div>
    <div class="col-md-4 col-sm-4">

    

    <input type="text" name="search" id="input_search" placeholder="cautati" >
    <button id="btn_search" class="btn btn-default"> <i class="fa fa-search" style="font-size:17px;margin-right:20%;"> </i> </button>
    
    <button id="btn_cart" class="btn btn-default"> <i class="fa fa-shopping-cart" style="font-size:17px;"></i></button><span id="pret_cos"></span>
    
     
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


<!-- PRODUSE IN FRRONT-END -->
<div class="container-fluid row" style="margin-top: 30px;">
	   <div class="col-md-2 col-sm-3 col-xs-4 col-xl-2" id="meniu_filtrare" >
		   
		  <div id="filtru_id"  style='width:auto;height: auto;'>
	     <ul style="width:100%;margin:0;">
	       
		  <li class="filtru">
		   Pentru:
			  <br><br>
			  <ul>
			  <li><input type="checkbox"  id="woman" name="woman"> Femei <i class="fa fa-female" style="font-size:20px"> </i> </li><br>
			  <li><input type="checkbox" id="man" name="man"> Barbati <i class="fa fa-male" style="font-size:20px"> </i> </li><br>
			  <li><input type="checkbox" id="children" name="children"> Copii <i class="fa fa-child" style="font-size:20px"> </i> </li><br>
			  </ul>
			 </li>

       <br>
       <li class="filtru">
       De:
        <br><br>
        <ul>
        <li><input type="checkbox"  id="bumbac" name="bumbac"> Bumbac </li><br>
        <li><input type="checkbox" id="lycra" name="lycra"> Lycra </li><br>
        <li><input type="checkbox" id="poliamida" name="poliamida"> Poliamida </li><br>
        <li><input type="checkbox" id="microfibra" name="microfibra"> Microfibra </li><br>

        </ul>
       </li>
       <br>
       <li class="filtru">
       Recomandate pentru:<br>
        <br>
        <ul>
        <li><input type="checkbox"  id="sport" name="sport"> sport </li><br>
        <li><input type="checkbox" id="casual" name="casual"> casual </li><br>
        <li><input type="checkbox" id="elegant" name="elegant"> Ocazii speciale </li><br>
        

        </ul>
       </li>


		   </ul>
	<button id="arata" class="btn btn-info">Arata: </button>
</div>
  </div>
	
	   <div class="col-md-10 col-sm-9 col-xs-8 col-xl-10">
	  
		  <div class="row"  style="margin-bottom:20px;">
		  <div class="col-md-3 col-xs-3 col-sm-3 col-xl-2 text-center" id="sortare_dupa">Sortare dupa:</div>
      <div class="col-md-0 col-xs-2 col-sm-2 col-xl-0"></div>
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
</div>

  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>   

<script>
      
       $('#arata').click(function(){
        var string = "shop.php?";
        var ok=false;
       if($('#man').prop('checked')) {ok=true;string+="man=true";}
       
       if($('#woman').prop('checked') && ok==true){string+='&';string+="woman=true";}
       else if($('#woman').prop('checked')){string+="woman=true";ok=true;}
       
       if($('#children').prop('checked')&&ok==true){string+='&';string+="children=true";}
       else if ($('#children').prop('checked')){string+='children=true';ok=true;};
       
       if($('#sport').prop('checked')&&ok==true){string+='&';string+="sport=true";}
       else if ($('#sport').prop('checked')){string+='sport=true';ok=true;};
       
       if($('#casual').prop('checked')&&ok==true){string+='&';string+="casual=true";}
       else if ($('#casual').prop('checked')){string+='casual=true';ok=true;};

       if($('#elegant').prop('checked')&&ok==true){string+='&';string+="elegant=true";}
       else if ($('#elegant').prop('checked')){string+='elegant=true';ok=true;};

       if($('#poliamida').prop('checked')&&ok==true){string+='&';string+="poliamida=true";}
       else if ($('#poliamida').prop('checked')){string+='poliamida=true';ok=true;};

       if($('#lycra').prop('checked')&&ok==true){string+='&';string+="lycra=true";}
       else if ($('#lycra').prop('checked')){string+='lycra=true';ok=true;};

       if($('#bumbac').prop('checked')&&ok==true){string+='&';string+="bumbac=true";}
       else if ($('#bumbac').prop('checked')){string+='bumbac=true';ok=true;};

       if($('#microfibra').prop('checked')&&ok==true){string+='&';string+="microfibra=true";}
       else if ($('#microfibra').prop('checked')){string+='microfibra=true';ok=true;};

       window.location.replace(string);
       });

       $('#crescator').click(function(){
          var $_GET = {};
          var string = "shop.php?pret=crescator";

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
    if($_GET['search']) { string = "shop.php?pret=crescator&search=";
                         string+=$_GET['search'];}

    else {
           string = "shop.php?pret=crescator";
          if($('#man').prop('checked')) string+="&man=true";
          if($('#woman').prop('checked'))string+="&woman=true";
          if($('#children').prop('checked'))string+="&children=true";
          if($('#bumbac').prop('checked'))string+="&bumbac=true";
          if($('#lycra').prop('checked'))string+="&lycra=true";
          if($('#poliamida').prop('checked'))string+="&poliamida=true";
          if($('#microfibra').prop('checked'))string+="&microfibra=true";
          if($('#sport').prop('checked'))string+="&sport=true";
          if($('#casual').prop('checked'))string+="&casual=true";
          if($('#elegant').prop('checked'))string+="&elegant=true";
          
          

        }
       
      });
 window.location.replace(string);
       });

       $('#descrescator').click(function(){
        var string = "shop.php?pret=descrescator";
          var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }
   
    $_GET[decode(arguments[1])] = decode(arguments[2]);
    if($_GET['search']) {
                         string = "shop.php?pret=descrescator&search=";
                         string+=$_GET['search'];}

    else {
          string = "shop.php?pret=descrescator";
          if($('#man').prop('checked')) string+="&man=true";
          if($('#woman').prop('checked'))string+="&woman=true";
          if($('#children').prop('checked'))string+="&children=true";
          if($('#bumbac').prop('checked'))string+="&bumbac=true";
          if($('#lycra').prop('checked'))string+="&lycra=true";
          if($('#poliamida').prop('checked'))string+="&poliamida=true";
          if($('#microfibra').prop('checked'))string+="&microfibra=true";
          if($('#sport').prop('checked'))string+="&sport=true";
          if($('#casual').prop('checked'))string+="&casual=true";
          if($('#elegant').prop('checked'))string+="&elegant=true";
          
          
     }
      
      });
  window.location.replace(string);
       });

       $('#relevanta').click(function(){
        var $_GET = {};

document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
    function decode(s) {
        return decodeURIComponent(s.split("+").join(" "));
    }

    $_GET[decode(arguments[1])] = decode(arguments[2]);
    if($_GET['search']) {var string = "shop.php?pret=relevanta&search=";
                         string+=$_GET['search'];}

    else {
          var string = "shop.php?pret=relevanta";
          if($('#man').prop('checked')) string+="&man=true";
          if($('#woman').prop('checked'))string+="&woman=true";
          if($('#children').prop('checked'))string+="&children=true";
          if($('#bumbac').prop('checked'))string+="&bumbac=true";
          if($('#lycra').prop('checked'))string+="&lycra=true";
          if($('#poliamida').prop('checked'))string+="&poliamida=true";
          if($('#microfibra').prop('checked'))string+="&microfibra=true";
          if($('#sport').prop('checked'))string+="&sport=true";
          if($('#casual').prop('checked'))string+="&casual=true";
          if($('#elegant').prop('checked'))string+="&elegant=true";
          
          

        }
        window.location.replace(string);
      });
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
    if($_GET['lycra'] === 'true'){$('#lycra').prop('checked', true);}
    if($_GET['bumbac'] === 'true'){$('#bumbac').prop('checked', true);}
    if($_GET['microfibra'] === 'true'){$('#microfibra').prop('checked', true);}
    if($_GET['poliamida'] === 'true'){$('#poliamida').prop('checked', true);}
    if($_GET['sport'] === 'true'){$('#sport').prop('checked', true);}
    if($_GET['casual'] === 'true'){$('#casual').prop('checked', true);}
    if($_GET['elegant'] === 'true'){$('#elegant').prop('checked', true);}
});
</script>
<footer class="container-fluid" id="footer" style="display: block;bottom:500px;">
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

</script><

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
   
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if($( document ).width() > 1400){
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
        
        
      }
    else {
        document.getElementById("myBtn").style.display = "none";

        
    }
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    $('html, body').animate({scrollTop : 0},800);
}


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


<script>
$('#1').click(function(){
  window.location.replace("produs.php?produs=1");
});

$('#2').click(function(){
  window.location.replace("produs.php?produs=2");
});

$('#3').click(function(){
  window.location.replace("produs.php?produs=3");
});

$('#4').click(function(){
  window.location.replace("produs.php?produs=4");
});

$('#5').click(function(){
  window.location.replace("produs.php?produs=5");
});

$('#6').click(function(){
  window.location.replace("produs.php?produs=6");
});

$('#7').click(function(){
  window.location.replace("produs.php?produs=7");
});

$('#8').click(function(){
  window.location.replace("produs.php?produs=8");
});

$('#9').click(function(){
  window.location.replace("produs.php?produs=9");
});

$('#10').click(function(){
  window.location.replace("produs.php?produs=10");
});

$('#11').click(function(){
  window.location.replace("produs.php?produs=11");
});

$('#13').click(function(){
  window.location.replace("produs.php?produs=13");
});

$('#12').click(function(){
  window.location.replace("produs.php?produs=12");
});

$('#14').click(function(){
  window.location.replace("produs.php?produs=14");
});

$('#15').click(function(){
  window.location.replace("produs.php?produs=15");
});

$('#16').click(function(){
  window.location.replace("produs.php?produs=16");
});

$('#17').click(function(){
  window.location.replace("produs.php?produs=17");
});

$('#18').click(function(){
  window.location.replace("produs.php?produs=18");
});

$('#19').click(function(){
  window.location.replace("produs.php?produs=19");
});

$('#20').click(function(){
  window.location.replace("produs.php?produs=20");
});

$('#21').click(function(){
  window.location.replace("produs.php?produs=21");
});

$('#22').click(function(){
  window.location.replace("produs.php?produs=22");
});

$('#23').click(function(){
  window.location.replace("produs.php?produs=23");
});

$('#24').click(function(){
  window.location.replace("produs.php?produs=24");
});

$('#25').click(function(){
  window.location.replace("produs.php?produs=25");
});

$('#26').click(function(){
  window.location.replace("produs.php?produs=26");
});

$('#27').click(function(){
  window.location.replace("produs.php?produs=27");
});

$('#28').click(function(){
  window.location.replace("produs.php?produs=28");
});


$('#29').click(function(){
  window.location.replace("produs.php?produs=29");
});


$('#30').click(function(){
  window.location.replace("produs.php?produs=30");
});


$('#31').click(function(){
  window.location.replace("produs.php?produs=31");
});


$('#32').click(function(){
  window.location.replace("produs.php?produs=32");
});


$('#33').click(function(){
  window.location.replace("produs.php?produs=33");
});


$('#34').click(function(){
  window.location.replace("produs.php?produs=34");
});


$('#35').click(function(){
  window.location.replace("produs.php?produs=35");
});


$('#36').click(function(){
  window.location.replace("produs.php?produs=36");
});


$('#37').click(function(){
  window.location.replace("produs.php?produs=37");
});


$('#38').click(function(){
  window.location.replace("produs.php?produs=38");
});


$('#39').click(function(){
  window.location.replace("produs.php?produs=39");
});

</script>

<style type="text/css">
  
  .img-produs{
      height:140px
  }

  .filtru{
    border-top:black solid 1px;
  }

   #logo{
    height:100px;
  }
  
  #sortare_dupa{
    font-size: 25px;
  }

  @media only screen and (max-width: 600px) {
   #logo{
    height:50px;
  } 

  #filtru_id{
    bottom:0px;
  }

  #sortare_dupa{
    font-size: 15px;
  }
}

 @media only screen and (max-width: 1000px) {
   

  #filtru_id{
    bottom:0px;
  }

  
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}



</style>


  </body>
  </html>

