    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                echo '<article class="entrada">';
                echo '<h2>' . get_the_title() . '</h2>';
                the_content();
                echo '</article>';
            }
        } else {
            echo '<p>No hay noticias todavía.</p>';
        }
    ?>