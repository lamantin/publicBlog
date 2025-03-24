<?php
/* Smarty version 3.1.46, created on 2025-03-21 22:38:14
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/post_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67ddea56e02f27_62714436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '391c9257a4b22f77f217807ae5e2c59a8eed828e' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/admin/post_create.tpl',
      1 => 1742593654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ddea56e02f27_62714436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142701912667ddea56e02613_88410064', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "content"} */
class Block_142701912667ddea56e02613_88410064 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_142701912667ddea56e02613_88410064',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <h2>Új poszt létrehozása</h2>

        <!-- Form a post létrehozásához -->
        <form action="/admin/posts_create" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Cím</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Tartalom</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Bejegyzés mentése</button>
            </div>
        </form>
    </div>
<?php
}
}
/* {/block "content"} */
}
