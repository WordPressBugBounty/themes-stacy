<?php

if(!function_exists('stacy_header_type_customizer')){

    function stacy_header_type_customizer($wp_customize) {
    
    /* Header layout type placing setting */
//	$wp_customize->add_section( 'header_type_setting' , array(
//		'title'      => esc_html__('Header Type','stacy'),
//		'panel'  => 'general_settings',
//                'description' => __('<i>Note</i>: <b>Header layout</b> setting will only work for the standard type header', 'stacy')
//   	) );

        		// Test of Simple Notice control
		$wp_customize->add_setting( 'sample_simple_notice',
			array(
				'default' => 'Default notice text',
				'transport' => 'postMessage',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);
		$wp_customize->add_control( new Stacy_Simple_Notice_Custom_Control( $wp_customize, 'sample_simple_notice',
			array(
				'label' => __( 'Note:-', 'stacy' ),
				'description' => __( 'Above logo placing setting will only work for the standard header design.', 'stacy' ),
				'section' => 'header_layout_logo_placing_setting'
			)
		) );
        
   // Header Layout settings
    if(get_option('stacy_user', 'new')=='old') {
        $wp_customize->add_setting('header_type', array(
            'default' => 'default',
            'sanitize_callback' => 'stacy_image_radio_button_sanitization',
            'priority'       => 10,
        ));
        
    } else {
        $wp_customize->add_setting('header_type', array(
            'default' => 'center',
            'sanitize_callback' => 'stacy_image_radio_button_sanitization',
            'priority'       => 10,
        ));
        
    }
    $wp_customize->add_control(new Stacy_Image_Radio_Button_Custom_Control($wp_customize, 'header_type',
            array(
                'label' => esc_html__('Header Design', 'stacy'),
                'section' => 'header_layout_logo_placing_setting',
                'choices' => array(
                    'default' => array(
                        'image' => get_stylesheet_directory_uri() . '/images/stacy-header-default.png',
                        'name' => esc_html__('Standard', 'stacy')
                    ),
                    'center' => array(
                        'image' => get_stylesheet_directory_uri() . '/images/stacy-header-center.png',
                        'name' => esc_html__('Center', 'stacy')
                    )
                )
            )
    ));
        
    }
}
    add_action( 'customize_register', 'stacy_header_type_customizer',10 );