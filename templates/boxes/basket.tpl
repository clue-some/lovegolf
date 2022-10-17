
		{* shop_basket assign='basket' *}

		<div class="basketContent" id="basketText">
			<p>{if $basket.items}<a href="http://{$host}/shop/basket">View basket</a>{else}Your basket is empty{/if}</p>
			<p><strong>Items: {$basket.items}  Total: &pound;{$basket.total|number_format:2}</strong></p>
		</div>
