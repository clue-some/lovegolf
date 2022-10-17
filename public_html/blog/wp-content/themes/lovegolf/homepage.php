<?php
/*
Template Name: Homepage
*/
?>

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
			
			<div class="blogTrackerArea">

				<div class="blogTABox">
				
					<div class="blogTABoxTitle">
					
						<h1>Latest - How to use Love Golf</h1>
					
					</div>
					
					<div class="blogTABoxImage">
					
						
					
					</div>
					
					<div class="blogTABoxLink">
					
						<?php query_posts('cat=15&showposts=1'); ?>
						<?php $posts = get_posts('category=15&numberposts=1&offset=0'); 
						foreach ($posts as $post) : start_wp(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="entry">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p style="font-size: 0.7em; padding-bottom: 5px;">Posted on <?php the_time(get_option('date_format')); ?></p>
								<p><?php the_excerpt(); ?></p>
								<p>&nbsp;</p>
								<p><a href="<?php the_permalink() ?>">Read post &raquo;</a></p>
							</div>
						</div>
						<p>&nbsp;</p>
						<?php endforeach; ?>
					
					</div>
				
				</div>
			
			</div>
			
			<div class="blogTrackerArea" id="padLeft">

				<div class="blogTABox">
				
					<div class="blogTABoxTitle">
					
						<h1>Latest - Future developments</h1>
					
					</div>
					
					<div class="blogTABoxImage">
					
						
					
					</div>
					
					<div class="blogTABoxLink">
					
						<?php query_posts('cat=8&showposts=1'); ?>
						<?php $posts = get_posts('category=8&numberposts=1&offset=0'); 
						foreach ($posts as $post) : start_wp(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="entry">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p style="font-size: 0.7em; padding-bottom: 5px;">Posted on <?php the_time(get_option('date_format')); ?></p>
								<p><?php the_excerpt(); ?></p>
								<p>&nbsp;</p>
								<p><a href="<?php the_permalink() ?>">Read post &raquo;</a></p>
							</div>
						</div>
						<p>&nbsp;</p>
						<?php endforeach; ?>
					
					</div>
				
				</div>
			
			</div>
			
			<div class="blogTrackerArea">

				<div class="blogTABox">
				
					<div class="blogTABoxTitle">
					
						<h1>Latest - Love Golf tips</h1>
					
					</div>
					
					<div class="blogTABoxImage">
					
						
					
					</div>
					
					<div class="blogTABoxLink">
					
						<?php query_posts('cat=5&showposts=1'); ?>
						<?php $posts = get_posts('category=5&numberposts=1&offset=0'); 
						foreach ($posts as $post) : start_wp(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="entry">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p style="font-size: 0.7em; padding-bottom: 5px;">Posted on <?php the_time(get_option('date_format')); ?></p>
								<p><?php the_excerpt(); ?></p>
								<p>&nbsp;</p>
								<p><a href="<?php the_permalink() ?>">Read post &raquo;</a></p>
							</div>
						</div>
						<p>&nbsp;</p>
						<?php endforeach; ?>
					
					</div>
				
				</div>
			
			</div>
			
			<div class="blogTrackerArea" id="padLeft">

				<div class="blogTABox">
				
					<div class="blogTABoxTitle">
					
						<h1>Latest - World Golf news</h1>
					
					</div>
					
					<div class="blogTABoxImage">
					
						
					
					</div>
					
					<div class="blogTABoxLink">
					
						<?php query_posts('cat=9&showposts=1'); ?>
						<?php $posts = get_posts('category=9&numberposts=1&offset=0'); 
						foreach ($posts as $post) : start_wp(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="entry">
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p style="font-size: 0.7em; padding-bottom: 5px;">Posted on <?php the_time(get_option('date_format')); ?></p>
								<p><?php the_excerpt(); ?></p>
								<p>&nbsp;</p>
								<p><a href="<?php the_permalink() ?>">Read post &raquo;</a></p>
							</div>
						</div>
						<p>&nbsp;</p>
						<?php endforeach; ?>
					
					</div>
				
				</div>
			
			</div>
			
			<div class="floatEnder"></div>
		
		</div>

	<?php get_footer(); ?>