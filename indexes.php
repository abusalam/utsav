<?php 
if($_SERVER['HTTPS']!='on') {
    $redirect= 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    header("Location:$redirect");
    exit();
}
session_start();
error_reporting(0);
if(!isset($_SESSION['id'])) {
    header("Location:index.php");
}
include("lib/get.php"); 
?>