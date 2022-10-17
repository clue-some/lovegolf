
						<div class="trackingLeftArea">
						
							<div class="leftAreaHolder">
			
								<div class="leftTitleBar" id="green">
								
									<h1>Your statistics:</h1>
									
								</div>
								
								<div class="leftBox" id="noPadding">
									
									<div class="leftBoxSub">
									
										<p>Average Score: <span><span>{$useraverage.totalscore|default:0|number_format}</span> ({$useraverage.totalscorediff})</span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Front 9: <span><span>{$useraverage.totalscorefront9|default:0|number_format}</span> ({$useraverage.totalscorefront9diff})</span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Back 9: <span><span>{$useraverage.totalscoreback9|default:0|number_format}</span> ({$useraverage.totalscoreback9diff})</span></p>
										
									</div>
									
									<div class="leftBoxSub">
										
										{if $useraverage.possiblefir}
										{math assign="percent" equation="x / y * 100" x=$useraverage.totalfir|default:0 y=$useraverage.possiblefir|default:0}
										{/if}
										<p>FIR: <span><span>{$useraverage.totalfir|default:0|number_format} of {$useraverage.possiblefir|default:0|number_format}</span> ({$percent|number_format}%)</span></p>
										
									</div>
									
									<div class="leftBoxSub">

										{math assign="percent" equation="x / 18 * 100" x=$useraverage.totalgir|default:0}
										<p>GIR: <span><span>{$useraverage.totalgir|default:0|number_format} of 18</span> ({$percent|number_format}%)</span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Putts: <span><span>{$useraverage.totalputts|default:0|number_format}</span></span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Penalties: <span><span>{$useraverage.totalpenalties|default:0|number_format}</span></span></p>
										
									</div>

									<div class="leftBoxSub">
									
										<p>Last played: <span><span><span>{$lastround.date|date_format:"%d/%m/%Y"}</span></span></span></p>
										
									</div>
									
									<div class="leftBoxBase">
					
										<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
												
									</div>
																	
								</div>
								
							</div>


							<div class="leftAreaHolder">
			
								<div class="leftTitleBar" id="blue">
								
									<h1>Course statistics:</h1>
									
								</div>
								
								<div class="leftBox" id="noPadding">

									<div class="leftBoxSub">
									
										<p>Average Score: <span><span>{$courseaverage.totalscore|number_format}</span> (Par {$courseaverage.totalpar|number_format})</span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Front 9: <span><span>{$courseaverage.totalscorefront9|number_format}</span> (Par {$courseaverage.totalparfront9|number_format})</span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Back 9: <span><span>{$courseaverage.totalscoreback9|number_format}</span> (Par {$courseaverage.totalparback9|number_format})</span></p>
										
									</div>
									
									<div class="leftBoxSub">

										{math assign="percent" equation="x / y * 100" x=$courseaverage.totalfir y=$courseaverage.possiblefir}
										<p>FIR: <span><span>{$courseaverage.totalfir|number_format} of {$courseaverage.possiblefir|number_format}</span> ({$percent|number_format}%)</span></p>
										
									</div>
									
									<div class="leftBoxSub">

										{math assign="percent" equation="x / 18 * 100" x=$courseaverage.totalgir}
										<p>GIR: <span><span>{$courseaverage.totalgir|number_format} of 18</span> ({$percent|number_format}%)</span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Putts: <span><span>{$courseaverage.totalputts|number_format}</span></span></p>
										
									</div>
									
									<div class="leftBoxSub">
									
										<p>Penalties: <span><span>{$courseaverage.totalpenalties|number_format}</span></span></p>
										
									</div>
									
									<div class="leftBoxBase">
					
										<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base-white.gif" height="8" width="210" alt="" /></p>
												
									</div>

								</div>
								
							</div>
													
						</div>
						
						<div class="trackingRightArea">
												
							<h1>{$course.name}</h1>
							
							{if $useraverage.numrounds > $useraverage.numroundswithstats}
							<p class="message">WARNING: {$useraverage.numroundswithstats} out of {$useraverage.numrounds} rounds have statistics recorded for this course. <br /><a href="/tracking/view-scorecards/">Enter advanced statistics for these rounds</a>.</p>
							{/if}
							
							<p>The chart below shows your chosen course.</p>
							
							<script type="text/javascript">
							{literal}
		
								$(function() {
									chart('MSLine', '/tracker/statistics/course-average-strokes/{/literal}{$course.courseid}{literal}/', 'statisticsChartOne', 690, 400);
									chart('MSLine', '/tracker/statistics/course-average-putts/{/literal}{$course.courseid}{literal}/', 'statisticsChartTwo', 690, 400);
								});
								
							{/literal}
							</script>							
														
							<div id="statisticsChartOne">
												
							</div>

							<div id="statisticsChartTwo">
												
							</div>
						
						</div>
						
						<div class="floatEnder"></div>			