<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:02:56
  from '/home/townysag/public_html/custom/templates/Cobalt/forum/profile_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3dd30e6ac73_12187582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3e57981a5320d57f519af7807dda85d30c0ebb0' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/forum/profile_tab.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3dd30e6ac73_12187582 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="color: #FFF; font-size: 1.2rem; font-weight: 500; margin-bottom: 1rem"><?php echo $_smarty_tpl->tpl_vars['PF_LATEST_POSTS_TITLE']->value;?>
</div>
<?php if ((isset($_smarty_tpl->tpl_vars['NO_POSTS']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['NO_POSTS']->value;?>

<?php } else { ?> 

<div class="card-columns-profile">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PF_LATEST_POSTS']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <div class="card">
            <div class="card-header" style="border-bottom: 3px solid rgba(255,255,255,0.05) !important;"><a class="white-link" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a> <span class="float-right" rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['date_full'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['date_friendly'];?>
</span></div>
            <div class="card-body">
                <?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>

            </div>
        </div>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php }
}
}
