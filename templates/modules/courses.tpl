<script type="text/javascript">
	{literal}
	$(document).ready(function(){
		$(".example5").colorbox();		
	});
	{/literal}
</script>
			{if $club.verified}
			
			<div class="mainAreaContentCourseTop">
			
				<div class="mainAreaContentVerified">
				
					<div class="macvFloatLeft">
					
						<p>This club has been verified by Love Golf</p>
						
					</div>
					
					<div class="macvFloatRight">
					
						<p><a class='example5' href="/tracker/verified-club-details.php?clubid={$club.clubid}">Learn more about club verification</a></p>
						
					</div>
					
					<div class="floatEnder"></div>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentCourse">
				
			{else}
			
			<div class="mainAreaContent">
			
			{/if}
				
				<div class="courseLogoArea">
				
					<iframe width="298" height="298" style="border:1px solid #ccc;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={$club.name|urlencode}+golf+club&amp;near={$club.postcode},+UK&amp;z=12&amp;iwloc=0&amp;num=1&amp;output=embed"></iframe><br />
				
				</div>
				
				<h1>{$club.name}</h1>

				<div class="courseAddressArea">
				
					<h2>Club Details:</h2>
					<p>{$club.address}</p>
					<p>{$club.postcode}</p>
					<p>&nbsp;</p>
					
				</div>
				
				<div class="courseContactArea">
									
					<h2>Contact Information:</h2>
					<p>{$club.telephone}</p>
					<p><a href="mailto:{$club.email}">{$club.email}</a></p>
					<p><a href="{$club.website}" target="_blank">{$club.website}</a></p>
									
				</div>
				
				{if $club.bookingurl}
				<div class="bookTeeTime">
					<p><a href="http://clkuk.tradedoubler.com/click?p(232)a(1812113)g(19114)url({$club.bookingurl})" target="_blank"><img src="/tracker/wl/lovegolf/images/but-book-tee.png" height="30" width="210" alt="Book tee time online" /></a></p>
					<div style="width: 320px; background: url(/tracker/wl/lovegolf/images/im-open-new-window.png) no-repeat 0 1px; padding: 2px 0px 2px 23px; margin: 10px 0px;">
						<p style="font-size: 0.7em;"><strong>*</strong> Opens a new browser tab/window to Tee Off Times website</p>
					</div>
				</div>
				{/if}

				<div class="floatEnder"></div>
				<p>&nbsp;</p>
				
				<h2>Courses at {$club.name}</h2>									

				<div id="courseSearchResults">
					{if $results}
					<div class="courseNumberFloat">
						<p>{$results} course{if $results != 1}s{/if} found</p>
					</div>
					{/if}
					<div class="floatEnder"></div>
					
	{if $courses}
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
					  <tr class="scTop">
					    <td width="50%"><p>Course</p></td>
					    <td width="50%"><p>Holes</p></td>
					    <td width="10%"><p>Tools</p></td>
					  </tr>
	{section name="course" loop=$courses}
						<tr class="{cycle values="scEntry, scAlt"}">
					    <td><p><a href="/club/{$club.urlname}/course/{$courses[course].urlname}/{$courses[course].courseid}/">{$courses[course].name}</a></p></td>
					    <td><p>{if $courses[course].holes}{$courses[course].holes}{else}0{/if}</p></td>
					    <td><p><a href="/tracker/round/add/course/{$courses[course].courseid}/"><img src="/tracker/wl/lovegolf/images/but-add-round-small.png" height="20" width="111" alt="Add round" /></a> &nbsp;<a href="/favourite/add/{$courses[course].courseid}/"><img src="/tracker/wl/lovegolf/images/but-add-favourites-small.png" height="20" width="111" alt="Add course to favourites" /></a></p></td>
					  </tr>
	{/section}	
					</table>

					<div class="floatEnder"></div>
	{else}
					<p>No courses found.</p>
	{/if}			
				</div><!-- /courseSearchResults -->
				
				{if $currentuser.admin}

				<p>&nbsp;</p>
								
				<h2>Add Course</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="clubaddcourse" />
						<input type="hidden" name="adminid" value="{$club.clubid}" />
					
						<p>
							<input class="submit" type="submit" value="Add" />
						</p>
						
					</fieldset>

				</form>
				
				<h2>Edit Club</h2>
				
				<form class="lgadmin" action="" method="post" />
				
					<fieldset>
					
						<p>
							<label for="edit-county">County</label>
							<input type="text" id="edit-county" name="county" value="{$club.county}" />
						</p>
						<p>
							<label for="edit-name">Name</label>
							<input type="text" id="edit-name" name="name" value="{$club.name}" />
						</p>
						<p>
							<label for="edit-address">Address</label>
							<textarea id="edit-address" name="address">{$club.address}</textarea>
						</p>
						<p>
							<label for="edit-postcode">Post Code</label>
							<input type="text" id="edit-postcode" name="postcode" value="{$club.postcode}" />
						</p>
						<p>
							<label for="edit-telephone">Telephone</label>
							<input type="text" id="edit-telephone" name="telephone" value="{$club.telephone}" />
						</p>
						<p>
							<label for="edit-email">Email</label>
							<input type="text" id="edit-email" name="email" value="{$club.email}" />
						</p>
						<p>
							<label for="edit-website">Website</label>
							<input type="text" id="edit-website" name="website" value="{$club.website}" />
						</p>
						<p>
							<label for="edit-bookingurl">Booking URL</label>
							<input type="text" id="edit-bookingurl" name="bookingurl" value="{$club.bookingurl}" />
						</p>
						<p>
							<label for="edit-verified">Verified</label>
							<select id="edit-verified" name="verified">
								<option value="0">No</option>
								<option value="1"{if $club.verified} selected="selected"{/if}>Yes</option>
							</select>
						</p>
								
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="clubedit" />
						<input type="hidden" name="adminid" value="{$club.clubid}" />
						
						<p>
							<input class="submit" type="submit" value="Save" />
						</p>
						
					</fieldset>

				</form>
				
				<h2>Delete Club</h2>
				
				<form class="lgadmin" action="" method="post" onsubmit="return confirm('Are you sure? This can not be un-done.');" />
				
					<fieldset>
					
						<input type="hidden" name="adminedit" value="true" />
						<input type="hidden" name="adminmode" value="clubdelete" />
						<input type="hidden" name="adminid" value="{$club.clubid}" />
					
						<p>					
							<input class="submit" type="submit" value="Delete" />
						</p>
						
					</fieldset>

				</form>
				
				{/if}
				
			</div>		

				