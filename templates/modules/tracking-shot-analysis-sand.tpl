			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Shot analysis - Sand Saves</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="first"><a href="/tracking-centre/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li class="current"><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Course statistics</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<div class="trackingBodyContent">
					
						<div class="trackingLeftArea">
						
							<div class="leftAreaHolder">
			
								<div class="leftTitleBar" id="blue">
								
									<h1>Analyse your shots:</h1>
									
								</div>
								
								<div class="leftBox" id="noPadding">
								
									<ul id="catMenu">
					
										<li><a href="/tracking/shot-analysis-fir/">Tee Shots (FIR)</a></li>
										<li><a href="/tracking/shot-analysis-gir/">Approach Shots (GIR)</a></li>
										<li class="current"><a href="/tracking/shot-analysis-sand/">Sand Saves</a></li>
										<li><a href="/tracking/shot-analysis-up-down/">Up & Downs</a></li>
										<li><a href="/tracking/shot-analysis-putts/">Putts</a></li>
										<li><a href="/tracking/shot-analysis-penalties/">Penalties</a></li>
									
									</ul>
								
								</div>
								
								<div class="leftBoxBase">
					
									<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
											
								</div>
								
							</div>
							
							{include file="boxes/products.tpl"}
							
						</div>
						
						<div class="trackingRightArea">
						
							<h1>Sand save attempts</h1>
							
							<div class="sandShotLocation">
							
								<div class="sandSLHolder" id="miss">
								
									<p>Miss</p>
									
									{math assign="sumtotalsandsavemiss" equation="x - y" x=$useraverage.sumtotalsandsave|default:0 y=$useraverage.sumtotalsandsavehit|default:0}
									{math assign="percent" equation="x / y * 100" x=$sumtotalsandsavemiss|default:0 y=$useraverage.sumtotalsandsave|default:0.00001}
									<h1>{$sumtotalsandsavemiss|default:0|round:1} <small>({$percent|default:0|round:1}%)</small></h1>
								
								</div>
								
								<div class="sandSLHolder" id="hit">
								
									<p>Hit</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.sumtotalsandsavehit|default:0 y=$useraverage.sumtotalsandsave|default:0.00001}
									<h1>{$useraverage.sumtotalsandsavehit|default:0|round:1} <small>({$percent|default:0|round:1}%)</small></h1>
								
								</div>
								
								<div class="sandSLHolder" id="attempt">
								
									<p>Attempts</p>
									<h1>{$useraverage.sumtotalsandsave|round:1}</h1>
								
								</div>
							
							</div>
							
							<h1>Your last 10 rounds</h1>
							<p>The chart below only shows rounds where extra stats were added.</p>
							<p>&nbsp;</p>
							
							<script type="text/javascript">
							{literal}
	
								$(function() {
									chart('MSLine', '/tracker/statistics/lastrounds-sandsave/', 'performanceChartOne', 685, 375);
								});						
								
							{/literal}
								
							</script>
										
							<div id="performanceChartOne">
			
											
							</div>
							
							<p>&nbsp;</p>
							<h1>Statistics</h1>
							<p>The data below only shows rounds where extra stats were added and does not include regular up & downs. Up & downs can be viewed <a href="/tracking/shot-analysis-up-down/">here</a>.</p>
							<p>&nbsp;</p>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
							  <tr class="scTop">
							    <td><p>Statistics</p></td>
							    <td><p>Data</p></td>
							    <td style="width: 100px"><p>Rounds so far</p></td>
							    <td><p>Average per round</p></td>
							  </tr>
							  {math assign="holesplayed" equation="x * y" x=$useraverage.numrounds y=18}
							  <tr class="scEntry">
							    <td><p>Sand saves attempted</p></td>
							    <td><p>{$useraverage.sumtotalsandsave|default:0} / {$holesplayed}</p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalsandsave|default:0 y=18}
							    <td><p>{$useraverage.totalsandsave|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Sand saves hit</p></td>
								<td><p>{$useraverage.sumtotalsandsavehit|round:1} / {$useraverage.sumtotalsandsave|round:1}</p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalsandsavehit|default:0 y=$useraverage.totalsandsave|default:0.00001}
							    <td><p>{$useraverage.totalsandsavehit|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Sand saves missed</p></td>
								{math assign="sumtotalsandsavemiss" equation="x - y" x=$useraverage.sumtotalsandsave|default:0 y=$useraverage.sumtotalsandsavehit|default:0}
								<td><p>{$sumtotalsandsavemiss|round:1} / {$useraverage.sumtotalsandsave|round:1}</p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
								{math assign="percent" equation="x / y * 100" x=$sumtotalsandsavemiss|default:0 y=$useraverage.totalsandsave|default:0.00001}
							    <td><p>{$sumtotalsandsavemiss|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							</table>
							
						</div>
						
						<div class="floatEnder"></div>
					
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>