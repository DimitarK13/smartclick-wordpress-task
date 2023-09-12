<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Inter:wght@300;400;500;600&family=Nunito+Sans:wght@400;700;900&family=Work+Sans:wght@500&display=swap"
      rel="stylesheet"
    />

    <?php wp_head() ?>
  </head>
  <body>
    <nav class="container | nav">
      <img class="nav__logo" src="<?php echo get_site_icon_url() ?>/assets/images/logo.png" alt="Logo" />

      <button class="nav__toggle-button">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/nav-toggle.png" alt="Hamburger menu" />
      </button>

      <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'primary-nav',
                'container' => 'ul',
                'menu_class' => 'nav__primary-list'
            )
        )
      ?>
    </nav>