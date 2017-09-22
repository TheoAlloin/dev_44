<?php /* Smarty version Smarty-3.1.19, created on 2017-09-21 13:11:31
         compiled from "/var/www/44.dev.dfx.fr/www/modules/ph_simpleblog/views/templates/front/single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180970228359c39e6396bd55-27236037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74eb06b305a145ef9bcaeddc2206c1f7a0f6acb7' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/ph_simpleblog/views/templates/front/single.tpl',
      1 => 1504000980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180970228359c39e6396bd55-27236037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'link' => 0,
    'is_16' => 0,
    'post_type' => 0,
    'gallery_dir' => 0,
    'image' => 0,
    'related_products' => 0,
    'allow_comments' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c39e639a9e11_66447583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c39e639a9e11_66447583')) {function content_59c39e639a9e11_66447583($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/44.dev.dfx.fr/www/tools/smarty/plugins/modifier.date_format.php';
?>
<?php $_smarty_tpl->tpl_vars['post_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value->post_type, null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','list'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Back to blog homepage','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>

	</a>
	<span class="navigation-pipe">
		<i class="icon-chevron-right"></i>
	</span>
	<?php if (isset($_smarty_tpl->tpl_vars['post']->value->parent_category)&&$_smarty_tpl->tpl_vars['post']->value->parent_category!='') {?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('ph_simpleblog','category',array('sb_category'=>$_smarty_tpl->tpl_vars['post']->value->parent_category->link_rewrite)), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->parent_category->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		<span class="navigation-pipe">
			<i class="icon-chevron-right"></i>
		</span>
	<?php }?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->category_url, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Visit category','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->category, ENT_QUOTES, 'UTF-8', true);?>
</a>
	<span class="navigation-pipe">
		<i class="icon-chevron-right"></i>
	</span> 

	<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['is_16']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (isset($_GET['confirmation'])) {?>
	<div class="success alert alert-success">
	<?php if ($_GET['confirmation']==1) {?>
		<?php echo smartyTranslate(array('s'=>'Your comment was sucessfully added.','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
	
	<?php } else { ?>
		<?php echo smartyTranslate(array('s'=>'Your comment was sucessfully added but it will be visible after moderator approval.','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
	
	<?php }?>
	</div><!-- .success alert alert-success -->
<?php }?>
<div id="call_to_projet">
    <div id="call_to_projet_content">
        <h1 class="page-heading product-listing" itemprop="headline"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true);?>
 </h1>
    </div>
</div>
    
<div itemscope="itemscope" itemtype="http://schema.org/Blog" itemprop="mainContentOfPage" class="container my_article">
	<div class="ph_simpleblog simpleblog-single <?php if (!empty($_smarty_tpl->tpl_vars['post']->value->featured_image)) {?>with-cover<?php } else { ?>without-cover<?php }?> simpleblog-single-<?php echo intval($_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post);?>
" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
		<div class="post-featured-image" itemscope itemtype="http://schema.org/ImageObject">
                    <?php if ($_smarty_tpl->tpl_vars['post']->value->featured_image) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->featured_image, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" class="fancybox" itemprop="contentUrl">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->featured_image, ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->title, ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl" />
				</a>
			<?php }?>
		</div><!-- .post-featured-image -->


		<div class="post-meta-info">


	

			





		</div><!-- .post-meta-info -->
			
		<div class="post-content rte" itemprop="text">
                    <?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

                    <?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>
                        <span class="post-date">
                            <span class="">Date d'ajout :</span> <time itemprop="datePublished" datetime="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_add,'c');?>
"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value->date_add,Configuration::get('PH_BLOG_DATEFORMAT'));?>
</time>
                        </span>
                    <?php }?>
		</div><!-- .post-content -->

		<?php if ($_smarty_tpl->tpl_vars['post_type']->value=='gallery'&&sizeof($_smarty_tpl->tpl_vars['post']->value->gallery)) {?>
		<div class="post-gallery">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['post']->value->gallery; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
			<a rel="post-gallery-<?php echo intval($_smarty_tpl->tpl_vars['post']->value->id_simpleblog_post);?>
" class="fancybox" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
.jpg" title="<?php echo smartyTranslate(array('s'=>'View full','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gallery_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
.jpg" class="img-responsive" /></a>
			<?php } ?>
		</div><!-- .post-gallery -->
		<?php } elseif ($_smarty_tpl->tpl_vars['post_type']->value=='video') {?>
		<div class="post-video" itemprop="video">
			<?php echo $_smarty_tpl->tpl_vars['post']->value->video_code;?>

		</div><!-- .post-video -->
		<?php }?>

		<?php if (Configuration::get('PH_BLOG_DISPLAY_RELATED')&&$_smarty_tpl->tpl_vars['related_products']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate ("./related-products.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		<div id="displayPrestaHomeBlogAfterPostContent">
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayPrestaHomeBlogAfterPostContent'),$_smarty_tpl);?>

		</div><!-- #displayPrestaHomeBlogAfterPostContent -->
		
		
		
		<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value==true&&Configuration::get('PH_BLOG_COMMENTS_SYSTEM')=='facebook') {?>
			<?php echo $_smarty_tpl->getSubTemplate ("./comments/facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		
		<?php if ($_smarty_tpl->tpl_vars['allow_comments']->value==true&&Configuration::get('PH_BLOG_COMMENTS_SYSTEM')=='disqus') {?>
			<?php echo $_smarty_tpl->getSubTemplate ("./comments/disqus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
				
	</div><!-- .ph_simpleblog -->
</div><!-- schema -->

<?php if (Configuration::get('PH_BLOG_FB_INIT')) {?>
<script>
var lang_iso = '<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
_<?php echo strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value);?>
';
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/"+lang_iso+"/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>
<?php }?>
<script>
$(function() {
	$('body').addClass('simpleblog simpleblog-single');
});
</script><?php }} ?>
