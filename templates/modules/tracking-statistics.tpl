			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - Statistics</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="first"><a href="/tracking-centre/">Tracking centre</a></li>
					<li><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li class="current"><a href="/tracking/statistics/">Course statistics</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<div class="trackingBodyContent">
					
						{if $usercourses}
					
						<form action="/tracking/statistics/" method="post">
						<div class="courseFilterFloat">
							<h3>Results per page:</h3>
							<div class="addRoundSelectArea">
								<p>
									<select name="resultsperpage">
										<option value="10"{if $resultsperpage == "10"} selected="selected"{/if}>10</option>
										<option value="20"{if $resultsperpage == "20"} selected="selected"{/if}>20</option>
										<option value="50"{if $resultsperpage == "50"} selected="selected"{/if}>50</option>
										<option value="10000"{if $resultsperpage == "10000"} selected="selected"{/if}>- All -</option>
									</select>
								</p>
							</div>
						</div>
						<div class="courseFilterFloatButton">
							<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-filter-results.png" height="30" width="210" alt="Filter results" /></p>
							<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						</div>
						</form>
						<div class="floatEnder"></div>
						
						<p>&nbsp;</p>
						<div class="courseNumberFloat">
							<p>{* Currently viewing {$resultsdisplayed} of {$results} course{if $results != 1}s{/if} *}</p>
						</div>
						<div class="coursePageFloat">
							<p>Page:
							{section name="page" loop=$pages}
								{if $pages[page].enabled}
								{if $pages[page].number > 1 && $pages[page].name|is_numeric}|{/if}
								<a href="/tracking/statistics/{if $pages[page].number > 1}{$pages[page].number}/{/if}">
								{/if}
								{$pages[page].name|htmlentities}
								{if $pages[page].enabled}
								</a>
								{/if}
							{/section}						
							</p>
						</div>
						<div class="floatEnder"></div>

						<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
						  <tr class="scTop">
						    <td><p>Course</p></td>
						    <td><p>Rounds</p></td>
						    <td><p>Course Average</p></td>
						    <td><p>Your Average</p></td>
						    <td><p>Last Played</p></td>
						    <td><p>Last Score</p></td>
						    <td class="tools"><p>Stats</p></td>
						  </tr>
						  {foreach name="usercourse" item="usercourse" from=$usercourses}
						  <tr class="{cycle values="scEntry,scAlt"}">
						    <td><p><a href="/club/{$usercourse.cluburlname}/course/{$usercourse.urlname}/{$usercourse.courseid}/">{$usercourse.clubname}{if $usercourse.name != $usercourse.clubname} / {$usercourse.name}{/if}</a></p></td>
						    <td><p>{$usercourse.roundsplayed}</p></td>
						    <td><p>{$usercourse.courseaverage.totalscore|default:0|number_format}</p></td>
						    <td><p>{$usercourse.useraverage.totalscore|default:0|number_format}</p></td>
						    <td><p>{$usercourse.lastround.date|date_format:"%d/%m/%Y"}</p></td>
						    <td><p>{$usercourse.lastround.totalscore}</p></td>
						    <td><p><a href="#" class="view-course-link" courseid="{$usercourse.courseid}"><img src="/tracker/images/but-tracking-view.gif" height="17" width="19" alt="View stats" /></a></p></td>
						  </tr>
						  {/foreach}
						</table>
						
						<div class="courseNumberFloat">
							<p>{* Currently viewing {$resultsdisplayed} of {$results} course{if $results != 1}s{/if} *}</p>
						</div>
						<div class="coursePageFloat">
							<p>Page:
							{section name="page" loop=$pages}
								{if $pages[page].enabled}
								{if $pages[page].number > 1 && $pages[page].name|is_numeric}|{/if}
								<a href="/tracking/statistics/{if $pages[page].number > 1}{$pages[page].number}/{/if}">
								{/if}
								{$pages[page].name|htmlentities}
								{if $pages[page].enabled}
								</a>
								{/if}
							{/section}						
							</p>
						</div>
						
						<div class="floatEnder"></div>
						
						<div id="ajaxRound">
						
						</div>
						
						{else} {* No courses available as no rounds have been added *}
						
						<p>No courses available.</p>
						
						{/if}
						
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>