<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$linkMore = get_sub_field('link');
$quote = get_sub_field('quote');
?>
<section class="quoteblock">
    <div class="container">
        <?php if ($title || $content || $linkMore) : ?>
            <div class="quoteblock__heading">
                <?php if ($title) : ?>
                    <h2>
                        <?php echo $title; ?>
                    </h2>
                <?php endif; ?>
                <?php if ($content) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
                <?php if ($linkMore) : ?>
                    <a href="<?php echo $linkMore['url']; ?>" class="btn btn_dark_white btn_white">
                        <span><?php echo $linkMore['title']; ?></span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($quote) : ?>
            <div class="quoteblock__box">
                <?php echo $quote; ?>
            </div>
        <?php endif; ?>
    </div>
</section>