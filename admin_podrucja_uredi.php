<?php

$id = $_GET['id'];
function uploadImage($id) {
    $target_dir = "img/podrucja/" . $id . "/";
    $target_file = $target_dir . $id . ".jpg";
// Check if $uploadOk is set to 0 by an error
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}

include_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
include_once('baza.class.php');
$baza = new Baza();

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

$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
$smarty->assign('id', $id);
$smarty->display('admin_podrucja_uredi.tpl');
$smarty->display('footer.tpl');
?>