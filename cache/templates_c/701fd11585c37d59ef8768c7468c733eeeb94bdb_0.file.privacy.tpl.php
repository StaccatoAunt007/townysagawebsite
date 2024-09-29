<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:19:57
  from '/home/townysag/public_html/custom/templates/Cobalt/privacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3e12d192cd5_23578239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '701fd11585c37d59ef8768c7468c733eeeb94bdb' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/privacy.tpl',
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
function content_66c3e12d192cd5_23578239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_POLICY']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['POLICY']->value;?>

        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
