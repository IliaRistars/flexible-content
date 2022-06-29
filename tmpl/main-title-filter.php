<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$terms = get_sub_field('categories_filter');
?>
<div class="resourcesHero">
    <div class="container">
        <div class="resourcesHero__heading">
            <?php if ($title) : ?>
                <h1>
                    <?php echo $title; ?>
                </h1>
            <?php endif; ?>
            <?php if ($content) : ?>
                <?php echo $content; ?>
            <?php endif; ?>
        </div>
        <?php if ($terms) : ?>
            <form class="resourcesHero__btn" action="<?php echo site_url(); ?>/wp-admin/admin-ajax.php" method="POST" id="filter" name="categoryfilter">
                <?php foreach ($terms as $term) : ?>
                    <a href="<?php echo esc_html($term->term_id); ?>" class="r__btn filter-js <?php echo esc_html($term->slug); ?>">
                        <?php echo esc_html($term->name); ?>
                    </a>
                <?php endforeach; ?>
                <input type="hidden" name="action" value="myfilter">
                <input type="hidden" name="categoryId" value="">
                <input type='hidden' name="ajax_link" class='ajax-link' value="<?php echo site_url() ?>/wp-admin/admin-ajax.php">
            </form>
        <?php endif; ?>
    </div>
</div>