<?php

session_start();
include_once('../baza.class.php');
$baza = new Baza();
//pretplatiKorisnika
$podrucje = $_GET['id_podrucje'];
$sql = sprintf("INSERT INTO pretplata VALUES('%s','%s',0)", $_SESSION['user'], $podrucje);

$response = $baza->updateDB($sql);
echo $sql;

