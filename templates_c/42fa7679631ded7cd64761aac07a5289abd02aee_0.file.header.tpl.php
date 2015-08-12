<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:37:04
         compiled from "templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19132090565579d55047aed5_23601579%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42fa7679631ded7cd64761aac07a5289abd02aee' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1434047787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19132090565579d55047aed5_23601579',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d55050b237_35908279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d55050b237_35908279')) {
function content_5579d55050b237_35908279 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19132090565579d55047aed5_23601579';
if(!isset($_SESSION)) {
     session_start();
}
?>
<!DOCTYPE HTML>
<!--
        Twenty by HTML5 UP
        html5up.net | @n33co
        Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Vodič za preživljavanje</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><?php echo '<script'; ?>
 src="assets/js/ie/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/jquery.dataTables.css" />
        <link rel="stylesheet" href="assets/css/jquery.dataTables_themeroller.css" />
        <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="index">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header" class="alt">
                <h1 id="logo"><a href="index.php">Vodič <span>za preživljavanje</span></a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="dokumentacija.html">Dokumentacija</a></li>
                        <li><a href="o_autoru.html">O korisniku</a></li>
                            <?php if (isset($_SESSION['email'])) {?>
                            <li><a href="korisnik_podrucja.php">Područja</a></li>
                                <?php if ($_SESSION['tip'] == 1) {?>
                                <li class="submenu">
                                    <a href="#">Admin</a>
                                    <ul>
                                        <li><a href="admin_korisnici.php">Korisnici</a></li>
                                        <li><a href="admin_podrucja.php">Područja</a></li>
                                        <li><a href="admin_log.php">Log</a></li>
                                        <li><a href="admin_statistika.php">Statistika</a></li>
                                        <li><a href="admin_postavke.php">Postavke sustava</a></li>
                                    </ul>
                                </li>
                            <?php }?>
                            <li><a href="logout.php" class="button special">Log Out</a></li>
                            <?php } else { ?>
                            <li><a href="signup.php" class="button special">Sign Up</a></li>
                            <li><a href="login.php" class="button special">Log In</a></li>
                            <?php }?>
                    </ul>
                </nav>
            </header><?php }
}
?>