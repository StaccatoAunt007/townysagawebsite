<?php
/* Smarty version 4.3.4, created on 2024-08-20 13:39:25
  from '/home/townysag/public_html/custom/panel_templates/Default/rules/rules_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c4fefda1f857_52998178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91384a709d5c70827e9429d15424916ed1d02b46' => 
    array (
      0 => '/home/townysag/public_html/custom/panel_templates/Default/rules/rules_edit.tpl',
      1 => 1698624266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_66c4fefda1f857_52998178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['RULES']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <h5 style="display:inline"><?php echo $_smarty_tpl->tpl_vars['EDIT_CATAGORY']->value;?>
</h5>
                            <div class="float-md-right"><a href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
" class="btn btn-warning"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a></div>
                            <hr />
                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="InputCatagoryName"><?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_NAME']->value;?>
</label>
                                    <input type="text" id="InputCatagoryName" placeholder="<?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_NAME']->value;?>
"
                                        name="rules_catagory_name" class="form-control"
                                        value="<?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_NAME_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputCatagoryIcon"><?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_ICON']->value;?>
</label>
                                    <input type="text" id="InputCatagoryIcon" placeholder="<?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_ICON']->value;?>
"
                                        name="rules_catagory_icon" class="form-control"
                                        value="<?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_ICON_VALUE']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputCatagoryRules"><?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_RULES']->value;?>
</label>
                                    <textarea name="rules_catagory_rules" rows="3" id="InputCatagoryRules"
                                        class="form-control"
                                        placeholder="<?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_RULES']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RULES_CATAGORY_RULES_VALUE']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
