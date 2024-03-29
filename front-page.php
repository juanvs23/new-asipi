<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div role="main" class="main">
        <?php 	

		$campo_slider_home=get_post_meta($post->ID,'_campo_slider_home', true);
		if ($campo_slider_home){
			echo do_shortcode($campo_slider_home);
		}	 
		?>

		
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php echo get_template_part('template-parts/page/page-content'); ?>

			<?php endwhile; // End of the loop. ?>

		
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>