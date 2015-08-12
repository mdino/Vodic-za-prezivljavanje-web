<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:18:52
         compiled from "templates/admin_korisnici.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3935985065579d10c802653_78998292%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17311aa8f16bc46a5b28213ba391085da24d91f' => 
    array (
      0 => 'templates/admin_korisnici.tpl',
      1 => 1433995405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3935985065579d10c802653_78998292',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d10c85d768_90835353',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d10c85d768_90835353')) {
function content_5579d10c85d768_90835353 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3935985065579d10c802653_78998292';
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