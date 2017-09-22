<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 14:14:44
         compiled from "/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132644519159c3ad34e2d3d4-11060227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5124be3a79e566e52eb302e9eef37e20369cc18' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1504260970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132644519159c3ad34e2d3d4-11060227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c3ad34e30400_63374809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c3ad34e30400_63374809')) {function content_59c3ad34e30400_63374809($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
