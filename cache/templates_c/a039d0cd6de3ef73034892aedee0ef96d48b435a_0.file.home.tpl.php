<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:08:14
  from '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3de6e8111a0_82301122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a039d0cd6de3ef73034892aedee0ef96d48b435a' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/home.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3de6e8111a0_82301122 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOME_1']->value;?>

<div class="row">
    <div class="col-md-6">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SUPPORT_URL']->value;?>
" target="_blank">
            <div class="card nested-card mt-3 mb-3">
                <div class="card-body">
                    <h3><b><?php echo $_smarty_tpl->tpl_vars['HOME_2']->value;?>
</b></h3>
                    <?php echo $_smarty_tpl->tpl_vars['HOME_3']->value;?>

                </div>
            </div>
        </a>
    </div>
    <div class="col-md-6">
        <div class="card nested-card mt-3 mb-3">
            <div class="card-body">
                <h3><b><?php echo $_smarty_tpl->tpl_vars['HOME_4']->value;?>
</b></h3>
                <?php echo $_smarty_tpl->tpl_vars['HOME_5']->value;?>

            </div>
        </div>
    </div>
</div><?php }
}
