<?php
/* Smarty version 4.3.4, created on 2024-08-23 04:25:41
  from '/home/townysag/public_html/custom/templates/Cobalt/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c871b59787b3_84346558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84ed775d25a6fa747f80e3b90908dd1c709ec0af' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/cookies.tpl',
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
function content_66c871b59787b3_84346558 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE_HEADER']->value;?>
</div>
        <div class="card-body">
            <?php echo $_smarty_tpl->tpl_vars['COOKIE_NOTICE']->value;?>
<br />
            <button class="btn btn-theme mt-4 d-inline-block" onclick="configureCookies()"><?php echo $_smarty_tpl->tpl_vars['UPDATE_SETTINGS']->value;?>
</button>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
