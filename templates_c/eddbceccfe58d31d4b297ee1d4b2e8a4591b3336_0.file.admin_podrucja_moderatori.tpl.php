<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:24:50
         compiled from "templates/admin_podrucja_moderatori.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5827107395579d2729ea168_55138599%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eddbceccfe58d31d4b297ee1d4b2e8a4591b3336' => 
    array (
      0 => 'templates/admin_podrucja_moderatori.tpl',
      1 => 1433995403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5827107395579d2729ea168_55138599',
  'variables' => 
  array (
    'id' => 0,
    'naziv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d272a61534_11896546',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d272a61534_11896546')) {
function content_5579d272a61534_11896546 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5827107395579d2729ea168_55138599';
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