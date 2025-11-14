<?php
/*
Template Name: Página de Noticias
*/
get_header(); ?>

<main class="contenedor-noticias">
  <h1><?php the_title(); ?></h1>

  <?php
  // Query de las últimas noticias
  $noticias = new WP_Query(array(
    'post_type' => 'post',          // o tu tipo de contenido: 'noticias'
    'posts_per_page' => 6
  ));

  if ($noticias->have_posts()) :
    echo '<div class="lista-noticias">';
    while ($noticias->have_posts()) : $noticias->the_post(); ?>
      
      <article class="noticia">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
          <h2><?php the_title(); ?></h2>
        </a>
        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
        <a class="leer-mas" href="<?php the_permalink(); ?>">Leer más →</a>
      </article>

    <?php endwhile;
    echo '</div>';
    wp_reset_postdata();
  else :
    echo '<p>No hay noticias disponibles.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
