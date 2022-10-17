<?php get_header(); ?>

<div class="bodyContentRightHpContent">
	<?php if (have_posts()) : ?>
	<h2 class="pagetitle">Search Results</h2>
	<?php while (have_posts()) : the_post(); ?>
	
		<div class="post">

		  <h3 id="post-<?php the_ID(); ?>"><a
		href="<?php the_permalink() ?>" rel="bookmark" title="Permanent
		Link to <?php the_title_attribute(); ?>"><?php the_title();
		?></a></h3>
		
		  <small><?php the_time('l, F jS, Y') ?></small>
		
		  <p class="postmetadata"><?php the_tags('Tags:
		', ', ', '<br />'); ?> Posted in <?php the_category(', ')
		?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php
		comments_popup_link('No Comments &#187;', '1 Comment &#187;',
		'% Comments &#187;'); ?></p>
		
		</div>
	
	<?php endwhile; ?>
	<?php endif; ?>
</div>

</div>
		
<div class="floatEnder"></div>
	
</div>

<?php get_footer(); ?>