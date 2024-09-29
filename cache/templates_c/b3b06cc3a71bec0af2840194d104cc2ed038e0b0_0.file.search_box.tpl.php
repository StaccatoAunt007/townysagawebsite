<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:15:32
  from '/home/townysag/public_html/custom/templates/Cobalt/forum/search_box.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3e024aac246_71668724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b06cc3a71bec0af2840194d104cc2ed038e0b0' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/forum/search_box.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3e024aac246_71668724 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="form-horizontal" role="form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>
">
    <div class="input-group">
        <input type="text" class="form-control input-sm" name="forum_search" placeholder="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
" minlength="3"
            maxlength="128">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-theme">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </span>
    </div>
</form><?php }
}
