<section class="ctacardblock">
    <div class="container">
        <?php if (have_rows('card')) : ?>
            <div class="ctacardblock__row">
                <?php while (have_rows('card')) : the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    $btn = get_sub_field('link');
                ?>
                    <div class="ctacardblock__card">
                        <span class="ctacardblock__card--icon">
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                        </span>
                        <h3 class="ctacardblock__card--title">
                            <?php echo $title; ?>
                        </h3>
                        <p class="ctacardblock__card--text">
                            <?php echo esc_html($content); ?>
                        </p>
                        <?php if ($btn) : ?>
                            <a href="<?php echo $btn['url']; ?>" class="btn btn_big ctacardblock__card--cta">
                                <span><?php echo $btn['title']; ?></span>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>