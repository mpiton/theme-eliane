	<!-- Header -->
	<?php get_header(); ?>

	<!--Plugin Slider WP -->
	<?php echo do_shortcode('[smartslider3 slider=3]'); ?>

	<!-- Article -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
			<?php the_content(); ?>

	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>

	<!--Footer -->
	<?php get_footer(); ?>