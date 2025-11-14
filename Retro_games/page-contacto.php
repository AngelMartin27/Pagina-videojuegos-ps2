<?php
/*
Template Name: Página de Contacto
*/
get_header();

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = sanitize_text_field($_POST["nombre"]);
    $apellido = sanitize_text_field($_POST["apellido"]);
    $email = sanitize_email($_POST["email"]);
    $contenido = sanitize_textarea_field($_POST["mensaje"]);

    if ($nombre && $email && $contenido) {
        $to = get_option('admin_email');
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $nombre $apellido\nEmail: $email\n\nMensaje:\n$contenido";
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        if (wp_mail($to, $subject, $body, $headers)) {
            $mensaje = '<p class="mensaje-exito"> Tu mensaje se ha enviado correctamente.</p>';
        } else {
            $mensaje = '<p class="mensaje-error"> No se pudo enviar el mensaje. Intenta más tarde.</p>';
        }
    } else {
        $mensaje = '<p class="mensaje-error"> Por favor, completa todos los campos obligatorios.</p>';
    }
}
?>

<main class="contacto-container">
  <h1>Contacto</h1>
  <p class="subtitulo">¿Tienes dudas? Escríbenos aquí.</p>

  <?php echo $mensaje; ?>

  <form method="post" action="<?php echo esc_url(get_permalink()); ?>">
    <label for="nombre">Nombre *</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="apellido">Apellido</label>
    <input type="text" id="apellido" name="apellido">

    <label for="email">Correo electrónico *</label>
    <input type="email" id="email" name="email" required>

    <label for="mensaje">Mensaje *</label>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

    <input type="submit" value="Enviar mensaje">
  </form>
</main>

<?php get_footer(); ?>

