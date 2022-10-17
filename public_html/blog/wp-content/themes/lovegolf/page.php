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
			
				<div class="mainAreaContentBlog">
			
					<div style="float: right; margin: 0px 0px 10px 10px;">
					
						<?php if ( !function_exists('dynamic_sidebar')
						|| !dynamic_sidebar('loginArea') ) : ?>
						<?php endif; ?>
					
					</div>
						
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="entry">
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ',
								'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
					</div>
					<?php endwhile; endif; ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					
					<div class="floatEnder"></div>
			
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>

	<?php get_footer(); ?>