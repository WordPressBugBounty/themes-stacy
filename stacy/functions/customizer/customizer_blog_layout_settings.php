<?php

if(!function_exists('stacy_blog_type_customizer')){

    function stacy_blog_type_customizer($wp_customize) {
    
    /* Blog layout type placing setting */

   // Blog Layout settings
    if(get_option('stacy_user', 'new')=='old') {
        $wp_customize->add_setting('blog_type', array(
            'default' => 'default',
            'sanitize_callback' => 'stacy_image_radio_button_sanitization',
            'priority'       => 20,
        ));
        
    } else {
        $wp_customize->add_setting('blog_type', array(
            'default' => 'list',
            'sanitize_callback' => 'stacy_image_radio_button_sanitization',
            'priority'       => 20,
        ));
        
    }
    $wp_customize->add_control(new Stacy_Image_Radio_Button_Custom_Control($wp_customize, 'blog_type',
            array(
                'label' => esc_html__('Blog Design', 'stacy'),
                'section' => 'spicepress_latest_news_section',
                'choices' => array(
                    'default' => array(
                        'image' => get_stylesheet_directory_uri() . '/images/stacy-blog-default.png',
                        'name' => esc_html__('Standard', 'stacy')
                    ),
                    'list' => array(
                        'image' => get_stylesheet_directory_uri() . '/images/stacy-blog-list.png',
                        'name' => esc_html__('List', 'stacy')
                    )
                )
            )
    ));
        
    }
}
    add_action( 'customize_register', 'stacy_blog_type_customizer',99 );
    
