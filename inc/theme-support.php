<?php
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts', 'theme_style');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('widgets_init', 'api_register_widgets');
add_action('after_setup_theme', function () {
    register_nav_menus(array(
        'footer-menu' => 'Footer menu',
    ));
});
function api_register_widgets()
{
    register_sidebar(array(
        'name' => 'Left widget',
        'id' => 'widgets-1',
        'description' => __('Add shortcode form.'),
        'before_widget' => '<div class="widget footer__top--left">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Center widget',
        'id' => 'menu-1',
        'description' => __('Add menu.'),
        'before_widget' => '<div class="footer__top--right--widget">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>'
    ));
    register_sidebar(array(
        'name' => 'Right widget',
        'id' => 'menu-2',
        'description' => __('Add menu.'),
        'before_widget' => '<div class="footer__top--right--widget">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>'
    ));
}
// theme style
function theme_style()
{
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/styles/fontawesome-all.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/styles/slick.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/styles/jquery-ui.min.css');
    wp_enqueue_style('app_map', get_template_directory_uri() . '/assets/styles/app.css.map');
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/styles/app.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
// theme scripts
function theme_scripts()
{
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/vendor/jQuery.js', array('jquery'), null, true);
    wp_enqueue_script('jquery-ui', get_stylesheet_directory_uri() . '/assets/js/library/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/js/library/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('gsap', get_stylesheet_directory_uri() . '/assets/js/library/gsap.min.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_stylesheet_directory_uri() . '/assets/js/library/imagesloaded.pkgd.min.js', array('jquery'), null, true);
    wp_enqueue_script('player', get_stylesheet_directory_uri() . '/assets/js/library/player.js', array('jquery'), null, true);
    wp_enqueue_script('ScrollToPlugin', get_stylesheet_directory_uri() . '/assets/js/library/ScrollToPlugin.min.js', array('jquery'), null, true);
    wp_enqueue_script('ScrollTrigger', get_stylesheet_directory_uri() . '/assets/js/library/ScrollTrigger.min.js', array('jquery'), null, true);
    wp_enqueue_script('loadmore', get_stylesheet_directory_uri() . '/assets/js/loadmore.js', array('jquery'), null, true);
    wp_enqueue_script('app-scripts', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), null, true);
}
remove_action('load-update-core.php', 'wp_update_themes');
add_filter('pre_site_transient_update_themes', '__return_null');
add_filter('auto_update_theme', '__return_false');
function hide_admin_notices()
{
    remove_action('admin_notices', 'update_nag', 3);
}
add_filter('upload_mimes', 'svg_upload_allow');
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
} 
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>='))
        $dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
    else
        $dosvg = ('.svg' === strtolower(substr($filename, -4)));
    if ($dosvg) {
        if (current_user_can('manage_options')) {

            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        } else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }

    return $data;
}
add_filter('wpcf7_form_elements', function ($html) {

    preg_match('~<input([^>]+)type=["\']submit["\']([^>/]+)/?>~i', $html, $match);

    if ($match) {
        $input = $match[0];
        $attr = trim($match[1] . $match[2]);

        preg_match('/value=["\']([^"\']+)/', $input, $mm);
        $button_text = $mm[1];

        $html = str_replace($input, "<button $attr><span>$button_text</span></button>", $html);
    }

    return $html;
});

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title'     => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'        => false
	));
	acf_add_options_sub_page(array(
		'page_title'     => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'    => 'theme-general-settings',
	));
}
add_action( 'customize_register', 'customizer_init' );
function customizer_init( WP_Customize_Manager $wp_customize ){
	$transport = 'postMessage';
	if( $section = 'display_options' ){
		$wp_customize->add_section( $section, [
			'title'     => 'Copyright',
			'priority'  => 200,                  
			'description' => 'Add copyright', 
		] );
		$setting = 'footer_copyright_text';
		$wp_customize->add_setting( $setting, [
			'default'            => '2022 API',
			'sanitize_callback'  => 'sanitize_text_field',
			'transport'          => $transport
		] );
		$wp_customize->add_control( $setting, [
			'section'  => 'display_options',
			'label'    => 'Copyright',
			'type'     => 'text'
		] );
	}
}