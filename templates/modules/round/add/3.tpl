
			<h1>Your round at {$club.name} has been added!</h1>
			

							<h3>Course: {$course.name}</h3>
							<h3>Tee: {$tee.colour} Tee</h3> 
							<p>&nbsp;</p>
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
					<div id="example-custom" style="text-align: center;"></div>
				    {literal}
				    <script type="text/javascript">
				     twttr.anywhere(function (T) {
				       T("#example-custom").tweetBox({
				         'counter' : false,
				         'height'  : 100,
				         'width'   : 400,
				         'label'   : "Share your score on Twitter",
				         'defaultContent' : "I just scored {/literal}{$round.totalscore}{literal} at {/literal}{$course.name}{literal}. www.lovegolf.co.uk @we_lovegolf",
				       });
				     });
				    </script>
				    {/literal}
					<p>&nbsp;</p>
					
					<p style="text-align: center;"><a href="/tracking-centre/"><img class="margRight" src="/tracker/wl/lovegolf/images/but-visit-tracking.png" height="30" width="210" alt="Visit tracking centre" /></a><a href="/tracking/edit-scorecard/{$round.roundid}/"><img class="margRight" src="/tracker/wl/lovegolf/images/but-edit-round.png" height="30" width="210" alt="Edit this round" /></a><a href="/tracker/round/add/"><img src="/tracker/wl/lovegolf/images/but-add-another-round.png" height="30" width="210" alt="Add another round" /></a></p>
						
					<p style="text-align: center;"><img class="margRight" src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /><img class="margRight" src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
