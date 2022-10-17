				
					<div id="courseSearchResults">
					{if $results}
					<div class="courseNumberFloat">
						{if $featured}
						<p>Featured courses</p>
						{else}
						<p>{$results} course{if $results != 1}s{/if} found</p>
						{/if}
					</div>
					{if $pages[2]}
					<div class="coursePageFloat">
						<p>
						{section name="page" loop=$pages}
							{if $pages[page].enabled}
							<a href="/courses/{$letter}{if $pages[page].number > 1}/{$pages[page].number}/{/if}">
							{/if}
							{$pages[page].name|htmlentities}
							{if $pages[page].enabled}
							</a>
							{/if}
						{/section}
						</p>
					</div>
					{/if}
					{/if}
					<div class="floatEnder"></div>
	{if $courses}
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
					  <tr class="scTop">
					    <td width="50%"><p>Club/Course name</p></td>
					    <td width="20%"><p>Country</p></td>
					    <td width="20%"><p>Region</p></td>
					    <td width="10%"><p>Tools</p></td> 
					  </tr>
	{section name="course" loop=$courses}
					  <tr class="{cycle values="scEntry, scAlt"}">
						<td><p><a href="/course/{$courses[course].urlname}/">{$courses[course].name|truncate:40}</a></p></td>
						<td><p>{$courses[course].countryname}</p></td>
						<td><p>{$courses[course].regionname}</p></td>
						<td><p><a href="/tracker/round/add/course/{$courses[course].courseid}/"><img src="/tracker/images/but-tracking-edit.gif" height="17" width="19" alt="Add round" /></a> &nbsp;<a href="/favourite/add/{$courses[course].courseid}/"><img src="/tracker/images/but-courses-add-fav.gif" height="17" width="13" alt="Add course to favourites" /></a></p></td>
					  </tr>
	{/section}	
					</table>
	{else}
					<p>No courses found.</p>
	{/if}