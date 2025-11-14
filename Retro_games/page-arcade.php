<?php
/*
Template Name: Acción
*/
get_header();
?>

<main class="categoria-container">
  <div class="contenido-container">

    <!-- ===== TÍTULO Y BUSCADOR ===== -->
    <section class="encabezado-categoria">
      <h1>Juegos de Arcade</h1>
      <p>Explora los mejores juegos de acción de la era retro.</p>
    </section>

    <!-- ===== LISTADO DE JUEGOS DE ACCIÓN ===== -->
    <section class="juegos-categoria">
      <?php
      // Consulta personalizada: categoría "Arcade"
      $args = array(
        'post_type' => 'videojuegos',
        'tax_query' => array(
          array(
            'taxonomy' => 'categoria_juego',
            'field' => 'slug',
            'terms' => 'arcade', // slug de la categoría
          ),
        ),
        'posts_per_page' => -1,
      );
      $juegos = new WP_Query($args);

      if ($juegos->have_posts()) :
        while ($juegos->have_posts()) : $juegos->the_post();
          $plataforma = get_field('plataforma'); // ejemplo de campo ACF
      ?>
          <article class="juego-item">
            <div class="juego-contenido">
              <h2 class="titulo-juego"><?php the_title(); ?></h2>

              <?php if (has_post_thumbnail()) : ?>
                <div class="juego-imagen">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              <?php endif; ?>

              <a href="<?php the_permalink(); ?>" class="boton-ver">Ver más detalles</a>
            </div>
          </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No se encontraron juegos de arcade.</p>';
      endif;
      ?>
    </section>

  </div>
</main>

<?php get_footer(); ?>
