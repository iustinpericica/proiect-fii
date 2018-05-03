<?php

include_once('dbconnection.inc.php');

function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}



if(isset($_POST['submit'])){

	$username  = make_safe($_POST['username']);
	$firstname = make_safe($_POST['firstname']);
	$lastname  = make_safe($_POST['lastname']);
	$password  = make_safe($_POST['password']);
	$password1 = make_safe($_POST['confirm_password']);
    $email     = make_safe($_POST['email']);
    $nrtelefon = make_safe($_POST['nrtelefon']);


	if(empty($username)){
		header('Location: ../php/creare_cont.php?username=empty');
		die();
	}
    
    if(empty($firstname)){
    	header('Location: ../php/creare_cont.php?firstname=empty');
		die();
    }
    
    if(empty($lastname)){
    	header('Location: ../php/creare_cont.php?lastname=empty');
		die();
    }
    
    if(empty($password)){
    	header('Location: ../php/creare_cont.php?password=empty');
		die();
    }
    
    if(empty($email)){
    	header('Location: ../php/creare_cont.php?email=empty');
		die();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){header('Location: ../php/creare_cont.php?email=wrong');die();}

    if(empty($nrtelefon)){
    	header('Location: ../php/creare_cont.php?nrtelefon=empty');
		die();
    }
    

    if($password != $password1){
    	header('Location: ../php/creare_cont.php?password=different');
		die();
    }
    
    $sql = "SELECT * FROM users WHERE user_name = '$username';";
    echo $sql;
   
    $res = $conn -> query($sql);
    if($row = mysqli_fetch_row($res)){
    
        header('Location: ../php/creare_cont.php?cont=existent');

        die();
    }

    $password = md5($password);
    $conn->query("INSERT INTO users(user_first,user_last,user_email,user_name,user_nrtelefon,user_password) VALUES('$firstname' , '$lastname' , '$email' , '$username' , '$nrtelefon' , '$password')");

}

session_start();
$_SESSION['idc'] = $username;

setcookie('user', $username, time() + (86400 * 30), "/");

header('Location: ../php/LogIn.php');