<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-08 17:16:24
         compiled from "templates/zaboravljena_lozinka.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19942315105575b1c80306a9_77468403%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1183fb0bbbb802c23ff8370ff466089343d9940a' => 
    array (
      0 => 'templates/zaboravljena_lozinka.tpl',
      1 => 1433776582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19942315105575b1c80306a9_77468403',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5575b1c8069400_98373877',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5575b1c8069400_98373877')) {
function content_5575b1c8069400_98373877 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19942315105575b1c80306a9_77468403';
?>
<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Zaboravljena lozinka</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">

        <div class="row 50%">
            <div  id="greske" class="12u 12u(mobile)">
                <?php if (isset($_smarty_tpl->tpl_vars['greska']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

                <?php }?>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
            <form method="POST" action='zaboravljena_lozinka.php'>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="email" name="email" placeholder="Email" />
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Generiraj lozinku" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

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