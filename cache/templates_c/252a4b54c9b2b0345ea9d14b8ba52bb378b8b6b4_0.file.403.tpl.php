<?php
/* Smarty version 4.3.4, created on 2024-08-24 01:08:43
  from '/home/townysag/public_html/custom/templates/Cobalt/403.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66c9950b3ce3f2_64167062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '252a4b54c9b2b0345ea9d14b8ba52bb378b8b6b4' => 
    array (
      0 => '/home/townysag/public_html/custom/templates/Cobalt/403.tpl',
      1 => 1724111908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header-top.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_66c9950b3ce3f2_64167062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<meta name="robots" content="noindex">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card error-card text-center">
                    <div class="card-body">
                        <span class="error-title">403</span>
                        <br />
                        <span><?php echo $_smarty_tpl->tpl_vars['403_TITLE']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
</span>
                        <br /><br />
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-theme float-right"
                                    onclick="javascript:history.go(-1)"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</button>
                            </div>
                            <div class="col-6">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['SITE_HOME']->value;?>
" class="btn btn-theme float-left"><?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
</a>
                            </div>
                        </div>
                        <br /><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (!(isset($_smarty_tpl->tpl_vars['EXCLUDE_END_BODY']->value))) {?>
  </body>
  </html>
<?php }
}
}
