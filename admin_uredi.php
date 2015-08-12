<?php

include_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
include_once('baza.class.php');
$baza = new Baza();

$id = $_GET['id'];

if (isset($_POST['Email'])) {
    $ime = $_POST ['ime'];
    $prezime = $_POST ['prezime'];
    $email = $_POST ['Email'];
    $newsletter = $_POST['newsletter'];
    $sql = sprintf("UPDATE korisnik SET email='%s', ime='%s', prezime='%s', newsletter='%s' WHERE idkorisnik='%s'", $email, $ime, $prezime, $newsletter, $id);
    $baza->updateDB($sql);
    header('Location: admin_korisnici.php');
} else {
    $sql = "SELECT*FROM korisnik WHERE idkorisnik='" . $id . "'";
    $response = $baza->selectDB($sql);
    while ($korisnik = mysqli_fetch_array($response)) {
        $smarty->assign('email', $korisnik['email']);
        $smarty->assign('ime', $korisnik['ime']);
        $smarty->assign('prezime', $korisnik['prezime']);
    }
}


$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
$smarty->assign('id', $id);
$smarty->display('admin_uredi.tpl');
$smarty->display('footer.tpl');
?>