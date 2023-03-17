<?php session_start();
if($_SESSION['version'] == 'special'){
    unset($_SESSION['version']);
    session_destroy();
    header('location:http://gym40.ru/index.php');
    exit();
}else{
    $_SESSION['version']='special';
    header('location:http://gym40.ru/special/');
    exit();
}
