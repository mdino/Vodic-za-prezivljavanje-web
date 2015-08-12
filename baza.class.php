<?php

class Baza {

    const server = "localhost";
    const korisnik = "WebDiP2014x046";
    const lozinka = "admin_Nudc";
    const baza = "WebDiP2014x046";

    /*
      const server = "127.0.0.1";
      const korisnik = "root";
      const lozinka = "123456";
      const baza = "WebDiP2014x046";
     */

    private function spojiDB() { //funkcija za spajanje na bazu
        $mysqli = new mysqli(self::server, self::korisnik, self::lozinka, self::baza);

        if ($mysqli->connect_errno) {
            echo "Neuspješno spajanje na bazu: " . $mysqli->connect_errno . ", " .
            $mysqli->connect_error;
        }
        return $mysqli;
    }

//spojiDB

    function prekidDB($veza) { //funkcija za prekid
        $veza->close();
    }

    function selectDB($upit) {//funkcija za izvrsenje select upita
        $veza = $this->spojiDB();
        $rezultat = $veza->query($upit) or trigger_error("Greška kod upita: {$upit} - " .
                        "Greška: " . $veza->error . " " . E_USER_ERROR);

        if (!$rezultat) {
            $rezultat = null;
        }
        $veza->close();
        return $rezultat;
    }

    function updateDB($upit, $skripta = '') { // funkcija za izvrsenje ostalih vrsta upita
        $veza = $this->spojiDB();
        if ($rezultat = $veza->query($upit)) {
            $veza->close();

            if ($skripta != '') {
                header("Location: $skripta");
            }

            return $rezultat;
        } else {
            echo "Pogreška: " . $veza->error;
            $veza->close();
            return $rezultat;
        }
    }

}

?>
