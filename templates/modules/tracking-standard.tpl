			<div class="mainAreaContentFull">
				
				<h1>Welcome to the Tracking Centre!</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="firstCurrent"><a href="/tracking-centre/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Statistics</a></li>
					<li><a href="/tracking/performance/">Overall performance</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<script type="text/javascript">
					{literal}

						$(function() {
							chart('MSLine', '/tracker/statistics/lastrounds-total/', 'trackingChartOne', 920, 500);
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

					<div class="trackingBodyContent">
					
						<h1>Your last 10 rounds</h1>
						<p>The chart below shows your number of strokes per round for the last 10 rounds played (at any course).</p>
						<p>&nbsp;</p>
						<p>Click a round on the graph below to view detailed statistics. You may need to scroll further down the page to see the results.</p>
						<p>&nbsp;</p>
						<div>
						
							<div id="trackingChartOne" style="width: 920px; height: 500px;">
			
								<p>Please wait...</p>
											
							</div>
						
						</div>
						
						<p>&nbsp;</p>
						<p align="center">Click a round on the graph abpve to view detailed statistics. You may need to scroll further down the page to see the results.</p>
						<p>&nbsp;</p>
						
						<div>
						
							<div id="trackingChartTwo" style="width: 920px; height: 500px;">
			
								<p>Click a round on the graph above to view detailed statistics.</p>
											
							</div>							
								
							{*
								<h1>Chart showing strokes for each hole against par</h1>
								<p><strong>This chart doesn't appear until a round is chosen in the top chart.</strong></p>
								<p>Once a round is chosen in the top chart, this chart will show each hole (18, front 9 or back 9) and show the total strokes against par.</p>
							*}

						
						</div>

						<div style="float: left;">
						
							<div id="trackingChartThree" style="width: 450px; height: 240px;">
			
								<p>Click a round on the graph above to view detailed statistics.</p>
											
							</div>
						
						</div>
						
						<div style="float: right;">
						
							<div id="trackingChartFour" style="width: 450px; height: 240px;">
			
								<p>Click a round on the graph above to view detailed statistics.</p>
											
							</div>				
						
							{*
								<h1>Chart showing GIR, FIR, sand saves, etc</h1>
								<p><strong>This chart doesn't appear until a round is chosen above.</strong></p>
								<p>Once a round is chosen from the above chart, this chart appears showing extra stat information, i.e. GIR, FIR, sand saves, etc. If extra stats have not been recorded for this round, the chart shouldn't appear and a message comes up with a link to edit the round and add the stats.</p>
							*}
												
						</div>
						
						<div class="floatEnder"></div>
							
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>