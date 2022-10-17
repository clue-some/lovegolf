	<div class="myProfileLeft">
	
		<h1>{$currentuser.firstname} {$currentuser.surname}</h1>
		
		{if $currentuser.handicappending}

		<p class="error"><span>Your handicap will be generated after you've added 3 rounds.</span></p>
		<p>&nbsp;</p>
		
		{/if}
		
		<p>Here is your profile information:</p>
		<p>&nbsp;</p>
		<p>Email address:</p>
		<p>{$currentuser.email}</p>
		{if $currentuser.address1}
		<p>&nbsp;</p>
		<p>Postal address:</p>
		<p>{$currentuser.address1}, {$currentuser.town}</p>
		<p>{$currentuser.county}, {$currentuser.postcode}</p>
		<p>{$currentuser.country}</p>
		{/if}
		<p>&nbsp;</p>
		{if $currentuser.dob}
		<p>Date of birth:</p>
		<p>{$currentuser.dob|date_format:"%d"}/{$currentuser.dob|date_format:"%m"}/{$currentuser.dob|date_format:"%Y"}</p> 
		<p>&nbsp;</p>
		{/if}
		
	</div>
	
	<div class="myProfileRight">
	
		<div class="myProfileStats">
		
			<div class="myProfileStatsContent">
			
				<h1>Handicap:</h1>
				<div class="mpsHandicapBox">
						
					<h1>{if $currentuser.handicappending}?{else}{$currentuser.handicap|number_format}{/if}</h1>
					<p>{if $currentuser.handicappending}Pending{else}({$currentuser.handicap|number_format:1}){/if}</p>
						
				</div>
						
				<h1>Best round:</h1>
				<h2>{$userstatistics.bestround.score|number_format:0}</h2>
				<p>{$userstatistics.bestround.date|date_format}</p>
				<h1>Average round:</h1>
				<h2>{$userstatistics.averageround.score|number_format:0}</h2>
			
			</div>

		</div>
		
		<div class="myProfilePhoto">
		
			<div style="position: absolute; width: 180px; height: 240px;">
			
				<img src="/tracker/wl/lovegolf/images/im-profile-img-border.gif" alt="" />
			
			</div>
			
			{if $currentuser.photo}
			<img src="/tracker/profileimage/{$currentuser.photo}" alt="Profile Image" />
			{else}
			<img src="/tracker/profileimage/im-tiger.jpg" alt="Profile Image" />
			{/if}
		
		</div>
		
		<div class="floatEnder"></div>
	
	</div>
	
	<div class="floatEnder"></div>

	<p><a href="/my/profile-edit/"><img src="/tracker/wl/lovegolf/images/but-edit-profile.png" height="30" width="210" alt="Edit profile" /></a></p>
	<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	<script type="text/javascript" src="http://cdn.socialtwist.com/2011021349346-1/script.js"></script>
	{literal}<a class="st-taf" href="http://tellafriend.socialtwist.com:80" onclick="return false;" style="border:0;padding:0;margin:0;"><img alt="SocialTwist Tell-a-Friend" style="border:0;padding:0;margin:0;" src="http://images.socialtwist.com/2011021349346-1/button.png" onmouseout="STTAFFUNC.hideHoverMap(this)" onmouseover="STTAFFUNC.showHoverMap(this, '2011021349346-1', window.location, document.title)" onclick="STTAFFUNC.cw(this, {id:'2011021349346-1', link: window.location, title: document.title });"/></a>{/literal}
	<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
	<p>&nbsp;</p>
	
	<div class="myProfileTitleArea">
		
		<div class="myProfileTitleContent">
	
			<h5>Favourite Courses</h5>
			
		</div>
		
	</div>
	
	<div class="myProfileBox">
	
		{if $favouritecourses}
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
		  <tr class="scTop">
		    <td><p>Club Name</p></td>
		    <td><p>Course Name</p></td>
		    {*<td><p>County</p></td>*}
		    <td><p>Tools</p></td>
		  </tr>
		{section name="course" loop=$favouritecourses}
		  <tr class="{cycle values="scEntry, scAlt"}">
		    <td><p><a href="/club/{$favouritecourses[course].cluburlname}/">{$favouritecourses[course].clubname}</a></p></td>
		    <td><p><a href="/club/{$favouritecourses[course].cluburlname}/course/{$favouritecourses[course].urlname}/{$favouritecourses[course].courseid}/">{$favouritecourses[course].name}</a></p></td>
		    {*<td><p>{$favouritecourses[course].county}</p></td>*}
		    <td><p><a href="/course/{$favouritecourses[course].urlname}/"><img src="/tracker/images/but-tracking-view.gif" height="17" width="19" title="View course" /></a> &nbsp;<a href="/tracker/round/add/course/{$favouritecourses[course].courseid}/"><img src="/tracker/images/but-tracking-edit.gif" height="17" width="19" title="Add round" /></a> &nbsp;<a href="/tracker/favourite/remove/{$favouritecourses[course].favouriteid}/"><img src="/tracker/images/im-tracking-cross.gif" title="Remove from favourites" width="15" height="17" border="0" /></a></p></td>
		  </tr>
		{/section}
		</table>
		{else}
			<p>You do not have any favourite courses. Click this icon <img src="/tracker/images/but-courses-add-fav.gif" height="17" width="13" title="Favourites" /> in the course directory to add a favourite.</p>
		{/if}
		
	</div>
	
	<div>
	
		<p><img src="/tracker/wl/lovegolf/images/im-arrow-box-bkg-bottom.gif" width="710" height="5" alt="" /></p>
	
	</div>
	
	<p>&nbsp;</p>
	
	<div class="myProfileTitleArea">
		
		<div class="myProfileTitleContent">
	
			<h5>Recent Courses</h5>
			
		</div>
		
	</div>
	
	<div class="myProfileBox">
	
		{if $recentcourses}
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
		  <tr class="scTop">
		    <td><p>Club Name</p></td>
		    <td><p>Course Name</p></td>
		    {*<td><p>Country</p></td>*}
		    <td><p>Tools</p></td>
		  </tr>
		{section name="course" loop=$recentcourses}
		  <tr class="{cycle values="scEntry, scAlt"}">
		    <td><p><a href="/club/{$recentcourses[course].cluburlname}/">{$recentcourses[course].clubname}</a></p></td>
		    <td><p><a href="/club/{$recentcourses[course].cluburlname}/course/{$recentcourses[course].urlname}/{$recentcourses[course].courseid}/">{$recentcourses[course].name}</a></p></td>
		    {*<td><p>{$recentcourses[course].county}</p></td>*}
		    <td><p><a href="/course/{$recentcourses[course].urlname}/"><img src="/tracker/images/but-tracking-view.gif" height="17" width="19" title="View course" /></a> &nbsp;<a href="/tracker/round/add/course/{$recentcourses[course].courseid}/"><img src="/tracker/images/but-tracking-edit.gif" height="17" width="19" title="Add round" /></a> &nbsp;<a href="/tracker/favourite/add/{$recentcourses[course].courseid}/"><img src="/tracker/images/but-courses-add-fav.gif" height="17" width="13" title="Add course to favourites" /></a></p></td>
		  </tr>
		{/section}
		</table>
		{else}
			<p>You have not added any rounds yet. <a href="/clubs/">Click here</a> to visit the club directory and start adding rounds!</p>
		{/if}
		
	</div>
	
	<div>
	
		<p><img src="/tracker/wl/lovegolf/images/im-arrow-box-bkg-bottom.gif" width="710" height="5" alt="" /></p>
	
	</div>