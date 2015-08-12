<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-09 19:17:05
         compiled from "templates/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:141190561755771f91af61f7_36620714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77283a9f07aeaa6b971500f12a9954a45a7621ad' => 
    array (
      0 => 'templates/error.tpl',
      1 => 1433870195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141190561755771f91af61f7_36620714',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55771f91b15152_45537752',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55771f91b15152_45537752')) {
function content_55771f91b15152_45537752 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '141190561755771f91af61f7_36620714';
?>
<!-- Main -->
<br/>
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" >

        <header class="major">
            Forbidden
        </header>
    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>