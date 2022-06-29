<section class="ctatextblock">
    <div class="container">
        <?php if (have_rows('card')) : ?>
            <div class="ctatextblock__row">
                <?php while (have_rows('card')) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    $link = get_sub_field('link');
                ?>
                    <div class="ctatextblock__card">
                        <?php if ($title) : ?>
                            <h3 class="ctatextblock__card--title">
                                <?php echo esc_html($title); ?>
                            </h3>
                        <?php endif; ?>
                        <?php if ($content) : ?>
                            <p class="ctatextblock__card--text">
                                <?php echo esc_html($content); ?>
                            </p>
                        <?php endif; ?>
                        <?php if ($link) : ?>
                            <a href="<?php echo $link['url']; ?>" class="ctatextblock__card--cta">
                                <?php echo $link['title']; ?>
                                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.06246 2.41683C0.820835 2.41683 0.62496 2.6127 0.62496 2.85433C0.62496 3.07582 0.78955 3.25887 1.00309 3.28784L1.06246 3.29183H9.22913C9.47075 3.29183 9.66663 3.09595 9.66663 2.85433C9.66663 2.63284 9.50204 2.44979 9.28849 2.42082L9.22913 2.41683H1.06246Z" fill="#009CA6" />
                                    <path d="M9.53848 2.54497C9.38316 2.38965 9.14011 2.37553 8.96884 2.50261L8.91977 2.54497L6.58643 4.8783C6.41558 5.04916 6.41558 5.32617 6.58643 5.49702C6.74176 5.65234 6.98481 5.66646 7.15608 5.53938L7.20515 5.49702L9.53848 3.16369C9.70934 2.99283 9.70934 2.71582 9.53848 2.54497Z" fill="#009CA6" />
                                    <path d="M7.20515 0.211637C7.0343 0.0407825 6.75729 0.0407825 6.58643 0.211637C6.43111 0.366959 6.41699 0.610013 6.54407 0.781286L6.58643 0.830355L8.91977 3.16369C9.09062 3.33454 9.36763 3.33454 9.53848 3.16369C9.69381 3.00837 9.70793 2.76531 9.58085 2.59404L9.53848 2.54497L7.20515 0.211637Z" fill="#009CA6" />
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>