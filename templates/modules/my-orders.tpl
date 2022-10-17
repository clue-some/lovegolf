	<h1>Order History</h1>
	{if $orderhistory}
	<p>Click on an order date to view more details.</p>
	<p>&nbsp;</p>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
	  <tr class="scTop">
	    <td><p>Date</p></td>
	    <td><p>Total</p></td>
	    <td><p>Status</p></td>
	  </tr>
	{foreach name="orderhistory" from=$orderhistory item="order"}
	  <tr class="{cycle values="scEntry, scAlt"}">
	    <td><p><a href="/shop/order-history/{$order.orders_id}">{$order.date_purchased|date_format:"%d/%m/%Y"}</a></p></td>
	    <td><p>{$order.order_total}</p></td>
	    <td><p>{$order.orders_status_name}</p></td>
	  </tr>
	{* Order Details... not required as shown on oscommerce
	  {foreach name="product" from=$order.products item="product"} 
	  <tr class="product">
	    <td colspan="3"><p>{$product.products_quantity} x {$product.products_name}</p></td>
	  </tr>
	  {/foreach}
	 *}
	{/foreach}
	</table>
	{else}
		<p>You have not placed any orders yet. Why not visit the <a href="/shop/"><strong>shop</strong></a>?</p>
	{/if}
	<p>&nbsp;</p>