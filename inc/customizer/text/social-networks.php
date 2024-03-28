<?php

function asipi_text_social_networks_customize_register( $wp_customize ) {

    $panels = [
        'text_social_networks' => [
            'title' => 'Configurar redes sociales',
            'priority' => 1,
            'component'=> [
                'youtube' =>[
                    'title'=> __( 'Youtube', 'newasipi' ),
                    'description'=> __( 'Configura red social Youtube (defecto <code>https://www.youtube.com/channel/UCXxMfBUBzOZ7AhFM1vQQY5Q</code>)', 'newasipi' ),
                    'priority' => 10,
                    'default' => 'https://www.youtube.com/channel/UCXxMfBUBzOZ7AhFM1vQQY5Q',
                    'type'=>'text',
                    'sanitize_callback' => '',
                    'label' => __( 'Configura red social', 'newasipi' ),
                ],
                'facebook' => [
                    'title'=> __( 'Facebook', 'newasipi' ),
                    'description'=> __( 'Configura red social Facebook (defecto <code>https://www.facebook.com/ASIPI01</code>)', 'newasipi' ),
                    'priority' => 11,
                    'default' => 'https://www.facebook.com/ASIPI01',
                    'type'=>'text',
                    'sanitize_callback' => '',
                    'label' => __( 'Configura red social', 'newasipi' ),
                ],
                'twitter' => [
                    'title'=> __( 'Twitter', 'newasipi' ),
                    'description'=> __( 'Configura red social Twitter (defecto <code>https://twitter.com/ASIPI_</code>)', 'newasipi' ),
                    'priority' => 12,
                    'default' => 'https://twitter.com/ASIPI_',
                    'type'=>'text',
                    'sanitize_callback' => '',
                    'label' => __( 'Configura red social', 'newasipi' )
                ],
                'linkedin' => [
                    'title'=> __( 'Linkedin', 'newasipi' ),
                    'description'=> __( 'Configura red social Linkedin (defecto <code>https://www.linkedin.com/company/asociaci-n-interamericana-de-la-propiedad-intelectual-asipi-/</code>)', 'newasipi' ),
                    'priority' => 13,
                    'default' => 'https://www.linkedin.com/company/asociaci-n-interamericana-de-la-propiedad-intelectual-asipi-/',
                    'type'=>'text',
                    'sanitize_callback' => '',
                    'label' => __( 'Configura red social', 'newasipi' )
                ],
                'instagram' => [
                    'title'=> __( 'Instagram', 'newasipi' ),
                    'description'=> __( 'Configura red social Instagram (defecto <code>https://www.instagram.com/asipi._/</code>)', 'newasipi' ),
                    'priority' => 14,
                    'default' => 'https://www.instagram.com/asipi._/',
                    'type'=>'text',
                    'sanitize_callback' => '',
                    'label' => __( 'Configura red social', 'newasipi' )
                ],
            ]
        ]
    ];
    newasipi_create_customizer_panel( $wp_customize, $panels );
}
add_action( 'customize_register', 'asipi_text_social_networks_customize_register' );