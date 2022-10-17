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
					
					<h1>Welcome to the Love Golf Blog!</h1>
					<h2>Recent posts:</h2>
						
					<?php if (have_posts()) : ?>

					<?php while (have_posts()) : the_post(); ?>
			
						<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
							<?php if (in_category('using-love-golf')) : ?>
								<h1 class="blogHelpIcon"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<?php elseif (in_category('world-golf-news')) : ?>
								<h1><a href="<?php the_permalink() ?>" target="_blank" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<?php else : ?>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<?php endif; ?>
							<p><span><?php the_time('F jS, Y') ?> by <?php the_author() ?></span></p>
			
							<div class="entry">
								<?php the_excerpt(); ?>
							</div>
							
							<div class="blogFooterArea">
							
								<div class="blogFooterLeft">
								
									<p class="postmetadata">Posted in <?php the_category(', ') ?> &nbsp;|&nbsp; <?php the_tags('Tags: ', ', ', '<br />'); ?></p>
						
								</div>
								
								<div class="blogFooterRight">
								
									<p class="postmetadata"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
								
								</div>
								
								<div class="floatEnder"></div>
						
							</div>
						
						</div>
			
					<?php endwhile; ?>
			
					<div class="navigation">
						<div style="float: left; width: 300px;"><p><?php next_posts_link('&laquo; Older Entries') ?></p></div>
						<div style="float: right; width: 300px; text-align: right;"><p><?php previous_posts_link('Newer Entries &raquo;') ?></p></div>
						<div class="floatEnder"></div>
					</div>
			
				<?php else : ?>
			
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php get_search_form(); ?>
			
				<?php endif; ?>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>

<?php get_footer(); ?>