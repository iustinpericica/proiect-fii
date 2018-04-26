<?php
unset($_COOKIE['user']);
unset($_COOKIE['password']);
setcookie('user', null, -1, '/');
setcookie('password', null, -1, '/');
header('Location: ../php/index.php');
?>