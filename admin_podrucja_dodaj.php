<?php

function uploadImage($id) {
    $target_dir = "img/podrucja/" . $id . "/";
    mkdir($target_dir, 0777, true);
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
    $sql = sprintf("INSERT INTO podrucje (naziv,opis,idlokacija) VALUES('%s', '%s',1)", $naziv, $opis);
    $baza->updateDB($sql);
    $sql = "SELECT MAX(idpodrucje) FROM podrucje";
    $response = $baza->selectDB($sql);
    while ($row = mysqli_fetch_array($response)) {
        $id = $row[0];
    }
    uploadImage($id);
    header('Location: admin_podrucja.php');
}

$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
$smarty->display('admin_podrucja_dodaj.tpl');
$smarty->display('footer.tpl');
?>