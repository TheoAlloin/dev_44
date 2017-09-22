<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 14:50:35
         compiled from "/var/www/44.dev.dfx.fr/www/modules/powerfulformgenerator//views/templates/admin/header_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140952292559bfc11b3b8008-90919650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '065cce2dee3a258a1bc34443a5fd7eb9a3c24fa0' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/powerfulformgenerator//views/templates/admin/header_help.tpl',
      1 => 1492167720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140952292559bfc11b3b8008-90919650',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bfc11b3bc306_66436587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bfc11b3bc306_66436587')) {function content_59bfc11b3bc306_66436587($_smarty_tpl) {?>

<div style="margin: 10px">
	<h3><?php echo smartyTranslate(array('s'=>'Help','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>
:</h3>
	<ul style="margin: 0 0 20px 20px">
		<li style="margin: 10px 0"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/views/img/cog.gif" alt="<?php echo smartyTranslate(array('s'=>'Manage','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>
" style="margin-right: 5px; vertical-align: middle; width: 16px; height: 16px"> <?php echo smartyTranslate(array('s'=>'Click on the cog icon to manage the fields of your form.','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>
</li>
		<li style="margin: 10px 0"><img src="../img/admin/details.gif" alt="<?php echo smartyTranslate(array('s'=>'View','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>
" style="margin-right: 5px; vertical-align: middle; width: 16px; height: 16px"><?php echo smartyTranslate(array('s'=>'Click on the view icon to see and export the submitted forms.','mod'=>'powerfulformgenerator'),$_smarty_tpl);?>
</li>
	</ul>
</div>
<?php }} ?>
