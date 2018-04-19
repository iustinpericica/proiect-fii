<?php

require 'dbconnection.inc.php';

if(isset($_GET['pret'])){
	if($_GET['pret']==='crescator'){
		$sql = "SELECT * FROM produse ORDER BY pret ASC;";
$sql1 = "SELECT * FROM produse WHERE tip='man' ORDER BY pret ASC;";
$sql2 = "SELECT * FROM produse WHERE tip='woman' ORDER BY pret ASC;";
$sql3 = "SELECT * FROM produse WHERE tip='children' ORDER BY pret ASC;";
	}
	if($_GET['pret']==='descrescator'){
$sql = "SELECT * FROM produse ORDER BY pret DESC;";
$sql1 = "SELECT * FROM produse WHERE tip='man' ORDER BY pret DESC;";
$sql2 = "SELECT * FROM produse WHERE tip='woman' ORDER BY pret DESC;";
$sql3 = "SELECT * FROM produse WHERE tip='children' ORDER BY pret DESC;";
	}
}
else{
$sql = "SELECT * FROM produse;";
$sql1 = "SELECT * FROM produse WHERE tip='man';";
$sql2 = "SELECT * FROM produse WHERE tip='woman';";
$sql3 = "SELECT * FROM produse WHERE tip='children';";
}

$all = $conn->query($sql);
$man = $conn->query($sql1);
$woman = $conn->query($sql2);
$children = $conn->query($sql3);



if(isset($_GET['man'])){
	while ($row=mysqli_fetch_row($man)){
		$var = $row[0];
		$image = "../images/sock$var.jpg";
		echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid " alt="">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
    <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>';
	}
};

if(isset($_GET['woman'])){

	while ($row=mysqli_fetch_row($woman)){
		$var = $row[0];
		$image = "../images/sock$var.jpg";
		echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid img-responsive" alt="">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
    <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>';
	}
};

if(isset($_GET['children'])){

	while ($row=mysqli_fetch_row($children)){
		$var = $row[0];
		$image = "../images/sock$var.jpg";
		echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid img-responsive" alt="">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
   <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>';
	}
};

$ok=false;
if(isset($_GET['search'])){
	$ok=true;
   $text = $_GET['search'];
   $sql = "SELECT * FROM produse WHERE text LIKE '%$text%';";
   $result = $conn -> query($sql);
   while ($row=mysqli_fetch_row($result)){
		$var = $row[0];
		$image = "../images/sock$var.jpg";
		echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid img-responsive" alt="">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
    <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>';
	}

}

if(!isset($_GET['man']) && !isset($_GET['woman']) && !isset($_GET['children']) && $ok===false){
	while ($row=mysqli_fetch_row($all)){
		$var = $row[0];
		$image = "../images/sock$var.jpg";
		echo '<div class="col-md-4 col-xs-12 col-sm-6 col-xl-4">
<div class="view overlay">
    <img src=' . $image . ' class="img-fluid img-responsive" alt="">
    <div class="mask flex-center rgba-black-strong">
        <p class="white-text"><button id=' . $var . ' class="btn btn-elegant">Detalii</button></p>
    </div>
    <div class="text-center">' . $row[3] . '</div> <p class="text-center">' . $row[2] . ' lei</p>
</div>
</div>';
	}
};

