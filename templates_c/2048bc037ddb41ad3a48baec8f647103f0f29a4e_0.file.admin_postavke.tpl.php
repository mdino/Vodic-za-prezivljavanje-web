<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-11 20:19:39
         compiled from "templates/admin_postavke.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20243389715579d13b410b38_58789081%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2048bc037ddb41ad3a48baec8f647103f0f29a4e' => 
    array (
      0 => 'templates/admin_postavke.tpl',
      1 => 1433995405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20243389715579d13b410b38_58789081',
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_5579d13b481106_19049973',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5579d13b481106_19049973')) {
function content_5579d13b481106_19049973 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20243389715579d13b410b38_58789081';
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