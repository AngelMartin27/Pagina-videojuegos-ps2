<?php

// Registrar los menús del tema
function retrogames_registrar_menus() {
    register_nav_menus(array(
        'menu_principal' => 'Menú Principal',
        'menu_redes'     => 'Menú Redes Sociales',
        'menu_legal'     => 'Menú Legal',
    ));
}
add_action('init', 'retrogames_registrar_menus');

// Cargar estilos del tema
function retrogames_estilos() {
    // Cargar el CSS principal del tema
    wp_enqueue_style('retrogames-style', get_stylesheet_uri());

    // Cargar Font Awesome (iconos del footer)
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'retrogames_estilos');

// Activar funciones básicas del tema
function retrogames_setup() {
    // Permitir imágenes destacadas en las entradas
    add_theme_support('post-thumbnails');

    // Permitir título dinámico en la pestaña del navegador
    add_theme_support('title-tag');

    // (Ejemplo de soporte HTML5, por si lo necesitas más adelante)
    // add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'retrogames_setup');

// === REGISTRO DEL POST TYPE ===
function registrar_post_type_videojuegos() {
    $labels = array(
        'name' => 'Videojuegos',
        'singular_name' => 'Videojuego',
        'menu_name' => 'Videojuegos',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo videojuego',
        'edit_item' => 'Editar videojuego',
        'new_item' => 'Nuevo videojuego',
        'view_item' => 'Ver videojuego',
        'all_items' => 'Todos los videojuegos',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'videojuegos'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('videojuegos', $args);
}
add_action('init', 'registrar_post_type_videojuegos');

function registrar_taxonomia_categoria_juego() {
    $labels = array(
        'name'              => 'Categorías de Juegos',
        'singular_name'     => 'Categoría de Juego',
        'search_items'      => 'Buscar Categorías',
        'all_items'         => 'Todas las Categorías',
        'parent_item'       => 'Categoría padre',
        'parent_item_colon' => 'Categoría padre:',
        'edit_item'         => 'Editar Categoría',
        'update_item'       => 'Actualizar Categoría',
        'add_new_item'      => 'Agregar nueva Categoría',
        'new_item_name'     => 'Nombre de nueva Categoría',
        'menu_name'         => 'Categorías de Juegos',
    );

    $args = array(
        'hierarchical'      => true, // para que se comporte como categorías (no etiquetas)
        'labels'            => $labels,
        'show_ui'           => true, // muestra la interfaz
        'show_admin_column' => true, // muestra la columna en el admin
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categoria_juego'),
        'show_in_rest'      => true, // importante para editor de bloques
    );

    register_taxonomy('categoria_juego', array('videojuegos'), $args);
}
add_action('init', 'registrar_taxonomia_categoria_juego');