<?php /* Smarty version Smarty-3.1.19, created on 2017-09-20 17:58:28
         compiled from "/var/www/44.dev.dfx.fr/www/modules/jscomposer/views/templates/front/vc_prd_tab_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103877411459c2902432aa36-63516896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a00479433b28b9491553980a2f79bc11f7026495' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/jscomposer/views/templates/front/vc_prd_tab_content.tpl',
      1 => 1486952238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103877411459c2902432aa36-63516896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vc_tab_content_results' => 0,
    'vc_tab_content' => 0,
    'vc_product_tab_style' => 0,
    'vct_optname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c29024341839_67095480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c29024341839_67095480')) {function content_59c29024341839_67095480($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['vc_tab_content_results']->value)&&!empty($_smarty_tpl->tpl_vars['vc_tab_content_results']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars["vc_tab_content"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["vc_tab_content"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vc_tab_content_results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["vc_tab_content"]->key => $_smarty_tpl->tpl_vars["vc_tab_content"]->value) {
$_smarty_tpl->tpl_vars["vc_tab_content"]->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['vc_tab_content']->value['content']!='') {?>
			<?php if ($_smarty_tpl->tpl_vars['vc_product_tab_style']->value!='general') {?>
				<div class="tab-pane" id="vc-tab-<?php echo $_smarty_tpl->tpl_vars['vc_tab_content']->value['id_vcproducttabcreator'];?>
">
					<section class="page-product-box">
						<div  class="rte">
                                                    <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['vc_tab_content']->value['content'], ENT_QUOTES);?>

						</div>
					</section>
				</div>
			<?php } else { ?>
				<section class="page-product-box">
					<h3 class="page-product-heading"><?php echo $_smarty_tpl->tpl_vars['vc_tab_content']->value['title'];?>
</h3>
					<div  class="rte">
                                            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['vc_tab_content']->value['content'], ENT_QUOTES);?>

					</div>
				</section>
			<?php }?>
			<?php ob_start();?><?php echo Context::getcontext()->language->id;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo Configuration::get("_wpb_vctc_".((string)$_smarty_tpl->tpl_vars['vc_tab_content']->value['id_vcproducttabcreator'])."_".$_tmp2."_css");?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['vct_optname'] = new Smarty_variable($_tmp3, null, 0);?>
			<style type="text/css">
				<?php echo $_smarty_tpl->tpl_vars['vct_optname']->value;?>

			</style>
		<?php }?>
	<?php } ?>
<?php }?><?php }} ?>
