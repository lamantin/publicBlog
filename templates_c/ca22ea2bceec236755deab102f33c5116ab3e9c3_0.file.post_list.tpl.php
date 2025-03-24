<?php
/* Smarty version 3.1.46, created on 2025-03-21 22:48:00
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/post_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddeca0205fb5_64015827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca22ea2bceec236755deab102f33c5116ab3e9c3' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/post_list.tpl',
      1 => 1742597266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddeca0205fb5_64015827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136711253867ddeca0203a05_35036768', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_136711253867ddeca0203a05_35036768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136711253867ddeca0203a05_35036768',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table class="table table-dark">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
</td>
        <td>
            <a href="/admin/editpost/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn btn-warning">Edit</a>
            <a href="/admin/deletepost/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
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
