<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:06:59
         compiled from "/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213026781859c51903290e95-47373855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '389c37ccf5cd08adf2d014d754090a135cbc8bdc' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/content.tpl',
      1 => 1504260970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213026781859c51903290e95-47373855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c51903293414_30129478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c51903293414_30129478')) {function content_59c51903293414_30129478($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
