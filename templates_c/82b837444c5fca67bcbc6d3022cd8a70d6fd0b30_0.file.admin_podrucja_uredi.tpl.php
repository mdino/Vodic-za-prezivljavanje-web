<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-08 17:58:44
         compiled from "templates/admin_podrucja_uredi.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:725503975575bbb4bd34c7_76307017%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82b837444c5fca67bcbc6d3022cd8a70d6fd0b30' => 
    array (
      0 => 'templates/admin_podrucja_uredi.tpl',
      1 => 1433779123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '725503975575bbb4bd34c7_76307017',
  'variables' => 
  array (
    'id' => 0,
    'naziv' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5575bbb4bf7b57_32756354',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5575bbb4bf7b57_32756354')) {
function content_5575bbb4bf7b57_32756354 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '725503975575bbb4bd34c7_76307017';
?>
<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Uredi podrucja</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <form method="POST" enctype="multipart/form-data"  action="admin_podrucja_uredi.php?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        <center><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</center>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Naziv <br/><input id="naziv" type="naziv" value="<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
" name="Naziv" placeholder="Naziv" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Opis <textarea  name="Opis" id="Opis" placeholder="Opis" > <?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
 </textarea>
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Slika <br/> <input type="file" name="fileToUpload" id="fileToUpload"  />
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