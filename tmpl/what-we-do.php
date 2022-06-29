<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$linkMore = get_sub_field('link_more');
?>
<section class="featuredblock">
    <div class="container">
        <div class="featuredblock__wrapper">
            <div class="featuredblock__text">
                <?php if ($title) : ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>
                <?php if ($content) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
            <?php if (have_rows('items_list')) : ?>
                <ul class="featuredblock__list">
                    <?php while (have_rows('items_list')) : the_row();
                        $item = get_sub_field('item');
                    ?>
                        <li class="featuredblock__list--item">
                            <h3>
                                <?php echo $item; ?>
                            </h3>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
        <?php if ($linkMore) : ?>
            <div class="featuredblock__cta">
                <a href="<?php echo $linkMore['url']; ?>" class="btn btn_dark_white btn_big">
                    <span><?php echo $linkMore['title']; ?></span>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>