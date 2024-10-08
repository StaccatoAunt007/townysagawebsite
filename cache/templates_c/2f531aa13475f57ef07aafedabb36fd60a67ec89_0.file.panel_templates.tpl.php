<?php
/* Smarty version 4.3.4, created on 2024-08-19 18:06:00
  from '/home/townysag/public_html/custom/panel_templates/Default/core/panel_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c3ebf8630990_25276264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f531aa13475f57ef07aafedabb36fd60a67ec89' => 
    array (
      0 => '/home/townysag/public_html/custom/panel_templates/Default/core/panel_templates.tpl',
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
function content_66c3ebf8630990_25276264 (Smarty_Internal_Template $_smarty_tpl) {
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
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['PANEL_TEMPLATES']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['LAYOUT']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['PANEL_TEMPLATES']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">

                            <form style="display:inline" action="<?php echo $_smarty_tpl->tpl_vars['INSTALL_TEMPLATE_LINK']->value;?>
" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-bottom: 15px;"><?php echo $_smarty_tpl->tpl_vars['INSTALL_TEMPLATE']->value;?>
</button>
                            </form>
                            <form style="display:inline" action="<?php echo $_smarty_tpl->tpl_vars['CLEAR_CACHE_LINK']->value;?>
" method="post">
                                <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                <button type="submit" class="btn btn-secondary"
                                    style="margin-bottom: 15px;"><?php echo $_smarty_tpl->tpl_vars['CLEAR_CACHE']->value;?>
</button>
                            </form>

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <colgroup>
                                        <col width="75%">
                                        <col width="25%">
                                    </colgroup>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATE_LIST']->value, 'template');
$_smarty_tpl->tpl_vars['template']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
$_smarty_tpl->tpl_vars['template']->do_else = false;
?>
                                    <tr>
                                        <td>
                                            <strong><?php echo $_smarty_tpl->tpl_vars['template']->value['name'];?>
</strong> <small><?php echo $_smarty_tpl->tpl_vars['template']->value['version'];?>
</small>
                                            <?php if ($_smarty_tpl->tpl_vars['template']->value['version_mismatch']) {?>
                                            &nbsp;
                                            <button role="button" class="btn btn-sm btn-warning" data-toggle="popover"
                                                data-title="<?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['template']->value['version_mismatch'];?>
"><i
                                                    class="fa fa-exclamation-triangle"></i></button>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['template']->value['third_party']) {?>
                                                &nbsp;
                                                <button role="button" class="btn btn-sm btn-warning" data-toggle="popover"
                                                        data-title="<?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
" data-content="<?php echo $_smarty_tpl->tpl_vars['template']->value['third_party'];?>
"><i
                                                            class="fa fa-exclamation-triangle"></i></button>
                                            <?php }?>
                                            <br />
                                            <small><?php echo $_smarty_tpl->tpl_vars['template']->value['author_x'];?>
</small>
                                        </td>
                                        <td>
                                            <div class="float-md-right">
                                                <?php if ($_smarty_tpl->tpl_vars['template']->value['enabled']) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['template']->value['deactivate_link']) {?>
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['template']->value['deactivate_link'];?>
" method="post"
                                                    style="display:inline">
                                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <?php echo $_smarty_tpl->tpl_vars['DEACTIVATE']->value;?>

                                                    </button>
                                                </form>
                                                <?php } else { ?>
                                                <button role="button" class="btn btn-success btn-sm"
                                                    disabled><?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
</button>
                                                <?php }?>

                                                <?php if ($_smarty_tpl->tpl_vars['template']->value['default']) {?>
                                                <button role="button" class="btn btn-success btn-sm"
                                                    disabled><?php echo $_smarty_tpl->tpl_vars['DEFAULT']->value;?>
</button>
                                                <?php } else { ?>
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['template']->value['default_link'];?>
" method="post"
                                                    style="display:inline">
                                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <?php echo $_smarty_tpl->tpl_vars['MAKE_DEFAULT']->value;?>

                                                    </button>
                                                </form>
                                                <?php }?>
                                                <?php } else { ?>
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['template']->value['activate_link'];?>
" method="post"
                                                    style="display:inline">
                                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <?php echo $_smarty_tpl->tpl_vars['ACTIVATE']->value;?>

                                                    </button>
                                                </form>
                                                <button role="button"
                                                    onclick="showDeleteModal('<?php echo $_smarty_tpl->tpl_vars['template']->value['delete_link'];?>
')"
                                                    class="btn btn-danger btn-sm"><?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
</button>
                                                <?php }?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </table>
                            </div>
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

        <!-- Delete modal -->
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
                        <?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE_TEMPLATE']->value;?>

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

        var $star_rating = $('.star-rating.view .fa-star');

        var SetRatingStar = function (type = 0) {
            if (type === 0) {
                return $star_rating.each(function () {
                    if (parseInt($(this).parent().children('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                        return $(this).removeClass('far').addClass('fas');
                    } else {
                        return $(this).removeClass('fas').addClass('far');
                    }
                });
            }
        };

        SetRatingStar();
    <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
