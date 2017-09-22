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

{if isset($errors) && $errors}
	<div class="alert alert-danger">
                <p><img src="{$img_dir}error.png" /></p>
		<p>ERREUR</p>
		<ol>
		{foreach from=$errors key=k item=error}
                    {if $error == "Category not found"}
			<li>Cat&eacute;gorie non trouv&eacute;e</li>
                    {else}
                        <li>{$error}</li>
                    {/if}

		{/foreach}
		</ol>
		{if isset($smarty.server.HTTP_REFERER) && !strstr($request_uri, 'authentication') && preg_replace('#^https?://[^/]+/#', '/', $smarty.server.HTTP_REFERER) != $request_uri}
			<p class="lnk"><a class="alert-link" href="{$smarty.server.HTTP_REFERER|escape:'html':'UTF-8'|secureReferrer}" title="{l s='Back'}">&laquo; {l s='Back'}</a></p>
		{/if}
                {if ($page_name == "product" || $page_name == "category")}
                    <div class="buttons">
                        <a class="btn btn-default button button-medium" href="/" title="Accueil">
                            <span>Page d'accueil</span>
                        </a>
                    </div>
                {/if}
            </div>
{/if}
