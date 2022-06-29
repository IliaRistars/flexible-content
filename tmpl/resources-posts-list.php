<section class="resources">
    <div class="container filter-product">
        <?php
        if (get_sub_field('posts')) :
            while (has_sub_field('posts')) :
        ?>
                <?php
                /*------------Big card post--------------*/
                if (get_row_layout() == 'col_1') :
                    $posts = get_sub_field('post');
                ?>
                    <div class="resources__row">
                        <?php foreach ($posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <div class="resources__col col_12">
                                <?php get_template_part('tmpl/card', 'resources'); ?>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php

                /*------------Medium card post--------------*/
                elseif (get_row_layout() == 'col_2') :
                    $posts = get_sub_field('post');
                ?>
                    <div class="resources__row">
                        <?php foreach ($posts as $post) : ?>
                            <?php setup_postdata($post); ?>
                            <div class="resources__col col_6">
                                <?php get_template_part('tmpl/card', 'resources'); ?>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <?php
                /*------------Small card post--------------*/
                elseif (get_row_layout() == 'col_3') :
                    $posts = get_sub_field('post');
                    $count = count($posts);
                    if ($count > 6) : ?>
                        <?php get_template_part('tmpl/card-content/more-six-cards'); ?>
                    <?php else : ?>
                        <?php get_template_part('tmpl/card-content/six-cards'); ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>