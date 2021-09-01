<?php

$Admin_login_location='../index.php';
session_start();
session_destroy();
// setcookie(‘email','',time()-3600,'/');
header('location: '.$Admin_login_location);

?>