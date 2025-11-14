<?php get_header(); ?>

<main class="portada-container">

  <section class="intro">
    <h1>Juegos para nostálgicos</h1>
    <p>Para aquellos que echan de menos los juegos de PS2 y para los que no los han probado, esta página es para vosotros.</p>
  </section>

  <!-- Juegos agregados recientemente -->
  <section class="juegos-recientes">
    <h2>Juegos agregados recientemente</h2>
    <div class="lista-juegos">
      <?php
      $recientes = new WP_Query(array(
        'post_type' => 'videojuegos',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
      ));

      if ($recientes->have_posts()) :
        while ($recientes->have_posts()) : $recientes->the_post(); ?>
          <article class="juego-item">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
              <?php endif; ?>
              <h4><?php the_title(); ?></h4>
            </a>
          </article>
        <?php endwhile;
        wp_reset_postdata();
      else : ?>
        <p>No hay juegos recientes todavía.</p>
      <?php endif; ?>
    </div>
  </section>

<!-- Mods para juegos -->
<section class="juegos-recientes">
  <h2>Mods para juegos</h2>
  <div class="lista-juegos">
    <?php
    $mods = new WP_Query(array(
      'post_type' => 'videojuegos',
      'posts_per_page' => 3,
      'tax_query' => array(
        array(
          'taxonomy' => 'categoria_juego',
          'field'    => 'slug',
          'terms'    => 'mods', 
        ),
      ),
    ));

    if ($mods->have_posts()) :
      while ($mods->have_posts()) : $mods->the_post(); ?>
        <article class="juego-item">
          <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <h4><?php the_title(); ?></h4>
          </a>
        </article>
      <?php endwhile;
      wp_reset_postdata();
    else : ?>
      <p>No hay mods disponibles por ahora.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
