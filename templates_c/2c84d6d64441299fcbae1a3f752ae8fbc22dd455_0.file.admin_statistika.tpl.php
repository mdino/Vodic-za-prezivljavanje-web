<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:21:06
         compiled from "templates/admin_statistika.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20427002885579d192a75319_60801289%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c84d6d64441299fcbae1a3f752ae8fbc22dd455' => 
    array (
      0 => 'templates/admin_statistika.tpl',
      1 => 1433995404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20427002885579d192a75319_60801289',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d192b03433_86544119',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d192b03433_86544119')) {
function content_5579d192b03433_86544119 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20427002885579d192a75319_60801289';
?>
<!-- Main -->
<br/>
<article id="main">
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <div class="row 50%">
                <div class="12u 12u(mobile)">
                    Broj neuspjesnih prijava
                    <canvas id="canvas" ></canvas>
                </div>
                <div class="12u 12u(mobile)">
                    Broj uspjesnih prijava
                    <canvas id="canvas2" ></canvas>
                </div>
                <div class="12u 12u(mobile)">
                    Broj moderatora po područjima
                    <canvas id="canvas3" ></canvas>
                </div>
            </div>
        </div>
    </section>

</article>

<?php echo '<script'; ?>
 src="assets/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/Chart.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/js/admin_statistika.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>