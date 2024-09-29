<?php
/* Smarty version 4.3.4, created on 2024-08-19 16:57:10
  from '/home/townysag/public_html/custom/templates/DefaultRevamp/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3dbd604e949_78595400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efd78cbc580bdeb9f746c9f0ac2f2ae70f76f59e' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/DefaultRevamp/footer.tpl',
      1 => 1696070954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c3dbd604e949_78595400 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/townysag/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
</div>
</div>

<div class="ui inverted vertical footer segment" id="footer">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>six<?php } else { ?>eight<?php }?> wide column">
                <h4 class="ui inverted header"><?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
</h4>
                <div class="ui inverted link list">
                    <span class="item">&copy; <?php echo $_smarty_tpl->tpl_vars['SITE_NAME']->value;?>
 <?php echo date('Y');?>
</span>
                    <span class="item">Powered By <a href="https://namelessmc.com">NamelessMC</a></span>
                    <?php if ($_smarty_tpl->tpl_vars['PAGE_LOAD_TIME']->value) {?>
                    <span class="item" id="page_load"></span>
                    <?php }?>
                    <span class="item" id="darkmode">
                        <input type="checkbox" class="darkmode-toggle" id="darkmode-toggle" onclick="toggleDarkLightMode()">
                        <label for="darkmode-toggle" class="darkmode-toggle-label">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="darkmode-ball"></div>
                        </label>

                        <?php echo '<script'; ?>
 type="text/javascript">
                            if (document.body.classList.contains('dark')) {
                                document.getElementById("darkmode-toggle").checked = true;
                            } else {
                                document.getElementById("darkmode-toggle").checked = false;
                            }
                        <?php echo '</script'; ?>
>
                    </span>
                    <?php if ((isset($_smarty_tpl->tpl_vars['AUTO_LANGUAGE']->value))) {?>
                        <a class="item" href="javascript:" onclick="toggleAutoLanguage()" id="auto-language"></a>
                    <?php }?>
                </div>
            </div>
            <div class="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>five<?php } else { ?>eight<?php }?> wide column">
                <h4 class="ui inverted header"><?php echo $_smarty_tpl->tpl_vars['FOOTER_LINKS_TITLE']->value;?>
</h4>
                <div class="ui inverted link list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_NAVIGATION']->value, 'item', false, 'name');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['items']))) {?>
                    <div class="ui dropdown item">
                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
 <i class="dropdown icon"></i></span>
                        <div class="menu">
                            <div class="header"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'dropdown');
$_smarty_tpl->tpl_vars['dropdown']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['dropdown']->value) {
$_smarty_tpl->tpl_vars['dropdown']->do_else = false;
?>
                            <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['dropdown']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['dropdown']->value['icon'];?>

                                <?php echo $_smarty_tpl->tpl_vars['dropdown']->value['title'];?>
</a>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    <?php } else { ?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" target="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['TERMS_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TERMS_TEXT']->value;?>
</a>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['PRIVACY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PRIVACY_TEXT']->value;?>
</a>
                </div>
            </div>
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value) > 0) {?>
            <div class="five wide column">
                <h4 class="ui inverted header"><?php echo $_smarty_tpl->tpl_vars['FOOTER_SOCIAL_TITLE']->value;?>
</h4>
                <div class="ui inverted link list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOCIAL_MEDIA_ICONS']->value, 'icon');
$_smarty_tpl->tpl_vars['icon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->do_else = false;
?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>

<?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {?>
<div class="ui medium modal" id="modal-acknowledge">
    <div class="header">
        <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value;?>

    </div>
    <div class="content">
        <?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_REASON']->value;?>

    </div>
    <div class="actions">
        <a class="ui positive button" href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL_WARNING_ACKNOWLEDGE']->value;?>
</a>
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ((isset($_smarty_tpl->tpl_vars['GLOBAL_WARNING_TITLE']->value))) {
echo '<script'; ?>
 type="text/javascript">
    $('#modal-acknowledge').modal({ closable: false }).modal('show');
<?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    function toggleDarkLightMode() {
        $.post("<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_ACTION']->value;?>
", { token: "<?php echo $_smarty_tpl->tpl_vars['DARK_LIGHT_MODE_TOKEN']->value;?>
" })
            .done(function () {
                window.location.reload();
            });

        return false;
    }

    <?php if ((isset($_smarty_tpl->tpl_vars['AUTO_LANGUAGE']->value))) {?>
        const autoLanguage = document.getElementById('auto-language');
        const autoLanguageValue = $.cookie('auto_language') ?? 'true';
        autoLanguage.innerText = '<?php echo $_smarty_tpl->tpl_vars['AUTO_LANGUAGE_TEXT']->value;?>
 (' + (autoLanguageValue === 'true' ? '<?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
' : '<?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>
') + ')';
        <?php if ((isset($_smarty_tpl->tpl_vars['AUTO_LANGUAGE_VALUE']->value))) {?>
            if (autoLanguageValue) {
                autoLanguage.title = '<?php echo $_smarty_tpl->tpl_vars['AUTO_LANGUAGE_VALUE']->value;?>
';
            }
        <?php }?>

        function toggleAutoLanguage() {
            $.cookie(
                'auto_language',
                autoLanguageValue === 'true' ? 'false' : 'true',
                { path: '/' }
            );
            window.location.reload();
        }
    <?php }
echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['NEW_UPDATE']->value)) && ($_smarty_tpl->tpl_vars['NEW_UPDATE_URGENT']->value != true)) {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value['path'];?>
/js/core/update.js"><?php echo '</script'; ?>
>
<?php }?>

<?php if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['DEBUGBAR_HTML']->value;?>

<?php }?>
</body>

</html>
<?php }
}
}
