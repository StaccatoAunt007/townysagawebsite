<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:02:48
  from '/home/townysag/public_html/custom/templates/Cobalt/widgets/online_staff.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3dd285cd571_98976337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cef81dc86f59f46eeb070b86cd4d679df6f3ea97' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/widgets/online_staff.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3dd285cd571_98976337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/townysag/public_html/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<div class="card widget-card">
    <div class="card-header header-theme widget-header"><div class="widget-header-txt"><?php echo $_smarty_tpl->tpl_vars['ONLINE_STAFF']->value;?>
</div><div class="number"><?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['TOTAL_ONLINE_STAFF']->value,'/[^0-9]+/','');?>
</div></div>
    <div class="card-body">
        <?php if ((isset($_smarty_tpl->tpl_vars['ONLINE_STAFF_LIST']->value))) {?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ONLINE_STAFF_LIST']->value, 'user', false, NULL, 'online_staff_arr', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_online_staff_arr']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_online_staff_arr']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_online_staff_arr']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_online_staff_arr']->value['total'];
?>
        <div class="staff-card"<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_online_staff_arr']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_online_staff_arr']->value['last'] : null)) {?> style="margin-bottom: 1rem"<?php }?>>
            <div class="staff-widget-img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
" class="avatar-img" style="max-width: 50px;">
            </div>
            <div class="staff-info">
                <a class="staff-name" style="<?php echo $_smarty_tpl->tpl_vars['user']->value['style'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['user']->value['profile'];?>
" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" data-html="true" data-placement="top"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</a><br /> <?php echo $_smarty_tpl->tpl_vars['user']->value['group'];?>

            </div>
        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['NO_STAFF_ONLINE']->value;?>
 <?php }?>
    </div>
</div><?php }
}
