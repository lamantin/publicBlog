<?php
/* Smarty version 3.1.46, created on 2025-03-21 22:57:05
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/user_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddeec184ed75_16516595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e492c280e40e5b36cbb07b897142b242461f43db' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/user_create.tpl',
      1 => 1742597821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddeec184ed75_16516595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40936424067ddeec184b3a6_73414618', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_40936424067ddeec184b3a6_73414618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40936424067ddeec184b3a6_73414618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        </div>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
    <?php }?>

    <h2>Felhasználó létrehozása</h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Jelszó:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

                <div class="form-group">
            <label for="is_admin">Admin jogosultság:</label>
            <select name="is_admin" id="is_admin" class="form-control">
                <option value="0">Nem</option>
                <option value="1">Igen</option>
            </select>
        </div>

                <div class="form-group">
            <label for="is_active">Felhasználó aktív:</label>
            <select name="is_active" id="is_active" class="form-control">
                <option value="1">Igen</option>
                <option value="0">Nem</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Felhasználó létrehozása</button>
    </form>

        <?php if ($_smarty_tpl->tpl_vars['message']->value) {?>
        <p class="mt-3"><a href="/admin/createuser">Új felhasználó hozzáadása</a></p>
    <?php }?>

<?php
}
}
/* {/block "content"} */
}
