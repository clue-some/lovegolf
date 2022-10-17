				
					<div id="clubSearchResults">
					{if $results}
					<div class="clubNumberFloat">
						{if $featured}
						<p>Featured clubs</p>
						{else}
						<p>{$results} club{if $results != 1}s{/if} found</p>
						{/if}
					</div>
					{if $pages[2]}
					<div class="clubPageFloat">
						<p>
						{section name="page" loop=$pages}
							{if $pages[page].enabled}
							<a href="/clubs/{$letter}{if $pages[page].number > 1}/{$pages[page].number}/{/if}">
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
	{if $clubs}
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
					  <tr class="scTop">
					    <td width="50%"><p>Club name</p></td>
					    <td width="20%"><p>Country</p></td>
					    <td width="20%"><p>County</p></td>
					  </tr>
	{section name="club" loop=$clubs}
					  <tr class="{cycle values="scEntry, scAlt"}">
						<td><p><a href="/club/{$clubs[club].urlname}/">{$clubs[club].name|truncate:40}</a></p></td>
						<td><p>{$clubs[club].countryname}</p></td>
						<td><p>{$clubs[club].county}</p></td>
					  </tr>
	{/section}	
					</table>
	{else}
					<p>No clubs found.</p>
	{/if}