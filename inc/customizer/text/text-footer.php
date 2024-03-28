<?php

function asipi_text_footer_customize_register( $wp_customize ) {
    $panels = [
        'text_footer' => [
            'title' => 'Configurar texto del footer',
            'priority' => 1,
            'component'=> [
                'text_footer' =>[
                    'title'=> __( 'Cambiar texto del footer', 'newasipi' ),
                    'description'=> __( 'Configura texto', 'newasipi' ),
                    'priority' => 10,
                    'default' => 'ASIPI 2023. Derechos Reservados. Marca Registrada.',
                    'type'=>'text',
                    'sanitize_callback' => '',
                    'label' => __( 'Configura texto', 'newasipi' ),
                ],
                
            ]
        ]
    ];

    newasipi_create_customizer_panel( $wp_customize, $panels );
    
}

add_action( 'customize_register', 'asipi_text_footer_customize_register' );