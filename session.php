<?php session_start();
if($_SESSION['version'] == 'special'){
unset($_SESSION['version']);
if($_SERVER['REQUEST_URI'] == "special/index.php" || $_SERVER['REQUEST_URI'] == "special/"){
header('location:http://gym40.ru/index.php');
}else{
header('location:' . $_SERVER['HTTP_REFERER']);
}
session_destroy();
exit();
}else{
$_SESSION['version']='special';
header('location:' . $_SERVER['HTTP_REFERER']);
exit();
}