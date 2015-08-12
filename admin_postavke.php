<?php

if (isset($_GET['id'])) {
    if ($_GET['id'] == "1") {
        $broj = $_POST['pomak'];
        $url = "postavke/pomak.xml";
        // XML data
        $fp = fopen($url, 'r');
        $xml_string = fread($fp, 10000);
        fclose($fp);
        // create a DOM object from the XML data
        $domdoc = new DOMDocument;
        $domdoc->loadXML($xml_string);
        $params = $domdoc->getElementsByTagName('pomak');
        foreach ($params as $param) {
            $attributes = $param->attributes;
            foreach ($attributes as $attr => $val) {
                if ($attr == "brojSati") {
                    $val->value = $broj;
                }
            }
        }
        $domdoc->save('postavke/pomak.xml');
    } else {
        $broj = $_POST['stranice'];
        $url = "postavke/stranicenje.xml";
        // XML data
        $fp = fopen($url, 'r');
        $xml_string = fread($fp, 10000);
        fclose($fp);
        // create a DOM object from the XML data
        $domdoc = new DOMDocument;
        $domdoc->loadXML($xml_string);
        $params = $domdoc->getElementsByTagName('str');
        foreach ($params as $param) {
            $attributes = $param->attributes;
            foreach ($attributes as $attr => $val) {
                if ($attr == "brojStranica") {
                    $val->value = $broj;
                }
            }
        }
        $domdoc->save('postavke/stranicenje.xml');
    }
}

include_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');

if (!isset($_SESSION['tip'])) {
    $smarty->display('error.tpl');
} else {
    $smarty->display('admin_postavke.tpl');
}
$smarty->display('footer.tpl');
?>