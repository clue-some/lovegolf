<?php get_header(); ?>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher:'024165d8-2ae6-4b74-a249-bb5f161f6869'});</script>

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
				
				<div class="mainAreaContentBlog">
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="post" id="post-<?php the_ID(); ?>">
							
							<div style="float: left; width: 635px;">
							
								<h1><?php the_title(); ?></h1>
								<p class="postCredits"><span><?php the_date(); ?> by <?php the_author() ?> | Posted in <?php the_category(', ') ?> | <?php the_tags('Tags: ', ', ', '<br />'); ?></span></p>

							</div>
							
							<div style="float: right; width: 55px;">
							
								<a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical" data-via="we_lovegolf">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
							
							</div>
							
							<div class="floatEnder"></div>
							<div class="entry">
								<?php the_content(); ?>
								<hr />
								<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							</div>
						</div>
					<?php comments_template(); ?>
					<?php endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
					<?php endif; ?>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom-white.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>

	<?php get_footer(); ?>