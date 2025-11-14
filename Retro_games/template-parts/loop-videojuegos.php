<?php
$args = array('post_type' => 'Videojuegos');
$videojuegos = new WP_Query( $args );

if ( $videojuegos->have_posts()) {
    while ( $videojuegos->have_posts() ) {
        $videojuegos->the_post();
        the_title( '<h2>', '</h2>' );
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );
        }
        the_content();
        the_field('gameplay');
        echo '<hr>';
    }
    wp_reset_postdata();
} else {
    echo '<p>No hay artículos de Videojuegos disponibles.</p>';
}
?>