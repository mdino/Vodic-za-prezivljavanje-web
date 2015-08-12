<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-09 20:15:15
         compiled from "templates/admin_podrucja_dodaj.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5815479355772d335e1350_26509336%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71ef3d14a83715273aafcd29330fd5ec120a10dc' => 
    array (
      0 => 'templates/admin_podrucja_dodaj.tpl',
      1 => 1433873713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5815479355772d335e1350_26509336',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55772d33604742_33358315',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55772d33604742_33358315')) {
function content_55772d33604742_33358315 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5815479355772d335e1350_26509336';
?>
<!-- Main -->
<article id="main">

    <header class="special container">
        <h2>Dodaj područje</h2>
    </header>

    <!-- One -->
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <form method="POST" enctype="multipart/form-data"  action="admin_podrucja_dodaj.php" id="registracija">
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Naziv <br/><input id="naziv" type="naziv" name="Naziv" placeholder="Naziv" />
                    </div>
                </div>
                <div class="row 50%">
                    <div class="12u 12u(mobile)">
                        Opis <textarea  name="Opis" id="Opis" placeholder="Opis" >  </textarea>
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
                            <li><input type="submit" class="special" value="Dodaj" /></li>
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