<?php
/* Smarty version 3.1.46, created on 2025-03-24 15:05:47
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67e174cb17bcf8_60610975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '066d02769e8877e972f4fa72183c79e36645bed5' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/register.tpl',
      1 => 1742828744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e174cb17bcf8_60610975 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111833595667e174cb1755e0_29857044', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_111833595667e174cb1755e0_29857044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_111833595667e174cb1755e0_29857044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Regisztráció</h2>

<?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
    <div style="color: red;"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
<?php }?>

<form action="/login/register" method="POST">
    <div>
        <label class="form-label" for="email">E-mail cím:</label><br>
        <input class="form-control" type="email" id="email" name="email" required>
    </div>

    <div>
        <label class="form-label" for="password">Jelszó:</label><br>
        <input class="form-control" type="password" id="password" name="password" required>
    </div>

    <div>
        <label class="form-label" for="confirm_password">Jelszó megerősítése:</label><br>
        <input class="form-control" type="password" id="confirm_password" name="confirm_password" required>
    </div>

    <button type="submit">Regisztrálok</button>
</form>

<a href="/login">Már van fiókod? Jelentkezz be!</a>
<?php
}
}
/* {/block "content"} */
}
