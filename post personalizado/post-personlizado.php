<?php
/*
    Plugin Name: Post Personalizado
    Description: Crear un post personalizado
    Version: 1.0.0
    Author: Retrogames
    Text Domain: RetrogamesTheme
*/

if(!defined('ABSPATH')) die();

// Registrar
function RetrogamesTheme_videojuegos_post_type() {

	$labels = array(
		'name'                  => _x( 'Videojuegos', 'Post Type General Name', 'RetrogamesTheme' ),
		'singular_name'         => _x( 'Videojuegos', 'Post Type Singular Name', 'RetrogamesTheme' ),
		'menu_name'             => __( 'Videojuegos', 'RetrogamesTheme' ),
		'name_admin_bar'        => __( 'Videojuegos', 'RetrogamesTheme' ),
		'archives'              => __( 'Archivo', 'RetrogamesTheme' ),
		'attributes'            => __( 'Atributos', 'RetrogamesTheme' ),
		'parent_item_colon'     => __( 'Videojuegos Padre', 'RetrogamesTheme' ),
		'all_items'             => __( 'Todas Las Videojuegos', 'RetrogamesTheme' ),
		'add_new_item'          => __( 'Agregar Videojuegos', 'RetrogamesTheme' ),
		'add_new'               => __( 'Agregar Videojuegos', 'RetrogamesTheme' ),
		'new_item'              => __( 'Nueva Videojuegos', 'RetrogamesTheme' ),
		'edit_item'             => __( 'Editar Videojuegos', 'RetrogamesTheme' ),
		'update_item'           => __( 'Actualizar Videojuegos', 'RetrogamesTheme' ),
		'view_item'             => __( 'Ver Videojuegos', 'RetrogamesTheme' ),
		'view_items'            => __( 'Ver Videojuegos', 'RetrogamesTheme' ),
		'search_items'          => __( 'Buscar Videojuegos', 'RetrogamesTheme' ),
		'not_found'             => __( 'No Encontrado', 'RetrogamesTheme' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'RetrogamesTheme' ),
		'featured_image'        => __( 'Imagen Destacada', 'RetrogamesTheme' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'RetrogamesTheme' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'RetrogamesTheme' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'RetrogamesTheme' ),
		'insert_into_item'      => __( 'Insertar en Videojuegos', 'RetrogamesTheme' ),
		'uploaded_to_this_item' => __( 'Agregado en Videojuegos', 'RetrogamesTheme' ),
		'items_list'            => __( 'Lista de Videojuegos', 'RetrogamesTheme' ),
		'items_list_navigation' => __( 'Navegación de Videojuegos', 'RetrogamesTheme' ),
		'filter_items_list'     => __( 'Filtrar Videojuegos', 'RetrogamesTheme' ),
	);
	$args = array(
		'label'                 => __( 'Videojuegos', 'RetrogamesTheme' ),
		'description'           => __( 'Videojuegos para el Sitio Web', 'RetrogamesTheme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Videojuegos', $args );

}
add_action( 'init', 'RetrogamesTheme_Videojuegos_post_type', 0 );