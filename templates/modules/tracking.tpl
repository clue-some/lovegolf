<!-- styles needed by jScrollPane -->
<link type="text/css" href="/tracker/wl/lovegolf/css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="/tracker/javascript/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="/tracker/javascript/jquery.jscrollpane.min.js"></script>

<script type="text/javascript" id="sourcecode">
{literal}
$(function()
{
	$('.chartScroller').jScrollPane(
		{
			horizontalGutter: 50,
			verticalGutter: 50
		}
	);
});
{/literal}
</script>
<style>
{literal}
.jspCap {
	display: block;
	background: transparent;
}
.jspHorizontalBar .jspCap {
	width: 100px;
	height: 100%;
}
{/literal}
</style>

			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Welcome to the Tracking Centre!</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="firstCurrent"><a href="/tracking-centre/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Course statistics</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<script type="text/javascript">
					{literal}

						$(function() {
							chart('MSLine', '/tracker/statistics/lastrounds-total/', 'trackingChartOne', 920, 400);
							chart('Pie3D', '/tracker/statistics/lastrounds-frequency/', 'trackingChartThree', 450, 240);
							{/literal}
							{if $userstatistics.lastround.roundid}
							{literal}
							chart('MSLine','/tracker/statistics/round-holes/{/literal}{$userstatistics.lastround.roundid}{literal}/','trackingChartTwo',920,400);
							chart('Pie3D', '/tracker/statistics/round-frequency/{/literal}{$userstatistics.lastround.roundid}{literal}/', 'trackingChartFour', 450, 240);
							{/literal}
							{/if}
							{literal}
						});
						
					{/literal}
					</script>

					<div class="trackingBodyContent">
					
						<h1>Your last 10 rounds</h1>
						<p>The chart below shows your number of strokes per round for the last 10 rounds played (at any course) in date order.</p>
						<p>&nbsp;</p>
						<p><strong>Use the scrollbar to reveal another graph horizontally to the right</strong>.</p>
						<p>Click a round on the first graph to view detailed statistics on the second graph.</p>
						<p>&nbsp;</p>
						
						<div style="position: relative; width: 920px; height: 430px;">
						
							<div style="z-index: 1000; position: absolute; width: 29px; height: 400px; top: 0; left: 891px; background: url(/tracker/wl/lovegolf/images/im-chart-scroll-fade.png) no-repeat right 2px;">
								
								<p>&nbsp;</p>
								
							</div>
							
							<div class="chartScroller">
							
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
								  <tr>
									<td valign="top">
								
										<div id="trackingChartOne" style="width: 920px; height: 400px; margin-right: 30px;">
						
											<p>Please wait...</p>
														
										</div>
										
									</td>
									<td valign="top">
								
										<div id="trackingChartTwo" style="width: 920px; height: 400px; margin-right: 10px;">
						
											<p>Please wait...</p>
														
										</div>
										
									</td>
								  </tr>
								</table>
	
							</div>
							
						</div>
						
						<div style="padding-bottom: 12px; padding-top: 15px;">
							<p style="text-align: center;"><img src="/tracker/wl/lovegolf/images/im-scroll-right.png" height="24" width="227" alt="Scroll to the right to see more" ></p>
						</div>
						
						<div class="floatEnder"></div>

						<div style="float: left;">
						
							<div id="trackingChartThree" style="width: 450px; height: 240px;">
			
								<p>Click a round on the graph above to view detailed statistics.</p>
											
							</div>
						
						</div>
						
						<div style="float: right;">
						
							<div id="trackingChartFour" style="width: 450px; height: 240px;">
			
								<p>Click a round on the graph above to view detailed statistics.</p>
											
							</div>				
												
						</div>
						
						<div class="floatEnder"></div>
						
						<p>&nbsp;</p>
						<p><strong>The pie chart above right will also change based on the round selected on the first graph</strong>.</p>
						<p>&nbsp;</p>
						<p><strong>Click on a section of either pie chart to expand that section for easier viewing</strong>. You can also right mouse click on each pie chart and choose to view it in 2D and enable rotation. Once rotation is enabled, you can left click and hold anywhere on the chart and rotate it with the mouse.</p>
							
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>