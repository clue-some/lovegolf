<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
<h1>{$course.name} <span class="clubName">at {$club.name}</span></h1>

<h2>Tee information:</h2>

{if $tees}
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
				  <tr class="scTop">
				    <td><p>Tee</p></td>
				    <td><p>Par</p></td>
				    <td><p>SSS</p></td>
				    <td><p>Yards</p></td>
				    <td><p>Tools</p></td>
				  </tr>				
{section name="tee" loop=$tees}
					<tr class="{cycle values="scEntry, scAlt"}">
					    <td><p><a href="/club/{$club.urlname}/course/{$course.urlname}/tee/{$tees[tee].teeid}/">{$tees[tee].colour}</a></p></td>
					    <td><p>{$tees[tee].totalpar}</p></td>
					    <td><p>{$tees[tee].sss}</p></td>
					    <td><p>{$tees[tee].totalyards}</p></td>
					    <td><p>
					    	<a href="/tracker/round/add/tee/{$tees[tee].teeid}/"><img src="/tracker/wl/lovegolf/images/but-add-round-small.png" height="20" width="111" alt="Add round" /></a> &nbsp;<a href="/club/{$club.urlname}/course/{$course.urlname}/print-tee/{$tees[tee].teeid}/" target="_blank"><img src="/tracker/wl/lovegolf/images/but-print-scorecard-small.png" height="20" width="111" alt="Print scorecard" /></a>
					    </p></td>
					  </tr>
{/section}				 
				</table>
{else}
				<p>There are no tees listed for this course. {* <a href="#">Add a tee.</a></p> *}
{/if}
				<div style="float: left; width: 230px; padding-top: 50px;">
				
					<p><a href="/club/{$club.urlname}/"><img src="/tracker/wl/lovegolf/images/but-back-club.png" height="30" width="210" alt="Back to the club" /></a></p>
					<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
				
				</div>
				
				<div style="float: left; width: 470px;">
				
					{if $club.verified}

					<!-- This appears if the tees HAVE been verified -->	
					<div style="float: right; width: 270px; padding-top: 10px;">
					
						<p style="text-align: right;"><img src="/tracker/wl/lovegolf/images/im-tee-verified.gif" height="97" width="174" alt="VERIFIED! TEES CHECKED!" /></p>
						<p style="text-align: right;"><a class='example5' href="/tracker/verified-club-details.php?clubid={$club.clubid}">Learn more about club verification</a></p>
					
					</div>
					
					{else}
					
					<!-- This appears if the tees HAVEN'T been verified -->
					<div style="float: right; width: 400px; padding-top: 20px;">
					
						<h2 style="text-align: right;">Spot a problem?</h2>
						<p style="text-align: right;">If you can see an error with any of the above tees, please let us know and we will verify the tee details with the club they belong to.</p>
						<p>&nbsp;</p>
						<p style="text-align: right;"><a href="/report-scorecard/">Click here to report a tee</a></p>
						
					</div>
					
					{/if}
				
				</div>
				
				<div class="floatEnder"></div>

{if $currentuser.admin}
						
				<h2>Add Tee</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="courseaddtee" />
						<input type="hidden" name="adminid" value="{$course.courseid}" />
						
						<p>
							<input class="submit" type="submit" value="Add" />
						</p>
						
					</fieldset>

				</form>
				
				<p>&nbsp;</p>
				
{/if}
				
{if $currentuser.admin}
				
				<h2>Edit Course</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
					
						<p>
							<label for="edit-name">Name</label>
							<input type="text" id="edit-name" name="name" value="{$course.name}" />
						</p>
						<p>
							<label for="edit-holes">Holes</label>
							<input type="text" id="edit-holes" name="holes" value="{$course.holes}" />
						</p>
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="courseedit" />
						<input type="hidden" name="adminid" value="{$course.courseid}" />
						
						<p>
							<input class="submit" type="submit" value="Save" />
						</p>
						
					</fieldset>

				</form>
				
				<h2>Move Course</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
						
						<p>
							<label for="edit-clubid">Move to club</label>
							<select id="edit-clubid" name="clubid">
								<option value="0">- Select Club - </option>
								{foreach item="club" from=$clubs}
								<option value="{$club.clubid}">{$club.name}</option>
								{/foreach}
							</select>
						</p>

						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="coursemove" />
						<input type="hidden" name="adminid" value="{$course.courseid}" />
					
						<p>
							<input class="submit" type="submit" value="Move" />
						</p>
						
					</fieldset> 

				</form>		
				
				<h2>Delete Course</h2>
				
				<form class="lgadmin" action="" method="post" onsubmit="return confirm('Are you sure? This can not be un-done.');" />
				
					<fieldset>
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="coursedelete" />
						<input type="hidden" name="adminid" value="{$course.courseid}" />
					
						<p>
							<input class="submit" type="submit" value="Delete" />
						</p>
						
					</fieldset>

				</form>
 
{/if}							