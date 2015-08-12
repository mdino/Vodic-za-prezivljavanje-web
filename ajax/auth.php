<?php

$id = $_GET['id'];
include_once('../baza.class.php');
$baza = new Baza();

//dohvatiEmail
if ($id == '1') {

    $email = $_GET['email'];
    $sql = sprintf("SELECT*FROM korisnik WHERE email = '%s'", $email);

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<response>1</response>';
        return;
    }

    //Email ne postoji u bazi
    echo '<response>0</response>';
}
?>