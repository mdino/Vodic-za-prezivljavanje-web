<?php

if (!isset($_SESSION)) {
    session_start();
}
include_once './Log.class.php';
$log = new Log();
$log->LogToDb('Korisnik ' . $_SESSION['email'] . ' se odlogirao', $_SESSION['email']);
$_SESSION = array();
header('Location:index.php');
?>