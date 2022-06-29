<section class="sectionheadingblock">
    <?php
    $content = get_sub_field('sub_title');
    $title = get_sub_field('title');
    if ($title) : ?>
        <div class="sectionheadingblock__heading">
            <h2><?php echo $title; ?></h2>
        </div>
    <?php endif; ?>
    <?php if ($content) : ?>
        <div class="sectionheadingblock__text">
            <?php echo $content; ?>
        </div>
    <?php endif; ?>
</section>