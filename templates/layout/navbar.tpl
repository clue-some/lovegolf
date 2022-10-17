		<div class="menuHolder">
			<!--[if lte IE 6]><span onmouseover='hideSelects();' onmouseout='showSelects();'><![endif]-->

			<ul id="menu">          
			
			<li class="track">
			    <a {if $current == "tracking"} class="norm selecta one"{else} class="norm first one"{/if} href="http://{$host}/tracking/">Track my performance</a>
			</li>
			
			<li class="clubs">
			    <a {if $current == "clubs"} class="norm select one"{else} class="norm one"{/if} href="http://{$host}/clubs/">Find a golf club</a> 
			</li>           
			
			<li class="clubhouse">
			    <a {if $current == "clubhouse"} class="norm select one"{else} class="norm one"{/if} href="http://{$host}/clubhouse/">Love Golf Clubhouse</a>
			</li>

			<li class="account">
			    <a {if $current == "my"} class="norm select one"{else} class="norm one"{/if} href="http://{$host}/my/">My account</a>
			</li>
			
			        
			</ul>
			
			<!--[if lte IE 6]></span><![endif]-->
			
			<div class="floatEnder"></div>

		</div>
		
		<div class="menuAccountArea">
			{if $currentuser.loggedin}
			<p>You are logged in as <span>{$currentuser.firstname} {$currentuser.surname}</span> &nbsp;|&nbsp; <a href="http://{$host}/logout/">log-out</a></p>
			{else}
			<p>{$domain.pagetitle} is free to use - <a href="http://{$host}/register/">create account!</a></p>
			{/if}
		
		</div>
		
		<div class="floatEnder"></div>