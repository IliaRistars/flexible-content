<footer class="footer">
    <div class="container">
        <div class="footer__top">

            <?php
            dynamic_sidebar("Left widget");
            ?>
            <div class="footer__top--right">
                <?php
                dynamic_sidebar("Center widget");
                ?>
                <?php
                dynamic_sidebar("Right widget");
                ?>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom--logo">
                <?php the_custom_logo(); ?>
            </div>
            <?php
            wp_nav_menu([
                'theme_location'  => 'footer-menu',
                'menu'            => 'footer-menu',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'footer-menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul class="footer__bottom--menu">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ]);
            ?>
            <p class="footer__bottom--copytext">
                © <?php echo get_theme_mod( 'footer_copyright_text' ); ?>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>