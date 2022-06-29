<?php
get_header();
?>

<section class="innerHero singleResourcesHero">
    <div class="container">
        <div class="innerHero__heading">
            <h1>
                <?php the_title(); ?>
            </h1>
            <p>
                <?php echo esc_html(get_the_excerpt()); ?>
            </p>
        </div>
        <div class="innerHero__info">
            <p class="innerHero__info--date">
                <?php echo get_the_date('d/m/Y'); ?>
            </p>
            <div class="innerHero__info--type">
                <?php
                $post_id = get_the_ID();
                $terms = get_the_terms($post_id, 'category-resources');
                $current_cat_name = $terms[0]->name;
                $current_cat_slug = $terms[0]->slug;
                ?>
                <span class="tagcirle <?php echo $current_cat_slug; ?>"></span>
                <div class="tagtext">
                    <?php echo $current_cat_name; ?>
                </div>
                <?php $icon = get_field('icon'); ?>
                <div class="tagicon">
                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                </div>
            </div>
        </div>
        <div class="innerHero__banner">
            <?php the_post_thumbnail('full'); ?>
        </div>
    </div>
</section>

<div class="spacer small"></div>

<?php get_template_part('tmpl/main-flexible-content'); ?>

<?php
get_footer();
?>