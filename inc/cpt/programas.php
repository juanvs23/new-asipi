<?php

if ( ! function_exists('newasipi_program_post') ) {

    // Register Programas
    function newasipi_program_post() {
    
        $labels = array(
            'name'                  => _x( 'Programas', 'Post Type General Name', 'newasipi' ),
            'singular_name'         => _x( 'Programa', 'Post Type Singular Name', 'newasipi' ),
            'menu_name'             => __( 'Programa', 'newasipi' ),
            'name_admin_bar'        => __( 'Programa', 'newasipi' ),
            'archives'              => __( 'Programas archivados', 'newasipi' ),
            'attributes'            => __( 'atributo de programa', 'newasipi' ),
            'parent_item_colon'     => __( 'Programa padre:', 'newasipi' ),
            'all_items'             => __( 'Todos los programas', 'newasipi' ),
            'add_new_item'          => __( 'Añadir programa', 'newasipi' ),
            'add_new'               => __( 'Añadir nuevo', 'newasipi' ),
            'new_item'              => __( 'Nuevo programa', 'newasipi' ),
            'edit_item'             => __( 'Editar programa', 'newasipi' ),
            'update_item'           => __( 'Actualizar programa', 'newasipi' ),
            'view_item'             => __( 'Ver programa', 'newasipi' ),
            'view_items'            => __( 'Todos los programas', 'newasipi' ),
            'search_items'          => __( 'Buscar programa', 'newasipi' ),
            'not_found'             => __( 'No encontrado', 'newasipi' ),
            'not_found_in_trash'    => __( 'Nada en la papelera', 'newasipi' ),
            'featured_image'        => __( 'Img. destacada', 'newasipi' ),
            'set_featured_image'    => __( 'Conf. img destacada', 'newasipi' ),
            'remove_featured_image' => __( 'Remover img destacada', 'newasipi' ),
            'use_featured_image'    => __( 'Usar como img destacada', 'newasipi' ),
            'insert_into_item'      => __( 'Insertar en el programa', 'newasipi' ),
            'uploaded_to_this_item' => __( 'cargar a este programa', 'newasipi' ),
            'items_list'            => __( 'lista de Programas', 'newasipi' ),
            'items_list_navigation' => __( 'Lista de navegación de programas', 'newasipi' ),
            'filter_items_list'     => __( 'Filtro de la lista', 'newasipi' ),
        );
        $rewrite = array(
            'slug'                  => 'programa',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
    
        $args = array(
            'label'                 => __( 'Programa', 'newasipi' ),
            'description'           => __( 'Lista de los programas de asipi', 'newasipi' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats' ),
            'taxonomies'            => array(  ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-excerpt-view',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false, //'programas',
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
        );
        register_post_type( 'newasipi_pos_program', $args );
    
    }
    add_action( 'init', 'newasipi_program_post', 0 );
    
    }


  