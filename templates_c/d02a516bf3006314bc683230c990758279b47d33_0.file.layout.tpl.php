<?php
/* Smarty version 3.1.46, created on 2025-03-24 15:11:33
  from '/Users/makaiistvan/Desktop/rackforest_beadando/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.46',
  'unifunc' => 'content_67e176255da354_86634586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd02a516bf3006314bc683230c990758279b47d33' => 
    array (
      0 => '/Users/makaiistvan/Desktop/rackforest_beadando/templates/layout.tpl',
      1 => 1742829049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e176255da354_86634586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['title']->value)===null||$tmp==='' ? "Blog" : $tmp);?>
</title>
    
    <!-- Bootstrap CSS linkelése a CDN-ről -->
    <link 
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
rel="stylesheet">
    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43738349767e176255d6c47_57848690', "head");
?>

</head>
<body>
<!-- Header with navigation links (Bootstrap navigation example) -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Teszt blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/">Kezdőlap</a>
            </li>
            <?php if ((isset($_smarty_tpl->tpl_vars['is_logged_in']->value)) && $_smarty_tpl->tpl_vars['user_id']->value == 1) {?>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Admin</a>
                </li>
            <?php } else { ?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['is_logged_in']->value) {?>
            <li class="nav-item">
                <a class="nav-link" href="/user/myposts">Saját posztok</a>
            </li>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['is_logged_in']->value)) && $_smarty_tpl->tpl_vars['is_logged_in']->value) {?>
                <li class="nav-item">
                <a class="nav-link" href="/login/logout">Kijelentkezés</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Bejelentkezés</a>

                </li>
            <?php }?>

            <li class="nav-item">
                <a class="nav-link" href="/login/register">Regisztráció</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36476772367e176255d9343_26925474', "content");
?>

    </div>

    <!-- Bootstrap JS és jQuery CDN-ek hozzáadása -->
    <?php echo '<script'; ?>
 
src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 
src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
/* {block "head"} */
class Block_43738349767e176255d6c47_57848690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_43738349767e176255d6c47_57848690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_36476772367e176255d9343_26925474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_36476772367e176255d9343_26925474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
