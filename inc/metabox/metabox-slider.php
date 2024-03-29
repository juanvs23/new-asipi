<?php

function agregar_metabox_slider_home() {
    add_meta_box(
    'id_metabox_slider_home', // ID único para el Metabox
    'Slider Home', // Título que se mostrará en la interfaz
    'mostrar_contenido_metabox_slider_home', // Función que mostrará el contenido del Metabox
    'page', // Tipo de contenido al que se aplicará (en este caso, entradas)
    'normal', // Contexto donde se mostrará (normal, avanzado, lateral)
    'high' // Prioridad en la que se mostrará (low, default, high)
    );
    }
    
add_action('add_meta_boxes', 'agregar_metabox_slider_home');

function mostrar_contenido_metabox_slider_home($post) {
    // Recuperar el valor guardado, si existe
    $valor_guardado = get_post_meta($post->ID, '_campo_slider_home', true);
    
    // Mostrar un campo de entrada
    echo '<label for="campo_slider_home">Shortcode Slider Home:</label>';
    echo '<input type="text" id="campo_slider_home" name="campo_slider_home" value="' . esc_attr($valor_guardado) . '">';
}

function guardar_informacion_metabox_slider_home($post_id) {
    // Verificar si es una solicitud automática y si el usuario actual tiene permisos
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    
    // Guardar el valor del campo slider_home
    if (isset($_POST['campo_slider_home'])) {
        update_post_meta($post_id, '_campo_slider_home', sanitize_text_field($_POST['campo_slider_home']));
    }
}
            
add_action('save_post', 'guardar_informacion_metabox_slider_home');