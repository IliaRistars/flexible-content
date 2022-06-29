<?php
$title = get_sub_field('title');
?>
<section class="faqblock">
    <div class="container">
        <div class="faqblock__heading">
            <h2><?php echo $title; ?></h2>
        </div>
        <?php if (have_rows('faq_items')) : ?>
            <div class="faqblock__accordion accordion" id="accordion">
                <?php while (have_rows('faq_items')) : the_row();
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                    <h3><?php echo esc_html($title); ?></h3>
                    <div>
                        <?php echo $content; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>