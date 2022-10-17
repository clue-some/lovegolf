			<div class="mainAreaContentFull">
				
				<h1>Tracking centre - Overall performance</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="first"><a href="/tracking-centre/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Course statistics</a></li>
					<li class="current"><a href="/tracking/performance/">Overall performance</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<div class="trackingBodyContent">
					
						<h1>Historical performance</h1>
						<p>The chart below shows you all the rounds you've played so far. Use the links below to change the data type in the chart.</p>
						<p>&nbsp;</p>
				
						<div class="trackingChartLinks">
						
							<p>
							<a href="#" onclick="chart('MSLine', '/tracker/statistics/average-strokes/', 'performanceChartOne', 920, 500); return false;">Total score</a>
							&nbsp;|&nbsp; <a href="#" onclick="chart('MSLine', '/tracker/statistics/average-putts/', 'performanceChartOne', 920, 500); return false;">Total putts</a>
							&nbsp;|&nbsp; <a href="#" onclick="chart('MSLine', '/tracker/statistics/lastrounds-fir/', 'performanceChartOne', 920, 500); return false;">FIR %</a> 
							&nbsp;|&nbsp; <a href="#" onclick="chart('MSLine', '/tracker/statistics/lastrounds-gir/', 'performanceChartOne', 920, 500); return false;">GIR %</a> 
							</p>
						
						</div>
							
						<script type="text/javascript">
						{literal}

							$(function() {
								chart('MSLine', '/tracker/statistics/average-strokes/', 'performanceChartOne', 920, 500);
							});						
							
						{/literal}
							
						</script>
									
						<div id="performanceChartOne">
		
										
						</div>
																		
					</div>

				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>