{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			{if isset($HOOK_FOOTER)}
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<div class="row">{$HOOK_FOOTER}</div>
					</footer>
				</div><!-- #footer -->
                                <div id="super-footer">
                                    <div><span><a href="/page/2-mentions-legales">Mentions l&eacute;gales</a></span> | <span><a href="http://www.consulting-web.com/" target="_blank">site r&eacute;alis&eacute; par l'agence web</a> JL Consulting Web</span></div>
                                </div>
			{/if}
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
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
</html>