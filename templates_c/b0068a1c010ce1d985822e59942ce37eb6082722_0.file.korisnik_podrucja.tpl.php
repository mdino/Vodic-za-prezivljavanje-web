<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:15:03
         compiled from "templates/korisnik_podrucja.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4294303045579d027c57d40_25718563%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0068a1c010ce1d985822e59942ce37eb6082722' => 
    array (
      0 => 'templates/korisnik_podrucja.tpl',
      1 => 1433995403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4294303045579d027c57d40_25718563',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d027ca3064_68540370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d027ca3064_68540370')) {
function content_5579d027ca3064_68540370 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4294303045579d027c57d40_25718563';
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