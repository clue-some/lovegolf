<!-- <style>
{literal}
#preview {
	position:absolute;
	border:1px solid #ccc;
	background:#333;
	padding:5px;
	display:none;
	color:#fff;
}
{/literal}
</style>
<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".preview").colorbox();		
	});
	{/literal}
</script>
			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="green">
				
					<h1>Related products:</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					{foreach item="product" from=$products}
					<div class="leftBoxSub">
					
						<p><a href="/shop/product-p-{$product.products_id}.html">{$product.products_name}</a></p>
						<p style="margin-top: 5px;">{if $product.products_rrp != '0.0000'}<span style="color: #aaa; font-size: 0.9em;">Was <span style="color: #f46767; font-size: 1.2em;">&pound;{$product.products_rrp|number_format:2}</span></span> &nbsp;Now {/if}<span><span>&pound;{$product.products_price|number_format:2}</span></span></p>
						<p style="margin-top: 5px;"><a href="/shop/images/{if $product.products_image_2}{$product.products_image_2}{else}{$product.products_image}{/if}" class="preview" title="{$product.products_name|truncate:40}">&raquo; Preview product</a></p>
						
					</div>
					{/foreach}
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
											
				</div>
				
			</div>
			
			<div style="height: 250px">
			
				<p>&nbsp;</p>
			
			</div> -->