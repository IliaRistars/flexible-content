<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$btn = get_sub_field('btn');
?>
<section class="darkbannerblock">
    <div class="container">
        <div class="darkbannerblock__content">
            <?php if ($title) : ?>
                <h2>
                    <?php echo $title; ?>
                </h2>
            <?php endif; ?>
            <?php if ($content) : ?>
                <?php echo $content; ?>
            <?php endif; ?>
            <?php if ($btn) : ?>
                <a href="<?php echo $btn['url']; ?>" class="btn btn_dark_white btn_big">
                    <span><?php echo $btn['title']; ?></span>
                </a>
            <?php endif; ?>

        </div>
    </div>
</section>