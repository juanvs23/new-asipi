<?php 
function newasipi_html_classes( string $classes='') {
    $classes = explode( ' ', $classes );
    // Allows for incorrect snake case like is_IE to be used without throwing errors.
	global $is_IE, $is_edge, $is_safari;

	// If it's IE, add a class.
	if ( $is_IE ) {
		$classes[] = 'ie';
	}

	// If it's Edge, add a class.
	if ( $is_edge ) {
		$classes[] = 'edge';
	}

	// If it's Safari, add a class.
	if ( $is_safari ) {
		$classes[] = 'safari';
	}

	// Are we on mobile?
	if ( wp_is_mobile() ) {
		$classes[] = 'mobile';
	}

	// Adds "no-js" class. If JS is enabled, this will be replaced (by javascript) to "js".
    $classes[] = 'newasipi';

    echo implode( ' ', $classes );

}

add_action('newasipi_html_classes', 'newasipi_html_classes');