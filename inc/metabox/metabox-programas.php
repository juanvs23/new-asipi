<?php

function agregar_metabox_programas() {
    if ( get_page_template() == get_query_template('front-page') ) {
        add_meta_box(
            'id_metabox_programas', // ID único para el Metabox
            'Programas', // Título que se mostrará en la interfaz
            'mostrar_contenido_metabox_programas', // Función que mostrará el contenido del Metabox
            'page', // Tipo de contenido al que se aplicará (en este caso, entradas)
            'normal', // Contexto donde se mostrará (normal, avanzado, lateral)
            'high' // Prioridad en la que se mostrará (low, default, high)
            );
    }
  
    }
    
add_action('add_meta_boxes', 'agregar_metabox_programas');

function mostrar_contenido_metabox_programas($post) {
    // Recuperar el valor guardado, si existe
    $title_institucional = get_post_meta($post->ID, '_title_institucional', true);
    $shortcode_institucional = get_post_meta($post->ID, '_shortcode_institucional', true);
    $title_media = get_post_meta($post->ID, '_title_media', true);
    $shortcode_media = get_post_meta($post->ID, '_shortcode_media', true);
    $title_academico = get_post_meta($post->ID, '_title_academico', true);
    $image_academico = get_post_meta($post->ID, '_image_academico', true);

    // Media
    echo '<table>';
    echo '<tr><th style="padding:10px; text-align: left;"> Patrocinadores Institucionales</th></tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="title_institucional">Titulo:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="title_institucional" name="title_institucional" size="120" value="' . esc_attr($title_institucional) . '"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="shortcode_institucional">Shortcode Slider institucional:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="shortcode_institucional" name="shortcode_institucional" size="120" value="' . esc_attr($shortcode_institucional) . '"></td>';
    echo '</tr>';
    echo '</table>';

    // Socio Academico
    echo '<table>';
    echo '<tr><th style="padding:10px; text-align: left;"> Socio Académico </th></tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="title_academico">Titulo:</label></td>';
    echo '<td style="padding:10px;" colspan="2"><input type="text" id="title_academico" name="title_academico" size="120" value="' . esc_attr($title_academico) . '"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><a href="#" class="upload_image_button_academico button button-secondary"> Upload Image </a></td>';
    echo '<td style="padding:10px;"><input type="text" name="custom_image_academico" id="custom_image_academico" value="'.$image_academico.'" style="width:500px;" /></td>';
    echo '<td style="padding:10px;"><img id="custom_image1_academico" class="img-fluid" src="'.$image_academico.'" alt=""></td>';
    echo '</tr>';
    echo '</table>';

    // Media
    echo '<table>';
    echo '<tr><th style="padding:10px; text-align: left;"> Media </th></tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="title_media">Titulo:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="title_media" name="title_media" size="120" value="' . esc_attr($title_media) . '"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="shortcode_media">Shortcode Slider Media:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="shortcode_media" name="shortcode_media" size="120" value="' . esc_attr($shortcode_media) . '"></td>';
    echo '</tr>';
    echo '</table>';
    

    
    
}

function guardar_informacion_metabox_programas($post_id) {
    // Verificar si es una solicitud automática y si el usuario actual tiene permisos
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    
    // Guardar el valor del campo media
    if (isset($_POST['title_institucional']) || isset($_POST['shortcode_institucional']) || isset($_POST['title_media']) || isset($_POST['shortcode_media']) || isset($_POST['title_academico']) || isset($_POST['custom_image_academico'])) {
        update_post_meta($post_id, '_title_institucional', sanitize_text_field($_POST['title_institucional']));
        update_post_meta($post_id, '_shortcode_institucional', sanitize_text_field($_POST['shortcode_institucional']));
        update_post_meta($post_id, '_title_media', sanitize_text_field($_POST['title_media']));
        update_post_meta($post_id, '_shortcode_media', sanitize_text_field($_POST['shortcode_media']));
        update_post_meta($post_id, '_title_academico', sanitize_text_field($_POST['title_academico']));
        update_post_meta($post_id, '_image_academico', sanitize_text_field($_POST['custom_image_academico']));
    }


}
            
add_action('save_post', 'guardar_informacion_metabox_programas');


function mm_include_script() {
 
    if (! did_action( 'wp_enqueue_programas')) {
        wp_enqueue_programas();
    }
  
    wp_enqueue_script( 'mpscript', get_stylesheet_directory_uri(). '/assets/js/mpscript.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'mp_include_script' );