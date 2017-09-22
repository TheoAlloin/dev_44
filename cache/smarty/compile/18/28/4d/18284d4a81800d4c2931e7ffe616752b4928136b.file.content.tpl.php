<?php /* Smarty version Smarty-3.1.19, created on 2017-09-18 11:02:42
         compiled from "/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26761955059bf8bb2993f18-02503902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18284d4a81800d4c2931e7ffe616752b4928136b' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/jlcw/themes/default/template/controllers/localization/content.tpl',
      1 => 1504260970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26761955059bf8bb2993f18-02503902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59bf8bb2999ba2_66054727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bf8bb2999ba2_66054727')) {function content_59bf8bb2999ba2_66054727($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
