<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 08:50:53
         compiled from "/var/www/44.dev.dfx.fr/www/themes/jlcw/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194489797559c4b2cdbd8ed3-95264283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '568cae2db50f3e5e5104d346bece9524b09cf7a6' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/jlcw/index.tpl',
      1 => 1505474806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194489797559c4b2cdbd8ed3-95264283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME' => 0,
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c4b2cdbe1ac5_86832230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c4b2cdbe1ac5_86832230')) {function content_59c4b2cdbe1ac5_86832230($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySimpleBlogRecentPosts"),$_smarty_tpl);?>

<?php }?><?php }} ?>
