<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 14:31:06
         compiled from "/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40571955959bfbc8a236029-47399923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f8206da3a98f5f32fadbccc2b7e65a3339095b' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1504260970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40571955959bfbc8a236029-47399923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bfbc8a23bdf6_08051500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfbc8a23bdf6_08051500')) {function content_59bfbc8a23bdf6_08051500($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
