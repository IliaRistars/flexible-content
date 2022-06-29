<?php
$content = get_sub_field('content');
$image = get_sub_field('image');
?>
<section class="imgtextblock">
    <div class="imgtextblock__text">
        <?php echo $content; ?>
    </div>
    <div class="imgtextblock__img">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
</section>
