<?php
/* Smarty version 4.3.4, created on 2024-08-20 13:00:01
  from '/home/townysag/public_html/custom/templates/Cobalt/rules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c4f5c10015d2_10466413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7f2d7bf69fa7e42064e0c11d79e3bb8be6b4a67' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/rules.tpl',
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
function content_66c4f5c10015d2_10466413 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <div class="row">

        <div class="col-lg-3">
            <div class="rules-menu">
                <div class="menu-title theme-text"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</div>
                <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="rules-menu-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            <?php if ((isset($_smarty_tpl->tpl_vars['THEME_RULES_HOME_ICON']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_RULES_HOME_ICON']->value, $tmp) > 0) {?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['THEME_RULES_FA_ICONS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_RULES_FA_ICONS']->value, $tmp) > 2) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['THEME_RULES_HOME_ICON']->value;?>

                                <?php } else { ?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['THEME_RULES_HOME_ICON']->value;?>
" alt="Home" class="rules_image_icon" />
                                <?php }?>
                            <?php }?>
                            <span><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</span>
                        </a>
                    </li>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATAGORIES']->value, 'catagory');
$_smarty_tpl->tpl_vars['catagory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catagory']->value) {
$_smarty_tpl->tpl_vars['catagory']->do_else = false;
?>
                        <li class="nav-item">
                            <a class="rules-menu-link" id="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
-tab" data-toggle="tab" href="#id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
" role="tab" aria-controls="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
" aria-selected="false">
                                <?php if ((isset($_smarty_tpl->tpl_vars['catagory']->value['icon'])) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['catagory']->value['icon'], $tmp) > 0) {?>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['THEME_RULES_FA_ICONS']->value)) && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['THEME_RULES_FA_ICONS']->value, $tmp) > 2) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['catagory']->value['icon'];?>

                                    <?php } else { ?>
                                       <img src="<?php echo preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['catagory']->value['icon']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['catagory']->value['name'];?>
" class="rules_image_icon" />
                                    <?php }?>
                                <?php }?>
                                <span><?php echo $_smarty_tpl->tpl_vars['catagory']->value['name'];?>
</span>
                            </a>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
            <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_LEFT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </div>

        <div class="<?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>col-lg-6<?php } else { ?>col-lg-9<?php }?>">
            <div class="card">
                <div class="card-body pt-4 pb-4">
                    <div class="tab-content rules-tabs" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['BUTTONS']->value)) {?>
                                <div class="text-center">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                        <a class="btn btn-theme btn-rules mt-2 mr-1 ml-1"
                                            href="<?php echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
</a>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            <?php }?>
                        </div>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATAGORIES']->value, 'catagory');
$_smarty_tpl->tpl_vars['catagory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['catagory']->value) {
$_smarty_tpl->tpl_vars['catagory']->do_else = false;
?>
                            <div class="tab-pane fade" id="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
" role="tabpanel"
                            aria-labelledby="id-<?php echo $_smarty_tpl->tpl_vars['catagory']->value['id'];?>
-tab"><?php echo $_smarty_tpl->tpl_vars['catagory']->value['rules'];?>
</div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value)) {?>
            <div class="col-lg-3">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS_RIGHT']->value, 'widget');
$_smarty_tpl->tpl_vars['widget']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['widget']->value;?>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
