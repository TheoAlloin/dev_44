<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:12:16
         compiled from "/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91920481359c51a40db2ed2-44671522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '710f2df038cf5d05f283ed073112b982c6d247e4' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/override/controllers/admin/templates/cms_content/content.tpl',
      1 => 1504262020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91920481359c51a40db2ed2-44671522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'jscomposer' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c51a40dbaa68_86746626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c51a40dbaa68_86746626')) {function content_59c51a40dbaa68_86746626($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>
<?php if (class_exists('JsComposer')&&Module::isInstalled('jscomposer')&&Module::isEnabled('jscomposer')&&JsComposer::condition()) {?>

    <?php $_smarty_tpl->tpl_vars['jscomposer'] = new Smarty_variable(Module::getInstanceByName('jscomposer'), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['jscomposer']->value instanceof JsComposer) {?>        
        <?php echo $_smarty_tpl->tpl_vars['jscomposer']->value->renderEditor();?>
        
    <?php }?>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }} ?>
