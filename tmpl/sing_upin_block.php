<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$form = get_sub_field('form');
$titleForm = get_sub_field('title_form');
?>
<section class="signupblock">
    <div class="container">
        <div class="signupblock__wrapper">
            <div class="signupblock__text">
                <?php if ($title) : ?>
                    <h2>
                        <?php echo $title; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($content) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
            <?php if ($form) : ?>
                <div class="signupblock__formcontent">
                    <h2><?php echo $titleForm; ?></h2>
                    <?php echo do_shortcode($form); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>