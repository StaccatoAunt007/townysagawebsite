<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:23:40
  from '/home/townysag/public_html/custom/templates/Cobalt/scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3e20c297205_24184469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4dc15b4fbc42ae359bdd7e3eb363301602cb34d' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/scripts.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3e20c297205_24184469 (Smarty_Internal_Template $_smarty_tpl) {
if (((isset($_smarty_tpl->tpl_vars['COBALT_VERSION']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['COBALT_VERSION']->value, $tmp) > 0) && ($_smarty_tpl->tpl_vars['COBALT_VERSION']->value != $_smarty_tpl->tpl_vars['THEME_LOCAL_VERSION']->value) && ($_smarty_tpl->tpl_vars['THEME_EXT_UPDATE']->value == "yes") && ($_smarty_tpl->tpl_vars['STAFF_USER']->value == "yes") && (isset($_smarty_tpl->tpl_vars['LOGGED_IN_USER']->value)) && (isset($_smarty_tpl->tpl_vars['THEME_UPDATE_NOTIF']->value)) && ($_smarty_tpl->tpl_vars['THEME_UPDATE_NOTIF']->value == "yes")) {?>
    <div class="cobalt-update-box">
        <div class="update-icon">
            <i class="fa-solid fa-triangle-exclamation"></i>
        </div>
        <div class="update-text">
            <div class="top-row">
                Cobalt <?php echo $_smarty_tpl->tpl_vars['UPDATE_AVAILABLE']->value;?>

            </div>
            <div class="bottom-row">
                <span class="current"><?php echo $_smarty_tpl->tpl_vars['THEME_LOCAL_VERSION']->value;?>
</span> <i class="fa-solid fa-arrow-right-long"></i> <span class="new"><?php echo $_smarty_tpl->tpl_vars['COBALT_VERSION']->value;?>
</span>
            </div>
        </div>
    </div>
<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_JS']->value, 'script');
$_smarty_tpl->tpl_vars['script']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['script']->value) {
$_smarty_tpl->tpl_vars['script']->do_else = false;
?>
	<?php echo $_smarty_tpl->tpl_vars['script']->value;?>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['THEME_CUSTOM_JS_SCRIPTS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_CUSTOM_JS_SCRIPTS']->value, $tmp) > 0) {?>
    <?php echo $_smarty_tpl->tpl_vars['THEME_CUSTOM_JS_SCRIPTS']->value;?>

<?php }
if ((isset($_smarty_tpl->tpl_vars['THEME_CUSTOM_JS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_CUSTOM_JS']->value, $tmp) > 0) {?>
    <?php echo '<script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['THEME_CUSTOM_JS']->value;?>

    <?php echo '</script'; ?>
>
<?php }
if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value))) {?>
	<?php if ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true) {?>
		<?php echo '<script'; ?>
>
            	$(document).ready(function(){
                $('#closeUpdate').click(function(event){
                    event.preventDefault();
                    let expiry = new Date();
                    let length = 3600000;
                    expiry.setTime(expiry.getTime() + length);
                    $.cookie('update-alert-closed', 'true', { path: '/', expires: expiry });
                });
                if($.cookie('update-alert-closed') === 'true'){
                    $('#updateAlert').hide();
                }
            });
		<?php echo '</script'; ?>
>
	<?php }
}?>

<?php echo $_smarty_tpl->tpl_vars['INSTANT_PAGE_SCRIPT']->value;
}
}
