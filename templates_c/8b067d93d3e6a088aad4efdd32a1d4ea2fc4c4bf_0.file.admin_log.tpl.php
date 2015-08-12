<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:20:44
         compiled from "templates/admin_log.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9090815015579d17c3143b7_41589457%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b067d93d3e6a088aad4efdd32a1d4ea2fc4c4bf' => 
    array (
      0 => 'templates/admin_log.tpl',
      1 => 1433995403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9090815015579d17c3143b7_41589457',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d17c381428_94532031',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d17c381428_94532031')) {
function content_5579d17c381428_94532031 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9090815015579d17c3143b7_41589457';
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