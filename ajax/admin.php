<?php

$id = $_GET['id'];
include_once('../baza.class.php');
$baza = new Baza();

//dohvatiKorisnike
if ($id == '1') {
    $sql = "SELECT*FROM korisnik";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<idkorisnik>' . $korisnik[0] . '</idkorisnik>';
        echo '<tip>' . $korisnik[1] . '</tip>';
        echo '<ime>' . $korisnik[2] . '</ime>';
        echo '<prezime>' . $korisnik[3] . '</prezime>';
        echo '<email>' . $korisnik[4] . '</email>';
        echo '<spol>' . $korisnik[6] . '</spol>';
        echo '<status>' . $korisnik[7] . '</status>';
        echo '<newsletter>' . $korisnik[8] . '</newsletter>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}
//brisiKorisnika
if ($id == '2') {
    $sql = sprintf("DELETE FROM korisnik WHERE idkorisnik='%s'", $_GET['id_user']);

    $baza->updateDB($sql);
}

//blokirajKorisnika
if ($id == '3') {
    $sql = sprintf("UPDATE korisnik SET status='2' WHERE idkorisnik='%s'", $_GET['id_user']);

    $response = $baza->updateDB($sql);
}

//odblokirajKorisnika
if ($id == '4') {
    $sql = sprintf("UPDATE korisnik SET status='1' WHERE idkorisnik='%s'", $_GET['id_user']);

    $response = $baza->updateDB($sql);
}

//adminPostavi
if ($id == '5') {
    $sql = sprintf("UPDATE korisnik SET tip_korisnika_idtip_korisnika='3' WHERE idkorisnik='%s'", $_GET['id_user']);

    $response = $baza->updateDB($sql);
}

//moderatorPostavi
if ($id == '6') {
    $sql = sprintf("UPDATE korisnik SET tip_korisnika_idtip_korisnika='2' WHERE idkorisnik='%s'", $_GET['id_user']);

    $response = $baza->updateDB($sql);
}

//korisnikPostavi
if ($id == '7') {
    $sql = sprintf("UPDATE korisnik SET tip_korisnika_idtip_korisnika='1' WHERE idkorisnik='%s'", $_GET['id_user']);

    $response = $baza->updateDB($sql);
}

//dohvatiPodrucja
if ($id == '8') {
    $sql = "SELECT*FROM podrucje";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<podrucja>';
    while ($podrucje = mysqli_fetch_array($response)) {
        echo '<podrucje>';
        echo '<idpodrucje>' . $podrucje[0] . '</idpodrucje>';
        echo '<naziv>' . $podrucje[2] . '</naziv>';
        echo '<opis>' . $podrucje[3] . '</opis>';
        echo '</podrucje>';
    }
    //Email ne postoji u bazi
    echo '</podrucja>';
}

//dohvatiPodrucja
if ($id == '9') {
    $sql = sprintf("DELETE FROM podrucje WHERE idpodrucje='%s'", $_GET['id_podrucje']);

    $baza->updateDB($sql);
}

//dohvatiLog
if ($id == '10') {
    $sql = "SELECT*FROM Log";

    $response = $baza->selectDB($sql);
    echo '<logovi>';
    while ($log = mysqli_fetch_array($response)) {
        echo '<log>';
        echo '<id>' . $log[0] . '</id>';
        echo '<text>' . $log[1] . '</text>';
        echo '<vrijeme>' . $log[3] . '</vrijeme>';
        echo '</log>';
    }
    echo '</logovi>';
}

//dodijeliModeratoraPodrucju
if ($id == '11') {
    $moderator = $_GET['moderator'];
    $podrucje = $_GET['podrucje'];
    $sql = sprintf("INSERT INTO moderator_podrucja VALUES('%s','%s')", $moderator, $podrucje);

    $response = $baza->updateDB($sql);
}

//oduzmiModeratoraPodrucju
if ($id == '12') {
    $moderator = $_GET['moderator'];
    $podrucje = $_GET['podrucje'];
    $sql = sprintf("DELETE FROM moderator_podrucja WHERE idkorisnik='%s' AND idpodrucje='%s'", $moderator, $podrucje);

    $response = $baza->updateDB($sql);
}

//dohvatiModeratoraPodrucja
if ($id == '13') {
    $podrucje = $_GET['podrucje'];

    $sql = sprintf("SELECT k.idkorisnik,ime,prezime,email FROM korisnik k, moderator_podrucja mp WHERE k.idkorisnik = mp.idkorisnik AND mp.idpodrucje='%s'", $podrucje);

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<idkorisnik>' . $korisnik[0] . '</idkorisnik>';
        echo '<ime>' . $korisnik[1] . '</ime>';
        echo '<prezime>' . $korisnik[2] . '</prezime>';
        echo '<email>' . $korisnik[3] . '</email>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}

//dohvatiNeModeratoraPodrucja
if ($id == '14') {
    $podrucje = $_GET['podrucje'];
    $sql = sprintf("SELECT k.idkorisnik,ime,prezime,email FROM korisnik k WHERE NOT EXISTS

        (SELECT * FROM moderator_podrucja mp WHERE mp.idkorisnik=k.idkorisnik AND mp.idpodrucje='%s')", $podrucje);

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<idkorisnik>' . $korisnik[0] . '</idkorisnik>';
        echo '<ime>' . $korisnik[1] . '</ime>';
        echo '<prezime>' . $korisnik[2] . '</prezime>';
        echo '<email>' . $korisnik[3] . '</email>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}

// STATISTIKA KORISTENJA SUSTAVA
/////////////////////////////////////////////////////
//Broj neuspjesnih prijava
if ($id == '15') {
    $sql = "SELECT COUNT(*) AS BROJ,korisnik FROM `Log` WHERE text LIKE '%nije uspjesno logirao%' GROUP BY korisnik ORDER BY korisnik DESC LIMIT 5";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<broj>' . $korisnik[0] . '</broj>';
        echo '<user>' . $korisnik[1] . '</user>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}

//Broj uspjesnih prijava
if ($id == '16') {
    $sql = "SELECT COUNT(*) AS BROJ,korisnik FROM `Log` WHERE text LIKE '%se logirao%' GROUP BY korisnik ORDER BY korisnik DESC LIMIT 5";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<broj>' . $korisnik[0] . '</broj>';
        echo '<user>' . $korisnik[1] . '</user>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}

if ($id == '16') {
    $sql = "SELECT COUNT(*) AS BROJ,korisnik FROM `Log` WHERE text LIKE '%se logirao%' GROUP BY korisnik ORDER BY korisnik DESC LIMIT 5";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<broj>' . $korisnik[0] . '</broj>';
        echo '<user>' . $korisnik[1] . '</user>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}

// STATISTIKA - APLIKATIVNA
/////////////////////////////////////////////////////
//Broj moderatora po podrucjima
if ($id == '17') {
    $sql = "SELECT COUNT(*) BROJ, email FROM korisnik k, moderator_podrucja mp WHERE mp.idkorisnik = k.idkorisnik GROUP BY email ORDER BY COUNT(*) DESC LIMIT 5";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<broj>' . $korisnik[0] . '</broj>';
        echo '<user>' . $korisnik[1] . '</user>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}

//Paginacija
if ($id == '18') {
    $xml = simplexml_load_file("../postavke/stranicenje.xml");
    $brojStranica = 0;

    foreach ($xml->stranica[0]->str[0]->attributes() as $child) {
        $brojStranica = $child;
    }
    $arr = array('str' => $brojStranica);
    echo json_encode($arr);
}

//Broj materijala
if ($id == '19') {
    $sql = "SELECT COUNT(*) AS BROJ, tm.naziv FROM tip_materijala tm, materijal m, clanci_podrucja cp WHERE tm.tip_materijala=m.idtip_materijala  
            AND m.idclanci_podrucja=cp.idpodrucje AND idpodrucje=5
            GROUP BY tm.naziv";

    $response = $baza->selectDB($sql);
    //Email postoji u bazi
    echo '<korisnici>';
    while ($korisnik = mysqli_fetch_array($response)) {
        echo '<korisnik>';
        echo '<broj>' . $korisnik[0] . '</broj>';
        echo '<user>' . $korisnik[1] . '</user>';
        echo '</korisnik>';
    }
    //Email ne postoji u bazi
    echo '</korisnici>';
}
?>