<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-07 19:30:44
         compiled from "templates/admin_korisnici.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:154693323255747fc47e4066_91568084%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89d83e5b7bed9160a23d26ca0334adefe7b61052' => 
    array (
      0 => 'templates/admin_korisnici.tpl',
      1 => 1433698243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154693323255747fc47e4066_91568084',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55747fc4802a35_81754253',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55747fc4802a35_81754253')) {
function content_55747fc4802a35_81754253 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '154693323255747fc47e4066_91568084';
?>
<!-- Main -->
<br/>
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" id='korisnici'>

        
    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/admin_korisnici.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>