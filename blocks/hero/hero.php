<?php
    $fields = get_fields();
	extract($fields);
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

            <div class="hero__content-buttons">
                <a class="btn" href="#">Book a Meeting</a>
                <p>Here you can put secondary action statement & CTA</p>
            </div>
        </div>
        
        <?php if(!empty($picture)) : ?>
            <img
                src="<?php echo $picture['url'] ?>"
                alt="<?php echo $picture['alt'] ?>"
            />
        <?php endif; ?>
    </div>
</section>