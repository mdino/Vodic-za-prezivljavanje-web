<?php

include_once './baza.class.php';
$baza = new Baza();

$uid = $_GET['aktiv_kod'];
$upit = "SELECT email,datum_reg FROM aktiv_kodovi WHERE guid = '" . $uid . "';";
$rezultat_upita = $baza->selectDB($upit);
$email = "";
$datum_reg = "";

while ($jedan_redak = mysqli_fetch_array($rezultat_upita)) {
    $email = $jedan_redak['email'];
    $datum_reg = $jedan_redak['datum_reg'];
}


include_once './Postavke.class.php';

$postavke = new Postavke();
$pomak = $postavke->getPomak();
$datetime = new DateTime($datum_reg); //Dohvacamo datum registracije
$datetime2 = new DateTime(date("Y-m-d H:i:s", strtotime(sprintf("+%d hours", $pomak)))); //dohvacamo sadasnji datum
$razlika = $datetime->diff($datetime2); //Usporedujemo datum registracije sa sadasnjim datumom+pomak

if ($razlika->format('%R%a') == 0) {//formatiramo razliku tako da prikazuje broj dana razlike
    //Ako je razlika na nuli, onda je korisnik aktivirao racun za manje od 24 sata i uspjesno je aktivirao
    $upit = "UPDATE korisnik SET status=1 WHERE email = '{$email}';";
    $baza->updateDB($upit);
    header("Location: message.php?message=Uspješna aktivacija korisničkog računa.");
} else {
    header("Location: message.php?message=Vrijeme za aktivaciju je isteklo.");
}
?>
