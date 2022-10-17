			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Shot analysis - Tee Shots (FIR)</h1>
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
					
										<li class="current"><a href="/tracking/shot-analysis-fir/">Tee Shots (FIR)</a></li>
										<li><a href="/tracking/shot-analysis-gir/">Approach Shots (GIR)</a></li>
										<li><a href="/tracking/shot-analysis-sand/">Sand Saves</a></li>
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
						
							<h1>Tee shot positions</h1>
							
							<div class="firShotLocation">
							
								<div class="firSLHolder" id="fl">
								
									<p>Failed left</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirmissleft|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="firSLHolder" id="fr">
								
									<p>Failed right</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirmissright|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="firSLHolder" id="fs">
								
									<p>Failed short</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirmissshort|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="firSLHolder" id="sl">
								
									<p>Success left</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitleft|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="firSLHolder" id="sr">
								
									<p>Success right</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitright|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>

								
								</div>
								
								<div class="firSLHolder" id="sc">
								
									<p>Success centre</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitcentre|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>

								
								</div>
								
								<div class="firSLHolder" id="ss">
								
									<p>Success short</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitshort|default:0 y=$useraverage.possiblefir|default:0.00001}
									<h1>{$percent|round:1}%</h1>

								
								</div>
							
							</div>
							
							<h1>Your last 10 rounds</h1>
							<p>The chart below only shows rounds where extra stats were added.</p>
							<p>&nbsp;</p>
							
							<script type="text/javascript">
							{literal}
	
								$(function() {
									chart('MSLine', '/tracker/statistics/lastrounds-fir/', 'performanceChartOne', 685, 375);
								});						
								
							{/literal}
								
							</script>
										
							<div id="performanceChartOne">
			
											
							</div>
						
							<p>&nbsp;</p>
							<h1>Statistics</h1>
							<p>The data below only shows rounds where extra stats were added.</p>
							<p>&nbsp;</p>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
							  <tr class="scTop">
							    <td><p>Statistics</p></td>
							    <td><p>Data</p></td>
							    <td style="width: 100px"><p>Rounds so far</p></td>
							    <td><p>Average per round</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Fairways hit</p></td>
							    <td><p>{$useraverage.sumtotalfir|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfir|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfir|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Fairways hit left</p></td>
							    <td><p>{$useraverage.sumtotalfirhitleft|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitleft|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirhitleft|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Fairways hit right</p></td>
							    <td><p>{$useraverage.sumtotalfirhitright|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitright|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirhitright|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Fairways hit centre</p></td>
							    <td><p>{$useraverage.sumtotalfirhitcentre|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitcentre|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirhitcentre|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Fairways hit short</p></td>
							    <td><p>{$useraverage.sumtotalfirhitshort|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirhitshort|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirhitshort|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Fairways missed</p></td>
								{math assign="sumtotalfirmiss" equation="x - y" x=$useraverage.sumpossiblefir|default:0 y=$useraverage.sumtotalfir|default:0}
								{math assign="totalfirmiss" equation="x - y" x=$useraverage.possiblefir|default:0 y=$useraverage.totalfir|default:0}
							    <td><p>{$sumtotalfirmiss|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$totalfirmiss|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$totalfirmiss|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Fairways missed left</p></td>
							    <td><p>{$useraverage.sumtotalfirmissleft|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirmissleft|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirmissleft|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Fairways missed right</p></td>
							    <td><p>{$useraverage.sumtotalfirmissright|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirmissright|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirmissright|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Fairways missed short</p></td>
							    <td><p>{$useraverage.sumtotalfirmissshort|default:0} / {$useraverage.sumpossiblefir|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalfirmissshort|default:0 y=$useraverage.possiblefir|default:0.00001}
							    <td><p>{$useraverage.totalfirmissshort|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Par 3 greens hit</p></td>
							    <td><p>{$useraverage.sumtotalpar3greenhit|default:0} / {$useraverage.sumtotalpar3|default:0}</p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalpar3greenhit|default:0 y=$useraverage.totalpar3|default:0.00001}
							    <td><p>{$useraverage.totalpar3greenhit|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Par 3 greens missed</p></td>
							    <td><p>{$useraverage.sumtotalpar3greenmiss|default:0} / {$useraverage.sumtotalpar3|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalpar3greenmiss|default:0 y=$useraverage.totalpar3|default:0.00001}
							    <td><p>{$useraverage.totalpar3greenmiss|default:0|round:1} <!-- ({$percent|round:0}%) --></p></td>
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