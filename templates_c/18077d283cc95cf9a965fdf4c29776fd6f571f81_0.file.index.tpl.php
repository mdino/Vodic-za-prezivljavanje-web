<?php /* Smarty version 3.1.25-dev/1, created on 2015-06-06 17:40:33
         compiled from "templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:44487972355731471336155_81317121%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18077d283cc95cf9a965fdf4c29776fd6f571f81' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1433605114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44487972355731471336155_81317121',
  'variables' => 
  array (
    'podrucja' => 0,
    'podrucja_count' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.25-dev/1',
  'unifunc' => 'content_55731471378be1_56780276',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55731471378be1_56780276')) {
function content_55731471378be1_56780276 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '44487972355731471336155_81317121';
?>
<!-- Banner -->
<section id="banner">

    <!--
            ".inner" is set up as an inline-block so it automatically expands
            in both directions to fit whatever's inside it. This means it won't
            automatically wrap lines, so be sure to use line breaks where
            appropriate (<br />).
    -->
    <div class="inner">

        <header>
            <h2>Vodič za preživljavanje</h2>
        </header>
        <p>
            Pregled i učenje tehnika <br/>
            preživljavanja u različitim<br/>
            područjima.
        </p>
        <footer>
            <ul class="buttons vertical">
                <li><a href="#podrucja" class="button fit scrolly">Pregled područja</a></li>
            </ul>
        </footer>

    </div>

</section>

<!-- Main -->
<article id="main">

    <!-- Three -->
    <section class="wrapper style3 container special" id='podrucja'>

        <header class="major">
            <h2>Područja</strong></h2>
        </header>
        <?php if (isset($_smarty_tpl->tpl_vars['podrucja_count'])) {$_smarty_tpl->tpl_vars['podrucja_count'] = clone $_smarty_tpl->tpl_vars['podrucja_count'];
$_smarty_tpl->tpl_vars['podrucja_count']->value = count($_smarty_tpl->tpl_vars['podrucja']->value); $_smarty_tpl->tpl_vars['podrucja_count']->nocache = null; $_smarty_tpl->tpl_vars['podrucja_count']->scope = 0;
} else $_smarty_tpl->tpl_vars['podrucja_count'] = new Smarty_Variable(count($_smarty_tpl->tpl_vars['podrucja']->value), null, 0);?> 
        
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['podrucja_count']->value+1+1 - (2) : 2-($_smarty_tpl->tpl_vars['podrucja_count']->value+1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 2, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
              <?php if ($_smarty_tpl->tpl_vars['i']->value%2 == 0) {?>
                  <div class="row">
              <?php }?>
              <div class="6u 12u(narrower)">
                <section>
                    <a href="#" class="image featured"><img src="img/podrucja/<?php echo $_smarty_tpl->tpl_vars['podrucja']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
/<?php echo $_smarty_tpl->tpl_vars['podrucja']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
.jpg" width="486" height="215" /></a>
                    <header>
                        <h3><?php echo $_smarty_tpl->tpl_vars['podrucja']->value[$_smarty_tpl->tpl_vars['i']->value][2];?>
</h3>
                    </header>
                    <p><?php echo $_smarty_tpl->tpl_vars['podrucja']->value[$_smarty_tpl->tpl_vars['i']->value][3];?>
</p>
                    <a href="podrucje.php?id=<?php echo $_smarty_tpl->tpl_vars['podrucja']->value[$_smarty_tpl->tpl_vars['i']->value][0];?>
" class="button">Saznajte više</a>
                </section>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['i']->value%2 != 0) {?>
                </div>
            <?php }?>
        <?php }} ?>
    </section>

</article>
<?php }
}
?>