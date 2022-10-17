			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Handicap</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="first"><a href="/tracking-centre/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li class="current"><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Course statistics</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<script type="text/javascript">
					{literal}

						$(function() {
							chart('MSCombiDY2D', '/tracker/statistics/lastrounds-handicap/', 'handicapChartOne', 690, 400);
						});
						
					{/literal}
					</script>
				
					<div class="trackingBodyContent">
					
						<div class="trackingLeftArea">
						
							<div class="leftAreaHolder">
			
								<div class="leftTitleBar" id="blue">
								
									<h1>Handicap overview:</h1>
									
								</div>
								
								<div class="leftBox">
					
									<div class="lbProfileImage">
									
										<p>Your current handicap is:</p>
										{if $handicap.updated}
										<p>&nbsp;</p>
										<p><span>Updated {$handicap.updated|date_format:"%d/%m/%Y"}</span></p>
										{/if}
										<p>&nbsp;</p>
										<p><span>After {$numhandicaptracked|default:0} round{if $numhandicaptracked <> 1}s{/if}</span></p>
									
									</div>
									
									<div class="lbHandicapHolder">
									
										<div class="lbHandicapBox">
										
											<h1>{if $currentuser.handicappending}?{else}{$currentuser.handicap|number_format}{/if}</h1>
										
										</div>
										
										<p>{if $currentuser.handicappending}Pending{else}({$handicap.current|number_format:1}){/if}</p>
																		
									</div>
									
									<div class="floatEnder"></div>
								
								</div>
														
								<div class="leftBox" id="noPadding">
								
									{if $handicap.min}
									<div class="leftBoxSub">
									
										<p>Lowest handicap: <span><span><span>{$handicap.min|number_format}</span></span></span></p>
										
									</div>
									{/if}
									
									{if $handicap.max}
									<div class="leftBoxSub">
									
										<p>Highest handicap: <span><span><span>{$handicap.max|number_format}</span></span></span></p>
										
									</div>
									{/if}
									
									{if $handicap.maxreduction}
									<div class="leftBoxSub" id="noBorder3">
									
										<p>Largest reduction: <span><span><span>{$handicap.maxreduction|number_format:1}</span></span></span></p>
										
									</div>
									{/if}
								
								</div>
								
								<div class="leftBoxBase">
					
									<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
											
								</div>
								
							</div>
							
						</div>
						
						<div class="trackingRightArea">
						
							<h1>Handicap progress</h1>
							<p>The chart below shows you a snapshot of the last 10 rounds that have effected your handicap.</p>
							<p><strong>Rounds where your handicap was not tracked are shown in grey</strong>.</p>
							<p>&nbsp;</p>
													
							<div id="handicapChartOne" style="width: 690px; height: 400px;">

							</div>
						
						</div>
						
						<div class="floatEnder"></div>
					
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>