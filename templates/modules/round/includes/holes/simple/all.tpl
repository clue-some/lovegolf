						<div style="margin-bottom: 10px;">
							<h2>Enter your scores ({$tee.colour} tee, 18 holes, no extra stats):</h2>
						</div>
						
						{include file="boxes/stableford-box.tpl"}
						
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
							  <tr class="scTop">
								<td><p>Hole:</p></td>
{section name=hole loop=10 start=1}
								<td><p>{$smarty.section.hole.index}</p></td>
{/section}
								<td><p>OUT</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>Yards:</p></td>
{section name=hole loop=10 start=1}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}
								<td><p>{$tee.$holedistance}</p></td>
{/section}								
							    <td><p>{$tee.totalyardsfront9}</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>SI:</p></td>
{section name=hole loop=10 start=1}
{assign var="holesi" value="hole`$smarty.section.hole.index`si"}
								<td><p>{$tee.$holesi}</p></td>
{/section}
								<td><p>&nbsp;</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>Par:</p></td>
{section name=hole loop=10 start=1}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
								<td><p>{$tee.$holepar}</p></td>
{/section}
                                <td><p>{$tee.totalparfront9}</p></td>
							  </tr>
							  <tr class="scEntry">
								<td><p>Score:</p></td>
{section name=hole loop=10 start=1}
{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
								<td><p><input id="{$holescore}" name="{$holescore}" type="text" class="scEntryForm" value="{$post.$holescore}" /></p></td>
{/section}
								<td><p><span class="scoreout">--</span></p></td>
							  </tr>
							  <tr class="scTop">
								<td><p>Hole:</p></td>
{section name=hole loop=19 start=10}
								<td><p>{$smarty.section.hole.index}</p></td>
{/section}
								<td><p>IN</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>Yards:</p></td>
{section name=hole loop=19 start=10}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}
								<td><p>{$tee.$holedistance}</p></td>
{/section}								
							    <td><p>{$tee.totalyardsback9}</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>SI:</p></td>
{section name=hole loop=19 start=10}
{assign var="holesi" value="hole`$smarty.section.hole.index`si"}
								<td><p>{$tee.$holesi}</p></td>
{/section}
								<td><p>&nbsp;</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>Par:</p></td>
{section name=hole loop=19 start=10}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
								<td><p>{$tee.$holepar}</p></td>
{/section}
                                <td><p>{$tee.totalparback9}</p></td>
							  </tr>
							  <tr class="scEntry">
								<td><p>Score:</p></td>
{section name=hole loop=19 start=10}
{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
								<td><p><input name="{$holescore}" id="{$holescore}" type="text" class="scEntryForm" value="{$post.$holescore}" /></p></td>
{/section}
								<td><p><span class="scorein">--</span></p></td>
							  </tr>
							</table>

					<input type="hidden" name="front9" value="true" />
					<input type="hidden" name="back9" value="true" />					
{include file="modules/round/includes/comments.tpl"}					
					