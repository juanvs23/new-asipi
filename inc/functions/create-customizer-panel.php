<?php

function newasipi_create_customizer_panel( $wp_customize, $panels ) {
    foreach($panels as $panel_key => $panel_value){
        $wp_customize->add_panel($panel_key.'_panel', [
            'title' => $panel_value['title'],
            'priority' => $panel_value['priority'],
        ]);
        foreach ($panel_value['component'] as $key => $value) {
            $wp_customize->add_section( $key.'_section', array(
                'title' => $value['title'],
                'description' => $value['description'],
                'panel' => $panel_key.'_panel',
                'priority' => $value['priority'],
            ));
            $wp_customize->add_setting( $key.'_setting', array(
                'default' => $value['default'],
                'sanitize_callback' => $value['sanitize_callback'], 
            ));
            if($value['type']== 'color'){
                $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $key.'_control', array(
                    'label' => $value['label'],
                    'type' => $value['type'],
                    'section' => $key.'_section',
                    'settings' => $key.'_setting',
                )));
            }
            if($value['type']== 'image'){
                $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $key.'_control',
                    array(
                        'label'    =>  $value['label'],
                        'section' => $key.'_section',
                        'settings' => $key.'_setting',
                    )
                ) );
            }
            if($value['type']== 'text'){
                $wp_customize->add_control(  $key.'_control',
                    array(
                        'label'    =>  $value['label'],
                        'section' => $key.'_section',
                        'settings' => $key.'_setting',
                    )
                 );
            }
        }
    }  
}


function newasipi_sanitize_image( $file, $setting ) {

	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);

	//check file type from file name
	$file_ext = wp_check_filetype( $file, $mimes );

	//if file has a valid mime type return it, otherwise return default
	return ( $file_ext['ext'] ? $file : $setting->default );
}