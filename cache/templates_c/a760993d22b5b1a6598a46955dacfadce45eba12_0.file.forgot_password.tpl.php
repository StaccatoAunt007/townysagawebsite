<?php
/* Smarty version 4.3.4, created on 2024-08-23 04:55:14
  from '/home/townysag/public_html/custom/templates/Cobalt/forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c878a284cef2_43928081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a760993d22b5b1a6598a46955dacfadce45eba12' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/forgot_password.tpl',
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
function content_66c878a284cef2_43928081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
        <div class="alert alert-danger">
            <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

        </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['SUCCESS']->value))) {?>
        <div class="alert alert-success">
            <?php echo $_smarty_tpl->tpl_vars['SUCCESS']->value;?>

        </div>
    <?php }?>
    <div class="card">
        <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD']->value;?>
</div>
        <div class="card-body">
            <form role="form" action="" method="post">
                <p><?php echo $_smarty_tpl->tpl_vars['FORGOT_PASSWORD_INSTRUCTIONS']->value;?>
</p>
                <div class="form-group">
                    <input type="email" id="inputEmail" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['EMAIL_ADDRESS']->value;?>
" class="form-control">
                </div>
                <div class="form-group">
                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                    <button type="submit" class="btn btn-theme"><?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
