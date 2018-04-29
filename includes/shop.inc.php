<?php

require 'dbconnection.inc.php';




if(isset($_GET['search'])){
	$ok=true;
   $text = $_GET['search'];
   $sql = "SELECT * FROM produse WHERE text LIKE '%$text%';";
   if(isset($_GET['pret'])){
      $pret = $_GET['pret'];
      if($pret == 'crescator')$sql.="ORDER BY pret ASC";
      else $sql.="ORDER BY pret DESC";
}
   $result = $conn -> query($sql);
   while ($row=mysqli_fetch_row($result)){
		$var = $row[0];
		$image = "../images/sock$var.jpg";
		echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 ">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid img-responsive" alt="">
    <div class="img-produs">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
    <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>
</div>';
	}

}

else{
 
   $sex  = array();
   $material  =array();
   $recomandate = array();
   if(isset($_GET['man'])) array_push($sex, 'man');
   if(isset($_GET['woman'])) array_push($sex, 'woman');
   if(isset($_GET['children'])) array_push($sex, 'children');
   if(isset($_GET['bumbac'])) array_push($material, 'bumbac');
   if(isset($_GET['lycra'])) array_push($material, 'lycra');
   if(isset($_GET['poliamida'])) array_push($material, 'poliamida');
   if(isset($_GET['microfibra'])) array_push($material, 'microfibra');
   if(isset($_GET['sport'])) array_push($recomandate, 'sport');
   if(isset($_GET['casual'])) array_push($recomandate, 'casual');
   if(isset($_GET['elegant'])) array_push($recomandate, 'elegant');
   $sql = 'SELECT * FROM produse';
   $and = false;
   $where = false;
   $ok=false;
   $num = count($sex);
   if($num>0){$where = true; $sql.=' WHERE';}
   $i=0;
   foreach ($sex as $key => $value) {
       ++$i;
       if($ok == false){$ok=true;$and=true;$sql.=' (';};
       if($i != $num)$sql.= "tip = '$value' OR ";
       else $sql.= "tip = '$value' )";
   }

   $ok=false;
   $num = count($material);
   if($num)  if($and==true)$sql.=' AND ';
   if($num>0 && $where == false){$where = true; $sql.=' WHERE';}
   $i=0;
   foreach ($material as $key => $value) {
       ++$i;
       if($ok == false){$ok=true;$and=true;$sql.=' (';};
       if($i != $num)$sql.= "material LIKE '%$value%' OR ";
       else $sql.= "material LIKE '%$value%' )";
   };
   
   $ok=false;
   $num = count($recomandate);
   if($num)  if($and==true)$sql.=' AND ';
   if($num>0 && $where == false){$where = true; $sql.=' WHERE';}
   $i=0;
   foreach ($recomandate as $key => $value) {
       ++$i;
       if($ok == false){$ok=true;$and=true;$sql.=' (';};
       if($i != $num)$sql.= "pentru = '$value' OR ";
       else $sql.= "pentru = '$value' )";
   }
   if(isset($_GET['pret'])){
      $pret = $_GET['pret'];
      if($pret == 'crescator')$sql.="ORDER BY pret ASC";
      else $sql.="ORDER BY pret DESC";
}

   $sql.=';';
   $result = $conn -> query($sql);
   while ($row=mysqli_fetch_row($result)){
        $var = $row[0];
        $image = "../images/sock$var.jpg";
        echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4 ">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid img-responsive" alt="">
    <div class="img-produs">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
    <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>
</div>';
    }
}


