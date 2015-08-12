<?php
include_once('smarty/SmartyBC.class.php');
$smarty = new SmartyBC();
$smarty->setTemplateDir('templates');
$smarty->display('header.tpl');
$smarty->assign('poruka',$_GET['message']);
$smarty->display('admin_index.tpl');
$smarty->display('footer.tpl');
