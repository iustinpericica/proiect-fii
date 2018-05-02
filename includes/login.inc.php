<?php

require_once 'dbconnection.inc.php';



function make_safe($variable) 
{
   $variable = strip_tags(mysqli_real_escape_string($GLOBALS['conn'] ,trim($variable)));
   return $variable; 
}


if(isset($_POST['username'])){
   $username  = make_safe($_POST['username']);
   $password  = make_safe($_POST['password']);
  
   if(empty($username)){
		header('Location: ../php/LogIn.php?username=empty');session_destroy();
		die();
	}
    
   if(empty($password)){
    	header('Location: ../php/LogIn.php?password=empty');session_destroy();
		die();
    }
   
   $result = $conn->query("SELECT * FROM users WHERE user_name = '$username' ");
   $vector = $result->fetch_assoc();
   
   if($vector['user_password']== md5($password)){
      session_start();
      $_SESSION['user'] = $username;
      
      $_SESSION['idc'] = $vector['user_id'];
      setcookie('user', $username, time() + (86400 * 30), "/");
      
    
      header('Location: ../php/index.php?login=succes');
   }
   else {
         session_destroy();
         header('Location: ../php/LogIn.php?login=failed');}
}


