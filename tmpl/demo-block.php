<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$smallContent = get_sub_field('small_content');
$form = get_sub_field('form');
$image = get_sub_field('image');
?>
<section class="bookdemoblock">
    <div class="container">
        <div class="bookdemoblock__left">
            <div class="bookdemoblock__left--heading">
                <h2><?php echo $title; ?></h2>
                <?php if ($content) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
                <?php if ($smallContent) : ?>
                    <p class="small_text">
                        <?php echo esc_html($smallContent); ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if ($form) : ?>
                <?php echo do_shortcode($form); ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($image) : ?>
        <div class="bookdemoblock__right">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
        </div>
    <?php endif; ?>
</section>