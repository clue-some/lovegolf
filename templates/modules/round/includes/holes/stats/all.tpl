<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
							<div style="float: left; width: 330px; margin-bottom: 10px;">
								<h2>Enter your scores ({$tee.colour} tee, 18 holes):</h2>
							</div>
							<div style="float: right; width: 380px; text-align: right; background: url(/tracker/wl/lovegolf/images/im-down-arrow.png) no-repeat 13px 2px; padding: 2px 0px 2px 0px; margin-bottom: 10px;">
								<p>For help entering extra stats, click the title of each section.</p>
							</div>
							<div class="floatEnder"></div>
							
							{include file="boxes/stableford-box.tpl"}
							
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							  <tr>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scTop">
										<td><p>Hole</p></td>
										<td><p>Yds</p></td>
										<td><p>SI</p></td>
										<td><p>Par</p></td>
										<td><p>Score</p></td>
									  </tr>
{section name=hole loop=10 start=1}
{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}{assign var="holesi" value="hole`$smarty.section.hole.index`si"}{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									  <tr class="scDetails">
										<td><p>{$smarty.section.hole.index}</p></td>
										<td><p>{$tee.$holedistance}</p></td>
										<td><p>{$tee.$holesi}</p></td>
										<td><p>{$tee.$holepar}</p></td>
										<td><p><input id="{$holescore}" name="{$holescore}" type="text" class="scEntryForm" value="{$post.$holescore}" /></p></td>
									  </tr>
{/section}
									  <tr class="scDetails">
										<td><p>OUT</p></td>
										<td><p>{$tee.totalyardsfront9}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalparfront9}</p></td>
										<td><p><span class="scoreout">--</span></p></td>
									  </tr>
									</table>
								</td>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scExtra">
										<td><p><a class='example5' href="/tracker/help-extra-stats-fir.php">FIR</a></p></td>
										<td><p><a class='example5' href="/tracker/help-extra-stats-gir.php">GIR</a></p></td>
										{*<td><p><a class='example5' href="/tracker/help-extra-stats-bunker.php">Bunker</a></p></td>*}
										<td><p><a class='example5' href="/tracker/help-extra-stats-up-down.php">Up & Down</a></p></td>
										<td><p><a class='example5' href="/tracker/help-extra-stats-sand.php">Sand Save</a></p></td>
										<td><p><a class='example5' href="/tracker/help-extra-stats-putts.php">Putts</a></p></td>
										<td><p><a class='example5' href="/tracker/help-extra-stats-penalties.php">Pens</a></p></td>
									  </tr>
{section name=hole loop=10 start=1}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
{assign var="holefir" value="hole`$smarty.section.hole.index`fir"}
{assign var="holefirposition" value="hole`$smarty.section.hole.index`firposition"}
{assign var="holegir" value="hole`$smarty.section.hole.index`gir"}
{assign var="holegirposition" value="hole`$smarty.section.hole.index`girposition"}
{assign var="holebunker" value="hole`$smarty.section.hole.index`bunker"}
{assign var="holesandsave" value="hole`$smarty.section.hole.index`sandsave"}
{assign var="holesandsavehit" value="hole`$smarty.section.hole.index`sandsavehit"}
{assign var="holeupdown" value="hole`$smarty.section.hole.index`updown"}
{assign var="holeupdownhit" value="hole`$smarty.section.hole.index`updownhit"}
{assign var="holeputts" value="hole`$smarty.section.hole.index`putts"}
{assign var="holepenalties" value="hole`$smarty.section.hole.index`penalties"}

