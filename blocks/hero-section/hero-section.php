<?php
    $fields = get_fields();
    if(!empty($fields)) : extract($fields); else : return; endif;
?>

<section class="container" aria-label="Hero">
    <div class="hero">
        <div class="hero__content">
            <?php if(!empty($content['header'])) : ?>
                <header>
                    <h1 class="hero__content-header">
                        <?php echo $content['header'] ?>
                    </h1>
                </header>
            <?php endif; ?>

            <?php if(!empty($content['text'])) : ?>
                <p class="hero__content-paragraph">
                    <?php echo $content['text'] ?>
                </p>
            <?php endif; ?>

            <?php if(!empty($content['button_primary']) || !empty($content['button_secondary'])) : ?>
                <div class="hero__content-buttons">
                    <?php if(!empty($content['button_primary'])) : ?>
                        <a class="btn" href="<?php echo $content['button_primary']['url'] ?>">
                            <?php echo $content['button_primary']['title'] ?>
                        </a>
                    <?php endif; ?>

                    <?php if(!empty($content['button_secondary'])) : ?>
                        <p>
                            <?php echo $content['button_secondary']['title'] ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        
        <?php if(!empty($picture)) : ?>
            <img
                src="<?php echo $picture['url'] ?>"
                alt="<?php echo $picture['alt'] ?>"
            />
        <?php endif; ?>
    </div>
</section>