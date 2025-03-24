<?php
/* Smarty version 3.1.46, created on 2025-03-21 22:34:03
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67dde95befe936_63280860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962e22f9f2cc9840c9e3fcd2830300f430dd30bd' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/home.tpl',
      1 => 1742593247,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67dde95befe936_63280860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51971627567dde95bef8cc0_47069324', "content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_51971627567dde95bef8cc0_47069324 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_51971627567dde95bef8cc0_47069324',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Users/makaiistvan/Desktop/rackforest_beadando/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

    <h1>Tesztfeladat Blog</h1>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h5>
                        <p 
class="card-text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['content'],100);?>
</p>
                        <a href="/post/show/<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" class="btn
btn-primary">Tovább ..</a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php
}
}
/* {/block "content"} */
}
