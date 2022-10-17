			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="green">
				
					<h1>Daily statistics</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					<div class="leftBoxSub">
					
						<p>Rounds added today:</p>
						<p><span><span>{$ogtstatistics.scorecardsadded.today|number_format:0}</span> ({$ogtstatistics.scorecardsadded.alltime|number_format:0} so far)</span></p>
						
					</div>
					
					<div class="leftBoxSub">
					
						<p>Today's best round:</p>
						<p><span><span>{if $ogtstatistics.bestscore.today.score}{$ogtstatistics.bestscore.today.score|number_format:0}{else}N/A{/if}</span>{if $ogtstatistics.bestscore.today.username} [{$ogtstatistics.bestscore.today.firstname} {$ogtstatistics.bestscore.today.surname|truncate:1:""}]{/if}</span></p>
						
					</div>
					
					<div class="leftBoxSub">
					
						<p>Today's average round:</p>
						<p><span><span>{if $ogtstatistics.averagescore.today}{$ogtstatistics.averagescore.today|number_format:0}{else}N/A{/if}</span> ({$ogtstatistics.averagescore.alltime|number_format:0} overall)</span></p>
						
					</div>
					
					{if $ogtstatistics.popularcourses.today}
					<div class="leftBoxSub">
					
						<p>Today's most popular course:</p>
						<p>
							<span>
								<span>
									{if $ogtstatistics.popularcourses.today}<a href="/club/{$ogtstatistics.popularcourses.today.cluburlname}/course/{$ogtstatistics.popularcourses.today.courseurlname}/{$ogtstatistics.popularcourses.today.courseid}/">{$ogtstatistics.popularcourses.today.name}</a>{else}N/A{/if}
								</span>
								({$ogtstatistics.popularcourses.today.clubname}{if $ogtstatistics.popularcourses.today.county}, {$ogtstatistics.popularcourses.today.county}){/if}
							</span>
						</p>
						
					</div>
					{/if}
					
					<div class="leftBoxSub">
					
						<p>Total number of site users:</p>
						<p><span><span>{$ogtstatistics.users.total|number_format}</span></span></p>
						
					</div>
					
					{if $ogtstatistics.users.online}
					<div class="leftBoxSub" id="noBorder">
					
						<p>Number of users online now:</p>
						<p><span><span>{$ogtstatistics.users.online|number_format}</span></span></p>
						
					</div>
					{/if}
					
					<div class="leftBoxBase">
					
						<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
					</div>
				
				</div>
				
			</div>