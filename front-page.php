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
			$title_institucional=get_post_meta($post->ID,'_title_institucional', true);
			$shortcode_institucional=get_post_meta($post->ID,'_shortcode_institucional', true);
			$title_media=get_post_meta($post->ID,'_title_media', true);
			$shortcode_media=get_post_meta($post->ID,'_shortcode_media', true);
			$title_academico=get_post_meta($post->ID,'_title_academico', true);
			$image_academico=get_post_meta($post->ID,'_image_academico', true);
			
			//Home Slider
			if ($campo_slider_home){
				echo do_shortcode($campo_slider_home);
			}	

			//Patrocinadores Institucionales
			if ($title_institucional && $shortcode_institucional){  
				echo get_template_part('template-parts/front-page/patrocinadores-institucionales-content');
			}  
			?>
			<?php 
			//Socio Académico - Media
			if ($title_media && $shortcode_media && $title_academico && $image_academico){ 
				echo get_template_part('template-parts/front-page/patrocinadores-media-content');
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