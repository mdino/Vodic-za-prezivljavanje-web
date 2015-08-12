<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-08 16:34:47
         compiled from "templates/admin_uredi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17414933655575a807b4f017_16224567%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c32320a5be7ec965024c111eb6cc6aeba4acb25' => 
    array (
      0 => 'templates/admin_uredi.tpl',
      1 => 1433774083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17414933655575a807b4f017_16224567',
  'variables' => 
  array (
    'id' => 0,
    'email' => 0,
    'ime' => 0,
    'prezime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5575a807ba1f91_01026416',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5575a807ba1f91_01026416')) {
function content_5575a807ba1f91_01026416 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17414933655575a807b4f017_16224567';
?>
<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Uredi korisnika</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <form method="POST" action="admin_uredi.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <center><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</center>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input id="email" type="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="Email" placeholder="Email" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="ime" value="<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
" id="ime" placeholder="Ime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <input type="text" name="prezime" value="<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
" id="prezime" placeholder="Prezime" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)"> 
                        Newsletter
                        <input type="checkbox" name="newsletter" checked="checked"/>
                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <ul class="buttons">
                            <li><input type="submit" class="special" value="Uredi" /></li>
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
<!-- <?php echo '<script'; ?>
 src="assets/js/signup.js"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
>
<style>
    #recaptcha_area { margin: auto}
</style><?php }
}
?>