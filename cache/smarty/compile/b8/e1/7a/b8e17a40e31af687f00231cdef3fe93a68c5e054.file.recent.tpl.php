<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:06:21
         compiled from "/var/www/44.dev.dfx.fr/www/modules/ph_recentposts/views/templates/hook/recent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204113175459c518dd285663-51635693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8e17a40e31af687f00231cdef3fe93a68c5e054' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/modules/ph_recentposts/views/templates/hook/recent.tpl',
      1 => 1505476624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204113175459c518dd285663-51635693',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'recent_posts' => 0,
    'post' => 0,
    'post_type' => 0,
    'blogLayout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c518dd2acfc3_53467994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c518dd2acfc3_53467994')) {function content_59c518dd2acfc3_53467994($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/44.dev.dfx.fr/www/tools/smarty/plugins/modifier.date_format.php';
?><?php if (isset($_smarty_tpl->tpl_vars['recent_posts']->value)&&count($_smarty_tpl->tpl_vars['recent_posts']->value)) {?>
<?php $_smarty_tpl->tpl_vars['is_category'] = new Smarty_variable(false, null, 0);?> 
<div class="ph_simpleblog simpleblog-recent">
    <div class="container">
	<div class="row">
	    <div id="blog-custom" class="simpleblog-posts carousel-grid owl-carousel" itemscope itemtype="http://schema.org/Blog">
                            <h4 class="post_heading">Notre <span class="yellow">actualit&eacute;</span></h4>
		    <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blogrecentpost']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blogrecentpost']['index']++;
?>

			<div class="item simpleblog-post-item col-xs-4 col-sm-4">
			    <div class="item-inner post-item">
				<?php $_smarty_tpl->tpl_vars['post_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['post']->value['post_type'], null, 0);?>

				
				

				<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/thumbnail.tpl")) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/thumbnail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<?php if (isset($_smarty_tpl->tpl_vars['post']->value['banner'])&&Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')) {?>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
                                            <div class="post-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                                                <div class="post-thumbnail-scale">
                                                            <?php if ($_smarty_tpl->tpl_vars['blogLayout']->value=='full') {?>
                                                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_wide'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl" />
                                                            <?php } else { ?>
                                                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['banner_thumb'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="img-responsive" itemprop="thumbnailUrl"/>
                                                            <?php }?>
                                                </div>
                                            </div><!-- .post-thumbnail -->
                                        </a>

					<?php }?>
				<?php }?>
				
				
				<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/title.tpl")) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				<?php } else { ?>
					<div class="post-title title_font">
						<h2 itemprop="headline">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

							</a>
						</h2>
					</div><!-- .post-title -->
                                        <div class="short_content"><?php echo $_smarty_tpl->tpl_vars['post']->value['short_content'];?>
</div>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" class="link_actuality">Lire la suite</a>
				<?php }?>
                                <?php if (Configuration::get('PH_BLOG_DISPLAY_DATE')) {?>

                                        
                                        <div class="blog-info post-additional-info post-meta-info">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Permalink to','mod'=>'ph_recentposts'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="contentUrl">
                                                <p>
                                                    <span class="post-date"><?php echo smartyTranslate(array('s'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],'d'),'mod'=>'ph_recentposts'),$_smarty_tpl);?>
</span>
                                                    <span class="post-month"><?php echo smartyTranslate(array('s'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['date_add'],'M'),'mod'=>'ph_recentposts'),$_smarty_tpl);?>
</span>
                                                </p>
                                            </a>
                                        </div>
                                <?php }?>
				<?php if ($_smarty_tpl->tpl_vars['post_type']->value!='post'&&file_exists(((string)$_smarty_tpl->tpl_vars['tpl_path']->value)."./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/description.tpl")) {?>
					<?php echo $_smarty_tpl->getSubTemplate ("./types/".((string)$_smarty_tpl->tpl_vars['post_type']->value)."/description.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


				<?php }?>
			    </div><!-- .post-item -->
			</div><!-- .simpleblog-post-item -->
		    <?php } ?>
	    </div><!-- #blog-custom-OwlCarousel -->
	</div><!-- .row -->
    </div><!-- .container -->
</div><!-- .ph_simpleblog.recent -->
<?php }?><?php }} ?>
