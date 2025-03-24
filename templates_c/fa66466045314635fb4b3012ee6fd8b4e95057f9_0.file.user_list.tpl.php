<?php
/* Smarty version 3.1.46, created on 2025-03-21 23:00:39
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/user_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddef97bdc4b8_19304310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa66466045314635fb4b3012ee6fd8b4e95057f9' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/user_list.tpl',
      1 => 1742598037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddef97bdc4b8_19304310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151083870667ddef97bd7994_39286732', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_151083870667ddef97bd7994_39286732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_151083870667ddef97bd7994_39286732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table table-dark">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
        <td>
            <a href="/admin/edituser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-warning">Edit</a>
            <a href="/admin/deleteuser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger">Delete</a>
        </td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php
}
}
/* {/block "content"} */
}
