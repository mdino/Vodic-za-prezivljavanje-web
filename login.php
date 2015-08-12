<?php

include_once './baza.class.php';
$baza = new Baza();
$greska = "";

include_once './Log.class.php';
$log = new Log();

if (isset($_POST['email'])) {
    $email = $_POST ['email'];
    $lozinka = $_POST ['password'];

    if (empty($email)) {
        $greska .= "Morate unijeti email!<br />";
    }//korime
    if (isset($_POST['zapamti'])) {
        setcookie("email", $email, time() + 3600);  /* expire in 1 hour */
    } else {
        setcookie("email", $email, time() - 3600);  /* expire in 1 hour */
    }
    if (empty($lozinka)) {
        $greska .= "Morate unijeti lozinku! <br /> ";
    }
    if (empty($greska)) {
        $upit = "SELECT* FROM korisnik WHERE email='{$email}';";
        $found = false;
        $result = $baza->selectDB($upit);
        while ($row = mysqli_fetch_array($result)) {
            $found = true;
            if ($row['status'] == '0') {
                $greska.="Korisnik nije aktiviran";
            } else if ($row['status'] == '2') {
                $greska.="Korisnik je blokiran";
            } else if ($lozinka != $row['lozinka']) {
                $greska.="Kriva lozinka";
                $sql = sprintf("SELECT broj_pokusaja FROM korisnik WHERE email='%s'", $email);
                $rezultat = $baza->selectDB($sql);
                $broj_pokusaja = 0;
                while ($korisnik = mysqli_fetch_array($rezultat)) {
                    $broj_pokusaja = $korisnik[0];
                    $broj_pokusaja++;
                }
                if ($broj_pokusaja == 3) {
                    $sql = sprintf("UPDATE korisnik SET status='2' WHERE email='%s'", $email);
                    include_once './Log.class.php';
                    $log = new Log();
                    $log->LogToDb('Korisnik ' . $email . ' je blokiran', $email);
                    $baza->updateDB($sql);
                } else {
                    $sql = sprintf("UPDATE korisnik SET broj_pokusaja='%s' WHERE email='%s'", $broj_pokusaja, $email);
                    $log->LogToDb('Korisnik ' . $email . ' se nije uspjesno logirao', $email);
                    $baza->updateDB($sql);
                }
            } else {
                $sql = sprintf("UPDATE korisnik SET broj_pokusaja='0' WHERE email='%s'", $email);
                $baza->updateDB($sql);
                if (!isset($_SESSION)) {
                    session_start();
                }
                $log->LogToDb('Korisnik ' . $email . ' se logirao', $email);
                $_SESSION['user'] = $row['idkorisnik'];
                $_SESSION['ime'] = $row['ime'];
                $_SESSION['prezime'] = $row['prezime'];
                $_SESSION['tip'] = $row['tip_korisnika_idtip_korisnika'];
                $_SESSION['email'] = $row['email'];

                header('Location:index.php');
            }
        }
        if (!$found) {
            $greska .="Korisnik nije pronađen";
        }
    }
}

include_once('smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
$email_cookie = "";
if (isset($_COOKIE['email'])) {
    $smarty->assign('zapamti', 'true');
    $email_cookie = $_COOKIE['email'];
}

$smarty->assign('email', $email_cookie);
$smarty->assign('greska', $greska);
$smarty->display('login.tpl');
$smarty->display('footer.tpl');
?>