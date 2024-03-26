<?php
add_action( 'customize_register', 'newasipi_customize_register' );
function newasipi_customize_register( $wp_customize ) {
    
    $wp_customize->add_section('background_color', array(
        'title' => __('Background Color', 'theme_name'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('body_background_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'body_background_color', array(
        'label' => __('Background Color', 'theme_name'),
        'section' => 'background_color',
        'settings' => 'body_background_color',
    )));
}