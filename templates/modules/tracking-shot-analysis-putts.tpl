			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Shot analysis - Putts</h1>
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
										<li><a href="/tracking/shot-analysis-sand/">Sand Saves</a></li>
										<li><a href="/tracking/shot-analysis-up-down/">Up & Downs</a></li>
										<li class="current"><a href="/tracking/shot-analysis-putts/">Putts</a></li>
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
						
							<h1>Your last 10 rounds</h1>
							<p>The chart below only shows rounds where extra stats were added.</p>
							<p>&nbsp;</p>
							
							<script type="text/javascript">
							{literal}
	
								$(function() {
									chart('MSLine', '/tracker/statistics/lastrounds-putts/', 'performanceChartOne', 685, 375);
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
							    <td><p>Total putts</p></td>
							    <td><p>{$useraverage.sumtotalputts|default:0} <!-- / {$useraverage.sumtotalscore|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalputts|default:0 y=$useraverage.totalscore|default:0}
							    <td><p>{$useraverage.totalputts|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Average per round</p></td>
								<td><p>{$useraverage.totalputts|default:0|round:1}</p></td>
							    <td><p>{$useraverage.numrounds} <!-- ({$useraverageall.numrounds}) --></p></td>
							    <td><p>--</p></td>
							  </tr>
							  <tr class="scEntry">
							   	<td><p>Average per hole</p></td>
							   	{math assign="perround" equation="x / 18" x=$useraverage.totalputts}
								<td><p>{$perround|default:0|round:1}</p></td>
							    <td><p>{$useraverage.numrounds} <!-- ({$useraverageall.numrounds}) --></p></td>
							    <td><p>--</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Lowest round putts</p></td>
								<td><p>{$userbest.totalputts|default:0|round:1}</p></td>
							    <td><p>{$useraverage.numrounds} <!-- ({$useraverageall.numrounds}) --></p></td>
							    <td><p>--</p></td>
							  </tr>
							  <tr class="scEntry">
							   	<td><p>Highest round putts</p></td>
								<td><p>{$userworst.totalputts|default:0|round:1}</p></td>
							    <td><p>{$useraverage.numrounds} <!-- ({$useraverageall.numrounds}) --></p></td>
							    <td><p>--</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Front 9 putts</p></td>
							    <td><p>{$useraverage.sumtotalputtsfront9|default:0} <!-- / {$useraverage.sumtotalscorefront9|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalputtsfront9|default:0 y=$useraverage.totalscorefront9|default:0}
							    <td><p>{$useraverage.totalputtsfront9|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Back 9 putts</p></td>
							    <td><p>{$useraverage.sumtotalputtsback9|default:0} <!-- / {$useraverage.sumtotalscoreback9|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.totalputtsback9|default:0 y=$useraverage.totalscoreback9|default:0}
							    <td><p>{$useraverage.totalputtsback9|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>0 putts</p></td>
							    <td><p>{$useraverage.sumtotal0putts|default:0} <!-- / {$useraverage.sumtotalscore|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.total0putts|default:0 y=$useraverage.totalscore|default:0}
							    <td><p>{$useraverage.total0putts|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							   	<td><p>1 putts</p></td>
							    <td><p>{$useraverage.sumtotal1putts|default:0} <!-- / {$useraverage.sumtotalscore|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.total1putts|default:0 y=$useraverage.totalscore|default:0}
							    <td><p>{$useraverage.total1putts|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>2 putts</p></td>
							    <td><p>{$useraverage.sumtotal2putts|default:0} <!-- / {$useraverage.sumtotalscore|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.total2putts|default:0 y=$useraverage.totalscore|default:0}
							    <td><p>{$useraverage.total2putts|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scEntry">
							   	<td><p>3 putts</p></td>
							    <td><p>{$useraverage.sumtotal3putts|default:0} <!-- / {$useraverage.sumtotalscore|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.total3putts|default:0 y=$useraverage.totalscore|default:0}
							    <td><p>{$useraverage.total3putts|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>4+ putts</p></td>
							    <td><p>{$useraverage.sumtotal3putts|default:0} <!-- / {$useraverage.sumtotalscore|default:0} --></p></td>
							    <td><p>{$useraverage.numrounds} ({$useraverageall.numrounds})</p></td>
							    {math assign="percent" equation="x / y * 100" x=$useraverage.total3putts|default:0 y=$useraverage.totalscore|default:0}
							    <td><p>{$useraverage.total3putts|default:0|round:1} <!-- ({$percent|round:1}%) --></p></td>
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