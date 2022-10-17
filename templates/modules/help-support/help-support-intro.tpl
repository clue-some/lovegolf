<h1>Help & Support</h1>
<p>For help on how to use Love Golf's tracking system, visit our <a href="/blog/category/using-love-golf"><strong>dedicated help blog</strong></a>, or view the latest help posts below.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
{if $blogfeed.items}
<h2>Last 5 help topics from the Love Golf blog...</h2>
{section name="item" loop=$blogfeed.items max=5}
<h2><a href="{$blogfeed.items[item].link}">{$blogfeed.items[item].title}</a></h2>
<p>{$blogfeed.items[item].description}</p>
<p>&nbsp;</p>
{/section}
{/if}