<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-09 19:45:54
         compiled from "templates/admin_log.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:139182057155772652502519_88525477%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b214aff0056b87954013dc5440b0f6e6682408e8' => 
    array (
      0 => 'templates/admin_log.tpl',
      1 => 1433871807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139182057155772652502519_88525477',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_557726525201e3_28481512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557726525201e3_28481512')) {
function content_557726525201e3_28481512 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '139182057155772652502519_88525477';
?>
<!-- Main -->
<br/>
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" id='log'>


    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/admin_log.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>