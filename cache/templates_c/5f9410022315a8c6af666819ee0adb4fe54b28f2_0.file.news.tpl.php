<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:08:14
  from '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3de6e832fd1_28714919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f9410022315a8c6af666819ee0adb4fe54b28f2' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/news.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 1,
  ),
),false)) {
function content_66c3de6e832fd1_28714919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'news_btn','right'=>'no','last'=>'no'), 0, false);
?>
<label><?php echo $_smarty_tpl->tpl_vars['NEWS_LINK']->value;?>
</label>
<input type='text' name='news_link' value='<?php echo $_smarty_tpl->tpl_vars['NEWS_LINK_VALUE']->value;?>
' class='form-control'><?php }
}
