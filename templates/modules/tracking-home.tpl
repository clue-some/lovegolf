<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
<h1>Track my performance</h1>
{if $currentuser.loggedin}
<h1>Overview</h1>

						<div class="TMP">
							
							<div class="ovStatBox" id="fir">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Rounds played</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverage.numrounds|default:0|round:1}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										{if $useraverage.numrounds}<p>last round on<br />{$userstatistics.lastround.date|date_format}</p>{/if}
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/view-scorecards/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="gir">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Best round</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$userbest.totalscore|default:0|round:1}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										{if $userbest.totalscore}<p>played on<br />{$userbest.added|date_format}</p>{/if}
									
									</div>
									
									<div class="ovSBLink">
									
										{if $userbest.totalscore}<p><a href="/tracking/view-scorecards/#round_{$userbest.roundid}">View &raquo;</a></p>{/if}
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="sand">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Average round</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverage.totalscore|default:0|round:0}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										{if $useraverage.totalscore}<p>after {$useraverage.numrounds} rounds<br /><br /></p>{/if}
									
									</div>
									
									<div class="ovSBLink">
									
										{if $useraverage.totalscore}<p><a href="/tracking/view-scorecards/">View &raquo;</a></p>{/if}
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Handicap</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{if $currentuser.handicappending}?{else}{$currentuser.handicap|number_format}{/if}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{if $currentuser.handicappending}Pending{else}{$currentuser.handicap|round:1}{/if}<br /><br /></p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/handicap/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Lowest Hcp</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{if $currentuser.handicappending}?{else}{$handicap.min|round:1}{/if}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{if $currentuser.handicappending}Pending{else}{$handicap.mindate|date_format}{/if}<br /><br /></p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/handicap/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Highest Hcp</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{if $currentuser.handicappending}?{else}{$handicap.max|round:1}{/if}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{if $currentuser.handicappending}Pending{else}{$handicap.maxdate|date_format}{/if}<br /><br /></p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/handicap/">View &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<p>&nbsp;</p>
							
							<div class="floatEnder"></div>
							
						</div>

					<script type="text/javascript">
					{literal}

						$(function() {
							chart('MSLine', '/tracker/statistics/lastrounds-total/', 'trackingChartOne', 710, 386);
							chart('Pie3D', '/tracker/statistics/lastrounds-frequency/', 'trackingChartThree', 450, 240);
							{/literal}
							{if $userstatistics.lastround.roundid}
							{literal}
							chart('MSLine','/tracker/statistics/round-holes/{/literal}{$userstatistics.lastround.roundid}{literal}/','trackingChartTwo',920,500);
							chart('Pie3D', '/tracker/statistics/round-frequency/{/literal}{$userstatistics.lastround.roundid}{literal}/', 'trackingChartFour', 450, 240);
							{/literal}
							{/if}
							{literal}
						});
						
					{/literal}
					</script>
					
<h1>Your last 10 rounds</h1>
<p>The chart below shows your number of strokes per round for the last 10 rounds played (at any course).</p>
<p>&nbsp;</p>
<div>
						
	<div id="trackingChartOne" style="width: 710px; height: 386px;">
			
		<p>Please wait...</p>
											
	</div>
						
</div>
{else}
<div class="howFloatArea">

	<div class="howFloatContent">
	
		<h1>How does {$domain.pagetitle} work?</h1>
		
		<div class="hfcNumber">
		
			<p><img src="/tracker/wl/lovegolf/images/im-box-no1.gif" height="38" width="38" alt="No.1" /></p>
		
		</div>
		
		<h2>Log-in & enter your scores</h2>
		<p>You can add extra data like FIR, GIR, putts and <a class='example5' href="/tracker/help-extra-stats.php">more!</a></p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="floatEnder"></div>
		
		<div class="hfcNumber">
		
			<p><img src="/tracker/wl/lovegolf/images/im-box-no2.gif" height="38" width="38" alt="No.2" /></p>
		
		</div>
		
		<h2>Love Golf analyses your results</h2>
		<p>We work out your <a class='example5' href="/tracker/help-maintain-handicap.php">handicap</a> & <a class='example5' href="/tracker/help-points.php">stableford points</a> too!</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<div class="floatEnder"></div>
		
		<div class="hfcNumber">
		
			<p><img src="/tracker/wl/lovegolf/images/im-box-no3.gif" height="38" width="38" alt="No.3" /></p>
		
		</div>
		
		<h2>Track & improve your game</h2>
		<p>You'll see your game like never before!</p>
		
		<div class="floatEnder"></div>
	
	</div>

</div>

<div class="howFloatArea">

	<div class="howFloatContent" id="right">
	
		<h1>How can I improve my game?</h1>
		
		<h2>Take 3 points off your handicap</h2>
		<p>By simply tracking you can improve! <a class='example5' href="/tracker/help-take-3-points.php">Learn more &raquo;</a></p>
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<h2>Visualise with graphs & stats</h2>
		<p>See your scores & understand them better. <a class='example5' href="/tracker/help-visualise-graphs-stats.php">Learn more &raquo;</a></p>
		
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		
		<h2>Maintain your handicap</h2>
		<p>We'll track your handicap automatically. <a class='example5' href="/tracker/help-maintain-handicap.php">Learn more &raquo;</a></p>
		
		<p>&nbsp;</p>
	
	</div>

</div>

<div class="floatEnder"></div>

<p><a href="/register/"><img style="padding-bottom: 6px;" src="/tracker/wl/lovegolf/images/but-register-tracking-free.gif" height="44" width="710" alt="Start tracking your game now! It's Free!" /></a></p>
<p><span style="font-size: 0.85em;">&laquo; Already have a Love Golf Account? Log-in on the left or <a href="/login/">click here</a></span></p>
{/if}

<!--
{if $blogfeed.items}
<h1>From the blog...</h1>
{section name="item" loop=$blogfeed.items max=5}
<h2><a href="{$blogfeed.items[item].link}">{$blogfeed.items[item].title}</a></h2>
{/section}
{/if}
 -->
