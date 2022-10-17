		<div class="menuHolder">
			<ul id="topmenu">
				<li{if $current == "welcome"} class="firstCurrent"{else} class="first"{/if}><a href="/tracker/">Welcome</a></li>
				<li{if $current == "tracking"} class="current"{/if}><a href="/tracking/">Golf Tracker</a></li>
				<li><a href="/shop/">Golf Shop</a></li>
				<li{if $current == "handicap"} class="current"{/if}><a href="/handicap/">Golf Handicap</a></li>
				<li{if $current == "courses"} class="current"{/if}><a href="/courses/">Golf Course Directory</a></li>
				<li{if $current == "my"} class="current"{/if}><a href="/my/">My {$domain.pagetitle}</a></li>
				<!--<li{if $current == "about"} class="current"{/if}><a href="/tracker/about/">What is {$domain.pagetitle}?</a></li>
				<li{if $current == "features"} class="current"{/if}><a href="/tracker/features/">Features</a></li>-->
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