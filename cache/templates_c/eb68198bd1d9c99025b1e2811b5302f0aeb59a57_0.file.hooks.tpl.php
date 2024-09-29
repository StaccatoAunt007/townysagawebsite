<?php
/* Smarty version 4.3.4, created on 2024-08-19 18:15:47
  from '/home/townysag/public_html/custom/panel_templates/Default/core/hooks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3ee432214b0_32833564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb68198bd1d9c99025b1e2811b5302f0aeb59a57' => 
    array (
      0 => '/home/townysag/public_html/custom/panel_templates/Default/core/hooks.tpl',
      1 => 1696070954,
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
function content_66c3ee432214b0_32833564 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['HOOKS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['HOOKS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-9">
                                    <p style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['HOOKS_INFO']->value;?>
</p>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['NEW_HOOK_LINK']->value;?>
" class="btn btn-primary"><i
                                                class="fas fa-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['NEW_HOOK']->value;?>
</a>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php if (count($_smarty_tpl->tpl_vars['HOOKS_LIST']->value)) {?>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped">
                                    <thead>
                                        <tr>
                                            <th><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th>
                                            <th><?php echo $_smarty_tpl->tpl_vars['LINK']->value;?>
</th>
                                            <th class="float-md-right"><?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HOOKS_LIST']->value, 'hook', false, NULL, 'hook_list', array (
));
$_smarty_tpl->tpl_vars['hook']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hook']->value) {
$_smarty_tpl->tpl_vars['hook']->do_else = false;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['hook']->value['name'];?>
</td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['hook']->value['edit_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['hook']->value['url'];?>
</a></td>
                                            <td>
                                                <div class="float-md-right">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['hook']->value['edit_link'];?>
" class="btn btn-warning btn-sm"><i
                                                            class="fas fa-edit fa-fw"></i></a>
                                                    <button class="btn btn-danger btn-sm" type="button"
                                                        onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['hook']->value['delete_link'];?>
')"><i
                                                            class="fas fa-trash fa-fw"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['NO_HOOKS']->value;?>

                            <?php }?>

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

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['ARE_YOU_SURE']->value;?>
</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_HOOK']->value;?>

                    </div>
                    <div class="modal-footer">
                        <form action="" id="deleteForm" method="post">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['NO']->value;?>
</button>
                            <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['YES']->value;?>
</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        function showDeleteModal(id) {
            $('#deleteForm').attr('action', id);
            $('#deleteModal').modal().show();
        }
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
