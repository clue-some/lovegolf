{include file='html/header.tpl'}      
{include file='layout/header.tpl'}

		<div class="mainArea">

			{include file="modules/games-verti-golf.tpl"}
		
		</div>
		
		<div class="rightArea">
					
			{if $currentuser.loggedin}
			{include file="boxes/mini-profile.tpl"}
			{else}
			{include file="boxes/login.tpl"}
			{/if}
			
			{include file="boxes/rewards.tpl"}
			
			{include file="boxes/statistics.tpl"}
			
		</div>
  
{include file='layout/footer.tpl'}   
{include file='html/footer.tpl'}