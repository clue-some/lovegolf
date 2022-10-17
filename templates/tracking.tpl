{include file='html/header.tpl'}      
{include file='layout/header.tpl'}
		
		<div class="leftArea">

			{if $currentuser.loggedin}
			{include file="boxes/mini-profile.tpl"}
			{else}
			{include file="boxes/login.tpl"}
			{/if}
			
			{include file="boxes/blog-latest.tpl"}
			
			{include file="boxes/statistics.tpl"}
		
		</div>
		
		<div class="mainArea">
		
			{include file="modules/hp-tracker-content-boxes.tpl"}
			
			<div class="mainAreaContent">
			
				{include file="modules/tracking-home.tpl"}
			
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
			
			{include file="modules/hp-tracker-content-boxes.tpl"}
		
		</div>
  
{include file='layout/footer.tpl'}   
{include file='html/footer.tpl'}