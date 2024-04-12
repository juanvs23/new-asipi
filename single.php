<?php
// Silent is golden
get_header();

echo do_shortcode('[asipi_breadcrumbs_shortcode]');

?>

  <div role="main" class="main">
        <?php // add_revslider('carousel-home-espanol');  ?>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				
				<?php the_content(); ?>

			<?php endwhile; // End of the loop. ?>

		
	</div><!-- #primary -->
<?php
get_footer();