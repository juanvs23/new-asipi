<?php
namespace NewAsipi\Setup;

function newasipi_setup() {


    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'full-width', 1920, 1080, false );
    add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
            'style',
            'script'
		]
	);
    add_theme_support(
		'custom-logo',
		[
			'height'      => 250,
			'width'       => 500,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => [ 'site-title', 'site-description' ],
		]
	);
    add_theme_support( 'customize-selective-refresh-widgets' );

	// Gutenberg support for full-width/wide alignment of supported blocks.
	add_theme_support( 'align-full' );
    add_theme_support( 'wp-block-styles' );

    	// Gutenberg editor styles support.
	add_theme_support( 'editor-styles' );
	add_editor_style( 'build/index.css' );
	
	add_theme_support('widgets');

	//add_theme_support( 'block-template-parts' );

	// Gutenberg responsive embed support.
	add_theme_support( 'responsive-embeds' );

    // Gutenberg defaults for font sizes.
	add_theme_support(
		'editor-font-sizes',
		[
			[
				'name' => __( 'Small', 'newasipi' ),
				'size' => 12,
				'slug' => 'small',
			],
			[
				'name' => __( 'Normal', 'newasipi' ),
				'size' => 16,
				'slug' => 'normal',
			],
			[
				'name' => __( 'Large', 'newasipi' ),
				'size' => 36,
				'slug' => 'large',
			],
			[
				'name' => __( 'Huge', 'newasipi' ),
				'size' => 50,
				'slug' => 'huge',
			],
		]
	);
    // Register menus
    register_nav_menus(
		array(
			
			'primary' => __( 'Primary Menu', 'newasipi' ),
		)
	);
}
add_action('after_setup_theme', __NAMESPACE__.'\newasipi_setup');