<?php

class Postavke {

    public function getPomak() {
        $xml = simplexml_load_file("postavke/pomak.xml");
        $pomak = 0;

        foreach ($xml->vrijeme[0]->pomak[0]->attributes() as $child) {
            $pomak = $child;
        }
        return $pomak;
    }

    public function getBrojStranica() {
        $xml = simplexml_load_file("postavke/stranicenje.xml");
        $brojStranica = 0;

        foreach ($xml->stranica[0]->str[0]->attributes() as $child) {
            $brojStranica = $child;
        }
        return $brojStranica;
    }

}

?>
