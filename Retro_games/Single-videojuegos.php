<?php get_header(); ?>

<main class="detalle-juego-container">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      $informacion = get_field('informacion');
      $resena = get_field('resena');
      $gameplay = get_field('gameplay');
      $comentarios = get_field('comentarios');
  ?>
      <article class="detalle-juego">
        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()) : ?>
          <div class="detalle-imagen">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="detalle-contenido">
          <?php the_content(); ?>

          <?php if ($informacion) : ?>
            <h3>Información</h3>
            <p><?php echo esc_html($informacion); ?></p>
          <?php endif; ?>

          <?php if ($resena) : ?>
            <h3>Reseña</h3>
            <p><?php echo esc_html($resena); ?></p>
          <?php endif; ?>
        </div>

        <?php if ($gameplay) : ?>
          <div class="detalle-gameplay">
            <?php echo $gameplay; ?>
          </div>
        <?php endif; ?>

        <?php 
        // Mostrar comentarios solo si están abiertos o existen
        if (comments_open() || get_comments_number()) : ?>
          <div class="detalle-comentarios">
            <?php comments_template(); ?>
          </div>
        <?php endif; ?>

        <a href="<?php echo get_permalink(get_page_by_path('juegos')); ?>" class="boton-ver">← Volver</a>
      </article>
  <?php
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>
