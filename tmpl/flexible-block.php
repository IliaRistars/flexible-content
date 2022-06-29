<section class="contactblock bg_light">
    <?php
    if (get_sub_field('flexible_block')) :
        while (has_sub_field('flexible_block')) :
    ?>
            <?php
            /*------------Small blocks contacts--------------*/
            if (get_row_layout() == 'small_block_contacts') : ?>
                <div class="contactaboxblock">
                    <div class="container small">
                        <?php if (have_rows('blocks_contacts')) : ?>
                            <div class="contactaboxblock__row">
                                <?php while (have_rows('blocks_contacts')) : the_row();
                                    $icon = get_sub_field('icon');
                                    $title = get_sub_field('title');
                                    $link = get_sub_field('link');
                                    $content = get_sub_field('content');
                                    $cta = get_sub_field('cta');
                                ?>
                                    <div class="contactaboxblock__card cicard">
                                        <?php if ($icon) : ?>
                                            <span class="contactaboxblock__card--icon">
                                                <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                                            </span>
                                        <?php endif; ?>
                                        <?php if ($title) : ?>
                                            <h3 class="contactaboxblock__card--title">
                                                <?php echo $title; ?>
                                            </h3>
                                        <?php endif; ?>
                                        <?php if ($link) : ?>
                                            <p class="contactaboxblock__card--email">
                                                <a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                                            </p>
                                        <?php endif; ?>
                                        <?php if ($content) : ?>
                                            <p class="contactaboxblock__card--text">
                                                <?php echo esc_html($content); ?>
                                            </p>
                                        <?php endif; ?>
                                        <?php if ($cta) : ?>
                                            <a href="<?php echo $cta['url']; ?>" class="btn btn_big contactaboxblock__card--cta">
                                                <span><?php echo $cta['title']; ?></span>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
            /*------------Big blocks contacts--------------*/
            elseif (get_row_layout() == 'big_block_contacts') :
                $title = get_sub_field('title');
            ?>
                <div class="contactaddressblock t_margin">
                    <div class="container small">
                        <div class="contactaddressblock__card">
                            <h3 class="contactaddressblock__heading">
                                <?php echo $title; ?>
                            </h3>
                            <div class="contactaddressblock__row">
                                <?php if (have_rows('col-1')) : ?>
                                    <?php while (have_rows('col-1')) : the_row();
                                        $title = get_sub_field('title');
                                        $content = get_sub_field('content');
                                        $cta = get_sub_field('btn');
                                    ?>
                                        <div class="contactaddressblock__col">
                                            <?php if ($title) : ?>
                                                <h5>
                                                    <?php echo $title; ?>
                                                </h5>
                                            <?php endif; ?>
                                            <?php if ($content) : ?>
                                                <?php echo $content; ?>
                                            <?php endif; ?>
                                            <?php if ($cta) : ?>
                                                <a href="<?php echo $cta['url']; ?>" class="btn btn_big">
                                                    <span><?php echo $cta['title']; ?></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <?php if (have_rows('col-2')) : ?>
                                    <?php while (have_rows('col-2')) : the_row();
                                        $title = get_sub_field('title');
                                        $content = get_sub_field('content');
                                        $cta = get_sub_field('btn');
                                    ?>
                                        <div class="contactaddressblock__col">
                                            <?php if ($title) : ?>
                                                <h5>
                                                    <?php echo $title; ?>
                                                </h5>
                                            <?php endif; ?>
                                            <?php if ($content) : ?>
                                                <?php echo $content; ?>
                                            <?php endif; ?>
                                            <?php if ($cta) : ?>
                                                <a href="<?php echo $cta['url']; ?>" class="btn btn_big">
                                                    <span><?php echo $cta['title']; ?></span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            /*------------Form blocks contacts--------------*/
            elseif (get_row_layout() == 'form') :
                $title = get_sub_field('title');
                $form = get_sub_field('form');
            ?>
                <div class="contactformblock t_margin">
                    <div class="container small">
                        <div class="contactformblock__card">
                            <?php if ($title) : ?>
                                <h3 class="contactformblock__card--title">
                                    <?php echo $title; ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($form) : ?>
                                <?php echo do_shortcode($form); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>