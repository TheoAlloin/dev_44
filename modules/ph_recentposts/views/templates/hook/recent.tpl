{if isset($recent_posts) && count($recent_posts)}
{assign var=is_category value=false} {* we want to show category on recent post but have the same code as on category post listing ;) *}
<div class="ph_simpleblog simpleblog-recent">
    <div class="container">
	<div class="row">
	    <div id="blog-custom" class="simpleblog-posts carousel-grid owl-carousel" itemscope itemtype="http://schema.org/Blog">
                            <h4 class="post_heading">Notre <span class="yellow">actualit&eacute;</span></h4>
		    {foreach from=$recent_posts item=post name='blogrecentpost'}
{*                         {if $smarty.foreach.blogrecentpost.index == 2}
                            {break}
                         {/if}*}
			<div class="item simpleblog-post-item col-xs-4 col-sm-4">
			    <div class="item-inner post-item">
				{assign var='post_type' value=$post.post_type}

				{* How it works? *}
				{* We slice post at few parts, thumbnail, title, description etc. we check if override for specific parts exists for current post type and if so we include this tpl file *}

				{if $post_type != 'post' && file_exists("$tpl_path./types/$post_type/thumbnail.tpl")}
					{include file="./types/$post_type/thumbnail.tpl"}
				{else}
					{if isset($post.banner) && Configuration::get('PH_BLOG_DISPLAY_THUMBNAIL')}
                                        <a href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Permalink to' mod='ph_recentposts'} {$post.title|escape:'html':'UTF-8'}" itemprop="contentUrl">
                                            <div class="post-thumbnail" itemscope itemtype="http://schema.org/ImageObject">
                                                <div class="post-thumbnail-scale">
                                                            {if $blogLayout eq 'full'}
                                                                    <img src="{$post.banner_wide|escape:'html':'UTF-8'}" alt="{$post.title|escape:'html':'UTF-8'}" class="img-responsive" itemprop="thumbnailUrl" />
                                                            {else}
                                                                    <img src="{$post.banner_thumb|escape:'html':'UTF-8'}" alt="{$post.title|escape:'html':'UTF-8'}" class="img-responsive" itemprop="thumbnailUrl"/>
                                                            {/if}
                                                </div>
                                            </div><!-- .post-thumbnail -->
                                        </a>

					{/if}
				{/if}
				
				{*{if $post_type != 'post' && file_exists("$tpl_path./types/$post_type/meta.tpl")}
							{include file="./types/$post_type/meta.tpl"}
				{else}
					<div class="post-additional-info post-meta-info">
						{if $is_category eq false && Configuration::get('PH_BLOG_DISPLAY_CATEGORY')}
							<span class="post-category">
								<i class="fa fa-tags"></i> <a href="{$post.category_url}" title="{$post.category|escape:'html':'UTF-8'}" rel="category">{$post.category|escape:'html':'UTF-8'}</a>
							</span>
						{/if}

						{if isset($post.author) && !empty($post.author) && Configuration::get('PH_BLOG_DISPLAY_AUTHOR')}
							<span class="post-author">
								<i class="fa fa-user"></i> <span itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">{$post.author|escape:'html':'UTF-8'}</span>
							</span>
						{/if}
					</div><!-- .post-additional-info post-meta-info -->
				{/if}*}
				{if $post_type != 'post' && file_exists("$tpl_path./types/$post_type/title.tpl")}
					{include file="./types/$post_type/title.tpl"}
				{else}
					<div class="post-title title_font">
						<h2 itemprop="headline">
							<a href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Permalink to' mod='ph_recentposts'} {$post.title|escape:'html':'UTF-8'}">
								{$post.title|escape:'html':'UTF-8'}
							</a>
						</h2>
					</div><!-- .post-title -->
                                        <div class="short_content">{$post.short_content}</div>
                                        <a href="{$post.url|escape:'html':'UTF-8'}" class="link_actuality">Lire la suite</a>
				{/if}
                                {if Configuration::get('PH_BLOG_DISPLAY_DATE')}
{*					<div class="blog-info bg_tranp">
                                                <span style="dispaly: none;">.</span>
                                        </div>*}
                                        {*
                                            {l s='Jan' mod='ph_recentposts'}
                                            {l s='Feb' mod='ph_recentposts'}
                                            {l s='Mar' mod='ph_recentposts'}
                                            {l s='Apr' mod='ph_recentposts'}
                                            {l s='May' mod='ph_recentposts'}
                                            {l s='Jun' mod='ph_recentposts'}
                                            {l s='Jul' mod='ph_recentposts'}
                                            {l s='Aug' mod='ph_recentposts'}
                                            {l s='Sep' mod='ph_recentposts'}
                                            {l s='Oct' mod='ph_recentposts'}
                                            {l s='Nov' mod='ph_recentposts'}
                                            {l s='Dec' mod='ph_recentposts'}
                                        *}
                                        <div class="blog-info post-additional-info post-meta-info">
                                            <a href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Permalink to' mod='ph_recentposts'} {$post.title|escape:'html':'UTF-8'}" itemprop="contentUrl">
                                                <p>
                                                    <span class="post-date">{l s=$post.date_add|date_format:d mod='ph_recentposts'}</span>
                                                    <span class="post-month">{l s=$post.date_add|date_format:M mod='ph_recentposts'}</span>
                                                </p>
                                            </a>
                                        </div>
                                {/if}
				{if $post_type != 'post' && file_exists("$tpl_path./types/$post_type/description.tpl")}
					{include file="./types/$post_type/description.tpl"}
{*				{else}
					{if Configuration::get('PH_BLOG_DISPLAY_DESCRIPTION')}
					<div class="post-content" itemprop="text">
						{$post.short_content|truncate:135:'...'|strip_tags:'UTF-8'}
						{if Configuration::get('PH_BLOG_DISPLAY_MORE')}
						<div class="post-read-more">
							<a class="title_font" href="{$post.url|escape:'html':'UTF-8'}" title="{l s='Read more' mod='ph_recentposts'}">
								{l s='Read more' mod='ph_recentposts'}
							</a>
						</div><!-- .post-read-more -->
						{/if}
					</div><!-- .post-content -->	
					{/if}*}
				{/if}
			    </div><!-- .post-item -->
			</div><!-- .simpleblog-post-item -->
		    {/foreach}
	    </div><!-- #blog-custom-OwlCarousel -->
	</div><!-- .row -->
    </div><!-- .container -->
</div><!-- .ph_simpleblog.recent -->
{/if}