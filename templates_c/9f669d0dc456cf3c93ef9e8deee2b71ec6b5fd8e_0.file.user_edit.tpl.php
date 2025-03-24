<?php
/* Smarty version 3.1.46, created on 2025-03-21 23:01:19
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/user_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddefbfdf8be5_02308576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f669d0dc456cf3c93ef9e8deee2b71ec6b5fd8e' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/user_edit.tpl',
      1 => 1742598075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddefbfdf8be5_02308576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104355850667ddefbfdf7479_43383331', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_104355850667ddefbfdf7479_43383331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104355850667ddefbfdf7479_43383331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
    <h2>Felhasználó szerkesztése: <?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</h2>

    <form action="/admin/edituser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" method="POST">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" required>
        </div>
        <div class="form-group">
            <label for="password">Új jelszó:</label>
            <input type="password" id="password" name="password">
            <small>A jelszó módosításához itt adjon meg új jelszót.</small>
        </div>
        <button type="submit">Frissítés</button>
    </form>

    <a href="/admin/users">Vissza a felhasználók listájához</a>
    </div>
<?php
}
}
/* {/block "content"} */
}
