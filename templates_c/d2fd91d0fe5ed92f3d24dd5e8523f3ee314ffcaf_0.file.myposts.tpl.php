<?php
/* Smarty version 3.1.46, created on 2025-03-24 14:55:10
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/user/myposts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67e1724e69ff59_78628505',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2fd91d0fe5ed92f3d24dd5e8523f3ee314ffcaf' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/user/myposts.tpl',
      1 => 1742828109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e1724e69ff59_78628505 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4841249467e1724e69ae73_36738506', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_4841249467e1724e69ae73_36738506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4841249467e1724e69ae73_36738506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Saját posztjaim</h2>

<?php if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Cím</th>
            <th>Létrehozva</th>
            <th>Műveletek</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
</td>
                <td>
                    <a href="/user/editPost/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
">Szerkesztés</a> |
                    <a href="/user/deletePost/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" onclick="return confirm('Biztosan törlöd?');">Törlés</a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php } else { ?>
    <p>Még nincs saját posztod.</p>
<?php }?>

<a href="/post/create">Új poszt hozzáadása</a>
<?php
}
}
/* {/block "content"} */
}
