<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 19:58:07
         compiled from "templates/message.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1228366745579cc2f473a91_69730722%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7284bf9a652fa23d62e18a9413075cd3d9aea9d' => 
    array (
      0 => 'templates/message.tpl',
      1 => 1433995404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1228366745579cc2f473a91_69730722',
  'variables' => 
  array (
    'poruka' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579cc2f4d6396_00202800',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579cc2f4d6396_00202800')) {
function content_5579cc2f4d6396_00202800 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1228366745579cc2f473a91_69730722';
?>
<!-- Main -->
<br/>
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" id='podrucja'>

        <header class="major">
            <?php if (isset($_smarty_tpl->tpl_vars['poruka']->value)) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['poruka']->value;?>
</h2>
            <?php }?>
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