{include file="modules/round/includes/holes/stats/hole.tpl"}
{/section}									  
									  <tr class="scDetails">
										<td><p><span class="firout">--</span></p></td>
										<td><p><span class="girout">--</span></p></td>
										{*<td><p><span class="bunkerout">--</span></p></td>*}
										<td><p><span class="updownout">--</span></p></td>
										<td><p><span class="sandsaveout">--</span></p></td>
										<td><p><span class="puttsout">--</span></p></td>
										<td><p><span class="penaltiesout">--</span></p></td>
									  </tr>									  

									</table>
								</td>
							  </tr>
							  <tr>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scTop">
										<td><p>Hole</p></td>
										<td><p>Yds</p></td>
										<td><p>SI</p></td>
										<td><p>Par</p></td>
										<td><p>Score</p></td>
									  </tr>
{section name=hole loop=19 start=10}
{assign var="holescore" value="hole`$smarty.section.hole.index`score"}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}{assign var="holesi" value="hole`$smarty.section.hole.index`si"}{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
									  <tr class="scDetails">
										<td><p>{$smarty.section.hole.index}</p></td>
										<td><p>{$tee.$holedistance}</p></td>
										<td><p>{$tee.$holesi}</p></td>
										<td><p>{$tee.$holepar}</p></td>
										<td><p><input id="{$holescore}" name="{$holescore}" type="text" class="scEntryForm" value="{$post.$holescore}" /></p></td>
									  </tr>
{/section}
									  <tr class="scDetails">
										<td><p>IN</p></td>
										<td><p>{$tee.totalyardsback9}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalparback9}</p></td>
										<td><p><span class="scorein">--</span></p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>OUT</p></td>
										<td><p>{$tee.totalyardsfront9}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalparfront9}</p></td>
										<td><p><span class="scoreout">--</span></p></td>
									  </tr>
									  <tr class="scDetails">
										<td><p>TOTAL</p></td>
										<td><p>{$tee.totalyards}</p></td>
										<td><p>&nbsp;</p></td>
										<td><p>{$tee.totalpar}</p></td>
										<td><p><span class="scoretotal">--</span></p></td>
									  </tr>
									</table>
								</td>
							    <td valign="top">
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
									  <tr class="scExtra">
										<td><p>FIR</p></td>
										<td><p>GIR</p></td>
										{*<td><p>Bunker</p></td>*}
										<td><p>Up & Down</p></td>
										<td><p>Sand Save</p></td>
										<td><p>Putts</p></td>
										<td><p>Pens</p></td>
									  </tr>
{section name=hole loop=19 start=10}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
{assign var="holefir" value="hole`$smarty.section.hole.index`fir"}
{assign var="holefirposition" value="hole`$smarty.section.hole.index`firposition"}
{assign var="holegir" value="hole`$smarty.section.hole.index`gir"}
{assign var="holegirposition" value="hole`$smarty.section.hole.index`girposition"}
{assign var="holebunker" value="hole`$smarty.section.hole.index`bunker"}
{assign var="holesandsave" value="hole`$smarty.section.hole.index`sandsave"}
{assign var="holesandsavehit" value="hole`$smarty.section.hole.index`sandsavehit"}
{assign var="holeupdown" value="hole`$smarty.section.hole.index`updown"}
{assign var="holeupdownhit" value="hole`$smarty.section.hole.index`updownhit"}
{assign var="holeputts" value="hole`$smarty.section.hole.index`putts"}
{assign var="holepenalties" value="hole`$smarty.section.hole.index`penalties"}

{include file="modules/round/includes/holes/stats/hole.tpl"}
{/section}
									  <tr class="scDetails">
										<td><p><span class="firout">--</span></p></td>
										<td><p><span class="girout">--</span></p></td>
										{*<td><p><span class="bunkerout">--</span></p></td>*}
										<td><p><span class="updownout">--</span></p></td>
										<td><p><span class="sandsaveout">--</span></p></td>
										<td><p><span class="puttsout">--</span></p></td>
										<td><p><span class="penaltiesout">--</span></p></td>
									  </tr>									  
									  <tr class="scDetails">
										<td><p><span class="firin">--</span></p></td>
										<td><p><span class="girin">--</span></p></td>
										{*<td><p><span class="bunkerin">--</span></p></td>*}
										<td><p><span class="updownin">--</span></p></td>
										<td><p><span class="sandsavein">--</span></p></td>
										<td><p><span class="puttsin">--</span></p></td>
										<td><p><span class="penaltiesin">--</span></p></td>
									  </tr>									  
									  <tr class="scDetails">
										<td><p><span class="firtotal">--</span></p></td>
										<td><p><span class="girtotal">--</span></p></td>
										{*<td><p><span class="bunkertotal">--</span></p></td>*}
										<td><p><span class="updowntotal">--</span></p></td>
										<td><p><span class="sandsavetotal">--</span></p></td>
										<td><p><span class="puttstotal">--</span></p></td>
										<td><p><span class="penaltiestotal">--</span></p></td>
									  </tr>									  
									</table>
								</td>
							  </tr>
							</table>

					<input type="hidden" name="front9" value="true" />					
					<input type="hidden" name="back9" value="true" />
{include file="modules/round/includes/comments.tpl"}					