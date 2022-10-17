			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="blue">
				
					<h1>From the Love Golf Blog</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					<ul id="catMenu">
					
						{section name="item" loop=$blogfeed.items max=5}
						<li><a href="{$blogfeed.items[item].link}" target="_blank">{$blogfeed.items[item].title}</a></li>
						{/section}

					</ul>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
				</div>
				
			</div>