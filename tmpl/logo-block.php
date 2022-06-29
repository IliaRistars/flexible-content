<?php
$content = get_sub_field('content');
$logosSlider = get_sub_field('logo_slider');
?>
<section class="logoslider">
    <div class="container">
        <?php if ($content) : ?>
            <div class="logoslider__text">
                <?php echo $content; ?>
            </div>
        <?php endif; ?>
        <?php if ($logosSlider) : ?>
            <div class="logoslider__slider">
                <?php foreach ($logosSlider as $image) : ?>
                    <div class="logoslider__slider--item">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>