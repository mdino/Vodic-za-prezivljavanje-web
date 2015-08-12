<?php

include_once './baza.class.php';
$baza = new Baza();
$greska = "";
include_once('Log.class.php');
$log = new Log();

if (isset($_POST['email'])) {
    $email = $_POST ['email'];

    $nova_lozinka = uniqid();
    $sql = sprintf("UPDATE korisnik SET lozinka='%s' WHERE email='%s'", $nova_lozinka, $email);

    $baza->updateDB($sql);
    $poruka = "Poštovani, ovo su detalji Vašeg korisničkog računa\n";
    $poruka .="--------------------------------------------------\n";
    $poruka .="Email: " . $email;
    $poruka .="\nLozinka: " . $nova_lozinka;

    mail($email, 'Zaboravljena lozinka', $poruka);
    include_once './Log.class.php';
    $log = new Log();
    $log->LogToDb('Korisnik ' . $email . ' je resetirao lozinku',$email);
    header("Location: message.php?message=Nova lozinka Vam je poslana na email");
}

include_once('smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
$smarty->assign('greska', $greska);
$smarty->display('zaboravljena_lozinka.tpl');
$smarty->display('footer.tpl');
?>