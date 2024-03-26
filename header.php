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
</head>
<body data-plugin-page-transition <?php body_class( 'bg-white text-gray-900 antialiased '. $add_classes ); ?>>
<?php do_action('newasipi_site_before'); ?>
<?php do_action('newasipi_site_header');?>


<!--menu here-->

<?php echo get_template_part('template-parts/header/header-content'); ?>    
