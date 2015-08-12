<?php

class Log {

    function LogToDb($text, $user) {
        include_once('baza.class.php');
        $baza = new Baza();
        $sql = sprintf("INSERT INTO `WebDiP2014x046`.`Log` (
                        `id` ,
                        `text` ,
                        `korisnik` ,
                        `vrijeme`
                        )
                        VALUES (
                        NULL , '%s', '%s',
                        CURRENT_TIMESTAMP
                        );", $text, $user);
        $baza->updateDB($sql);
    }

}

?>