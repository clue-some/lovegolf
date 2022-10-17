{include file="layout/top-bar.tpl"}

<div class="container">

	<div class="headerArea">
	
		<div class="logoArea">
		
			<p><a href="http://{$host}/"><img src="/tracker/wl/lovegolf/images/im-love-golf-logo.png" height="100" width="538" alt="{$domain.pagetitle}" /></a></p>
		
		</div>
		
		<div class="bannerArea">
		
			<div class="socialArea">
			
				<p><a href="http://www.facebook.com/pages/Love-Golf/117019258308726" target="_blank" class="rl_facebook" title="Become a fan on Facebook"><span class="displace">Become a fan on Facebook</span></a><a href="http://www.twitter.com/we_lovegolf" target="_blank" class="rl_twitter" title="Follow us on Twitter"><span class="displace">Follow us on Twitter</span></a></p>
			
				<div class="floatEnder"></div>
			
			</div>
			
			<div class="basketArea{if $basket.items} hasItems{/if}">
{*		
				{include file="boxes/basket.tpl"}
*}			
			</div>
		
		</div>
		
		<div class="floatEnder"></div>
	
	</div>
	
	<div class="navBarHolder">
	
		{include file="layout/navbar.tpl"}
	
	</div>
	
	<div class="bodyArea">
	