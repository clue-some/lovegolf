<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>						
						<div style="float: right; padding-top: 10px;">
							<p><a class='example5' href="/tracker/help-view-scorecards.php">Learn more about this scorecard</a></p>
						</div>
						
						<h1>{$round.name} {if $course.name}<small>({$course.name})</small>{/if}</h1>
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scDetails">
										<td><p>Date:</p></td>
										<td colspan="4"><p>{$round.date|date_format}</p></td>
										<td><p>Par</p></td>
										<td><p>{$round.totalpar}</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>Player A </p></td>
										<td colspan="4"><p>{$currentuser.firstname} {$currentuser.surname}</p></td>
										<td><p>SSS</p></td>
										<td><p>{$round.sss}</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>&nbsp;</p></td>
										<td><p>Yards</p></td>
										<td><p>Par</p></td>
										<td><p>SI</p></td>
										<td><p>Score</p></td>
										<td><p>Net</p></td>
										<td><p>Points</p></td>
									  </tr>
									  {section name=hole loop=10 start=1}
									  {assign var="holedistance" value="hole`$smarty.section.hole.index`distance"}
									  {assign var="holesi" value="hole`$smarty.section.hole.index`si"}
									  {assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									  {assign var="holescore" value="hole`$smarty.section.hole.index`score"}
									  {assign var="holescorenet" value="hole`$smarty.section.hole.index`scorenet"}
									  {assign var="holeallowance" value="hole`$smarty.section.hole.index`allowance"}
									  {assign var="holepoints" value="hole`$smarty.section.hole.index`points"}
									  <tr class="scDetails">
										<td><p>{$smarty.section.hole.index}</p></td>
										<td><p>{$round.$holedistance}</p></td>
										<td><p>{$round.$holepar}</p></td>
										<td><p>{$round.$holesi}</p></td>
										<td><p>{$round.$holescore}<sub>{$round.$holeallowance}</sub></p></td>
										<td><p>{$round.$holescorenet}</p></td>
										<td><p>{$round.$holepoints}</p></td>
									  </tr>
									  {/section}
									  <tr class="scDetails">
										<td><p>OUT</p></td>
										<td><p>{$round.totaldistancefront9}</p></td>
										<td><p>{$round.totalparfront9}</p></td>
										<td><p>--</p></td>
										<td><p>{$round.totalscorefront9}<sub>{$round.totalallowancefront9}</sub></p></td>
										<td><p>{$round.totalscorenetfront9}</p></td>
										<td><p>{$round.totalpointsfront9}</p></td>
									  </tr>
									</table>
									<div style="padding: 10px 10px 10px 5px;">
										<h2>Comments for this round:</h2>
										<p>{$round.comments}</p>
									</div>
								</td>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scDetails">
										<td colspan="7"><p>Weather: {if $primaryweather}{$primaryweather.name}{if $secondaryweather}, {$secondaryweather.name}{/if}{else}Not specified{/if}</p></td>
									  </tr>
									  <tr class="scDetails">
										<td colspan="7"><p>&nbsp;</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>&nbsp;</p></td>
										<td><p>Yards</p></td>
										<td><p>Par</p></td>
										<td><p>SI</p></td>
										<td><p>Score</p></td>
										<td><p>Net</p></td>
										<td><p>Points</p></td>
									  </tr>
									  {section name=hole loop=19 start=10}
									  {assign var="holedistance" value="hole`$smarty.section.hole.index`distance"}
									  {assign var="holesi" value="hole`$smarty.section.hole.index`si"}
									  {assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									  {assign var="holescore" value="hole`$smarty.section.hole.index`score"}
									  {assign var="holescorenet" value="hole`$smarty.section.hole.index`scorenet"}
									  {assign var="holeallowance" value="hole`$smarty.section.hole.index`allowance"}
									  {assign var="holepoints" value="hole`$smarty.section.hole.index`points"}
									  <tr class="scDetails">
										<td><p>{$smarty.section.hole.index}</p></td>
										<td><p>{$round.$holedistance}</p></td>
										<td><p>{$round.$holepar}</p></td>
										<td><p>{$round.$holesi}</p></td>
										<td><p>{$round.$holescore}<sub>{$round.$holeallowance}</sub></p></td>
										<td><p>{$round.$holescorenet}</p></td>
										<td><p>{$round.$holepoints}</p></td>
									  </tr>
									  {/section}
									  <tr class="scDetails">
										<td><p>IN</p></td>
										<td><p>{$round.totaldistanceback9}</p></td>
										<td><p>{$round.totalparback9}</p></td>
										<td><p>--</p></td>
										<td><p>{$round.totalscoreback9}<sub>{$round.totalallowanceback9}</sub></p></td>
										<td><p>{$round.totalscorenetback9}</p></td>
										<td><p>{$round.totalpointsback9}</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>OUT</p></td>
										<td><p>{$round.totaldistancefront9}</p></td>
										<td><p>{$round.totalparfront9}</p></td>
										<td><p>--</p></td>
										<td><p>{$round.totalscorefront9}<sub>{$round.totalallowancefront9}</sub></p></td>
										<td><p>{$round.totalscorenetfront9}</p></td>
										<td><p>{$round.totalpointsfront9}</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>TOTAL</p></td>
										<td><p>{$round.totaldistance}</p></td>
										<td><p>{$round.totalpar}</p></td>
										<td><p>--</p></td>
										<td><p>{$round.totalscore}<sub>{$round.totalallowance}</sub></p></td>
										<td><p>{$round.totalscorenet}</p></td>
										<td><p>{$round.totalpoints}</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>HANDICAP <br />BEFORE</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{if $currentuser.handicappending}TBC{else}{$round.handicapbefore|round} ({$round.handicapbefore|round:1}){/if}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>HANDICAP <br />AFTER</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{if $currentuser.handicappending}TBC{else}{$round.handicapafter|round} ({$round.handicapafter|round:1}){/if}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>NET</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$round.totalscorenet}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>POINTS</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$round.totalpoints}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>&nbsp;</p></td>
									  </tr>
									</table>
								</td>
							  </tr>
							</table>
							
							<p>&nbsp;</p>
											
							<h1>Scorecard overview:</h1>
								<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
								  <tr class="scTop">
									<td><p>Hole:</p></td>
									{section name=hole loop=10 start=1}
									<td><p>{$smarty.section.hole.index}</p></td>
									{/section}
								    <td><p>OUT</p></td>
									{section name=hole loop=19 start=10}
									<td><p>{$smarty.section.hole.index}</p></td>
									{/section}
								    <td><p>IN</p></td>
								    <td><p>TOTAL</p></td>
								  </tr>
								  <tr class="scEntry">
								    <td><p>Par</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									<td><p>{$round.$holepar}</p></td>
									{/section}
	                                <td><p>{$round.totalparfront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									<td><p>{$round.$holepar}</p></td>
									{/section}
									<td><p>{$round.totalparback9}</p></td>
								    <td><p>{$round.totalpar}</p></td>
								  </tr>
								  <tr class="scAlt">
								    <td><p>Yards</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holedistance" value="hole`$smarty.section.hole.index`distance"}
									<td><p>{$round.$holedistance}</p></td>
									{/section}								
								    <td><p>{$round.totaldistancefront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holedistance" value="hole`$smarty.section.hole.index`distance"}
									<td><p>{$round.$holedistance}</p></td>
									{/section}								
								    <td><p>{$round.totaldistanceback9}</p></td>
								    <td><p>{$round.totaldistance}</p></td>
								  </tr>
								  <tr class="scEntry">
								    <td><p>SI</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holesi" value="hole`$smarty.section.hole.index`si"}
									<td><p>{$round.$holesi}</p></td>
									{/section}
									<td><p>--</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holesi" value="hole`$smarty.section.hole.index`si"}
									<td><p>{$round.$holesi}</p></td>
									{/section}
									<td><p>--</p></td>
								    <td><p>--</p></td>
								  </tr>
								  <tr class="scExtra">
								    <td><p>Score</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
									<td><p>{$round.$holescore}</p></td>
									{/section}
									<td><p>{$round.totalscorefront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
									<td><p>{$round.$holescore}</p></td>
									{/section}
								    <td><p>{$round.totalscoreback9}</p></td>
								    <td><p>{$round.totalscore}</p></td>
								  </tr>
								  <tr class="scEntry">
								    <td><p>+/-</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holediff" value="hole`$smarty.section.hole.index`diff"}
									<td><p>{$round.$holediff}</p></td>
									{/section}
									<td><p>{$round.totaldifffront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holediff" value="hole`$smarty.section.hole.index`diff"}	
									<td><p>{$round.$holediff}</p></td>
									{/section}
								    <td><p>{$round.totaldiffback9}</p></td>
								    <td><p>{$round.totaldiff}</p></td>
								  </tr>
								  <tr class="scAlt">
								  	<td><p>FIR</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holefir" value="hole`$smarty.section.hole.index`fir"}
									{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									<td><p>{if $round.$holepar <= '3'}--{elseif $round.$holefir}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}</p></td>
									{/section}
									<td><p>{$round.totalfirfront9}/{$round.possiblefirfront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holefir" value="hole`$smarty.section.hole.index`fir"}
									{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									<td><p>{if $round.$holepar <= '3'}--{elseif $round.$holefir}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}</p></td>
									{/section}
									<td><p>{$round.totalfirback9}/{$round.possiblefirback9}</p></td>
								    <td><p>{$round.totalfir}/{$round.possiblefir}</p></td>
		  						  </tr>
								  <tr class="scEntry">
								    <td><p>GIR</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holegir" value="hole`$smarty.section.hole.index`gir"}
									<td><p>{if $round.$holegir}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}</p></td>
									{/section}
									<td><p>{$round.totalgirfront9}/9</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holegir" value="hole`$smarty.section.hole.index`gir"}
									<td><p>{if $round.$holegir}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}</p></td>
									{/section}
									<td><p>{$round.totalgirback9}/9</p></td>
								    <td><p>{$round.totalgir}/18</p></td>
								  </tr>
								  <tr class="scAlt">
								    <td><p>Putts</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holeputts" value="hole`$smarty.section.hole.index`putts"}
									<td><p>{$round.$holeputts}</p></td>
									{/section}
									<td><p>{$round.totalputtsfront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holeputts" value="hole`$smarty.section.hole.index`putts"}
									<td><p>{$round.$holeputts}</p></td>
									{/section}
								    <td><p>{$round.totalputtsback9}</p></td>
								    <td><p>{$round.totalputts}</p></td>
		  						  </tr>
								  <tr class="scEntry">
								    <td><p>Pens</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holepenalties" value="hole`$smarty.section.hole.index`penalties"}
									<td><p>{$round.$holepenalties}</p></td>
									{/section}
									<td><p>{$round.totalpenaltiesfront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holepenalties" value="hole`$smarty.section.hole.index`penalties"}
									<td><p>{$round.$holepenalties}</p></td>
									{/section}
								    <td><p>{$round.totalpenaltiesback9}</p></td>
								    <td><p>{$round.totalpenalties}</p></td>
		  						  </tr>
								  <tr class="scAlt">
								    <td><p>S/S</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holeupdown" value="hole`$smarty.section.hole.index`updown"}
									{assign var="holesandsave" value="hole`$smarty.section.hole.index`sandsave"}
									{assign var="holesandsavehit" value="hole`$smarty.section.hole.index`sandsavehit"}
									<td><p>{if $round.$holesandsave}{if $round.$holesandsavehit}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}{else}--{/if}</p></td>
									{/section}
									<td><p>{$round.totalsandsavehitfront9}/{$round.totalsandsavefront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holeupdown" value="hole`$smarty.section.hole.index`updown"}
									{assign var="holesandsave" value="hole`$smarty.section.hole.index`sandsave"}
									{assign var="holesandsavehit" value="hole`$smarty.section.hole.index`sandsavehit"}
									<td><p>{if $round.$holesandsave}{if $round.$holesandsavehit}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}{else}--{/if}</p></td>
									{/section}
									<td><p>{$round.totalsandsavehitback9}/{$round.totalsandsaveback9}</p></td>
								    <td><p>{$round.totalsandsavehit}/{$round.totalsandsave}</p></td>  						 
								  </tr>
								  <tr class="scEntry">
								    <td><p>U&amp;D</p></td>
									{section name=hole loop=10 start=1}
									{assign var="holeupdown" value="hole`$smarty.section.hole.index`updown"}
									{assign var="holeupdownhit" value="hole`$smarty.section.hole.index`updownhit"}
									<td><p>{if $round.$holeupdown}{if $round.$holeupdownhit}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}{else}--{/if}</p></td>
									{/section}
									<td><p>{$round.totalupdownhitfront9}/{$round.totalupdownfront9}</p></td>
									{section name=hole loop=19 start=10}
									{assign var="holeupdown" value="hole`$smarty.section.hole.index`updown"}
									{assign var="holeupdownhit" value="hole`$smarty.section.hole.index`updownhit"}
									<td><p>{if $round.$holeupdown}{if $round.$holeupdownhit}<img src="/tracker/images/im-tracking-tick.gif" height="17" width="18" alt="Yes" />{else}<img src="/tracker/images/im-tracking-cross.gif" height="17" width="15" alt="No" />{/if}{else}--{/if}</p></td>
									{/section}
									<td><p>{$round.totalupdownhitback9}/{$round.totalupdownback9}</p></td>
								    <td><p>{$round.totalupdownhit}/{$round.totalupdown}</p></td>
		  						  </tr>
								</table>
															