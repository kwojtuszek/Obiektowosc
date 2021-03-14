<?php
/* Smarty version 3.1.39, created on 2021-03-14 14:14:06
  from 'D:\xampp\htdocs\cw4\app\credit_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604e0c1e8072d9_80106422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af08dfd6049f5e6da924a14d5d7d0ff2cf54612e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\cw4\\app\\credit_view.tpl',
      1 => 1615727643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604e0c1e8072d9_80106422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1719773030604e0c1e7f8e26_75234208', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_1719773030604e0c1e7f8e26_75234208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1719773030604e0c1e7f8e26_75234208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
    <h4> Kalkulator Kredytowy </h4>
    <form method = "post" action = "<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc_credit.php">
        <div class = "row uniform 50%">
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "amount" value = "" placeholder = "Wysokość Kredytu"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "percentage" value = "" placeholder = "Oprocentowanie"/>
            </div>
            <div class = "4u 12u$(xsmall)">
                <input type = "text" name = "years" value = "" placeholder = "Na ile lat"/>
            </div>
            <div class = "12u$">
				<ul class = "actions">
                    <input type = "submit" class = "button special big" value = "Oblicz"/>
                </ul>
            </div>
        </div>
    </form>
<section>

<section>
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
        <h4> Wystąpiły błędy: </h4>
        <div calss = "row">
            <div class = "12u$">
                <ul class = "alt">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                        <li> <?php echo $_smarty_tpl->tpl_vars['err']->value;?>
 </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }?>
</section>

<section>
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
        <h4> Informacje: </h4>
        <div calss = "row">
            <div class = "12u$">
                <ul class = "alt">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                        <li> <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
 </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }?>
</section> 
            
<section>
    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
        <h5> Wynik: </h5>
        <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>

    <?php }?>
</section>

<?php
}
}
/* {/block 'content'} */
}
