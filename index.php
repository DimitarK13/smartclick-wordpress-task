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
      <img class="nav__logo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="Logo" />

      <button class="nav__toggle-button">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/nav-toggle.png" alt="Hamburger menu" />
      </button>

      <ul class="nav__primary-list" aria-expanded="false">
        <li class="primary-list__item"><a href="#">Home</a></li>
        <li class="primary-list__item"><a href="#">Features</a></li>
        <li class="primary-list__item"><a href="#">Pricing</a></li>
        <li class="primary-list__item"><a href="#">About Us</a></li>
        <li class="primary-list__item"><a href="#">Help</a></li>
        <li class="primary-list__item hide-l">
          <a class="btn" href="#">Book a Meeting</a>
        </li>
      </ul>

      <a class="btn | nav__cta hide-s" href="#">Book a Meeting</a>
    </nav>

    <main>
      <section class="container" aria-label="Hero">
        <div class="hero">
          <div class="hero__content">
            <header>
              <h1 class="hero__content-header">
                Design better sites with Tweakful.
              </h1>
            </header>
            <p class="hero__content-paragraph">
              And the description of hero section is follow up message after the
              punch of a great headline. So, make it short, simple, descriptive
              and to the point.
            </p>

            <div class="hero__content-buttons">
              <a class="btn" href="#">Book a Meeting</a>
              <p>Here you can put secondary action statement & CTA</p>
            </div>
          </div>
          <img
            src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/image-hero.png"
            alt="Girl in a green blouse and black jeans, holding a cup, sitting on a desk in an office."
          />
        </div>
      </section>

      <section class="container" aria-label="Benefits">
        <div class="cards">
          <div class="cards__column">
            <div class="card">
              <img
                class="card__image"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-cubes.png"
                alt="Icon cubes"
              />
              <div class="card__content">
                <h2 class="card__content-heading">First Benefit</h2>
                <p class="card__content-paragraph">
                  Gorgeous, high-quality design system for mobile, tablet &
                  desktop devices a few
                </p>
              </div>
            </div>
            <div class="card">
              <img
                class="card__image"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-star.png"
                alt="Icon star"
              />
              <div class="card__content">
                <h2 class="card__content-heading">First Benefit</h2>
                <p class="card__content-paragraph">
                  Gorgeous, high-quality design system for mobile, tablet &
                  desktop devices a few
                </p>
              </div>
            </div>
            <div class="card">
              <img
                class="card__image"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-stack.png"
                alt="Icon stack"
              />
              <div class="card__content">
                <h2 class="card__content-heading">First Benefit</h2>
                <p class="card__content-paragraph">
                  Gorgeous, high-quality design system for mobile, tablet &
                  desktop devices a few
                </p>
              </div>
            </div>
          </div>
          <div class="cards__column">
            <div class="card">
              <img
                class="card__image"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-cubes.png"
                alt="Icon cubes"
              />
              <div class="card__content">
                <h2 class="card__content-heading">First Benefit</h2>
                <p class="card__content-paragraph">
                  Gorgeous, high-quality design system for mobile, tablet &
                  desktop devices a few
                </p>
              </div>
            </div>
            <div class="card">
              <img
                class="card__image"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-star.png"
                alt="Icon star"
              />
              <div class="card__content">
                <h2 class="card__content-heading">First Benefit</h2>
                <p class="card__content-paragraph">
                  Gorgeous, high-quality design system for mobile, tablet &
                  desktop devices a few
                </p>
              </div>
            </div>
            <div class="card">
              <img
                class="card__image"
                src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/icon-stack.png"
                alt="Icon stack"
              />
              <div class="card__content">
                <h2 class="card__content-heading">First Benefit</h2>
                <p class="card__content-paragraph">
                  Gorgeous, high-quality design system for mobile, tablet &
                  desktop devices a few
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="background-primary" aria-label="Closing Headline">
        <div class="container padding-block | closing-cta">
          <h2 class="closing-cta__header">
            The Is Closing Headline To Make A Impact For Call To Action
          </h2>
          <p class="closing-cta__paragraph">
            Nowadays, it isn’t uncommon to see lenders rapidly adopting a
            digital lending strategy to streamline the lending process nowadays,
            it isn’t uncommon to see lenders rapidly
          </p>
          <a class="btn closing-cta__button" href="#">Book a Meeting</a>
        </div>
      </section>
    </main>

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
              <ul>
                <li><a href="#">Career</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Services</a></li>
                <li><a href="#">GDPR</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>
            </div>
            <div class="footer__content-links-column">
              <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Capabilities</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Partnership Integration</a></li>
              </ul>
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
