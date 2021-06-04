<?php
/**
 * Theme Customizer Controls
 *
 * @package colon
 */


if ( ! function_exists( 'colon_customizer_stickyheader_register' ) ) :
function colon_customizer_stickyheader_register( $wp_customize ) {
 
 	$wp_customize->add_section(
        'colon_stickyheader_settings',
        array (
            'priority'      => 25,
            'capability'    => 'edit_theme_options',
            'title'         => esc_html__( 'Sticky Header Settings', 'colon' )
        )
    );

    // Title label
	$wp_customize->add_setting( 
		'colon_label_stickyheader_settings_title', 
		array(
		    'sanitize_callback' => 'colon_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Colon_Title_Info_Control( $wp_customize, 'colon_label_stickyheader_settings_title', 
		array(
		    'label'       => esc_html__( 'Sticky Header', 'colon' ),
		    'section'     => 'colon_stickyheader_settings',
		    'type'        => 'colon-title',
		    'settings'    => 'colon_label_stickyheader_settings_title',
		) 
	));

	// Add an option to enable the sticky header
	$wp_customize->add_setting( 
		'colon_enable_stickyheader', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'colon_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Colon_Toggle_Control( $wp_customize, 'colon_enable_stickyheader', 
		array(
		    'label'       => esc_html__( 'Show Sticky Header', 'colon' ),
		    'section'     => 'colon_stickyheader_settings',
		    'type'        => 'colon-toggle',
		    'settings'    => 'colon_enable_stickyheader',
		) 
	));


	// Title label
	$wp_customize->add_setting( 
		'colon_label_stickyheader_logo_settings_title', 
		array(
		    'sanitize_callback' => 'colon_sanitize_title',
		) 
	);

	$wp_customize->add_control( 
		new Colon_Title_Info_Control( $wp_customize, 'colon_label_stickyheader_logo_settings_title', 
		array(
		    'label'       => esc_html__( 'Sticky Header Logo Settings', 'colon' ),
		    'section'     => 'colon_stickyheader_settings',
		    'type'        => 'colon-title',
		    'settings'    => 'colon_label_stickyheader_logo_settings_title',
		    'active_callback' => 'colon_stickyheader_enable',
		) 
	));


	// Add an option to enable the logo
	$wp_customize->add_setting( 
		'colon_enable_logo_stickyheader', 
		array(
		    'default'           => false,
		    'type'              => 'theme_mod',
		    'sanitize_callback' => 'colon_sanitize_checkbox',
		) 
	);

	$wp_customize->add_control( 
		new Colon_Toggle_Control( $wp_customize, 'colon_enable_logo_stickyheader', 
		array(
		    'label'       => esc_html__( 'Show different Logo', 'colon' ),
		    'section'     => 'colon_stickyheader_settings',
		    'type'        => 'colon-toggle',
		    'settings'    => 'colon_enable_logo_stickyheader',
		    'active_callback' => 'colon_stickyheader_enable',
		) 
	));


	// Upload logo 
    $wp_customize->add_setting(
        'colon_logo_stickyheader',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'colon_sanitize_image'
        )
    );

    $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'colon_logo_stickyheader',
          array(
              'settings'      => 'colon_logo_stickyheader',
              'section'       => 'colon_stickyheader_settings',
              'label'         => esc_html__( 'Upload logo', 'colon' ),
              'active_callback'  => 'colon_stickyheader_enable_sticylogo_enable',
          )
      )
    );

}
endif;

add_action( 'customize_register', 'colon_customizer_stickyheader_register' );