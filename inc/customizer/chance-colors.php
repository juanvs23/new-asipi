<?php

function newasipi_customize_register_colors( $wp_customize ) {
    #añadir panel al customizer
    $wp_customize->add_panel( 'theme_colors_panel', array(
        'title' => __( 'Colores del Tema', 'your_theme_textdomain' ),
        'priority' => 30,
    ) );

    // Agregar una sección para los colores principales
    $wp_customize->add_section( 'primary_colors_section', array(
        'title' => __( 'Colores Principales', 'your_theme_textdomain' ),
        'panel' => 'theme_colors_panel',
        'priority' => 10,
    ) );

    // Agregar un control de color para el color principal 1
    $wp_customize->add_setting( 'primary_color_1', array(
        'default' => '#002B80',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color_1_control', array(
        'label' => __( 'Color Principal 1', 'your_theme_textdomain' ),
        'section' => 'primary_colors_section',
        'settings' => 'primary_color_1',
    ) ) );
}

add_action( 'customize_register', 'newasipi_customize_register_colors' );