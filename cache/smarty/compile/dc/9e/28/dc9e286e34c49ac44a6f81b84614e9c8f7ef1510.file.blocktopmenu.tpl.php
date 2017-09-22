<?php /* Smarty version Smarty-3.1.19, created on 2017-09-22 16:15:35
         compiled from "/var/www/44.dev.dfx.fr/www/themes/jlcw/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21096113859c51b071cfe63-85799313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9e286e34c49ac44a6f81b84614e9c8f7ef1510' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/jlcw/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1505998859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21096113859c51b071cfe63-85799313',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'page_name' => 0,
    'PS_CATALOG_MODE' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c51b071d89b1_29445794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c51b071d89b1_29445794')) {function content_59c51b071d89b1_29445794($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
	<div id="block_top_menu" <?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>class="container"<?php }?>>
		<div class="cat-title"></div>
                 <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?><div id="header_logo">
                                <a href="/" title="ERA">
                                    <img class="logo img-responsive" src="/themes/jlcw/img/logo.png" alt="ERA" width="350" height="99">
                                </a>
                        </div><?php }?>
		<ul class="sf-menu clearfix menu-content">
                   
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

                        <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                        <li id="menu_my_account">
                            <a href="/mon-compte"><i class="icon-user"></i></a>
                        </li>
                        <li id="menu_cart">
                            <a href="/commande"><i id="cart_header"></i></a>
                        </li>                        
                        <?php }?>
			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li id="search_box_container" class="sf-search noBack">
                                    <i id="appear_searchbox" class="loupe"></i>
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get" class="closing">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
                                                        <input type="submit" value="Rechercher" />
                                                </p>
					</form>
				</li>
			<?php }?>
                        <li id="facebook_top">
                            <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                        </li>
                        <li id="instagram_top">
                            <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                        </li>
                        <li id="twitter_top">
                            <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                        </li>
                        
		</ul>
	</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
