<?php
/* Smarty version 4.3.4, created on 2024-08-20 13:08:32
  from '/home/townysag/public_html/custom/templates/Cobalt/votingplugin/vote.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c4f7c06825c7_44299681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c8ff169e0c207246aefbcfd31dd9180e0980d5' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/votingplugin/vote.tpl',
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
function content_66c4f7c06825c7_44299681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php if ((isset($_smarty_tpl->tpl_vars['CONFIGURE']->value))) {?>
    <div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['CONFIGURE']->value;?>
</div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</div>
    <?php } else { ?>
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['TOP_VOTERS']->value;?>

                    <div class="float-right">
                        <div class="dropdown">
                            <button class="btn btn-theme dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['ORDER']->value;?>
</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['TODAY_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TODAY']->value;?>
</a>
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['THIS_WEEK_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['THIS_WEEK']->value;?>
</a>
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['THIS_MONTH_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['THIS_MONTH']->value;?>
</a>
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['LAST_MONTH_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LAST_MONTH']->value;?>
</a>
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['ALL_TIME_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ALL_TIME']->value;?>
</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php if ($_smarty_tpl->tpl_vars['MESSAGE_ENABLED']->value) {?>
                        <div class="alert alert-primary mb-2"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</div>
                    <?php }?>
                    <?php if (count($_smarty_tpl->tpl_vars['RESULTS']->value)) {?>
                    <table class="table table-responsive dataTables-topList">
                        <colgroup>
                            <col span="1" style="width: 25%;">
                            <col span="1" style="width: 15%;">
                            <col span="1" style="width: 15%">
                            <col span="1" style="width: 15%">
                            <col span="1" style="width: 15%">
                            <col span="1" style="width: 15%">
                        </colgroup>
                        <thead>
                            <tr>
                                <th><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['DAILY_VOTES']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['WEEKLY_VOTES']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['MONTHLY_VOTES']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['LAST_MONTHS_VOTES']->value;?>
</th>
                                <th><?php echo $_smarty_tpl->tpl_vars['ALL_TIME_VOTES']->value;?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RESULTS']->value, 'result');
$_smarty_tpl->tpl_vars['result']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->do_else = false;
?>
                            <tr>
                                <td><?php if ($_smarty_tpl->tpl_vars['result']->value['exists'] == true) {?><img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['avatar'];?>
" style="max-height:25px;max-width:25px;" class="avatar-img" alt="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
" /> <a href="<?php echo $_smarty_tpl->tpl_vars['result']->value['profile'];?>
" style="<?php echo $_smarty_tpl->tpl_vars['result']->value['user_style'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value['nickname'];?>
</a><?php } else { ?><img src="<?php echo $_smarty_tpl->tpl_vars['result']->value['avatar'];?>
" style="max-height:25px;max-width:25px;" class="avatar-img" alt="<?php echo $_smarty_tpl->tpl_vars['result']->value['name'];?>
" /> <?php echo $_smarty_tpl->tpl_vars['result']->value['name'];
}?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['daily'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['weekly'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['monthly'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['last_month'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['result']->value['alltime'];?>
</td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['VOTE_SITES']->value;?>
</div>
                <div class="card-body">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['VOTE_SITES_LIST']->value, 'site');
$_smarty_tpl->tpl_vars['site']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['site']->value) {
$_smarty_tpl->tpl_vars['site']->do_else = false;
?>
                        <a class="btn btn-block btn-theme mb-1 text-truncate" href="<?php echo $_smarty_tpl->tpl_vars['site']->value['site'];?>
" target="_blank" rel="noopener nofollow" role="button"><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
