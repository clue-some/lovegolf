<div class="hpRSSArea">

{if $rssfeed.items}

	<h1>Golf news</h1>

	<div class="golfNewsHolder">

	{section name="item" loop=$rssfeed.items max=8}
	
		<h2><a href="{$rssfeed.items[item].link}" target="_blank">{$rssfeed.items[item].title}</a></h2>
		
		<p class="date">{$rssfeed.items[item].pubDate}</p>
				
		<p>{$rssfeed.items[item].description}</p>
		
		<p>&nbsp;</p>
	
	{/section}

	</div>
	
	<p>&nbsp;</p>
	<p>Golf news supplied by <a href="http://news.bbc.co.uk/sport" target="_blank">BBC Sport</a></p>

{/if}

</div>