<?php

include_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
include_once('baza.class.php');
$baza = new Baza();

    $id=$_GET['id'];
if (isset($_POST['Naziv'])) {
    $naziv = $_POST ['Naziv'];
    $opis = $_POST ['Opis'];
    $sql = sprintf("UPDATE podrucje SET naziv='%s', opis='%s' WHERE idpodrucje='%s'", $naziv, $opis, $id);
    uploadImage($id);
    $baza->updateDB($sql);
    header('Location: admin_podrucja.php');
} else {
    $sql = "SELECT*FROM podrucje WHERE idpodrucje='" . $id . "'";
    $response = $baza->selectDB($sql);
    while ($korisnik = mysqli_fetch_array($response)) {
        $smarty->assign('naziv', $korisnik['naziv']);
        $smarty->assign('opis', $korisnik['opis']);
    }
}
if (!isset($_SESSION['tip'])) {
    $smarty->display('error.tpl');
} else {
    $smarty->assign('id', $id);
    $smarty->display('admin_podrucja_moderatori.tpl');
}
$smarty->display('footer.tpl');
?>