<?php
$gallery2Col = get_sub_field('gallery_2_col');
$gallery3Col = get_sub_field('gallery_3-col');
?>
<section class="gellary">
    <?php if ($gallery2Col) : ?>
        <div class="container large">
            <div class="gellary__row hastwocol">
                <?php foreach ($gallery2Col as $image) : ?>
                    <div class="gellary__col">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($gallery3Col) : ?>
        <div class="container">
            <div class="gellary__row hasthreecol">
                <?php foreach ($gallery3Col as $image) : ?>
                    <div class="gellary__col">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>