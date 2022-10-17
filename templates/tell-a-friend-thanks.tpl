{include file='html/header.tpl'}      
{include file='layout/header.tpl'}

		<div class="leftArea">
					
			{if $currentuser.loggedin}
			{include file="boxes/mini-profile.tpl"}
			{else}
			{include file="boxes/login.tpl"}
			{/if}
			
			{include file="boxes/statistics.tpl"}
			
		</div>
		
		<div class="mainArea">

			<div class="mainAreaContent">
			
				{include file="modules/tell-a-friend-thanks.tpl"}
		
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>
  
{include file='layout/footer.tpl'}   
{include file='html/footer.tpl'}