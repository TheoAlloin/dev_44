<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 12:09:43
         compiled from "/var/www/44.dev.dfx.fr/www/modules/productcomments/views/templates/admin/list_action_noabuse.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69607000659bf9b677aac57-97122639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d9a1a9b1f705576290bc7c96c5be59ca96d2838' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/productcomments/views/templates/admin/list_action_noabuse.tpl',
      1 => 1505114018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69607000659bf9b677aac57-97122639',
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
  'unifunc' => 'content_59bf9b677aceb1_54887219',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf9b677aceb1_54887219')) {function content_59bf9b677aceb1_54887219($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
