<?php

function newasipi_customize_register_green_button( $wp_customize ) {
    /*
     * 
     * añadir panel al customizer
     */
    $panels = [
        'green_button' => [
            'title' => 'Configurar botón verde',
            'priority' => 1,
            'component'=> [
                'first_degrade_color' =>[
                    'title'=> __( 'Primer color degradado', 'newasipi' ),
                    'description'=> __( 'Configura color degradado (default <code>#00953A</code>)', 'newasipi' ),
                    'priority' => 10,
                    'default' => '#00953A',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
                'second_degrade_color' =>[
                    'title'=> __( 'Segundo color degradado', 'newasipi' ),
                    'description'=> __( 'Configura color degradado (default <code>#008036</code>)', 'newasipi' ),
                    'priority' => 11,
                    'default' => '#008036',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
                'first_degrade_color_hover' =>[
                    'title'=> __( 'Primero color degradado hover', 'newasipi' ),
                    'description'=> __( 'configurar color degradado hover (default <code>#008036</code>)', 'newasipi' ),
                    'priority' => 12,
                    'default' => '#008036',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
                'second_degrade_color_hover' =>[
                    'title'=> __( 'Segundo color degradado hover', 'newasipi' ),
                    'description'=> __( 'Configura color degradado hover (default <code>#00953A</code>)', 'newasipi' ),
                    'priority' => 13,
                    'default' => '#00953A',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Configurar color', 'newasipi' ),
                ],
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
     
}

add_action( 'customize_register', 'newasipi_customize_register_green_button' );