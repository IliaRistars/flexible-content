<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type'    => 'resources',
    'post_status'  => 'publish',
    'numberposts'  => 0,
    'posts_per_page' => 6,
    'orderby'      => 'date',
    'order'        => 'DESC',
    'paged'     => $paged,
);
$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
    <div class="more-container-js resources__row">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php $post_type = get_post_type(); ?>
            <div class="resources__col col_4">
                <?php get_template_part('tmpl/card', 'resources'); ?>
            </div>
        <?php endwhile ?>
    </div>
    <?php if ($query->max_num_pages > 1) : ?>
        <script>
            var ajaxurl = '<?php echo site_url(); ?>/wp-admin/admin-ajax.php';
            var post_type = '<?php echo $post_type; ?>';
            var posts_vars = '<?php echo serialize($query->query_vars); ?>';
            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var max_pages = '<?php echo $query->max_num_pages; ?>';
        </script>
        <div class="spacer small"></div>
        <div class="wysiwygtextblock">
            <div class="wysiwygtextblock__cta">
                <a href="" id="loadmore" class="btn btn_big">
                    <span>Load more</span>
                </a>
            </div>
        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>