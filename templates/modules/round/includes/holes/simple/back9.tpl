						<div style="margin-bottom: 10px;">
							<h2>Enter your scores ({$tee.colour} tee, back 9, no extra stats):</h2>
						</div>
						
						{include file="boxes/stableford-box.tpl"}
						
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
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
{assign var="holexdistance" value="hole`$smarty.section.hole.index`yards"}
								<td><p>{$tee.$holexdistance}</p></td>
{/section}								
							    <td><p>{$tee.totalyardsback9}</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>SI:</p></td>
{section name=hole loop=19 start=10}
{assign var="holexsi" value="hole`$smarty.section.hole.index`si"}
								<td><p>{$tee.$holexsi}</p></td>
{/section}
								<td><p>&nbsp;</p></td>
							  </tr>
							  <tr class="scDetails">
								<td><p>Par:</p></td>
{section name=hole loop=19 start=10}
{assign var="holexpar" value="hole`$smarty.section.hole.index`par"}
								<td><p>{$tee.$holexpar}</p></td>
{/section}
                                <td><p>{$tee.totalparback9}</p></td>
							  </tr>
							  <tr class="scEntry">
								<td><p>Score:</p></td>
{section name=hole loop=19 start=10}
{assign var="holexpar" value="hole`$smarty.section.hole.index`par"}
								<td><p><input name="hole{$smarty.section.hole.index}score" type="text" class="scEntryForm" /></p></td>
{/section}
								<td><p>--</p></td>
							  </tr>
							</table>

{include file="modules/round/includes/comments.tpl"}