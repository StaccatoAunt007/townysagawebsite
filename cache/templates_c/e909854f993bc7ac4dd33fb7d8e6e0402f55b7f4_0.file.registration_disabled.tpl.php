<?php
/* Smarty version 4.3.4, created on 2024-08-24 12:14:21
  from '/home/townysag/public_html/custom/templates/Cobalt/registration_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ca310d6c8a29_37063605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e909854f993bc7ac4dd33fb7d8e6e0402f55b7f4' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/registration_disabled.tpl',
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
function content_66ca310d6c8a29_37063605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
        <div class="card register-page-card">
            <div class="register-menu">
                    <div class="container-fluid">
                        <div class="card lr-card">
                            <div class="card-body">
                                <div class="lr-import-container">
                                    <span class="lr-title"><?php echo $_smarty_tpl->tpl_vars['CREATE_AN_ACCOUNT']->value;?>
</span>
                                    <br /><br />
                                    <div class="alert alert-info">
                                        <?php echo $_smarty_tpl->tpl_vars['REGISTRATION_DISABLED']->value;?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
