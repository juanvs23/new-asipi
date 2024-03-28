<?php

function newasipi_customize_register_tertiary_colors( $wp_customize ) {
    /*
     * 
     * añadir panel al customizer
     */

    /**
     *  Color tertiary
     */
    /**
    *       --tertiary: #262c36;
	*		--tertiary-100: #1b2027;
	*		--tertiary-200: #161a20;
	*		--tertiary-300: #111418;
	*		--tertiary--100: #313845;
	*		--tertiary--200: #363e4c;
	*		--tertiary--300: #3b4454;
	*		--tertiary-rgba-0: rgba(38, 44, 54, 0);
	*		--tertiary-rgba-10: rgba(38, 44, 54, 0.1);
	*		--tertiary-rgba-20: rgba(38, 44, 54, 0.2);
	*		--tertiary-rgba-30: rgba(38, 44, 54, 0.3);
	*		--tertiary-rgba-40: rgba(38, 44, 54, 0.4);
	*		--tertiary-rgba-50: rgba(38, 44, 54, 0.5);
	*		--tertiary-rgba-60: rgba(38, 44, 54, 0.6);
	*		--tertiary-rgba-70: rgba(38, 44, 54, 0.7);
	*		--tertiary-rgba-80: rgba(38, 44, 54, 0.8);
	*		--tertiary-rgba-90: rgba(38, 44, 54, 0.9);
     */
    $panels = [
        'tertiary_theme_color' => [
            'title' => 'Color terciario',
            'priority' => 1,
            'component'=> [
                'tertiary' =>[
                    'title'=> __( 'Color terciario principal', 'newasipi' ),
                    'description'=> __( 'Configura color terciario (default <code>#262c36</code>)', 'newasipi' ),
                    'priority' => 10,
                    'default' => '#262c36',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario', 'newasipi' ),
                ],
                'tertiary_100' =>[
                    'title'=> __( 'Color terciario 100', 'newasipi' ),
                    'description'=> __( 'Configura Colores terciario 100 (default <code>#1b2027</code>)', 'newasipi' ),
                    'priority' => 11,
                    'default' => '#1b2027',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario 100', 'newasipi' ),
                ],
                'tertiary_200' =>[
                    'title'=> __( 'Color terciario 200', 'newasipi' ),
                    'description'=> __( 'Configura Colores terciario 200 (default <code>#161a20</code>)', 'newasipi' ),
                    'priority' => 12,
                    'default' => '#161a20',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario 200', 'newasipi' ),
                ],
                'tertiary_300' =>[
                    'title'=> __( 'Color terciario 300', 'newasipi' ),
                    'description'=> __( 'Configura Colores terciario 300 (default <code>#111418</code>)', 'newasipi' ),
                    'priority' => 13,
                    'default' => '#111418',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario 300', 'newasipi' ),
                ],
                'tertiary__100' =>[
                    'title'=> __( 'Color terciario 100A', 'newasipi' ),
                    'description'=> __( 'Configura Colores terciario 100A (default <code>#313845</code>)', 'newasipi' ),
                    'priority' => 14,
                    'default' => '#313845',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario 100A', 'newasipi' ),
                ],
                'tertiary__200' =>[
                    'title'=> __( 'Color terciario 200A', 'newasipi' ),
                    'description'=> __( 'Configura Colores terciario 200A (default <code>#363e4c</code>)', 'newasipi' ),
                    'priority' => 15,
                    'default' => '#363e4c',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario 200A', 'newasipi' ),
                ],
                'tertiary__300' =>[
                    'title'=> __( 'Color terciario 300A', 'newasipi' ),
                    'description'=> __( 'Configura Colores terciario 300A (default <code>#3b4454</code>)', 'newasipi' ),
                    'priority' => 16,
                    'default' => '#3b4454',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario 300A', 'newasipi' ),
                ],
                'tertiary_color_degradate'=>[
                    'title'=> __( 'Degradado terciario', 'newasipi' ),
                    'description'=> __( 'Configura degradado terciario (default <code>#262c36</code>)', 'newasipi' ),
                    'priority' => 17,
                    'default' => '#262c36',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Degradado terciario', 'newasipi' ),    
                ],
                'tertiary_inverse'=>[
                    'title'=> __( 'Color terciario inverso', 'newasipi' ),
                    'description'=> __( 'Configura color terciario inverso (default <code>#fff</code>)', 'newasipi' ),
                    'priority' => 18,
                    'default' => '#fff',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color terciario inverso', 'newasipi' ),
                ]
                
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
     
}

add_action( 'customize_register', 'newasipi_customize_register_tertiary_colors' );