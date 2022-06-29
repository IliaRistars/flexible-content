<section class="ctablock">
    <div class="container">
        <div class="ctablock__next">
            <svg width="24" height="43" viewBox="0 0 24 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.09706 0.699689C3.1598 -0.23323 1.6402 -0.23323 0.702946 0.699689C-0.149107 1.5478 -0.226566 2.87495 0.470568 3.81016L0.702946 4.07809L18.2048 21.5L0.702946 38.9219C-0.149107 39.77 -0.226566 41.0972 0.470568 42.0324L0.702946 42.3003C1.555 43.1484 2.88832 43.2255 3.82788 42.5316L4.09706 42.3003L23.2971 23.1892C24.1491 22.3411 24.2266 21.0139 23.5294 20.0787L23.2971 19.8108L4.09706 0.699689Z" fill="white" />
            </svg>
        </div>
        <div class="ctablock__prev">
            <svg width="24" height="43" viewBox="0 0 24 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9029 0.699689C20.8402 -0.23323 22.3598 -0.23323 23.2971 0.699689C24.1491 1.5478 24.2266 2.87495 23.5294 3.81016L23.2971 4.07809L5.7952 21.5L23.2971 38.9219C24.1491 39.77 24.2266 41.0972 23.5294 42.0324L23.2971 42.3003C22.445 43.1484 21.1117 43.2255 20.1721 42.5316L19.9029 42.3003L0.702944 23.1892C-0.149109 22.3411 -0.226569 21.0139 0.470566 20.0787L0.702944 19.8108L19.9029 0.699689Z" fill="white" />
            </svg>
        </div>
        <div class="ctablock__wrapper">
            <?php $posts = get_sub_field('posts'); ?>
            <?php foreach ($posts as $post) : ?>
                <?php setup_postdata($post); ?>
                <?php get_template_part('tmpl/card', 'programs'); ?>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>