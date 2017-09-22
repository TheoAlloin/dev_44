{if $MENU != ''}
	<!-- Menu -->
	<div id="block_top_menu" {if $page_name != 'index'}class="container"{/if}>
		<div class="cat-title"></div>
                 {if $page_name == 'index'}<div id="header_logo">
                                <a href="/" title="ERA">
                                    <img class="logo img-responsive" src="/themes/jlcw/img/logo.png" alt="ERA" width="350" height="99">
                                </a>
                        </div>{/if}
		<ul class="sf-menu clearfix menu-content">
                   
			{$MENU}
                        {if !$PS_CATALOG_MODE}
                        <li id="menu_my_account">
                            <a href="/mon-compte"><i class="icon-user"></i></a>
                        </li>
                        <li id="menu_cart">
                            <a href="/commande"><i id="cart_header"></i></a>
                        </li>                        
                        {/if}
			{if $MENU_SEARCH}
				<li id="search_box_container" class="sf-search noBack">
                                    <i id="appear_searchbox" class="loupe"></i>
					<form id="searchbox" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" method="get" class="closing">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="{if isset($smarty.get.search_query)}{$smarty.get.search_query|escape:'html':'UTF-8'}{/if}" />
                                                        <input type="submit" value="Rechercher" />
                                                </p>
					</form>
				</li>
			{/if}
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
{/if}