<?php
// Silent is golden
get_header();
?>
  <div role="main" class="main">
        <?php // add_revslider('carousel-home-espanol');  ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		
	</div><!-- #primary -->
<?php
get_footer();