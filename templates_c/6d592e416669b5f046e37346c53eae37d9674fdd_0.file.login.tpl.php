<?php
/* Smarty version 3.1.46, created on 2025-03-24 15:00:05
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67e17375ed0ae2_86330326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d592e416669b5f046e37346c53eae37d9674fdd' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/login.tpl',
      1 => 1742828317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e17375ed0ae2_86330326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67965998167e17375ecfb93_36292172', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "content"} */
class Block_67965998167e17375ecfb93_36292172 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_67965998167e17375ecfb93_36292172',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form method="POST" action="/login">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Jelszó</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Bejelentkezés</button>
</form>
<?php
}
}
/* {/block "content"} */
}
