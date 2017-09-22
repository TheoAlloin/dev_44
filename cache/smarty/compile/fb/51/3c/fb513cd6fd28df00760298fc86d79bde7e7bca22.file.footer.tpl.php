<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:15:35
         compiled from "/var/www/44.dev.dfx.fr/www/themes/jlcw/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85397273759c51b071dcaa3-39810421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb513cd6fd28df00760298fc86d79bde7e7bca22' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/jlcw/footer.tpl',
      1 => 1505734375,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85397273759c51b071dcaa3-39810421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c51b071e4d03_78151732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c51b071e4d03_78151732')) {function content_59c51b071e4d03_78151732($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					</footer>
				</div><!-- #footer -->
                                <div id="super-footer">
                                    <div><span><a href="/page/2-mentions-legales">Mentions l&eacute;gales</a></span> | <span><a href="http://www.consulting-web.com/" target="_blank">site r&eacute;alis&eacute; par l'agence web</a> JL Consulting Web</span></div>
                                </div>
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <script>
        $(document).ready(function() {
            
            if ($(this).scrollTop() >= 60 && !$("#home_header_info_container").hasClass( "follow" )) { // this refers to window                    
                    $("#home_header_info_container").addClass( "follow" );
                }
                else if($(this).scrollTop() < 60){
                    $("#home_header_info_container").removeClass( "follow");
                }
                
                if ($(this).scrollTop() >= 353 && !$("#home_header_info_no_index").hasClass( "follow" )) { // this refers to window                    
                    $("#home_header_info_no_index").addClass( "follow" );
                }
                else if($(this).scrollTop() < 353){
                    $("#home_header_info_no_index").removeClass( "follow");
                }
                
                
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 60 && !$("#home_header_info_container").hasClass( "follow" )) { // this refers to window                    
                    $("#home_header_info_container").addClass( "follow" );
                }
                else if($(this).scrollTop() < 60){
                    $("#home_header_info_container").removeClass( "follow");
                }
                
                if ($(this).scrollTop() >= 353 && !$("#home_header_info_no_index").hasClass( "follow" )) { // this refers to window                    
                    $("#home_header_info_no_index").addClass( "follow" );
                }
                else if($(this).scrollTop() < 353){
                    $("#home_header_info_no_index").removeClass( "follow");
                }
                
            });
        });
    </script>
	</body>
</html><?php }} ?>
