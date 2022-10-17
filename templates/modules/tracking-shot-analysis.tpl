			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Shot analysis</h1>
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
										<li><a href="/tracking/shot-analysis-putts/">Putts</a></li>
										<li><a href="/tracking/shot-analysis-penalties/">Penalties</a></li>
									
									</ul>
								
								</div>
								
								<div class="leftBoxBase">
					
									<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
											
								</div>
								
							</div>
							
						</div>
						
						{math assign="holesplayed" equation="x * y" x=$useraverage.numrounds y=18}
						
						<div class="trackingRightArea">
						
							<h1>Overview</h1>
							<div class="ovStatBox" id="fir">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Tee Shots <span>(FIR)</span></p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverageadvanced.sumtotalfir|default:0} / {$useraverageadvanced.sumpossiblefir|default:0}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{$useraverageadvanced.totalfir|default:0|round:1}<br />average per round</p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/shot-analysis-fir/">View stats &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="gir">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Approach <span>(GIR)</span></p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverageadvanced.sumtotalgir|default:0} / {$holesplayed|default:0}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{$useraverageadvanced.totalgir|default:0|round:1}<br />average per round</p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/shot-analysis-gir/">View stats &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="sand">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Sand Saves</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverageadvanced.sumtotalsandsavehit|default:0|round:1} / {$useraverageadvanced.sumtotalsandsave|default:0|round:1}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{$useraverageadvanced.totalsandsavehit|default:0|round:1}<br />average per round</p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/shot-analysis-sand/">View stats &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="upDown">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Up & Downs</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverageadvanced.sumtotalupdownhit|default:0|default:0} / {$useraverageadvanced.sumtotalupdown|default:0|default:0}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{$useraverageadvanced.totalupdownhit|default:0|round:1}<br />average per round</p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/shot-analysis-up-down/">View stats &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="putts">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Putts</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverageadvanced.sumtotalputts|default:0}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{$useraverageadvanced.totalputts|default:0|round:1}<br />average per round</p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/shot-analysis-putts/">View stats &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="ovStatBox" id="penalties">
							
								<div class="ovSBContent">
								
									<div class="ovSBTitle">
									
										<p>Penalties</p>
									
									</div>
									
									<div class="ovSBResults">
									
										<h1>{$useraverageadvanced.sumtotalpenalties|default:0}</h1>
									
									</div>
									
									<div class="ovSBAverage">
									
										<p>{$useraverageadvanced.totalpenalties|default:0|round:1}<br />average per round</p>
									
									</div>
									
									<div class="ovSBLink">
									
										<p><a href="/tracking/shot-analysis-penalties/">View stats &raquo;</a></p>
									
									</div>
								
								</div>
							
							</div>
							
							<div class="floatEnder"></div>
							
							<p>&nbsp;</p>
							<h1>Your last 10 rounds</h1>
							<p>The chart below only shows rounds where extra stats were added.</p>
							<p>&nbsp;</p>
							{*<p><img src="/tracker/wl/lovegolf/images/im-generic-shot-analysis-chart.gif" height="275" width="685" /></p>*}
							<script type="text/javascript">
							{literal}
	
								$(function() {
									chart('MSColumn2D', '/tracker/statistics/lastrounds-advanced/', 'performanceChartOne', 685, 375);
								});						
								
							{/literal}						
							</script>							

							<div id="performanceChartOne">
							
							</div>
							
							
							<p>&nbsp;</p>
							<h1>Statistics</h1>
							<p>The data below includes all rounds played to date.</p>
							<p>&nbsp;</p>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
							  <tr class="scTop">
							    <td><p>Statistics</p></td>
							    <td><p>Data</p></td>
							    <td style="width: 100px"><p>Rounds so far</p></td>
							    <td><p>Average per round</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Total score</p></td>
							    <td><p>{$useraverage.sumtotalscore|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0}</p></td>
							    <td><p>{$useraverage.totalscore|default:0|round}</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Low round</p></td>
							    <td><p>{$userbest.totalscore|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>--</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>High round</p></td>
							    <td><p>{$userworst.totalscore|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0}</p></td>
							    <td><p>--</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Hole in ones</p></td>
								<td><p>{$useraverage.sumholeinones|default:0}</p></td>
								<td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>{$useraverage.holeinones|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Albatrosses</p></td>
							    <td><p>{$useraverage.sumalbatrosses|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0}</p></td>
							    <td><p>{$useraverage.albatrosses|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Eagles</p></td>
							    <td><p>{$useraverage.sumeagles|default:0}</p></td>
							    <td><p>{$useraverage.numrounds|default:0}</p></td>
							    <td><p>{$useraverage.eagles|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Birdies</p></td>
								<td><p>{$useraverage.sumbirdies|default:0}</p></td>
								<td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>{$useraverage.birdies|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Pars</p></td>
								<td><p>{$useraverage.sumpars|default:0}</p></td>
								<td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>{$useraverage.pars|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Bogeys</p></td>
								<td><p>{$useraverage.sumbogeys|default:0}</p></td>
								<td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>{$useraverage.bogeys|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scAlt">
								<td><p>Double bogeys</p></td>
								<td><p>{$useraverage.sumdoubles|default:0}</p></td>
								<td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>{$useraverage.doubles|default:0|round:1}</p></td>
							  </tr>
							  <tr class="scEntry">
							    <td><p>Triple Bogeys +</p></td>
								<td><p>{$useraverage.sumother|default:0}</p></td>
								<td><p>{$useraverage.numrounds|default:0}</p></td>
								<td><p>{$useraverage.other|default:0|round:1}</p></td>
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