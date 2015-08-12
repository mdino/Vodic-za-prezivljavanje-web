<?php

include_once('smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
include_once('baza.class.php');
include_once('./recaptcha/recaptchalib.php');
$baza = new Baza();
$greska = "";

if (isset($_POST['Email'])) {
    $ime = $_POST ['ime'];
    $prezime = $_POST ['prezime'];
    $email = $_POST ['Email'];
    $lozinka = $_POST ['password'];
    $lozinka_provjera = $_POST ['password_repeat'];
    $newsletter = $_POST['newsletter'];


    if (!recaptcha_check_answer('6LcsZgYTAAAAAGAtw-gmfTOwRIQutJ2lfpgPgXzF', $_SERVER['REMOTE_ADDR'], $_POST['recaptcha_challenge_field'], $_POST['recaptcha_response_field'])->is_valid) {
        $greska .="<p>Captcha nije dobra</p>";
    }

    if (empty($ime)) {
        $greska .= "<p>Obavezno unesite ime!</p>";
    } //ime
    else {
        if (!ctype_upper($ime[0])) {
            $greska .= "<p>Ime mora imati veliko pocetno slovo. </p> ";
        }
    }


    if (empty($prezime)) {
        $greska .= "<p>Obavezno unesite prezime!</p>";
    }//prezime 
    else {
        if (!ctype_upper($prezime[0])) {
            $greska .= "<p>Prezime mora imati veliko pocetno slovo. </p> ";
        }
    }

    if (empty($email)) {
        $greska .= "<p>Morate unijeti e-mail adresu!</p>";
    }//email
    else {
        $upit = "select * from korisnik where email = '" . $email . "'";
        $rezultat = $baza->selectDB($upit);
        if ($rezultat->num_rows != 0) {
            $greska .= "<p>E-mail je zauzet!  </p> ";
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $greska .= "<p>Netocno formatirana e-mail adresa</p>";
    }

    if (empty($lozinka)) {
        $greska .= "<p>Morate unijeti lozinku! </p> ";
    }

    if (!preg_match("#.*^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $lozinka)) {
        $greska .= "<p>Lozinka mora sadrzavati velika, mala slova te brojke.</p>";
    }

    if ($lozinka != $lozinka_provjera) {
        $greska .= "<p>Lozinka i provjera lozinke moraju biti jednake</p>";
    }

    if (!isset($_POST['sex'])) {
        $greska .= "<p>Spol mora biti odabran! </p>";
    } else {
        $sex = $_POST['sex'];
    }

    if (empty($greska)) {
        $upit = sprintf("INSERT INTO korisnik(tip_korisnika_idtip_korisnika, ime, prezime, email,lozinka, spol,status, newsletter) "
                . "VALUES('%s','%s','%s','%s','%s','%s','%s','%s');", '3', $ime, $prezime, $email, $lozinka, $sex, '0', $newsletter);

        $baza->updateDB($upit);
        $primatelj = $email;
        $aktiv_kod = uniqid();
        $upit = "INSERT INTO aktiv_kodovi VALUES('{$aktiv_kod}','{$email}', now());";
        $baza->updateDB($upit);
        $poruka = "Postovani, molimo vas da aktivirate svoj korisnicki racun klikom na "
                . "http://arka.foi.hr/WebDiP/2014_projekti/WebDiP2014x046/aktivacija.php?aktiv_kod=$aktiv_kod ";

        mail($primatelj, 'Aktivacija korisnickog racuna', $poruka);
        include_once './Log.class.php';
        $log = new Log();
        $log->LogToDb('Korisnik ' . $email . ' se registrirao',$email);
        header("Location: message.php?message=Uspješna Registracija, imate 24 sata za aktiviranje računa. Link za aktivaciju Vam je poslan na email.");
        exit();
    }
}
$smarty->display('header.tpl');
$smarty->assign('greska', $greska);
$smarty->display('signup.tpl');
$smarty->display('footer.tpl');
?>