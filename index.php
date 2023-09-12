<?php get_header() ?>

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

    <?php get_footer() ?>