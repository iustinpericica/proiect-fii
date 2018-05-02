<?php
session_start();

setcookie("user", "", -1);
unset($_COOKIE['user']);
setcookie( 'user', '', time() - 999999, '/', $_SERVER['SERVER_NAME'] );

header('Location: ../php/index.php');
?>