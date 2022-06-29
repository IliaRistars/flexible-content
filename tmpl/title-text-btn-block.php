<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$btn = get_sub_field('btn');
?>
<section class="wysiwygtextblock">
    <?php if ($title) : ?>
        <div class="wysiwygtextblock__heading">
            <h2><?php echo $title; ?></h2>
        </div>
    <?php endif; ?>
    <?php if ($content) : ?>
        <div class="wysiwygtextblock__text">
            <?php echo $content; ?>
        </div>
    <?php endif; ?>
    <?php if ($btn) : ?>
        <div class="wysiwygtextblock__cta">
            <a href="<?php echo $btn['url']; ?>" class="btn btn_big">
                <span><?php echo $btn['title']; ?></span>
            </a>
        </div>
    <?php endif; ?>
</section>