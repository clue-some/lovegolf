{if $courses}
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
				  <tr class="scTop">
				    <td><p>Club / Course name</p></td>
				    <td><p>Country</p></td>
				    <td><p>Region</p></td>
				    <td><p>Add Round</p></td>
				  </tr>
{section name="course" loop=$courses}
					<tr class="{cycle values="scEntry, scAlt"}">
				    <td><p><a href="/club/{$courses[course].cluburlname}/">{$courses[course].clubname|truncate:30}{if $courses[course].clubname != $courses[course].name} / {$courses[course].name|truncate:20}{/if}</a></p></td>
				    <td><p>{$courses[course].countryname}</p></td>
				    <td><p>{$courses[course].regionname}</p></td>
				    <td><p><a href="/tracker/round/add/course/{$courses[course].courseid}/"><img src="/tracker/wl/lovegolf/images/but-add-round-small.png" height="20" width="111" alt="Add round" /></a> &nbsp;<a href="/favourite/add/{$courses[course].courseid}/"><img src="/tracker/wl/lovegolf/images/but-add-favourites-small.png" height="20" width="111" alt="Add course to favourites" /></a></p>
					    <!-- <form action="/tracker/round/add/course/" method="post">
							<input id="recent_courseid" name="courseid" type="hidden" value="{$courses[course].courseid}" />
							<p><input type="image" src="/tracker/wl/lovegolf/images/but-add-round.png" height="30" width="210" alt="Add a round" /></p>
						</form>  -->
				    </td>
				  </tr>
{/section}	
				</table>
{else}

<h2>No matches</h2>

{/if}

<p>&nbsp;</p>