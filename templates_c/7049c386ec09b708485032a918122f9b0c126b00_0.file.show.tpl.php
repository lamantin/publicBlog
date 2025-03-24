<?php
/* Smarty version 3.1.46, created on 2025-03-21 22:48:15
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/post/show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddecaf07bca6_98454692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7049c386ec09b708485032a918122f9b0c126b00' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/post/show.tpl',
      1 => 1742588460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddecaf07bca6_98454692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6970666067ddecaf078173_10302107', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'content'} */
class Block_6970666067ddecaf078173_10302107 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6970666067ddecaf078173_10302107',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h1>
    <p><strong>By: <?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
</strong></p>
    <p><strong>Published on: <?php echo $_smarty_tpl->tpl_vars['post']->value['publish_at'];?>
</strong></p>
    <div>
        <p><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
    </div>
<?php
}
}
/* {/block 'content'} */
}
