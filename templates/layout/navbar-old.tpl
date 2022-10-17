		<div class="menuHolder">
			<ul id="topmenu">
				<li{if $current == "tracking"} class="firstCurrent"{else} class="first"{/if}><a href="/tracking/">Track my performance</a></li>
				<li{if $current == "courses"} class="current"{/if}><a href="/courses/">Find a course</a></li>
				<li{if $current == "shop"} class="current"{/if}><a href="/shop/">Buy golf equipment</a></li>
				<li{if $current == "clubhouse"} class="current"{/if}><a href="/clubhouse/">Love Golf Clubhouse</a></li>
				<li{if $current == "my"} class="current"{/if}><a href="/my/">My account</a></li>
			</ul>
		</div>
		
		<div class="menuAccountArea">
			{if $currentuser.loggedin}
			<p>You are logged in as <span>{$currentuser.username}</span> &nbsp;|&nbsp; <a href="/logout/">log-out</a></p>
			{else}
			<p>{$domain.pagetitle} is free - <a href="/register/">create account!</a></p>
			{/if}
		
		</div>
		
		<div class="floatEnder"></div>