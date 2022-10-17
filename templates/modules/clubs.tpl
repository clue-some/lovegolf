
			<script type="text/javascript">
			{literal}

			$(function() {
				inputreplace('#courseFinderQuery', 'Enter club name, address or postcode');
			});
			
			{/literal}
			</script>
			
			<div class="courseDirectoryArea">
				
				<h1>Golf Club Directory</h1>
				
				<h2>Find alphabetically:</h2>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" class="scorecard">
				  <tr class="scAlpha">
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/a/">A</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/b/">B</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/c/">C</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/d/">D</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/e/">E</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/f/">F</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/g/">G</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/h/">H</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/i/">I</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/j/">J</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/k/">K</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/l/">L</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/m/">M</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/n/">N</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/o/">O</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/p/">P</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/q/">Q</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/r/">R</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/s/">S</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/t/">T</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/u/">U</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/v/">V</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/w/">W</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/x/">X</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/y/">Y</a></p></td>
				    <td><p><a href="/clubs{if $bookableonly}/bookable{/if}/z/">Z</a></p></td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				{if $bookableonly}
				<p><a href="/clubs/"><input type="checkbox" name="checkbox" value="checkbox" checked="checked" disabled="disabled" /> Only show clubs with online tee booking</a></p>
				{else}
				<p><a href="/clubs/bookable/"><input type="checkbox" name="checkbox" value="checkbox" disabled="disabled" /> Only show clubs with online tee booking</a></p>
				{/if}
				<p>&nbsp;</p>
				<form id="courseSearch" action="/clubs/" method="get">
				<p><input class="field" id="courseFinderQuery" name="query" value="Enter club name, address or postcode"></p>
				<p><input class="fieldButton" type="image" src="/tracker/wl/lovegolf/images/but-search.png" height="30" width="210" alt="Search" /></p>
				<p><img src="/tracker/wl/lovegolf/images/im-but-shadow.png" height="31" width="210" alt="" /></p>
				{if $bookableonly}<input id="courseSearchBookable" type="hidden" name="bookable" value="1" />{/if}
				</form>

				<div id="courseSearchResults">
					{if $results}
					<div class="courseNumberFloat">
						{if $featured}
						<p>Featured clubs</p>
						{else}
						<p>{$results} club{if $results != 1}s{/if} found</p>
						{/if}
					</div>
					{if $pages[2]}
					<div class="coursePageFloat">
						<p>
						{section name="page" loop=$pages}
							{if $pages[page].enabled}
							{if $pages[page].number > 1 && $pages[page].name|is_numeric}|{/if}
							<a href="/clubs/{$letter}/{if $pages[page].number > 1}{$pages[page].number}/{/if}">
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
					    {*<td width="10%"><p>Tools</p></td>*}
					  </tr>
	{section name="club" loop=$clubs}
						<tr class="{cycle values="scEntry, scAlt"}">
					    <td><p><a href="/club/{$clubs[club].urlname}/">{$clubs[club].name}</a></p></td>
					    <td><p>{$clubs[club].countryname}</p></td>
					    <td><p>{$clubs[club].county}</p></td>
					    {*<td><p><a href="/tracker/round/add/club/{$clubs[club].clubid}/"><img src="/tracker/images/but-tracking-edit.gif" height="17" width="19" alt="Add round" /></a> &nbsp;<a href="/favourite/add/{$clubs[club].clubid}/"><img src="/tracker/images/but-clubs-add-fav.gif" height="17" width="13" alt="Add club to favourites" /></a></p></td>*}
					  </tr>
	{/section}	
					</table>

					{if $results}
					<div class="courseNumberFloat">
						<p>{$results} club{if $results != 1}s{/if} found</p>
					</div>
					{if $pages[2]}
					<div class="coursePageFloat">
						<p>
						{section name="page" loop=$pages}
							{if $pages[page].enabled}
							{if $pages[page].number > 1 && $pages[page].name|is_numeric}|{/if}
							<a href="/clubs/{$letter}/{if $pages[page].number > 1}{$pages[page].number}/{/if}">
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
	{else}
					<p>No clubs found.</p>
	{/if}			
				</div><!-- /courseSearchResults -->
				
			</div>
