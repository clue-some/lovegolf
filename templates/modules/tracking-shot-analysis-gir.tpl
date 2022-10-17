			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Shot analysis - Approach Shots (GIR)</h1>
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
										<li class="current"><a href="/tracking/shot-analysis-gir/">Approach Shots (GIR)</a></li>
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
						
							<h1>Approach shot positions</h1>
							
							<div class="girShotLocation">
							
								<div class="girSLHolder" id="flt">
								
									<p>Failed left</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmissleft|default:0 y=18}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="girSLHolder" id="fr">
								
									<p>Failed right</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmissright|default:0 y=18}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="girSLHolder" id="fs">
								
									<p>Failed short</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmissshort|default:0 y=18}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="girSLHolder" id="flo">
								
									<p>Failed long</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmisslong|default:0 y=18}
									<h1>{$percent|round:1}%</h1>

								
								</div>
								
								<div class="girSLHolder" id="slt">
								
									<p>Success left</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitleft|default:0 y=18}
									<h1>{$percent|round:1}%</h1>

								
								</div>
								
								<div class="girSLHolder" id="sr">
								
									<p>Success right</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitright|default:0 y=18}
									<h1>{$percent|round:1}%</h1>

								
								</div>
								
								<div class="girSLHolder" id="sp">
								
									<p>Success pin</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitpin|default:0 y=18}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="girSLHolder" id="ss">
								
									<p>Success short</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitshort|default:0 y=18}
									<h1>{$percent|round:1}%</h1>
								
								</div>
								
								<div class="girSLHolder" id="slo">
								
									<p>Success long</p>
									{math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitlong|default:0 y=18}
									<h1>{$percent|round:1}%</h1>
								
								</div>
							
							</div>
							
							<h1>Your last 10 rounds</h1>
							<p>The chart below only shows rounds where extra stats were added.</p>
							<p>&nbsp;</p>
							
							<script type="text/javascript">
							{literal}
	
								$(function() {
									chart('MSLine', '/tracker/statistics/lastrounds-gir/', 'performanceChartOne', 685, 375);
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
							  {math assign="holesplayed" equation="x * y" x=$useraverage.numrounds y=18}
							  <tr class="scEntry">
							    <td><p>Greens hit</p></td>
							    <td><p>{$useraverage.sumtotalgir|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgir|default:0 y=18}
							    <td><p>{$useraverage.totalgir|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Greens hit left</p></td>
							    <td><p>{$useraverage.sumtotalgirhitleft|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitleft|default:0 y=18}
							    <td><p>{$useraverage.totalgirhitleft|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Greens hit right</p></td>
							    <td><p>{$useraverage.sumtotalgirhitright|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitright|default:0 y=18}
							    <td><p>{$useraverage.totalgirhitright|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Greens hit pin</p></td>
							    <td><p>{$useraverage.sumtotalgirhitpin|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitpin|default:0 y=18}
							    <td><p>{$useraverage.totalgirhitpin|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Greens hit short</p></td>
							    <td><p>{$useraverage.sumtotalgirhitshort|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitshort|default:0 y=18}
							    <td><p>{$useraverage.totalgirhitshort|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Greens hit long</p></td>
							    <td><p>{$useraverage.sumtotalgirhitlong|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirhitlong|default:0 y=18}
							    <td><p>{$useraverage.totalgirhitlong|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Greens missed</p></td>
								{math assign="sumtotalgirmiss" equation="x - y" x=$holesplayed|default:0 y=$useraverage.sumtotalgir|default:0}
								{math assign="totalgirmiss" equation="x - y" x=$holesplayed|default:0 y=$useraverage.totalgir|default:0}
							    <td><p>{$sumtotalgirmiss|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$totalgirmiss|default:0 y=$holesplayed|default:0.00001}
							    <td><p>{$totalgirmiss|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Greens missed left</p></td>
							    <td><p>{$useraverage.sumtotalgirmissleft|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmissleft|default:0 y=18}
							    <td><p>{$useraverage.totalgirmissleft|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Greens missed right</p></td>
							    <td><p>{$useraverage.sumtotalgirmissright|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmissright|default:0 y=18}
							    <td><p>{$useraverage.totalgirmissright|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Greens missed short</p></td>
							    <td><p>{$useraverage.sumtotalgirmissshort|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmissshort|default:0 y=18}
							    <td><p>{$useraverage.totalgirmissshort|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Greens missed long</p></td>
							    <td><p>{$useraverage.sumtotalgirmisslong|default:0} / {$holesplayed|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalgirmisslong|default:0 y=18}
							    <td><p>{$useraverage.totalgirmisslong|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Par 3 greens hit</p></td>
							    <td><p>{$useraverage.sumtotalpar3greenhit|default:0} / {$useraverage.sumtotalpar3|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalpar3greenhit|default:0 y=$useraverage.totalpar3|default:0.00001}
							    <td><p>{$useraverage.totalpar3greenhit|default:0|round:1} <!-- {$useraverage.totalpar3|default:0|round:1} ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Par 3 greens missed</p></td>
							    <td><p>{$useraverage.sumtotalpar3greenmiss|default:0} / {$useraverage.sumtotalpar3|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0} ({$useraverageall.numrounds|default:0})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalpar3greenmiss|default:0 y=$useraverage.totalpar3|default:0.00001}
							    <td><p>{$useraverage.totalpar3greenmiss|default:0|round:1} <!-- {$useraverage.totalpar3|default:0|round:1} ({$percent|round:1}%) --></p></td>
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