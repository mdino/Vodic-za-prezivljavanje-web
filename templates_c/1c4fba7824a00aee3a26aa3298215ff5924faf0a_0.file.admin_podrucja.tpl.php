<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-09 20:28:29
         compiled from "templates/admin_podrucja.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15486756935577304d6f77e6_07976735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4fba7824a00aee3a26aa3298215ff5924faf0a' => 
    array (
      0 => 'templates/admin_podrucja.tpl',
      1 => 1433874508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15486756935577304d6f77e6_07976735',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5577304d719082_84863230',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5577304d719082_84863230')) {
function content_5577304d719082_84863230 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15486756935577304d6f77e6_07976735';
?>
<!-- Main -->
<br/>
<article id="main">
    <!-- Three -->

    <!-- Three -->
    <section class="wrapper style3 container special" >
        <div style="text-align: left;margin-bottom: 5%;"><a href="admin_podrucja_dodaj.php" style="color:#000;background:black"  class="button special">Dodaj Područje</a></div>

        <div id='podrucja'>

        </div>

    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/admin_podrucja.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>