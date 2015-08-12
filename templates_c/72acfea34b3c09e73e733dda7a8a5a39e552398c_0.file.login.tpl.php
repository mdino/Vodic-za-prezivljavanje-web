<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 17:28:42
         compiled from "templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13553006715579a92aabb5b1_08199406%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72acfea34b3c09e73e733dda7a8a5a39e552398c' => 
    array (
      0 => 'templates/login.tpl',
      1 => 1433995404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13553006715579a92aabb5b1_08199406',
  'variables' => 
  array (
    'greska' => 0,
    'email' => 0,
    'zapamti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579a92ab31708_19702392',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579a92ab31708_19702392')) {
function content_5579a92ab31708_19702392 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13553006715579a92aabb5b1_08199406';
?>
<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Prijava</h2>
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
            <form method="POST" action='login.php'>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" placeholder="Email" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="password" name="password" placeholder="Lozinka" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Zapamti
                        <input type="checkbox" name="zapamti" <?php if (isset($_smarty_tpl->tpl_vars['zapamti']->value)) {?>checked="checked"<?php }?>/>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <a href="zaboravljena_lozinka.php">Zaboravljena lozinka</a>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Prijava" /></li>
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