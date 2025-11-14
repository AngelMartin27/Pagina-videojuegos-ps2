<?php
/**
 * Template Name: Página de Videojuegos
 */

get_header();
?>

<main id="main" class="site-main container">
    <h1 class="page-title">Videojuegos</h1>

    <?php
    // Contenido de la página
    while (have_posts()) : the_post();
        the_content();
    endwhile;

    // Bucle de Videojuegos (post type con mayúscula)
    $args = array(
        'post_type' => 'Videojuegos',
        'posts_per_page' => 6,
    );
    $videojuegos = new WP_Query($args);

    if ($videojuegos->have_posts()) :
        echo '<div class="lista-videojuegos">';
        while ($videojuegos->have_posts()) : $videojuegos->the_post(); ?>

            <article class="videojuego-item">
                <h2><?php the_title(); ?></h2>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="videojuego-thumb">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>

                <div class="videojuego-descripcion">
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="boton-ver">Ver más</a>
                </div>
                
                <?php
                // Campo ACF para gameplay (oEmbed)
                $gameplay = get_field('gameplay');
                if ($gameplay) : ?>
                    <div class="gameplay-video">
                        <?php 
                        // Elimina width y height del iframe para hacerlo responsivo
                        $gameplay_responsive = preg_replace('/(width|height)="\d*"\s*/i', '', $gameplay);
                        echo $gameplay_responsive;
                        ?>
                    </div>

                <?php endif; ?>
            </article>

        <?php endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>No hay videojuegos disponibles.</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
