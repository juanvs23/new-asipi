<?php

function newasipi_customize_register_secondary_colors( $wp_customize ) {
    /*
     * 
     * añadir panel al customizer
     */

    /**
     *  Color secondary
     */
    /**
    *       --secondary: #068439;
	*		--secondary-100: #045ee9;
	*		--secondary-200: #0459dc;
	*		--secondary-300: #0354d0;
	*		--secondary--100: #2479fb;
	*		--secondary--200: #3181fc;
	*		--secondary--300: #3d89fc;
	*		--secondary-rgba-0: rgba(11, 106, 251, 0);
	*		--secondary-rgba-10: rgba(11, 106, 251, 0.1);
	*		--secondary-rgba-20: rgba(11, 106, 251, 0.2);
	*		--secondary-rgba-30: rgba(11, 106, 251, 0.3);
	*		--secondary-rgba-40: rgba(11, 106, 251, 0.4);
	*		--secondary-rgba-50: rgba(11, 106, 251, 0.5);
	*		--secondary-rgba-60: rgba(11, 106, 251, 0.6);
	*		--secondary-rgba-70: rgba(11, 106, 251, 0.7);
	*		--secondary-rgba-80: rgba(11, 106, 251, 0.8);
	*		--secondary-rgba-90: rgba(11, 106, 251, 0.9);
     */
    $panels = [
        'secondary_theme_color' => [
            'title' => 'Color secundario',
            'priority' => 1,
            'component'=> [
                'secondary' =>[
                    'title'=> __( 'Color secundario principal', 'newasipi' ),
                    'description'=> __( 'Configura color secundario (default <code>#068439</code>)', 'newasipi' ),
                    'priority' => 10,
                    'default' => '#068439',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario', 'newasipi' ),
                ],
                'secondary_100' =>[
                    'title'=> __( 'Color secundario 100', 'newasipi' ),
                    'description'=> __( 'Configura Colores secundario 100 (default <code>#045ee9</code>)', 'newasipi' ),
                    'priority' => 11,
                    'default' => '#045ee9',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario 100', 'newasipi' ),
                ],
                'secondary_200' =>[
                    'title'=> __( 'Color secundario 200', 'newasipi' ),
                    'description'=> __( 'Configura Colores secundario 200 (default <code>#0459dc</code>)', 'newasipi' ),
                    'priority' => 12,
                    'default' => '#0459dc',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario 200', 'newasipi' ),
                ],
                'secondary_300' =>[
                    'title'=> __( 'Color secundario 300', 'newasipi' ),
                    'description'=> __( 'Configura Colores secundario 300 (default <code>#0354d0</code>)', 'newasipi' ),
                    'priority' => 13,
                    'default' => '#0354d0',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario 300', 'newasipi' ),
                ],
                'secondary__100' =>[
                    'title'=> __( 'Color secundario 100A', 'newasipi' ),
                    'description'=> __( 'Configura Colores secundario 100A (default <code>#2479fb</code>)', 'newasipi' ),
                    'priority' => 14,
                    'default' => '#2479fb',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario 100A', 'newasipi' ),
                ],
                'secondary__200' =>[
                    'title'=> __( 'Color secundario 200A', 'newasipi' ),
                    'description'=> __( 'Configura Colores secundario 200A (default <code>#3181fc</code>)', 'newasipi' ),
                    'priority' => 15,
                    'default' => '#3181fc',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario 200A', 'newasipi' ),
                ],
                'secondary__300' =>[
                    'title'=> __( 'Color secundario 300A', 'newasipi' ),
                    'description'=> __( 'Configura Colores secundario 300A (default <code>#3d89fc</code>)', 'newasipi' ),
                    'priority' => 16,
                    'default' => '#3d89fc',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario 300A', 'newasipi' ),
                ],
                'secondary_color_degradate'=>[
                    'title'=> __( 'Degradado secundario', 'newasipi' ),
                    'description'=> __( 'Configura degradado secundario (default <code>#0b6afb</code>)', 'newasipi' ),
                    'priority' => 17,
                    'default' => '#0b6afb',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Degradado secundario', 'newasipi' ),    
                ],
                'secondary_inverse'=>[
                    'title'=> __( 'Color secundario inverso', 'newasipi' ),
                    'description'=> __( 'Configura color secundario inverso (default <code>#fff</code>)', 'newasipi' ),
                    'priority' => 18,
                    'default' => '#fff',
                    'type'=>'color',
                    'sanitize_callback' => 'sanitize_hex_color',
                    'label' => __( 'Color secundario inverso', 'newasipi' ),
                ]
                
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
     
}

add_action( 'customize_register', 'newasipi_customize_register_secondary_colors' );