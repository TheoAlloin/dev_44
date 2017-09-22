<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 09:19:19
         compiled from "/var/www/44.dev.dfx.fr/www/modules/themeconfigurator/views/templates/admin/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182626555159c367f7b338d7-15543802%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '617e7e7fa1e13ed3f720da9a3299a3b0812b0be8' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/themeconfigurator/views/templates/admin/messages.tpl',
      1 => 1504260972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182626555159c367f7b338d7-15543802',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'text' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c367f7b3b8c1_84391277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c367f7b3b8c1_84391277')) {function content_59c367f7b3b8c1_84391277($_smarty_tpl) {?>

<div id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-response" <?php if (!isset($_smarty_tpl->tpl_vars['text']->value)) {?>style="display:none;"<?php }?> class="message alert alert-<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value=='error') {?>danger<?php } else { ?>success<?php }?>">
	<div><?php if (isset($_smarty_tpl->tpl_vars['text']->value)) {?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div>
</div><?php }} ?>
