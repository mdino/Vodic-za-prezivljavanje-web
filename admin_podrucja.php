<?php

include_once('./smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
if (!isset($_SESSION['tip'])) {
    $smarty->display('error.tpl');
} else {
    $smarty->display('admin_podrucja.tpl');
}
$smarty->display('footer.tpl');
?>