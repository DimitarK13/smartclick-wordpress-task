<?php
    $fields = get_fields();
	extract($fields);
?>

<section class="container" aria-label="Hero">
    <div class="hero">
        <div class="hero__content">
            <header>
                <h1 class="hero__content-header">
                    <?php if(!empty($content['header'])) echo $content['header'] ?>
                </h1>
            </header>
            <p class="hero__content-paragraph">
                <?php if(!empty($content['text'])) echo $content['text'] ?>
            </p>

            <div class="hero__content-buttons">
                <a class="btn" href="#">Book a Meeting</a>
                <p>Here you can put secondary action statement & CTA</p>
            </div>
        </div>
        <img
            src="<?php echo $picture['url'] ?>"
            alt="Girl in a green blouse and black jeans, holding a cup, sitting on a desk in an office."
        />
    </div>
</section>