<div class="resources__row">
    <?php foreach ($posts as $post) : ?>
        <?php setup_postdata($post); ?>
        <div class="resources__col col_4">
            <?php get_template_part('tmpl/card', 'resources'); ?>
        </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
</div>