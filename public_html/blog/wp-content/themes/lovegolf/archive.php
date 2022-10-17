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
				
				<div class="mainAreaContentBlog">
					
					<?php if (have_posts()) : ?>
				  	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				  	<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1 class="pagetitle"><?php single_cat_title(); ?></h1>
				  	<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
				  	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
				  	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
				  	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
				  	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h1 class="pagetitle">Author Archive</h1>
				  	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<h1 class="pagetitle">Blog Archives</h1>
				  	<?php } ?>
			
					<?php while (have_posts()) : the_post(); ?>
					<div class="post">
							<?php if (in_category('using-love-golf')) : ?>
								<h1 class="blogHelpIcon"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<?php elseif (in_category('world-golf-news')) : ?>
								<h1><a href="<?php the_permalink() ?>" target="_blank" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<?php else : ?>
								<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
							<?php endif; ?>
							<p><span><?php the_time('l, F jS, Y') ?></span></p>

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
				<?php else :
			
					if ( is_category() ) { // If this is a category archive
						printf("<h1 class='center'>Sorry, but there aren't any posts in the %s category yet.</h1>", single_cat_title('',false));
					} else if ( is_date() ) { // If this is a date archive
						echo("<h1>Sorry, but there aren't any posts with this date.</h1>");
					} else if ( is_author() ) { // If this is a category archive
						$userdata = get_userdatabylogin(get_query_var('author_name'));
						printf("<h1 class='center'>Sorry, but there aren't any posts by %s yet.</h1>", $userdata->display_name);
					} else {
						echo("<h1 class='center'>No posts found.</h1>");
					}
					get_search_form();
			
				endif;
			?>
				
				</div>
				
			</div>
			
			<div class="mainAreaContentFooter">
			
				<p><img src="/tracker/wl/lovegolf/images/im-body-bkg-bottom.gif" height="6" width="730" alt="" /></p>
			
			</div>
		
		</div>

	<?php get_footer(); ?>