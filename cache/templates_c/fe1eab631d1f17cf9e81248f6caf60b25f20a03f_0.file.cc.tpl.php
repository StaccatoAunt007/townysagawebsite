<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:08:14
  from '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/cc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3de6e84f740_28226629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe1eab631d1f17cf9e81248f6caf60b25f20a03f' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/cc.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3de6e84f740_28226629 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_code_settings']->value, 'setting', false, NULL, 'custom_code', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['setting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['setting']->value) {
$_smarty_tpl->tpl_vars['setting']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['total'];
?>
<label><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['setting']->value ?? '', 'UTF-8'))]->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
<textarea name="<?php echo $_smarty_tpl->tpl_vars['setting']->value;?>
" rows="8" class="form-control"><?php echo $_smarty_tpl->tpl_vars[''.(mb_strtoupper((string) $_smarty_tpl->tpl_vars['setting']->value ?? '', 'UTF-8')).'_VALUE']->value;?>
</textarea>
<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_custom_code']->value['last'] : null)) {?><br /><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
