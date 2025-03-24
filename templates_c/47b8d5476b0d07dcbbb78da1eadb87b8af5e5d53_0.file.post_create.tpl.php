<?php
/* Smarty version 3.1.46, created on 2025-03-24 15:10:24
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/user/post_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67e175e0eee575_18341516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47b8d5476b0d07dcbbb78da1eadb87b8af5e5d53' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/user/post_create.tpl',
      1 => 1742829023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e175e0eee575_18341516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173146094567e175e0eede97_03209798', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_173146094567e175e0eede97_03209798 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_173146094567e175e0eede97_03209798',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2>Új poszt létrehozása</h2>

<form action="/post/create" method="POST">
    <div>
        <label class="form-label" for="title">Cím:</label><br>
        <input class="form-control" type="text" id="title" name="title" required>
    </div>

    <div>
        <label class="form-label" for="content">Tartalom:</label><br>
        <textarea class="form-control" id="content" name="content" rows="10" cols="50" required></textarea>
    </div>

    <button type="submit">Poszt létrehozása</button>
</form>

<a href="/user/myposts">Vissza a posztjaimhoz</a>
<?php
}
}
/* {/block "content"} */
}
