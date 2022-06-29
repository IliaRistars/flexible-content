<?php
if (get_field('flexibily_content')) :
    while (has_sub_field('flexibily_content')) : ?>
        <?php
        /*------------Main title block--------------*/
        if (get_row_layout() == 'title_banner') : ?>
            <?php get_template_part('tmpl/main-title-block'); ?>
        <?php
        /*------------Title subtitle center block--------------*/
        elseif (get_row_layout() == 'title_sub-title_block') : ?>
            <?php get_template_part('tmpl/title-subtitle-block'); ?>
        <?php
        /*------------Like Dislike block--------------*/
        elseif (get_row_layout() == 'like_dislike_block') : ?>
            <section class="singleresourcesfooter">
                <?php $text = get_sub_field('text'); ?>
                <div class="container">
                    <ul class="singleresourcesfooter__menu">
                        <?php echo do_shortcode('[posts_like_dislike id='.$post->ID.']'); ?>
                    </ul>
                    <?php
                    if ($text) :
                        echo $text;
                    endif;
                    ?>
                </div>
            </section>
        <?php
        /*------------Title filter block--------------*/
        elseif (get_row_layout() == 'main_block_with_categories_filter') : ?>
            <?php get_template_part('tmpl/main-title-filter'); ?>
        <?php
        /*------------Spacer block--------------*/
        elseif (get_row_layout() == 'spacer') : ?>
            <?php get_template_part('tmpl/spacer'); ?>
        <?php
        /*------------Line block--------------*/
        elseif (get_row_layout() == 'line') : ?>
            <?php get_template_part('tmpl/line'); ?>
        <?php
        /*------------Text image block--------------*/
        elseif (get_row_layout() == 'content_image') : ?>
            <?php get_template_part('tmpl/content-image'); ?>
        <?php
        /*------------UpTitle Title Image block--------------*/
        elseif (get_row_layout() == 'up-title_title_image') : ?>
            <?php get_template_part('tmpl/uptitle-title-image'); ?>
        <?php
        /*------------Statistics_list block--------------*/
        elseif (get_row_layout() == 'statistics_list') : ?>
            <?php get_template_part('tmpl/statistic-list'); ?>
        <?php
        /*------------Text center block--------------*/
        elseif (get_row_layout() == 'text_center_block') : ?>
            <?php get_template_part('tmpl/text-center'); ?>
        <?php
        /*------------Text left block--------------*/
        elseif (get_row_layout() == 'text_left_block') : ?>
            <?php get_template_part('tmpl/text-left'); ?>
        <?php
        /*------------Title Text Btn center block--------------*/
        elseif (get_row_layout() == 'title_text_btn_center_block') : ?>
            <?php get_template_part('tmpl/title-text-btn-block'); ?>
        <?php
        /*------------Dark banner block--------------*/
        elseif (get_row_layout() == 'dark_banner_block') : ?>
            <?php get_template_part('tmpl/dark-banner'); ?>
        <?php
        /*------------Our Programs post block--------------*/
        elseif (get_row_layout() == 'post_list') : ?>
            <?php get_template_part('tmpl/programs-posts-list'); ?>
        <?php
        /*------------Our Resources post block--------------*/
        elseif (get_row_layout() == 'our_resources_posts_block') : ?>
            <?php get_template_part('tmpl/resources-posts-list'); ?>
        <?php
        /*------------What we do block--------------*/
        elseif (get_row_layout() == 'what_we_do') : ?>
            <?php get_template_part('tmpl/what-we-do'); ?>
        <?php
        /*------------Quote block--------------*/
        elseif (get_row_layout() == 'quote_block') : ?>
            <?php get_template_part('tmpl/quote-block'); ?>
        <?php
        /*------------FAQ block--------------*/
        elseif (get_row_layout() == 'faq') : ?>
            <?php get_template_part('tmpl/faq'); ?>
        <?php
        /*------------Table block--------------*/
        elseif (get_row_layout() == 'table') : ?>
            <?php get_template_part('tmpl/table'); ?>
        <?php
        /*------------Gallery block--------------*/
        elseif (get_row_layout() == 'gallery') : ?>
            <?php get_template_part('tmpl/gallery'); ?>
        <?php
        /*------------CTA card block--------------*/
        elseif (get_row_layout() == 'cta_card_block') : ?>
            <?php get_template_part('tmpl/cta-card'); ?>
        <?php
        /*------------Logos slider block--------------*/
        elseif (get_row_layout() == 'logo_block') : ?>
            <?php get_template_part('tmpl/logo-block'); ?>
        <?php
        /*------------Our specialists block--------------*/
        elseif (get_row_layout() == 'professionals_block') : ?>
            <?php get_template_part('tmpl/professionals-block'); ?>
        <?php
        /*------------Link cards block--------------*/
        elseif (get_row_layout() == 'link_cards_block') : ?>
            <?php get_template_part('tmpl/link-cards-block'); ?>
        <?php
        /*------------Video block--------------*/
        elseif (get_row_layout() == 'video_block') : ?>
            <?php get_template_part('tmpl/video-block'); ?>
        <?php
        /*------------Contacts block--------------*/
        elseif (get_row_layout() == 'flexible_block') : ?>
            <?php get_template_part('tmpl/flexible-block'); ?>
        <?php
        /*------------Book a demo block--------------*/
        elseif (get_row_layout() == 'demo_block') : ?>
            <?php get_template_part('tmpl/demo-block'); ?>
        <?php
        /*------------Sing up/in block--------------*/
        elseif (get_row_layout() == 'sing_upin_block') : ?>
            <?php get_template_part('tmpl/sing_upin_block'); ?>
        <?php
        /*------------Content post block--------------*/
        elseif (get_row_layout() == 'content_post') : ?>
            <?php get_template_part('tmpl/content-post'); ?>
        <?php
        /*------------Quote post block--------------*/
        elseif (get_row_layout() == 'quote_post') : ?>
            <?php get_template_part('tmpl/quote-post'); ?>

<?php endif;
    endwhile;
else :
endif;
?>