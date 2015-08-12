<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 05:53:16
         compiled from "templates/korisnik_podrucja.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13932986485579062cdf1fc1_88305545%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db779bd198daefe692622cb239f29a68d83936b1' => 
    array (
      0 => 'templates/korisnik_podrucja.tpl',
      1 => 1433994796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13932986485579062cdf1fc1_88305545',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579062ce132f9_14708006',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579062ce132f9_14708006')) {
function content_5579062ce132f9_14708006 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13932986485579062cdf1fc1_88305545';
?>
<!-- Main -->
<br/>
<article id="main">
    <!-- Three -->

    <!-- Three -->
    <section class="wrapper style3 container special" >
        <div id='podrucja'>

        </div>

    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/korisnik_podrucja.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>