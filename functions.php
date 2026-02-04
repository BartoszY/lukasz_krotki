<?php
// add_filter('show_admin_bar', '__return_false');

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{
    add_theme_support( 'title-tag' );
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('hd', 1920, '', true);
    add_image_size('medium', 960, '', true);
}


/*------------------------------------*\
	Menu
\*------------------------------------*/
function ytheme_register_menu() {
    register_nav_menus(array(
      'main-menu' => __( 'Main Menu' ),
    ));
}
add_action( 'init', 'ytheme_register_menu' );

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Footer widgets', 'ytheme'),
        'description' => '',
        'id' => 'footer-widget-area',
        'before_widget' => '<div id="footer-widget-area" class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h5 class="widget__title heading heading--s">',
        'after_title' => '</h5>'
    ));
}

/*------------------------------------*\
	Scripts
\*------------------------------------*/
function ytheme_header_scripts() {
    $theme = wp_get_theme();
    
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        if (is_page_template('templates/about.php')) {
            wp_register_script('fslightbox', get_template_directory_uri() . '/libs/fslightbox.js', array(), $theme->get('Version'), true);
            wp_enqueue_script('fslightbox');
        }

        wp_register_script('ytheme_scripts', get_template_directory_uri() . '/prod/js/main.min.js', array(), $theme->get('Version'), true);
        wp_enqueue_script('ytheme_scripts');
    }
}
add_action('wp_enqueue_scripts', 'ytheme_header_scripts');

function ytheme_styles() {
    $theme = wp_get_theme();

    wp_register_style('ytheme_style', get_template_directory_uri() . '/prod/css/main.css', array(), $theme->get('Version'), 'all');
    wp_enqueue_style('ytheme_style');
}
add_action('wp_enqueue_scripts', 'ytheme_styles', 10);


