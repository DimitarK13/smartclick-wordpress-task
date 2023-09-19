<?php
    $fields = get_fields();
	extract($fields);
?>

<section class="background-primary" aria-label="Closing Headline">
    <div class="container padding-block closing-cta">
        <?php if(!empty($content['heading'])) : ?>
            <h2 class="closing-cta__header">
                <?php echo $content['heading'] ?>
            </h2>
        <?php endif; ?>

        <?php if (!empty($content['text'])) : ?>
            <p class="closing-cta__paragraph">
                <?php echo $content['text'] ?>
            </p>
        <?php endif; ?>

        <a class="btn closing-cta__button" href="#">Book a Meeting</a>
    </div>
</section>