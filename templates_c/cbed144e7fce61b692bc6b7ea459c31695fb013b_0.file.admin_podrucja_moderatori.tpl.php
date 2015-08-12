<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-09 21:17:28
         compiled from "templates/admin_podrucja_moderatori.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:179542202655773bc82000b5_30014430%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbed144e7fce61b692bc6b7ea459c31695fb013b' => 
    array (
      0 => 'templates/admin_podrucja_moderatori.tpl',
      1 => 1433877447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179542202655773bc82000b5_30014430',
  'variables' => 
  array (
    'id' => 0,
    'naziv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55773bc8224618_30212362',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55773bc8224618_30212362')) {
function content_55773bc8224618_30212362 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '179542202655773bc82000b5_30014430';
?>
<!-- Main -->
<br/>
<article id="main">
    <!-- Three -->
    <header class="special container">
        <h2>Moderatori područja <div id="id_podrucja"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</div> <?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
</h2>
    </header>

    <!-- Three -->
    <section class="wrapper style3 container special " >

        <div class="row 100%">
            <div class="12u 12u(mobile)" >
                MODERATORI<br/><br/>
                <div id='podrucjaModeratori'>

                </div>
            </div>
            </div>
        <div class="row 100%">
            <div class="12u 12u(mobile)">
               NE - MODERATORI<br/><br/>
                <div id='podrucjaNeModeratori'>

                </div>
            </div>
        </div>
    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/admin_podrucja_moderatori.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>