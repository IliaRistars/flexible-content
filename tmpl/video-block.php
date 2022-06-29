<?php
$video = get_sub_field('video');
preg_match('/src="(.+?)"/', $video, $matches);
$src = $matches[1];
$params = array(
    'controls'  => 1,
    'hd'        => 1,
    'autohide'  => 1
);
$new_src = add_query_arg($params, $src);
$video = str_replace($src, $new_src, $video);
$attributes = 'id="i-video"';
$video = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $video);
?>
<section class="videoblock">
    <div class="container large">
        <div class="videoblock__thumb">
            <img src="" data-vimeo-id="30572181" id="thumbImg" alt="">
        </div>
        <div class="videoblock__video">
            <?php echo $video;
            ?>
            <a href="" class="videoblock__video--play">
                <svg width="36" height="43" viewBox="0 0 36 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.81536V40.482C0 41.9 1.55481 42.7688 2.76243 42.0257L34.1791 22.6923C35.3292 21.9846 35.3292 20.3128 34.1791 19.6051L2.76243 0.27173C1.55481 -0.471417 0 0.397405 0 1.81536Z" fill="#009CA6" />
                </svg>
            </a>
        </div>
    </div>
</section>