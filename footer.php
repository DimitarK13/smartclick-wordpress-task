<footer class="background-secondary">
      <div class="container">
        <div class="footer__content">
          <div class="footer__content-description">
            <img
              class="footer__content-description-logo"
              src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-white.png"
              alt="Logo white"
            />
            <p class="footer__content-description-paragraph">
              Tweakful is HubSpot Theme Based On Engagement Design Framework,
              designed & developed by Openthrive.
            </p>
            <a class="footer__content-description-button" href="#"
              >Learn More</a
            >
          </div>
          <div class="footer__content-links">
            <div class="footer__content-links-column">
            <?php 
              wp_nav_menu(
                  array(
                      'theme_location' => 'footer-nav-one',
                  )
              )
            ?>
            </div>
            <div class="footer__content-links-column">
            <?php 
              wp_nav_menu(
                  array(
                      'theme_location' => 'footer-nav-two',
                  )
              )
            ?>
            </div>
          </div>
        </div>

        <div class="footer__copyright">
          <p>&copy; 2015-2020 Openthrive. All right reserved.</p>
        </div>
      </div>
    </footer>
  </body>
</html>
