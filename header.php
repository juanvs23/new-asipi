<?php
/**
 * Template Name: Header
 */
$add_classes = get_query_var( 'classes');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php echo do_action('newasipi_html_classes','test'); ?>" >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<style>
		/* General */
		:root {
			--border-radius: 0;
			--border-radius2x: 0;
			--default: #777;
		}
		/* Skin Colors */
		:root {
			--primary: <?php echo get_theme_mod( 'primary_setting','#002B80'); ?>;
			--primary-100: <?php echo get_theme_mod( 'primary_100_setting', '#088dc4');?>;
			--primary-200: <?php echo get_theme_mod( 'primary_200_setting', '#0784b7');?>;
			--primary-200: <?php echo get_theme_mod( 'primary_200_setting', '#0784b7');?>;
			--primary-300: <?php echo get_theme_mod( 'primary_300_setting', '#077cab');?>;
			--primary--100: <?php echo get_theme_mod( 'primary__100_setting', '#0ab1f4');?>;
			--primary--200: <?php echo get_theme_mod( 'primary__200_setting', '#16b5f5');?>;
			--primary--300: <?php echo get_theme_mod( 'primary__300_setting', '#22b9f6');?>;

			<?php
			$primary_degrade = get_theme_mod( 'primary_color_degradate_setting', '#099fdc' );
			echo degradate_color($primary_degrade,'--primary-');
			?>
			--secondary:  <?php echo get_theme_mod( 'secondary_setting','#068439'); ?>;
			--secondary-100: <?php echo get_theme_mod( 'secondary_100_setting','#045ee9'); ?>;
			--secondary-200: <?php echo get_theme_mod( 'secondary_200_setting','#0459dc'); ?>;
			--secondary-300: <?php echo get_theme_mod( 'secondary_300_setting','#0354d0'); ?>;
			--secondary--100: <?php echo get_theme_mod( 'secondary__100_setting','#2479fb'); ?>;
			--secondary--200: <?php echo get_theme_mod( 'secondary__200_setting','#3181fc'); ?>;
			--secondary--300: <?php echo get_theme_mod( 'secondary__300_setting','#3d89fc'); ?>;
			<?php
			$secondary_degrade = get_theme_mod( 'secondary_color_degradate_setting', '#0b6afb' );
			echo degradate_color($secondary_degrade,'--secondary-');
			?>
			--tertiary:  <?php echo get_theme_mod( 'tertiary_setting','#262c36'); ?>;
			--tertiary-100: <?php echo get_theme_mod( 'tertiary_100_setting','#1b2027'); ?>;
			--tertiary-200: <?php echo get_theme_mod( 'tertiary_200_setting','#161a20'); ?>;
			--tertiary-300: <?php echo get_theme_mod( 'tertiary_300_setting','#111418'); ?>;
			--tertiary--100: <?php echo get_theme_mod( 'tertiary__100_setting','#313845'); ?>;
			--tertiary--200: <?php echo get_theme_mod( 'tertiary__200_setting','#363e4c'); ?>;
			--tertiary--300: <?php echo get_theme_mod( 'tertiary__300_setting','#3b445'); ?>;
			<?php
			$tertiary_degrade = get_theme_mod( 'tertiary_color_degradate_setting', '#262c36' );
			echo degradate_color($tertiary_degrade,'--tertiary-');
			?>

			/*
			--tertiary: #262c36;
			--tertiary-100: #1b2027;
			--tertiary-200: #161a20;
			--tertiary-300: #111418;
			--tertiary--100: #313845;
			--tertiary--200: #363e4c;
			--tertiary--300: #3b4454;
			--tertiary-rgba-0: rgba(38, 44, 54, 0);
			--tertiary-rgba-10: rgba(38, 44, 54, 0.1);
			--tertiary-rgba-20: rgba(38, 44, 54, 0.2);
			--tertiary-rgba-30: rgba(38, 44, 54, 0.3);
			--tertiary-rgba-40: rgba(38, 44, 54, 0.4);
			--tertiary-rgba-50: rgba(38, 44, 54, 0.5);
			--tertiary-rgba-60: rgba(38, 44, 54, 0.6);
			--tertiary-rgba-70: rgba(38, 44, 54, 0.7);
			--tertiary-rgba-80: rgba(38, 44, 54, 0.8);
			--tertiary-rgba-90: rgba(38, 44, 54, 0.9);
			--quaternary: #343c4a;
			--quaternary-100: #29303b;
			--quaternary-200: #242a34;
			--quaternary-300: #1f242c;
			--quaternary--100: #3f4859;
			--quaternary--200: #444e60;
			--quaternary--300: #495468;
			--quaternary-rgba-0: rgba(52, 60, 74, 0);
			--quaternary-rgba-10: rgba(52, 60, 74, 0.1);
			--quaternary-rgba-20: rgba(52, 60, 74, 0.2);
			--quaternary-rgba-30: rgba(52, 60, 74, 0.3);
			--quaternary-rgba-40: rgba(52, 60, 74, 0.4);
			--quaternary-rgba-50: rgba(52, 60, 74, 0.5);
			--quaternary-rgba-60: rgba(52, 60, 74, 0.6);
			--quaternary-rgba-70: rgba(52, 60, 74, 0.7);
			--quaternary-rgba-80: rgba(52, 60, 74, 0.8);
			--quaternary-rgba-90: rgba(52, 60, 74, 0.9);
			--dark: #212529;
			--dark-100: #16181b;
			--dark-200: #101214;
			--dark-300: #0a0c0d;
			--dark--100: #2c3237;
			--dark--200: #32383e;
			--dark--300: #383f45;
			--dark-rgba-0: rgba(33, 37, 41, 0);
			--dark-rgba-10: rgba(33, 37, 41, 0.1);
			--dark-rgba-20: rgba(33, 37, 41, 0.2);
			--dark-rgba-30: rgba(33, 37, 41, 0.3);
			--dark-rgba-40: rgba(33, 37, 41, 0.4);
			--dark-rgba-50: rgba(33, 37, 41, 0.5);
			--dark-rgba-60: rgba(33, 37, 41, 0.6);
			--dark-rgba-70: rgba(33, 37, 41, 0.7);
			--dark-rgba-80: rgba(33, 37, 41, 0.8);
			--dark-rgba-90: rgba(33, 37, 41, 0.9);
			--light: #FFF;
			--light-100: #f2f2f2;
			--light-200: #ececec;
			--light-300: #e6e6e6;
			--light--100: #ffffff;
			--light--200: #ffffff;
			--light--300: #ffffff;
			--light-rgba-0: rgba(255, 255, 255, 0);
			--light-rgba-10: rgba(255, 255, 255, 0.1);
			--light-rgba-20: rgba(255, 255, 255, 0.2);
			--light-rgba-30: rgba(255, 255, 255, 0.3);
			--light-rgba-40: rgba(255, 255, 255, 0.4);
			--light-rgba-50: rgba(255, 255, 255, 0.5);
			--light-rgba-60: rgba(255, 255, 255, 0.6);
			--light-rgba-70: rgba(255, 255, 255, 0.7);
			--light-rgba-80: rgba(255, 255, 255, 0.8);
			--light-rgba-90: rgba(255, 255, 255, 0.9);
			*/
			
		}
		/* Skin Colors - Inverse */
		:root {
			--primary-inverse: <?php echo get_theme_mod( 'primary_inverse_setting','#FFF'); ?>;
			--secondary-inverse:  <?php echo get_theme_mod( 'secondary_inverse_setting','#FFF'); ?>;
			--tertiary-inverse: <?php echo get_theme_mod( 'tertiary_inverse_setting','#FFF'); ?>;
			--quaternary-inverse: #FFF;
			--dark-inverse: #FFF;
			--light-inverse: #777;
		}
		/* Grey Colors */
		:root {
			--grey: #969696;
			--grey-100: #f4f4f4;
			--grey-200: #eaeaea;
			--grey-300: #e5e5e5;
			--grey-400: #e0e0e0;
			--grey-500: #dbdbdb;
			--grey-600: #cecece;
			--grey-700: #c1c1c1;
			--grey-800: #a8a8a8;
			--grey-900: #8e8e8e;
			--grey-1000: #757575;
		}
		.btn-gradient-verde:not(.btn-outline) {
			transition: 0.3s ease all; 
    		background: linear-gradient(135deg, <?php echo get_theme_mod( 'first_degrade_color_setting','#00953A'); ?>  0%, <?php echo get_theme_mod( 'second_degrade_color_setting','#008036'); ?>  80%) !important;
    		color: var(--primary-inverse);
		}
		.btn-gradient-verde:not(.btn-outline):hover, .btn-gradient-verde:not(.btn-outline).hover {
   			background: linear-gradient(135deg,  <?php echo get_theme_mod( 'first_degrade_color__hover_setting','#008036'); ?>  0%, <?php echo get_theme_mod( 'second_degrade_color_setting_hover','#00953A'); ?>  80%) !important;
    		color: var(--primary-inverse);
		}
.btn-gradient-azul:not(.btn-outline) {
    background: linear-gradient(135deg, #002B80 0%, #4458A3 80%) !important;
    color: var(--primary-inverse);
}
.btn-gradient-azul:not(.btn-outline):hover, .btn-gradient-azul:not(.btn-outline).hover {
    background: linear-gradient(135deg, #4458A3 0%, #002B80 80%) !important;
    color: var(--primary-inverse);
}

	</style>
</head>
<body data-plugin-page-transition <?php body_class( 'bg-white text-gray-900 antialiased '. $add_classes ); ?>>
<?php do_action('newasipi_site_before'); ?>
<?php do_action('newasipi_site_header');?>


<!--menu here-->

<?php echo get_template_part('template-parts/header/header-content'); ?>    
