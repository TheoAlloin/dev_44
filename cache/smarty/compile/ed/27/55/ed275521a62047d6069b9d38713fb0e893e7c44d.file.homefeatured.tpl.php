<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 08:50:53
         compiled from "/var/www/44.dev.dfx.fr/www/themes/jlcw/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:154493992359c4b2cd8ca2c2-45109323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed275521a62047d6069b9d38713fb0e893e7c44d' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/jlcw/modules/homefeatured/homefeatured.tpl',
      1 => 1504277599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154493992359c4b2cd8ca2c2-45109323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c4b2cd8d67c7_97073443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c4b2cd8d67c7_97073443')) {function content_59c4b2cd8d67c7_97073443($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
    <div id="new_product">
        <div class="container">
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

        </div>
    </div>
<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>