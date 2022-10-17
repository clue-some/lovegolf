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

				<h1>{$message}</h1>
				<p>{$description}</p>

			</div>
		
		</div>

{include file='layout/footer.tpl'}   
{include file='html/footer.tpl'} 