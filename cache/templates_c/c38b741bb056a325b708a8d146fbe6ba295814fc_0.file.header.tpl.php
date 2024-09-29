<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:02:48
  from '/home/townysag/public_html/custom/templates/Cobalt/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3dd28608650_26561654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c38b741bb056a325b708a8d146fbe6ba295814fc' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/header.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
  ),
),false)) {
function content_66c3dd28608650_26561654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </head>
	<body>
    <?php if (((isset($_smarty_tpl->tpl_vars['THEME_LOADING_ANIMATION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_LOADING_ANIMATION']->value, $tmp) > 2)) {?>
        <div class="load-wrapper"><div class="loader"><div class="loader-inner line-scale"><div></div><div></div><div></div><div></div><div></div></div></div></div>
    <?php }
}
}
