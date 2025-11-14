<?php
$args = array(
    'category_name'  => 'Principal',
    'posts_per_page' => 10,
);

$posts = get_posts( $args );

if ( $posts ) {
    foreach ( $posts as $post ) {
        setup_postdata( $post );
        echo '<article class="Principal">';
        echo '<h2>' . get_the_title() . '</h2>';
        the_content();
        echo '</article>';
    }
    wp_reset_postdata();
} else {
    echo '<p>No hay artículos en la categoría Principal.</p>';
}
?>
