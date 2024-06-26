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
			$title_unete = get_post_meta($post->ID, '_title_unete', true);
			$texto_unete = get_post_meta($post->ID, '_texto_unete', true);
			$image_unete1 = get_post_meta($post->ID, '_image_unete1', true);
			
			//Home Slider
			if ($campo_slider_home){
				echo do_shortcode($campo_slider_home);
			}	
			
			// Eventos
			echo get_template_part( 'template-parts/page/front-page/events');
			

			// Unete
			if ($title_unete && $texto_unete){  
				echo get_template_part( 'template-parts/page/front-page/unete');
			}

			//Noticias
			echo get_template_part( 'template-parts/page/front-page/notices');

			// Redes y News
			echo get_template_part( 'template-parts/page/front-page/redes');

			//Programas
			echo get_template_part( 'template-parts/page/front-page/program-section');
			
			
			//Patrocinadores Institucionales
			if ($title_institucional && $shortcode_institucional){  
				echo get_template_part('template-parts/page/front-page/patrocinadores-institucionales');
			}  
	 
			//Socio Académico - Media
			if ($title_media && $shortcode_media && $title_academico && $image_academico){ 
				echo get_template_part('template-parts/page/front-page/patrocinadores-media');
			}  

			//echo do_shortcode('[asipi_breadcrumbs_shortcode]');
			

			?>
			

		
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
<?php get_footer(); ?>