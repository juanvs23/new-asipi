<?php

function newasipi_customize_register_image_footer( $wp_customize ) {
    /*
     * 
     * añadir panel al customizer
     */
    $panels = [
        'image_footer' => [
            'title' => 'Configurar imagen de footer',
            'priority' => 1,
            'component'=> [
                'image_footer' =>[
                    'title'=> __( 'Cambiar del footer', 'newasipi' ),
                    'description'=> __( 'Configura imagen', 'newasipi' ),
                    'priority' => 10,
                    'default' => NEWASIPI_URL.'/assets/images/asipi-logo-footer.png',
                    'type'=>'image',
                    'sanitize_callback' => 'newasipi_sanitize_image',
                    'label' => __( 'Configurar imagen', 'newasipi' ),
                ],
                
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
     
}

add_action( 'customize_register', 'newasipi_customize_register_image_footer' );

