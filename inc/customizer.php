<?php
/**
 * Theme Customizer settings.
 *
 * @package      tkmnineteen
 * @author       Tal Katz TKMedia.co.il
 * @since 1.7 
 */
/**
 * Theme customizer settings with real-time update
 * Very helpful: http://ottopress.com/2012/theme-customizer-part-deux-getting-rid-of-options-pages/
 *
 * @since 1.5
 */
function tkmnineteen_customizer( $wp_customize ) {
    // Footer Logo upload
    $wp_customize->add_section( 'tkmnineteen_logo_section' , array(
	    'title'       => __( 'Footer Logo', 'tkmnineteen' ),
	    'priority'    => 30,
	    'description' => __( 'Upload logo to footer - if theme support', 'tkmnineteen' ),
	) );

	$wp_customize->add_setting( 'tkmnineteen_logo', array(
		'sanitize_callback' => 'esc_url_raw',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tkmnineteen_logo', array(
		'label'    => __( 'Footer Logo', 'tkmnineteen' ),
		'section'  => 'tkmnineteen_logo_section',
		'settings' => 'tkmnineteen_logo',
	) ) );



    $wp_customize->add_setting( 'tkmnineteen_mobile_logo', array(
        'default'        => '',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'tkmnineteen_mobile_logo', array(
		'label'    => __( 'Mobile Logo', 'tkmnineteen' ),
        'section' => 'title_tagline',
        'settings'   => 'tkmnineteen_mobile_logo',
    ) ) );


	// Set site name and description to be previewed in real-time
	$wp_customize->get_setting('blogname')->transport='postMessage';
	$wp_customize->get_setting('blogdescription')->transport='postMessage';

	// Enqueue scripts for real-time preview
	wp_enqueue_script( 'tkmnineteen-customizer', get_template_directory_uri() . '/js/tkmnineteen-customizer.js', array( 'jquery' ) );

}
add_action('customize_register', 'tkmnineteen_customizer');