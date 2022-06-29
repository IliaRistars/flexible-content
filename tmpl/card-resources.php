<div class="resources__card">
    <?php
    $post_id = get_the_ID();
    $terms = get_the_terms($post_id, 'category-resources');
    $current_cat_name = $terms[0]->name;
    $current_cat_slug = $terms[0]->slug;
    ?>
    <a href="<?php the_permalink(); ?>">
        <div class="resources__card--img">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="resources__card--info">
            <p class="resources__card--info--date">
                <?php echo get_the_date('d/m/Y'); ?>
            </p>
            <h4 class="resources__card--info--title">
                <?php the_title(); ?>
            </h4>
            <div class="resources__card--info--tagline">
                <div class="tagline_left">
                    <span class="tagcirle <?php echo $current_cat_slug; ?>"></span>
                    <div class="tagtext"><?php echo $current_cat_name; ?></div>
                </div>
                <?php $icon = get_field('icon'); ?>
                <div class="tagline_type">
                    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                </div>
            </div>
        </div>
    </a>
</div>