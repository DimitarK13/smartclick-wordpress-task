<?php
    $fields = get_fields();
	extract($fields);
?>

<div class="card">
    <?php if(!empty($card['heading'])) : ?>
        <img
            class="card__image"
            src="<?php echo $card['image']['url'] ?>"
            alt="<?php echo $card['image']['alt'] ?>"
        />
    <?php endif; ?>

    <div class="card__content">
        <?php if(!empty($card['heading'])) : ?>
            <h2 class="card__content-heading">
                <?php echo $card['heading']; ?>
            </h2>
        <?php endif; ?>
        
        <?php if(!empty($card['text'])) : ?>
            <p class="card__content-paragraph">
            <?php echo $card['text']; ?>
            </p>
        <?php endif; ?>
    </div>
</div>