<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-10 22:13:34
         compiled from "templates/admin_postavke.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:47259325555789a6e4a63e9_95175685%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d65cb70c10ed3b4a091e4b7e96fbf16d3ac3dc' => 
    array (
      0 => 'templates/admin_postavke.tpl',
      1 => 1433967192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47259325555789a6e4a63e9_95175685',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55789a6e4d6810_34590183',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55789a6e4d6810_34590183')) {
function content_55789a6e4d6810_34590183 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '47259325555789a6e4a63e9_95175685';
?>
<!-- Main -->
<br/>
<article id="main">
    <section class="wrapper style4 special container 75%">
        <!-- Content -->
        <div class="content">
            <div class="row 50%">
                <div class="12u 12u(mobile)">
                    <form action="admin_postavke.php?id=1" method="POST">
                        Pomak u broju sati
                        <input type="text" size="10" name="pomak"><br/>
                        <input type="submit"/>
                    </form> 
                </div>
                <div class="12u 12u(mobile)">
                    <form action="admin_postavke.php?id=2" method="POST">
                        Broj redova po stranici
                        <input type="text" size="10" name="stranice"><br/>
                        <input type="submit"/>
                    </form> 
                </div>
            </div>
        </div>
    </section>
</article>
<?php echo '<script'; ?>
>
    $('#header').css('background', 'black');
<?php echo '</script'; ?>
><?php }
}
?>