<?php get_header(); ?>

		<div class="leftArea">
					
			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="blue">
				
					<h1>Recent posts</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('sidebar1') ) : ?>
					<?php endif; ?>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
				</div>
				
			</div>
			
			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="blue">
				
					<h1>Categories</h1>
					
				</div>
				
				<div class="leftBox" id="noPadding">
					
					<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('sidebar2') ) : ?>
					<?php endif; ?>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
				</div>
				
			</div>
			
			<div class="leftAreaHolder">
						
				<div class="leftTitleBar" id="blue">
				
					<h1>Latest from Twitter</h1>
					
				</div>
				
				<div class="leftBox">
					
					<div class="lbTwitter">
						
						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('sidebar3') ) : ?>
						<?php endif; ?>
						
						<p><a href="http://www.twitter.com/we_lovegolf" target="_blank">Follow Love Golf on Twitter</a></p>
						
					</div>
				
				</div>
				
				<div class="leftBoxBase">
					
					<p><img src="/tracker/wl/lovegolf/images/im-left-bar-base.gif" height="8" width="210" alt="" /></p>
							
				</div>
				
			</div>
			
		</div>
		
		<div class="mainArea">

			<div class="mainAreaContent">
			
				<div class="blogBreadcrumb">
			
					<p>You are here &raquo; <?php
					if(function_exists('bcn_display'))
					{
						bcn_display();
					}
					?></p>
				
				</div>
				
				<div class="blog404">
					
					<h1>Fore!</h1>
					<p>The page you are looking for has either been moved or no longer exists.</p>
					<p>&nbsp;</p>
					<p><a href="/blog">Click here</a> to go to the Love Golf blog homepage.</p>
					<p>&nbsp;</p>
					<p><a href="/tracker">Click here</a> to go to the main Love Golf homepage.</p>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>

	<?php get_footer(); ?>