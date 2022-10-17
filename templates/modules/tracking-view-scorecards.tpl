<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
			<div class="mainAreaContentFull">
				
				<div class="addRoundTabButton">
				
					<p><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-new-round-top-tab.gif" height="32" width="125" alt="Add new round" /></a></p>
				
				</div>
				
				<h1>Tracking centre - View scorecards</h1>
				<p>&nbsp;</p>
				
				<ul id="trackingMenu">
			
					<li class="first"><a href="/tracking-centre/">Tracking centre</a></li>
					<li class="current"><a href="/tracking/view-scorecards/">View scorecards</a></li>
					<li><a href="/tracking/shot-analysis/">Shot analysis</a></li>
					<li><a href="/tracking/handicap/">Handicap</a></li>
					<li><a href="/tracking/statistics/">Course statistics</a></li>
				
				</ul>
				
				<div class="trackingBody">
				
					<div class="trackingBodyContent">
					
						{if $usercourses}
						
						<form action="/tracking/view-scorecards/" method="post">
						<div class="courseFilterFloat">
							<h3>Filter by club / course:</h3>
							<div class="addRoundSelectArea">
								<p>
								<select name="courseid">
									<option value="0"{if $selectedcourseid == "0"} selected="selected"{/if}>- All -</option>
									{section name="usercourse" loop=$usercourses}
										<option value="{$usercourses[usercourse].courseid}" {if $selectedcourseid == $usercourses[usercourse].courseid} selected="selected"{/if}>{$usercourses[usercourse].clubname}{if $usercourses[usercourse].clubname != $usercourses[usercourse].name} / {$usercourses[usercourse].name}{/if}</option>
									{/section}
								</select>
								</p>
							</div>
						</div>
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
						<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-filter-results.png" height="30" width="210" alt="Filter results" /></p>
						<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						</form>
						<div class="floatEnder"></div>
						
						{if $roundresults}
						
						<p>&nbsp;</p>
						<div class="courseNumberFloat">
							<p>Currently viewing {$resultsdisplayed} of {$results} round{if $results != 1}s{/if}</p>
						</div>
						<div class="coursePageFloat">
							<p>Page:
							{section name="page" loop=$pages}
								{if $pages[page].enabled}
								{if $pages[page].number > 1 && $pages[page].name|is_numeric}|{/if}
								<a href="/tracking/view-scorecards/{if $pages[page].number > 1}{$pages[page].number}/{/if}">
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
						    <td><p>Date</p></td>
						    <td><p>Course</p></td>
						    <td><p>Tee</p></td>
						    <td><p>Par</p></td>
						    <td><p>Yards</p></td>
						    <td><p>SSS</p></td>
						    <td><p>Score</p></td>
						    <td><p>Points</p></td>
						    <td><p><span><a class='example5' href="/tracker/help-handicap-tracked.php">Hcp</a></span></p></td>
						    <td class="tools"><p>View</p></td>
						    <td class="tools"><p>Edit</p></td>
						    <td class="tools"><p>Delete</p></td>
						  </tr>
						  {foreach name="roundresult" item="roundresult" from=$roundresults}
						  <tr class="{cycle values="scEntry,scAlt"}">
						    <td><p>{$roundresult.date|date_format:"%d/%m/%Y"}</p></td>
						    <td><p>{$roundresult.clubname}{if $roundresult.coursename != $roundresult.clubname} / {$roundresult.coursename}{/if}</p></td>
						    <td><p>{$roundresult.colour}</p></td>
						    <td><p>{$roundresult.totalpar}</p></td>
						    <td><p>{$roundresult.totaldistance}</p></td>
						    <td><p>{$roundresult.sss}</p></td>
						    <td><p>{$roundresult.totalscore}</p></td>
						    <td><p>{$roundresult.totalpoints}</p></td>
						    <td><p>{if $roundresult.trackhandicap}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="18" alt="No" />{/if}</p></td>
						    <td><p><a href="#round_{$roundresult.roundid}" class="view-round-link" roundid="{$roundresult.roundid}"><img src="/tracker/images/but-tracking-view.gif" height="17" width="19" alt="View round" /></a></p></td>
						    <td><p><a href="/tracking/edit-scorecard/{$roundresult.roundid}/"><img src="/tracker/images/but-tracking-edit.gif" height="17" width="19" alt="Edit round" /></a></p></td>
						    <td><p><a href="/tracking/delete-scorecard/{$roundresult.roundid}/" onclick="return confirm('Are you sure you wish to delete this scorecard? This can not be un-done.');"><img src="/tracker/images/but-tracking-delete.gif" height="17" width="19" alt="Delete round" /></a></p>
						    </p></td>
						  </tr>
						  {/foreach}
						</table>

						<div class="courseNumberFloat">
							<p>Currently viewing {$resultsdisplayed} of {$results} round{if $results != 1}s{/if}</p>
						</div>
						<div class="coursePageFloat">
							<p>Page:
							{section name="page" loop=$pages}
								{if $pages[page].enabled}
								{if $pages[page].number > 1 && $pages[page].name|is_numeric}|{/if}
								<a href="/tracking/view-scorecards/{if $pages[page].number > 1}{$pages[page].number}/{/if}">
								{/if}
								{$pages[page].name|htmlentities}
								{if $pages[page].enabled}
								</a>
								{/if}
							{/section}						
							</p>
						</div>
						<div class="floatEnder"></div>
						<p>&nbsp;</p>
						
						{else} {* No results found - should not be possible! *}
						
						<p>No rounds found.</p>
						
						{/if}
						
						<div id="ajaxRound">
						
						</div>
						
						{else} {* No rounds added*}
						
						<p>No rounds added.</p>
						
						{/if}
														
					</div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-full.gif" height="6" width="960" alt="" /></p>
			
			</div>