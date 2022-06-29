<?php
$upTitle = get_sub_field('up_title');
$title = get_sub_field('title');
$titleImage = get_sub_field('title_image');
?>
<section class="contentoverlapblock">
    <div class="container large">
        <div class="contentoverlapblock__heading">
            <?php if ($upTitle) : ?>
                <h3>
                    <?php echo $upTitle; ?>
                </h3>
            <?php endif; ?>
            <?php if ($title) : ?>
                <h1>
                    <?php echo $title; ?>
                </h1>
            <?php endif; ?>
        </div>
        <div class="spacer small"></div>
        <?php if ($titleImage) : ?>
            <div class="contentoverlapblock__content">
                <img src="<?php echo $titleImage['url']; ?>" alt="<?php echo $titleImage['alt']; ?>">
            </div>
        <?php endif; ?>
    </div>
</section>