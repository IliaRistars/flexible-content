<?php
add_action('wp_ajax_loadmore', 'api_loadmore_posts');
add_action('wp_ajax_nopriv_loadmore', 'api_loadmore_posts');
function api_loadmore_posts()
{
    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';
    $args['post_type'] = $_POST['post_type'];
    query_posts($args);
    if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
            $postType = get_post_type();
            if ($postType === 'resources') :
        ?>
                <div class="resources__col col_4">
                    <?php get_template_part('tmpl/card', 'resources'); ?>
                </div>
            <?php else : ?>
                <?php get_template_part('tmpl/card', 'programs'); ?>
            <?php endif; ?>
        <?php
        endwhile;
    endif;
    die();
}
add_action('wp_ajax_myfilter', 'api_filter_function');
add_action('wp_ajax_nopriv_myfilter', 'api_filter_function');

function api_filter_function()
{

    $args = array(
        'post_type' => 'resources',
        'orderby' => 'date',
        'order'    => $_POST['date'],
        'posts_per_page' => -1,
        // 'cat' => $_POST['categoryId'],
    );
    if (isset($_POST['categoryId'])) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category-resources',
                'field' => 'term_id',
                'terms' => $_POST['categoryId'],
            )
        );
    }
    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
        <div class="more-container-js resources__row">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="resources__col col_4">
                    <?php get_template_part('tmpl/card', 'resources'); ?>
                </div>
            <?php
            endwhile; ?>
        </div>
    <?php else : ?>
        <p class="error">Not found</p>
    <?php endif; ?>
<?php
    wp_reset_postdata();
    die();
}
