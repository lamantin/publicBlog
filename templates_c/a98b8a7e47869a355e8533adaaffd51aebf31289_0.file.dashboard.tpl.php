<?php
/* Smarty version 3.1.46, created on 2025-03-21 22:53:57
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddee054d2b53_05880279',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98b8a7e47869a355e8533adaaffd51aebf31289' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/dashboard.tpl',
      1 => 1742597635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddee054d2b53_05880279 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75124448867ddee054cd530_80182587', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_75124448867ddee054cd530_80182587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_75124448867ddee054cd530_80182587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['user_is_admin']->value)) && $_smarty_tpl->tpl_vars['user_is_admin']->value == 1) {?>
    <h1>Admin Dashboard</h1>
    <p>Üdvözlünk, <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['user_id'];?>
!</p>

    <h2>Felhasználók kezelése</h2>
    <ul>
        <li><a href="/admin/users">Felhasználók listája</a></li>
        <li><a href="/admin/createuser">Új felhasználó hozzáadása</a></li>
    </ul>

    <h2>Blog posztok kezelése</h2>
    <ul>
        <li><a href="/admin/posts">Blog posztok listája</a></li>
        <li><a href="/admin/posts_create">Új poszt hozzáadása</a></li>
    </ul>

    <a href="/login/logout" class="btn btn-danger">Kijelentkezés</a>
<?php }
}
}
/* {/block "content"} */
}
