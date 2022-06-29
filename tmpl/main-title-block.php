<?php
$title = get_sub_field('title');
$subTitle = get_sub_field('sub_title');
$bgImage = get_sub_field('bg_image');
$btnHowItWorks = get_sub_field('how_it_works_btn');
$btnBookDemo = get_sub_field('book_a_demo_btn');
?>
<section class="herobanner" id="hero">
    <div class="herobanner__img parallax" data-depth='-0.15'>
        <img src="<?php echo $bgImage['url']; ?>" alt="<?php echo $bgImage['alt']; ?>">
    </div>
    <div class="herobanner__content">
        <div class="herobanner__content--heading">
            <h1 class="big">
                <?php echo $title; ?>
            </h1>
        </div>
        <div class="herobanner__content--text">
            <?php echo $subTitle; ?>
        </div>
        <?php if ($btnHowItWorks || $btnBookDemo) : ?>
            <div class="herobanner__content--cta">
                <?php if ($btnHowItWorks) : ?>
                    <a href="<?php echo $btnHowItWorks['url']; ?>" class="btn btn_trans btn_big">
                        <span><?php echo $btnHowItWorks['title']; ?></span>
                    </a>
                <?php endif; ?>
                <?php if ($btnBookDemo) : ?>
                    <a href="<?php echo $btnBookDemo['url']; ?>" class="btn btn_big">
                        <span><?php echo $btnBookDemo['title']; ?></span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>