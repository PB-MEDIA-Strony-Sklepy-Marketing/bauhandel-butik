
<div class="product-tabs-container-slider product_block_container">
<div class="container-fluid">
	<ul class="tabs_slider"> 
		{$count=0}
		{foreach from=$productTabslider item=productTab name=posTabProduct}
			<li class="{$productTab.id} {if $smarty.foreach.posTabProduct.first}first_item{elseif $smarty.foreach.posTabProduct.last}last_item{else}{/if} item {if $count==0} active {/if}" rel="tab_{$productTab.id}"  >
				<span>{$productTab.name}</span>

			</li>
			{$count= $count+1}
		{/foreach}	
	</ul>
	{$rows= $config['POS_HOME_PRODUCTTAB_ROWS']}
	<div class="row pos_content"> 
	{$countss=0}
	{foreach from=$productTabslider item=productTab name=posTabProduct}
			<div id="tab_{$productTab.id}" class="tab_content">
				<div class="productTabContent{$countss}">
				{foreach from=$productTab.productInfo item=product name=myLoop}
				{if $smarty.foreach.myLoop.index % $rows == 0 || $smarty.foreach.myLoop.first }
					<div class="item-product">
				{/if}
				
				<article class="js-product-miniature item_in" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
					<div class="img_block">
						<div class="img_inner">
							{block name='product_thumbnail'}
							  <a href="{$product.url}" class="thumbnail product-thumbnail">
								<img
								  src = "{$product.cover.bySize.home_default.url}"
								  alt = "{$product.cover.legend}"
								  data-full-size-image-url = "{$product.cover.large.url}"
								>
								{hook h="rotatorImg" product=$product}		
							  </a>
							{/block}
							{block name='product_flags'}
							  <ul class="product-flag">
								{foreach from=$product.flags item=flag}
									{if $flag.type == "discount"}
										{continue}
									{/if}
									<li class="{$flag.type}"><span>{$flag.label}</span></li>
								{/foreach}
							  </ul>
							{/block}
							<div class="countdown" >
								{hook h='timecountdown' product=$product }
								<span class="future_date_{$product.id_category_default}_{$product.id_product} id_countdown"></span>
								<div class="clearfix"></div>
							</div>
						</div>	
					</div>
					<div class="product_desc">
					  {block name='product_name'}
					   <h4><a href="{$product.url}" title="{$product.name}" itemprop="name" class="product_name">{$product.name}</a></h4>
					  {/block}
						{block name='product_price_and_shipping'}
							{if $product.show_price}
							  <div class="product-price-and-shipping">
								<span itemprop="price" class="price {if $product.has_discount} price_sale {/if}">{$product.price}</span>
								{if $product.has_discount}
								  {hook h='displayProductPriceBlock' product=$product type="old_price"}

								  <span class="regular-price">{$product.regular_price}</span>
								  {if $product.discount_type === 'percentage'}
									<span class="discount-percentage"><span>{$product.discount_percentage}</span></span>
								  {/if}
								{/if}

								{hook h='displayProductPriceBlock' product=$product type="before_price"}

								{hook h='displayProductPriceBlock' product=$product type='unit_price'}

								{hook h='displayProductPriceBlock' product=$product type='weight'}
							  </div>
							{/if}
						{/block}
						{block name='product_reviews'}
						<div class="hook-reviews">
						{hook h='displayProductListReviews' product=$product}
						</div>
					  {/block}
					  <ul class="add-to-links">
							<li class="cart">
								{include file='catalog/_partials/customize/button-cart.tpl' product=$product}
							</li>
							<li>
								<a href="#" class="quick-view" data-link-action="quickview" title="{l s='Quick view' d='Shop.Theme.Actions'}">{l s='Quick view' d='Shop.Theme.Actions'}</a>
							</li>
							<li>
								<a href="{$product.url}" class="links-details" title="{l s='Details' d='Shop.Theme.Actions'}">{l s='Details' d='Shop.Theme.Actions'}</a>
							</li>
						
						</ul>
					{block name='product_description_short'}
						<div class="product-desc" itemprop="description">{$product.description_short nofilter}</div>
					{/block}
					{block name='product_variants'}
							{if $product.main_variants}
							  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
							{/if}
					  {/block}
					</div>
				</article>

					
				{if $smarty.foreach.myLoop.iteration % $rows == 0 || $smarty.foreach.myLoop.last  }
					</div>
				{/if}	
				{/foreach}
				</div>
			</div>
			{$countss= $countss+1}
	{/foreach}	
	</div>
</div>
</div>
