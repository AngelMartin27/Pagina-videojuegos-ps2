<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
  <div class="navbar">
    <!-- Contenedor izquierdo: logo + nombre -->
    <div class="navbar-left">
      <div class="site-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo_retro.png" alt="<?php bloginfo('name'); ?>">
        </a>
      </div>
      <div class="site-name">
        <h1><?php bloginfo('name'); ?></h1>
      </div>
    </div>

    <!-- Botón Hamburguesa (solo visible en móvil) -->
    <div class="navbar-right">
      <div class="hamburger" id="hamburger-menu" aria-label="Abrir menú" role="button" tabindex="0">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <!-- Menú de navegación -->
    <nav class="menu">
      <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
      <a href="<?php echo esc_url(home_url('/noticias')); ?>">Noticias</a>
      <a href="<?php echo esc_url(home_url('/juegos')); ?>">Juegos</a>
      <a href="<?php echo esc_url(home_url('/historia')); ?>" class="btn-historia">Historia</a>
      <a href="<?php echo esc_url(home_url('/consolas')); ?>">Consolas</a>
      <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="btn-contacto">Contacto</a>
    </nav>
  </div>
</header>

<script>
  // Script para el menú hamburguesa
  document.addEventListener('DOMContentLoaded', function () {
    const hamburger = document.getElementById('hamburger-menu');
    const menu = document.querySelector('.menu');

    hamburger.addEventListener('click', function () {
      this.classList.toggle('active');
      menu.classList.toggle('active');
    });

    // Cierra el menú al hacer clic en un enlace
    menu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        menu.classList.remove('active');
      });
    });
  });
</script>
