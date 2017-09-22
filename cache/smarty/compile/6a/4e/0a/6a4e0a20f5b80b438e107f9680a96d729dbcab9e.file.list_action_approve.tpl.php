<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 12:09:41
         compiled from "/var/www/44.dev.dfx.fr/www/modules/productcomments/views/templates/admin/list_action_approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89981496059bf9b65abae42-77793761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a4e0a20f5b80b438e107f9680a96d729dbcab9e' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/productcomments/views/templates/admin/list_action_approve.tpl',
      1 => 1505114018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89981496059bf9b65abae42-77793761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bf9b65abd850_09819550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf9b65abd850_09819550')) {function content_59bf9b65abd850_09819550($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="btn btn-success" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
