<?php /*%%SmartyHeaderCode:114455933359a935478ed2c2-33316458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9d7c28923c0c0343a8c2199c9f950fd437fd44' => 
    array (
      0 => '/var/www/44.dev.dfx.fr/www/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1504260972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114455933359a935478ed2c2-33316458',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59a93547924830_99490975',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a93547924830_99490975')) {function content_59a93547924830_99490975($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//44.dev.dfx.fr/recherche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Rechercher" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Rechercher</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
