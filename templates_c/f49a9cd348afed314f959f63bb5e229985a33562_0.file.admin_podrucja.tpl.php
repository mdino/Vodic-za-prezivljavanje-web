<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:19:48
         compiled from "templates/admin_podrucja.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18973742185579d1448061c1_92460948%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f49a9cd348afed314f959f63bb5e229985a33562' => 
    array (
      0 => 'templates/admin_podrucja.tpl',
      1 => 1433995405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18973742185579d1448061c1_92460948',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d144853ac9_41234856',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d144853ac9_41234856')) {
function content_5579d144853ac9_41234856 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18973742185579d1448061c1_92460948';
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