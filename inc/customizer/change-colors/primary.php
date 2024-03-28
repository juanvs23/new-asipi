<?php

function newasipi_customize_register_colors( $wp_customize ) {
    /*
     * 
     * añadir panel al customizer
     */

    /**
     *  Color principal
     */
    /**
    *       --primary: #002B80;
    *       --primary-100: #088dc4;
    *		--primary-200: #0784b7;
    *		--primary-300: #077cab;
    *		--primary--100: #0ab1f4;
    *		--primary--200: #16b5f5;
    *		--primary--300: #22b9f6;
    *		--primary-rgba-0: rgba(9, 159, 220, 0);
    *		--primary-rgba-10: rgba(9, 159, 220, 0.1);
    *		--primary-rgba-20: rgba(9, 159, 220, 0.2);
    *		--primary-rgba-30: rgba(9, 159, 220, 0.3);
    *		--primary-rgba-40: rgba(9, 159, 220, 0.4);
    *		--primary-rgba-50: rgba(9, 159, 220, 0.5);
    *		--primary-rgba-60: rgba(9, 159, 220, 0.6);
    *		--primary-rgba-70: rgba(9, 159, 220, 0.7);
    *		--primary-rgba-80: rgba(9, 159, 220, 0.8);
    *		--primary-rgba-90: rgba(9, 159, 220, 0.9);
     */
    $panels = [
        'theme_color' => [
            'title' => 'Color principal',
            'priority' => 1,
            'component'=> [
                'primary' =>[
                    'title'=> __( 'Color primario principal', 'newasipi' ),
                    'description'=> __( 'Configura color primario (default <code>#002B80</code>)', 'newasipi' ),
                    'priority' => 10,
                    'default' => '#002B80',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario', 'newasipi' ),
                ],
                'primary_100' =>[
                    'title'=> __( 'Color primario 100', 'newasipi' ),
                    'description'=> __( 'Configura Colores primario 100 (default <code>#088dc4</code>)', 'newasipi' ),
                    'priority' => 11,
                    'default' => '#088dc4',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario 100', 'newasipi' ),
                ],
                'primary_200' =>[
                    'title'=> __( 'Color primario 200', 'newasipi' ),
                    'description'=> __( 'Configura Colores primario 200 (default <code>#0784b7</code>)', 'newasipi' ),
                    'priority' => 12,
                    'default' => '#0784b7',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario 200', 'newasipi' ),
                ],
                'primary_300' =>[
                    'title'=> __( 'Color primario 300', 'newasipi' ),
                    'description'=> __( 'Configura Colores primario 300 (default <code>#077cab</code>)', 'newasipi' ),
                    'priority' => 13,
                    'default' => '#077cab',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario 300', 'newasipi' ),
                ],
                'primary__100' =>[
                    'title'=> __( 'Color primario 100A', 'newasipi' ),
                    'description'=> __( 'Configura Colores primario 100A (default <code>#0ab1f4</code>)', 'newasipi' ),
                    'priority' => 14,
                    'default' => '#0ab1f4',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario 100A', 'newasipi' ),
                ],
                'primary__200' =>[
                    'title'=> __( 'Color primario 200A', 'newasipi' ),
                    'description'=> __( 'Configura Colores primario 200A (default <code>#16b5f5</code>)', 'newasipi' ),
                    'priority' => 15,
                    'default' => '#16b5f5',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario 200A', 'newasipi' ),
                ],
                'primary__300' =>[
                    'title'=> __( 'Color primario 300A', 'newasipi' ),
                    'description'=> __( 'Configura Colores primario 300A (default <code>#22b9f6</code>)', 'newasipi' ),
                    'priority' => 16,
                    'default' => '#22b9f6',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario 300A', 'newasipi' ),
                ],
                'primary_color_degradate'=>[
                    'title'=> __( 'Degradado primario', 'newasipi' ),
                    'description'=> __( 'Configura degradado primario (default <code>#099fdc</code>)', 'newasipi' ),
                    'priority' => 17,
                    'default' => '#099fdc',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Degradado primario', 'newasipi' ),    
                ],
                'primary_inverse'=>[
                    'title'=> __( 'Color primario inverso', 'newasipi' ),
                    'description'=> __( 'Configura color primario inverso (default <code>#fff</code>)', 'newasipi' ),
                    'priority' => 18,
                    'default' => '#fff',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color primario inverso', 'newasipi' ),
                ]
                
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
     
}

add_action( 'customize_register', 'newasipi_customize_register_colors' );