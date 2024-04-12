<?php
// Silent is golden
get_header();

//echo do_shortcode('[asipi_breadcrumbs_shortcode]');
?>

<?php echo get_template_part('template-parts/header/header-br-content'); ?>
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