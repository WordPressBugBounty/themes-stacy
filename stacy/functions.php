<?php

// Global variables define
define('STACY_PARENT_TEMPLATE_DIR_URI',get_template_directory_uri());
define('STACY_ST_TEMPLATE_DIR_URI',get_stylesheet_directory_uri());
define('STACY_ST_TEMPLATE_DIR',get_stylesheet_directory());

if (!function_exists('wp_body_open')) {

    function wp_body_open() {
        /**
         * Triggered after the opening <body> tag.
         */
        do_action('wp_body_open');
    }

}

require( STACY_ST_TEMPLATE_DIR . '/css/custom-css.php');

add_action('wp_enqueue_scripts', 'stacy_theme_css', 999);
function stacy_theme_css() {

	if(get_theme_mod('custom_color_enable') == false)
	{
		wp_enqueue_style('stacy-default-style-css', STACY_ST_TEMPLATE_DIR_URI."/css/default.css" );
	}else{
            stacy_custom_light();
        }

        wp_enqueue_style( 'stacy-parent-style', STACY_PARENT_TEMPLATE_DIR_URI . '/style.css' );
	wp_enqueue_style('stacy-child-style',STACY_ST_TEMPLATE_DIR_URI . '/style.css',array('parent-style'));
	wp_enqueue_style('bootstrap', ST_TEMPLATE_DIR . '/css/bootstrap.css');

	wp_enqueue_style('stacy-media-responsive-css', STACY_ST_TEMPLATE_DIR_URI."/css/media-responsive.css" );
	wp_dequeue_style('stacy-default-css', STACY_PARENT_TEMPLATE_DIR_URI .'/css/default.css');
}


if ( ! function_exists( 'stacy_theme_setup' ) ) :

function stacy_theme_setup() {

//Load text domain for translation-ready
load_theme_textdomain('stacy', STACY_ST_TEMPLATE_DIR . '/languages');

if ( is_admin() ) {
	require STACY_ST_TEMPLATE_DIR . '/admin/admin-init.php';
}

// Add default posts and comments RSS feed links to head.

add_theme_support( 'automatic-feed-links' );

/* Let WordPress manage the document title. */

add_theme_support( 'title-tag' );

}
endif;
add_action( 'after_setup_theme', 'stacy_theme_setup' );

/**
 * Import options from SpicePress
 *
 */
function stacy_get_lite_options() {
	$spicepress_mods = get_option( 'theme_mods_spicepress' );
	if ( ! empty( $spicepress_mods ) ) {
		foreach ( $spicepress_mods as $spicepress_mod_k => $spicepress_mod_v ) {
			set_theme_mod( $spicepress_mod_k, $spicepress_mod_v );
		}
	}
}
add_action( 'after_switch_theme', 'stacy_get_lite_options' );

add_action( 'admin_init', 'stacy_detect_button' );
	function stacy_detect_button() {
	wp_enqueue_style('stacy-info-button', STACY_ST_TEMPLATE_DIR_URI .'/css/import-button.css');
}

if (!get_option('stacy_user', false)) {
     //detect old user and set value
            if (get_theme_mod('home_news_section_title',false) ||
            get_theme_mod('home_news_section_discription',false) ||
            get_theme_mod('home_service_section_title',false) ||
            get_theme_mod('home_service_section_discription',false)) {
                add_option('stacy_user', 'old');
            }else{
                add_option('stacy_user', 'new');
            }
}

require_once STACY_ST_TEMPLATE_DIR. '/functions/customizer/custom-controls.php';
require_once STACY_ST_TEMPLATE_DIR. '/functions/customizer/customizer_header_layout_settings.php';
require_once STACY_ST_TEMPLATE_DIR. '/functions/customizer/customizer_blog_layout_settings.php';
require_once STACY_ST_TEMPLATE_DIR. '/functions/template-functions.php';

if (!function_exists('stacy_image_radio_button_sanitization')) {

    function stacy_image_radio_button_sanitization($input, $setting) {
        //get the list of possible radio box or select options
        $choices = $setting->manager->get_control($setting->id)->choices;

        if (array_key_exists($input, $choices)) {
            return $input;
        } else {
            return $setting->default;
        }
    }

}

//Set for old user before 1.3.7
if (!get_option('stacy_user_with_1_3_7', false)) {
    //detect old user and set value
    $stacy_service_title=get_theme_mod('home_service_section_title');
    $stacy_service_discription=get_theme_mod('home_service_section_discription');
    $stacy_blog_title=get_theme_mod('home_news_section_title');
    $stacy_blog_discription=get_theme_mod('home_news_section_discription');
    $stacy_slider_title=get_theme_mod('home_slider_title');
    $stacy_slider_discription=get_theme_mod('home_slider_discription');
    $stacy_testimonial_title=get_theme_mod('home_testimonial_section_title');
    $stacy_testimonial__discription=get_theme_mod('home_testimonial_section_discription');
    $stacy_footer_credit=get_theme_mod('footer_copyright_text');

    if ($stacy_service_title !=null || $stacy_service_discription !=null || $stacy_blog_title !=null || $stacy_blog_discription !=null || $stacy_slider_title !=null || $stacy_slider_discription !=null || $stacy_testimonial_title !=null || $stacy_testimonial__discription !=null || $stacy_footer_credit !=null )  {
        add_option('stacy_user_with_1_3_7', 'old');

    } else {
        add_option('stacy_user_with_1_3_7', 'new');
    }
}

//Remove Footer section
function stacy_remove_customize_register( $wp_customize ) {

   $wp_customize->remove_section( 'spicepress_footer_copyright');

}
add_action( 'customize_register', 'stacy_remove_customize_register',11);
