<?php get_header() ?>

    <main>
      <?php 
        $content = apply_filters( 'the_content', get_the_content() );
        echo $content;
      ?>
    </main>

<?php get_footer() ?>