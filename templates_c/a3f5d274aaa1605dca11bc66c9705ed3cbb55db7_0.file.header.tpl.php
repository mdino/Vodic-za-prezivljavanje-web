<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 05:55:00
         compiled from "templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1726586896557906945ef1c8_17774638%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f5d274aaa1605dca11bc66c9705ed3cbb55db7' => 
    array (
      0 => 'templates/header.tpl',
      1 => 1433994899,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1726586896557906945ef1c8_17774638',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55790694620f90_53664785',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55790694620f90_53664785')) {
function content_55790694620f90_53664785 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1726586896557906945ef1c8_17774638';
session_start();
    include_once('Log.class.php');
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
                        <li><a href="dokumentacija.php">Dokumentacija</a></li>
                            <?php if (isset($_SESSION['email'])) {?>
                            <li><a href="korisnik_podrucja.php">Područja</a></li>
                                <?php if ($_SESSION['tip'] == 3) {?>
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