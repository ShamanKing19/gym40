<?php session_start();
if($_SESSION['version'] == 'special'){
    unset($_SESSION['version']);
    session_destroy();
    header('location:' . $_SERVER['HTTP_REFERER']);
    exit();
}else{
    $_SESSION['version']='special';
    header('location:' . $_SERVER['HTTP_REFERER']);
    exit();
}