<?php
    $fields = get_fields();
    if(!empty($fields)) : extract($fields); else : return; endif;
?>

<?php if (!empty($cards)) : ?>
    <section class="container" aria-label="Benefits">
        <div class="cards">
            <?php foreach($cards as $cards_column) : ?>
                <div class="cards__column">
                    <?php foreach ($cards_column['cards_row'] as $card) : ?>
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
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
            </div>
    </section>
<?php endif; ?>
