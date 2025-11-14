<?php
/*
Template Name: Categorías
*/
get_header();
?>
<main class="categorias-page">
  <section class="categorias-section">
    <h1 class="titulo-principal">Categorías</h1>
    <p class="descripcion-general">
      Explora nuestras categorías de videojuegos clásicos. Desde los deportes más intensos hasta la acción más frenética.
    </p>

    <div class="bloques-categorias">

      <!-- ===== DEPORTES ===== -->
      <div class="bloque-categoria">
        <div class="texto-categoria">
          <h2>Deportes</h2>
          <p>Simulan competiciones reales, perfectos para vivir la emoción del fútbol, el basket o las carreras.</p>
        </div>
        <div class="imagen-categoria">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Juego Deportes.png" alt="Juegos de deportes">
          <a href="<?php echo home_url('/deportes'); ?>" class="boton-ver">Ir a deportes</a>
        </div>
      </div>

      <!-- ===== ARCADE ===== -->
      <div class="bloque-categoria">
        <div class="texto-categoria">
          <h2>Arcade</h2>
          <p>Partidas rápidas y divertidas, con estilo clásico y puntuaciones altas como en las máquinas de antes.</p>
        </div>
          <div class="imagen-categoria">   
          <img src="<?php echo get_template_directory_uri(); ?>/images/Juego Arcade.png" alt="Juegos arcade">
          <a href="<?php echo home_url('/arcade'); ?>" class="boton-ver">Ir a arcade</a>
        </div>
      </div>

      <!-- ===== HORROR ===== -->
      <div class="bloque-categoria">
        <div class="texto-categoria">
          <h2>Horror</h2>
          <p>Partidas escalofriantes que te mantendrán al borde del asiento, con atmósferas inquietantes y sustos inesperados.</p>
        </div>
        <div class="imagen-categoria">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Juego Terror.png" alt="Juegos de terror">
          <a href="<?php echo home_url('/horror'); ?>" class="boton-ver">Ir a horror</a>
        </div>
      </div>

      <!-- ===== ACCIÓN ===== -->
      <div class="bloque-categoria">
        <div class="texto-categoria">
          <h2>Acción</h2>
          <p>Juegos llenos de ritmo y adrenalina, donde hay que reaccionar rápido y estar atento a todo lo que pasa.</p>
        </div>
        <div class="imagen-categoria">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Juego Accion.png" alt="Juegos de acción">
          <a href="<?php echo home_url('/accion'); ?>" class="boton-ver">Ir a acción</a>
        </div>
      </div>

    </div>
  </section>
</main>

<?php get_footer(); ?>
