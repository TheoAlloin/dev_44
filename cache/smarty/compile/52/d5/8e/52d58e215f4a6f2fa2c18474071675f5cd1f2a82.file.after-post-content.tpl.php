<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 13:11:31
         compiled from "/var/www/44.dev.dfx.fr/www/modules/ph_simpleblog/views/templates/hook/after-post-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34139871659c39e639bf281-71143095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52d58e215f4a6f2fa2c18474071675f5cd1f2a82' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/ph_simpleblog/views/templates/hook/after-post-content.tpl',
      1 => 1505296391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34139871659c39e639bf281-71143095',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c39e639c1a29_22771928',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c39e639c1a29_22771928')) {function content_59c39e639c1a29_22771928($_smarty_tpl) {?><?php if (Configuration::get('PH_BLOG_DISPLAY_SHARER')) {?>
<div class="post-block simpleblog-socialshare">
	<h3 class="block-title"><?php echo smartyTranslate(array('s'=>'Share this post','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</h3>

	<div class="simpleblog-socialshare-icons">
		<button data-type="facebook" type="button" class="btn btn-default btn-facebook">
			<i class="fa fa-facebook"></i> 
		</button>
                <button data-type="twitter" type="button" class="btn btn-default btn-twitter">
			<i class="fa fa-twitter"></i> 
		</button>
		<button data-type="google-plus" type="button" class="btn btn-default btn-google-plus">
			<i class="fa fa-google-plus"></i> 
		</button>

	</div><!-- simpleblog-socialshare-icons. -->
</div><!-- .simpleblog-socialshare -->
<?php }?><?php }} ?>
