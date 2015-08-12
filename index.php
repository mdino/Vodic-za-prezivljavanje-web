<?php

include_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');


$sql = "SELECT*FROM podrucje";
include_once('baza.class.php');
$baza = new Baza();
$lista_podrucja = $baza->selectDB($sql);
$i = 2;
//Krecemo se kroz sva podrucja i ispisujemo html sadrzaj za svako podruje
$podrucja = Array();
while ($podrucje = mysqli_fetch_array($lista_podrucja)) {
    $podrucja[$i][0] = $podrucje[0];
    $podrucja[$i][2] = $podrucje[2];
    $podrucja[$i][3] = $podrucje[3];
    $i++;
}
$smarty->assign('podrucja', $podrucja);
$smarty->display('index.tpl');
$smarty->display('footer.tpl');
?>