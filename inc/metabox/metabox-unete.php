<?php

function agregar_metabox_unete() {
    add_meta_box(
    'id_metabox_unete', // ID único para el Metabox
    'Unete Asipi', // Título que se mostrará en la interfaz
    'mostrar_contenido_metabox_unete', // Función que mostrará el contenido del Metabox
    'page', // Tipo de contenido al que se aplicará (en este caso, entradas)
    'normal', // Contexto donde se mostrará (normal, avanzado, lateral)
    'high' // Prioridad en la que se mostrará (low, default, high)
    );
    }
    
add_action('add_meta_boxes', 'agregar_metabox_unete');

function mostrar_contenido_metabox_unete($post) {
    // Recuperar el valor guardado, si existe
    $title_unete = get_post_meta($post->ID, '_title_unete', true);
    $texto_unete = get_post_meta($post->ID, '_texto_unete', true);
    $image_unete1 = get_post_meta($post->ID, '_image_unete1', true);
    $image_unete2 = get_post_meta($post->ID, '_image_unete2', true);
    $image_unete3 = get_post_meta($post->ID, '_image_unete3', true);
    $image_unete4 = get_post_meta($post->ID, '_image_unete4', true);
    $image_unete5 = get_post_meta($post->ID, '_image_unete5', true);
    $titulo_boton_unete = get_post_meta($post->ID, '_titulo_boton_unete', true);
    $link_boton_unete = get_post_meta($post->ID, '_link_boton_unete', true);

    // unete
    echo '<table>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="title_unete">Titulo:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="c" name="title_unete" size="120" value="' . esc_attr($title_unete) . '"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="texto_unete">Texto:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="texto_unete" name="texto_unete" size="120" value="' . esc_attr($texto_unete) . '"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><a href="#" class="upload_image_button_unete1 button button-secondary"> Upload Image </a></td>';
    echo '<td style="padding:10px;"><input type="text" name="custom_image_unete1" id="custom_image_unete1" value="'.$image_unete1.'" style="width:500px;" /></td>';
    echo '<td style="padding:10px; background: #006ba1;"><img id="custom_image1_unete1" class="img-fluid" src="'.$image_unete1.'" alt=""></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><a href="#" class="upload_image_button_unete2 button button-secondary"> Upload Image </a></td>';
    echo '<td style="padding:10px;"><input type="text" name="custom_image_unete2" id="custom_image_unete2" value="'.$image_unete2.'" style="width:500px;" /></td>';
    echo '<td style="padding:10px; background: #006ba1;"><img id="custom_image1_unete2" class="img-fluid" src="'.$image_unete2.'" alt=""></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><a href="#" class="upload_image_button_unete3 button button-secondary"> Upload Image </a></td>';
    echo '<td style="padding:10px;"><input type="text" name="custom_image_unete3" id="custom_image_unete3" value="'.$image_unete3.'" style="width:500px;" /></td>';
    echo '<td style="padding:10px; background: #006ba1;"><img id="custom_image1_unete3" class="img-fluid" src="'.$image_unete3.'" alt=""></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><a href="#" class="upload_image_button_unete4 button button-secondary"> Upload Image </a></td>';
    echo '<td style="padding:10px;"><input type="text" name="custom_image_unete4" id="custom_image_unete4" value="'.$image_unete4.'" style="width:500px;" /></td>';
    echo '<td style="padding:10px; background: #006ba1;"><img id="custom_image1_unete4" class="img-fluid" src="'.$image_unete4.'" alt=""></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><a href="#" class="upload_image_button_unete5 button button-secondary"> Upload Image </a></td>';
    echo '<td style="padding:10px;"><input type="text" name="custom_image_unete5" id="custom_image_unete5" value="'.$image_unete5.'" style="width:500px;" /></td>';
    echo '<td style="padding:10px; background: #006ba1;"><img id="custom_image1_unete5" class="img-fluid" src="'.$image_unete5.'" alt=""></td>';
    echo '</tr>';
    echo '<tr><th style="padding:10px; text-align: left;">Boton</th></tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="boton_unete">Titulo:</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="titulo_boton_unete" name="titulo_boton_unete" size="120" value="' . esc_attr($titulo_boton_unete) . '"></td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td style="padding:10px;"><label for="boton_unete">Link :</label></td>';
    echo '<td style="padding:10px;"><input type="text" id="link_boton_unete" name="link_boton_unete" size="120" value="' . esc_attr($link_boton_unete) . '"></td>';
    echo '</tr>';
    echo '</table>';

   
    

    
    
}

function guardar_informacion_metabox_unete($post_id) {
    // Verificar si es una solicitud automática y si el usuario actual tiene permisos
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    
    // Guardar el valor del campo media
    if (isset($_POST['title_unete']) || isset($_POST['texto_unete']) || isset($_POST['image_unete1']) || isset($_POST['image_unete2']) || isset($_POST['image_unete3']) || isset($_POST['image_unete4']) || isset($_POST['image_unete5'])  || isset($_POST['titulo_boton_unete'])  || isset($_POST['link_boton_unete'])  ) {
        update_post_meta($post_id, '_title_unete', sanitize_text_field($_POST['title_unete']));
        update_post_meta($post_id, '_texto_unete', sanitize_text_field($_POST['texto_unete']));
        update_post_meta($post_id, '_image_unete1', sanitize_text_field($_POST['custom_image_unete1']));
        update_post_meta($post_id, '_image_unete2', sanitize_text_field($_POST['custom_image_unete2']));
        update_post_meta($post_id, '_image_unete3', sanitize_text_field($_POST['custom_image_unete3']));
        update_post_meta($post_id, '_image_unete4', sanitize_text_field($_POST['custom_image_unete4']));
        update_post_meta($post_id, '_image_unete5', sanitize_text_field($_POST['custom_image_unete5']));
        update_post_meta($post_id, '_titulo_boton_unete', sanitize_text_field($_POST['titulo_boton_unete']));
        update_post_meta($post_id, '_link_boton_unete', sanitize_text_field($_POST['link_boton_unete']));
    }


}
            
add_action('save_post', 'guardar_informacion_metabox_unete');


function un_include_script() {
 
    if (! did_action( 'wp_enqueue_media')) {
        wp_enqueue_media();
    }
  
    wp_enqueue_script( 'unscript', get_stylesheet_directory_uri(). '/assets/js/unscript.js', array('jquery'), null, false );
}
add_action( 'admin_enqueue_scripts', 'un_include_script' );