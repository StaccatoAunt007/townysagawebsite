<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:19:56
  from '/home/townysag/public_html/custom/templates/Cobalt/terms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3e12cd8dbf5_90246610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52e9be6dd52f3b7400932064b81a780cc12f4704' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/terms.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_66c3e12cd8dbf5_90246610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['TERMS']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['SITE_TERMS']->value;?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
