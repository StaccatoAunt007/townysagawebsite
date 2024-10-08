<?php
/* Smarty version 4.3.4, created on 2024-08-19 17:08:14
  from '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3de6e84b881_29103035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd404b594f35908588494188a092f75a552b74ddd' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/template_settings/settings_pages/footer.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./parts/switch.tpl' => 1,
  ),
),false)) {
function content_66c3de6e84b881_29103035 (Smarty_Internal_Template $_smarty_tpl) {
?>                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-generalf-tab" data-toggle="pill"
                                        href="#pills-generalf" role="tab" aria-controls="pills-generalf"
                                        aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['GENERAL']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pnf-tab" data-toggle="pill" href="#pills-pnf"
                                        role="tab" aria-controls="pills-pnf" aria-selected="true"><?php echo $_smarty_tpl->tpl_vars['PNF_TAB']->value;?>
</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-otherf-tab" data-toggle="pill" href="#pills-otherf"
                                        role="tab" aria-controls="pills-otherf"
                                        aria-selected="false"><?php echo $_smarty_tpl->tpl_vars['OTHER_SECTION_TAB']->value;?>
</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-generalf" role="tabpanel"
                                    aria-labelledby="pills-generalf-tab">
                                    <label><?php echo $_smarty_tpl->tpl_vars['FOOTER_SIZE']->value;?>
</label>
                                    <select class='form-control' name='footer_size'>
                                        <option value='large' <?php if ($_smarty_tpl->tpl_vars['FOOTER_SIZE_VALUE']->value == 'large') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LARGE']->value;?>

                                        </option>
                                        <option value='small' <?php if ($_smarty_tpl->tpl_vars['FOOTER_SIZE_VALUE']->value == 'small') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['SMALL']->value;?>

                                        </option>
                                    </select><br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['FOOTER_DISCLAIMER']->value;?>
</label>
                                    <input type='text' name='footer_disclaimer' value='<?php echo $_smarty_tpl->tpl_vars['FOOTER_DISCLAIMER_VALUE']->value;?>
' class='form-control'>
                                </div>
                                <div class="tab-pane fade" id="pills-pnf" role="tabpanel"
                                    aria-labelledby="pills-pnf-tab">
                                    <label><?php echo $_smarty_tpl->tpl_vars['PLAY_T']->value;?>
</label>
                                    <input type='text' name='play_t' value='<?php echo $_smarty_tpl->tpl_vars['PLAY_T_VALUE']->value;?>
' class='form-control'><br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['PLAY_D']->value;?>
</label>
                                    <input type='text' name='play_d' value='<?php echo $_smarty_tpl->tpl_vars['PLAY_D_VALUE']->value;?>
' class='form-control'><br />
                                    <?php $_smarty_tpl->_subTemplateRender("file:./parts/switch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'play_b','right'=>'no','last'=>'yes'), 0, false);
?>
                                </div>
                                <div class="tab-pane fade" id="pills-otherf" role="tabpanel"
                                    aria-labelledby="pills-otherf-tab">
                                    <label><?php echo $_smarty_tpl->tpl_vars['OTHER_T']->value;?>
</label>
                                    <input type='text' name='other_t' value='<?php echo $_smarty_tpl->tpl_vars['OTHER_T_VALUE']->value;?>
'
                                        class='form-control'><br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['OTHER_D']->value;?>
</label>
                                    <input type='text' name='other_d' value='<?php echo $_smarty_tpl->tpl_vars['OTHER_D_VALUE']->value;?>
'
                                        class='form-control'><br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['OTHER_BT']->value;?>
</label>
                                    <input type='text' name='other_bt' value='<?php echo $_smarty_tpl->tpl_vars['OTHER_BT_VALUE']->value;?>
'
                                        class='form-control'><br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['OTHER_BL']->value;?>
</label>
                                    <input type='text' name='other_bl' value='<?php echo $_smarty_tpl->tpl_vars['OTHER_BL_VALUE']->value;?>
'
                                        class='form-control'><br />
                                    <label><?php echo $_smarty_tpl->tpl_vars['OTHER_BI']->value;?>
</label><span class="float-right"><?php echo $_smarty_tpl->tpl_vars['BLANK']->value;?>
</span>
                                    <input type='text' name='other_bi' value='<?php echo $_smarty_tpl->tpl_vars['OTHER_BI_VALUE']->value;?>
' class='form-control'>
                                </div>
                            </div><?php }
}
