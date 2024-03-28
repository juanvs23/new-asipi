<?php

function newasipi_customize_register_blue_button( $wp_customize ) {
    /*
     * 
     * añadir panel al customizer
     * #002B80 0%, #4458A3
     */
    $panels = [
        'blue_button' => [
            'title' => 'Configurar botón azul',
            'priority' => 1,
            'component'=> [
                'first_blue_degrade_color' =>[
                    'title'=> __( 'Primer color degradado', 'newasipi' ),
                    'description'=> __( 'Configura color degradado (default <code>#002B80</code>)', 'newasipi' ),
                    'priority' => 10,
                    'default' => '#002B80',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
                'second_blue_degrade_color' =>[
                    'title'=> __( 'Segundo color degradado', 'newasipi' ),
                    'description'=> __( 'Configura color degradado (default <code>#4458A3</code>)', 'newasipi' ),
                    'priority' => 11,
                    'default' => '#4458A3',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
                'first_blue_degrade_color_hover' =>[
                    'title'=> __( 'Primero color degradado hover', 'newasipi' ),
                    'description'=> __( 'configurar color degradado hover (default <code>#4458A3</code>)', 'newasipi' ),
                    'priority' => 12,
                    'default' => '#4458A3',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
                'second_blue_degrade_color_hover' =>[
                    'title'=> __( 'Segundo color degradado hover', 'newasipi' ),
                    'description'=> __( 'Configura color degradado hover (default <code>#002B80</code>)', 'newasipi' ),
                    'priority' => 13,
                    'default' => '#002B80',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
     
}

add_action( 'customize_register', 'newasipi_customize_register_blue_button' );