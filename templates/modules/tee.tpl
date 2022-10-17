<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
<h1>{$course.name} <span class="clubName">at {$club.name}</span></h1>

{if $tee.sss}
<div class="sssHolder">

	<p>{$tee.sss}</p>

</div>
{/if}

<h2>{$tee.colour} Tee</h2>

{if $tee.slope}
<h3>Slope</h3>
<p>{$tee.slope}</p>
{/if}

{if $tee.courserating}
<h3>Course Rating</h3>
<p>{$tee.courserating}</p>
{/if}


						<div class="addScorecardDetails">
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
							</table>
						
						</div>

						<div class="floatEnder"></div>
						
						<p>&nbsp;</p>
						
						<p>&nbsp;</p>
						
						<p><a href="/tracker/round/add/course/{$course.courseid}/"><img class="margRight" src="/tracker/wl/lovegolf/images/but-add-round.png" height="30" width="210" alt="Add a round" /></a><a href="/favourite/add/{$course.courseid}/"><img class="margRight" src="/tracker/wl/lovegolf/images/but-add-favourites.png" height="30" width="210" alt="Add course to favourites" /></a><a href="/club/{$club.urlname}/course/{$course.urlname}/print-tee/{$tee.teeid}/" target="_blank"><img src="/tracker/wl/lovegolf/images/but-print-scorecard.png" height="30" width="210" alt="Print scorecard" /></a></p>
						
						<p><img class="margRight" src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /><img class="margRight" src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /><img class="margRight" src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						
						<div style="float: left; width: 230px; padding-top: 50px;">
						
							<p><a href="/club/{$club.urlname}/course/{$course.urlname}/{$course.courseid}/"><img class="margRight" src="/tracker/wl/lovegolf/images/but-back-course.png" height="30" width="210" alt="Back to the course" /></a></p>
							<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
						
						</div>
				
						<div style="float: left; width: 470px;">
						
							{if $club.verified}
		
							<!-- This appears if the tees HAVE been verified -->	
							<div style="float: right; width: 270px; padding-top: 10px;">
							
								<p style="text-align: right;"><img src="/tracker/wl/lovegolf/images/im-tee-verified.gif" height="97" width="174" alt="VERIFIED! TEES CHECKED!" /></p>
								<p style="text-align: right;"><a class='example5' href="/tracker/verified-club-details.php?clubid={$club.clubid}">Learn more about club verification</a></p>
								<p>&nbsp;</p>
							
							</div>
							
							{else}
							
							<!-- This appears if the tees HAVEN'T been verified -->
							<div style="float: right; width: 400px; padding-top: 20px;">
							
								<h2 style="text-align: right;">Spot a problem?</h2>
								<p style="text-align: right;">If you can see an error with any of the above tees, please let us know and we will verify the tee details with the club they belong to.</p>
								<p>&nbsp;</p>
								<p style="text-align: right;"><a href="/report-scorecard/">Click here to report a tee</a></p>
								<p>&nbsp;</p>
								
							</div>
							
							{/if}
						
						</div>
						
						<div class="floatEnder"></div>
						
				{if $currentuser.admin}
							
				<h2>Edit Tee</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
					
						<p>
							<label for="edit-colour">Colour</label>
							<input type="text" id="edit-colour" name="colour" value="{$tee.colour}" />
						</p>
						<p>
							<label for="edit-courserating">Course Rating</label>
							<input type="text" id="edit-courserating" name="courserating" value="{$tee.courserating}" />
						</p>
						<p>
							<label for="edit-slope">Slope</label>
							<input type="text" id="edit-slope" name="slope" value="{$tee.slope}" />
						</p>
						<p>
							<label for="edit-sss">SSS</label>
							<input type="text" id="edit-sss" name="sss" value="{$tee.sss}" />
						</p>
									
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
							  <tr class="scTop">
								<td><p>Hole:</p></td>
{section name=hole loop=10 start=1}
								<td><p>{$smarty.section.hole.index}</p></td>
{/section}
							  </tr>
							  <tr class="scEntry">
								<td><p>Yards:</p></td>
{section name=hole loop=10 start=1}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}
								<td><p><input type="text" name="{$holedistance}" value="{$tee.$holedistance}" /></p></td>
{/section}								
							  </tr>
							  <tr class="scEntry">
								<td><p>SI:</p></td>
{section name=hole loop=10 start=1}
{assign var="holesi" value="hole`$smarty.section.hole.index`si"}
								<td><p><input type="text" name="{$holesi}" value="{$tee.$holesi}" /></p></td>
{/section}
							  </tr>
							  <tr class="scEntry">
								<td><p>Par:</p></td>
{section name=hole loop=10 start=1}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
								<td><p><input type="text" name="{$holepar}" value="{$tee.$holepar}" /></p></td>
{/section}
							  </tr>
							</table>
							<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
							  <tr class="scTop">
								<td><p>Hole:</p></td>
{section name=hole loop=19 start=10}
								<td><p>{$smarty.section.hole.index}</p></td>
{/section}
							  </tr>
							  <tr class="scEntry">
								<td><p>Yards:</p></td>
{section name=hole loop=19 start=10}
{assign var="holedistance" value="hole`$smarty.section.hole.index`yards"}
								<td><p><input type="text" name="{$holedistance}" value="{$tee.$holedistance}" /></p></td>
{/section}								
							  </tr>
							  <tr class="scEntry">
								<td><p>SI:</p></td>
{section name=hole loop=19 start=10}
{assign var="holesi" value="hole`$smarty.section.hole.index`si"}
								<td><p><input type="text" name="{$holesi}" value="{$tee.$holesi}" /></p></td>
{/section}
							  </tr>
							  <tr class="scEntry">
								<td><p>Par:</p></td>
{section name=hole loop=19 start=10}
{assign var="holepar" value="hole`$smarty.section.hole.index`par"}
								<td><p><input type="text" name="{$holepar}" value="{$tee.$holepar}" /></p></td>
{/section}
							  </tr>
							</table>					
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="teeedit" />
						<input type="hidden" name="adminid" value="{$tee.teeid}" />
						
						<p>
							<input class="submit" type="submit" value="Save" />
						</p>
						
					</fieldset>

				</form>
				
				<h2>Move Tee</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
						
						<p>
							<label for="edit-courseid">Move to course</label>
							<select id="edit-courseid" name="courseid">
								<option value="0">- Select Course - </option>
								{foreach item="course" from=$courses}
								<option value="{$course.courseid}">{$course.name}</option>
								{/foreach}
							</select>
						</p>

						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="teemove" />
						<input type="hidden" name="adminid" value="{$tee.teeid}" />
					
						<p>
							<input class="submit" type="submit" value="Move" />
						</p>
						
					</fieldset>

				</form>		
				
				<h2>Delete Tee</h2>
				
				<form class="lgadmin" action="" method="post" onsubmit="return confirm('Are you sure? This can not be un-done.');" />
				
					<fieldset>
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="teedelete" />
						<input type="hidden" name="adminid" value="{$tee.teeid}" />
					
						<p>
							<input class="submit" type="submit" value="Delete" />
						</p>
						
					</fieldset>

				</form>
				
				<p>&nbsp;</p>
				
				{/if}													
						
											