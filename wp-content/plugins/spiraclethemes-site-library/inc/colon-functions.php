<?php
/**
 *
 * @package spiraclethemes-site-library
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) :
    die;
endif;


/**
 *  Set Import files
 */

if ( ! function_exists( 'spiraclethemes_site_library_colon_set_import_files' ) ) :
function spiraclethemes_site_library_colon_set_import_files() {
    $demo_lists = array(
        'demo1' =>array(
            'title' => esc_html__( 'Demo 1', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'agency', 'multipurpose' ),
            'categories' => array( 'business' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo1/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo1/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo1/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo1/demo1.jpg',
            'demo_url' => 'http://colonwp.spiraclethemes.com/demo1/',
            'plugins' => array(
                array(
                   'name'      => esc_html__( 'Elementor Website Builder', 'spiraclethemes-site-library' ),
                   'slug'      => 'elementor',
                ),
                array(
                    'name'      => esc_html__( 'Contact Form 7', 'spiraclethemes-site-library' ),
                    'slug'      => 'contact-form-7',
                    'main_file' => 'wp-contact-form-7.php',/*the main plugin file of contact form 7 is different from plugin slug */
                ),
            )
        ),
        'demo2' =>array(
            'title' => esc_html__( 'Demo 2', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'agency', 'multipurpose' ),
            'categories' => array( 'onepage' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo2/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo2/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo2/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo2/demo2.jpg',
            'demo_url' => 'http://colonwp.spiraclethemes.com/demo2/',
            'plugins' => array(
                array(
                   'name'      => esc_html__( 'Elementor Website Builder', 'spiraclethemes-site-library' ),
                   'slug'      => 'elementor',
                ),
                array(
                    'name'      => esc_html__( 'Contact Form 7', 'spiraclethemes-site-library' ),
                    'slug'      => 'contact-form-7',
                    'main_file' => 'wp-contact-form-7.php',/*the main plugin file of contact form 7 is different from plugin slug */
                ),
            )
        ),
        'demo3' =>array(
            'title' => esc_html__( 'Demo 3', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'construction', 'multipurpose' ),
            'categories' => array( 'business' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo3/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo3/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo3/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo3/demo3.jpg',
            'demo_url' => 'http://colonwp.spiraclethemes.com/demo3/',
            'plugins' => array(
                array(
                   'name'      => esc_html__( 'Elementor Website Builder', 'spiraclethemes-site-library' ),
                   'slug'      => 'elementor',
                ),
                array(
                    'name'      => esc_html__( 'Contact Form 7', 'spiraclethemes-site-library' ),
                    'slug'      => 'contact-form-7',
                    'main_file' => 'wp-contact-form-7.php',/*the main plugin file of contact form 7 is different from plugin slug */
                ),
            )
        ),
        'demo4' =>array(
            'title' => esc_html__( 'Demo 4', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'agency', 'multipurpose' ),
            'categories' => array( 'onepage' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo4/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo4/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo4/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/colon/demo4/demo4.jpg',
            'demo_url' => 'http://colonwp.spiraclethemes.com/demo4/',
            'plugins' => array(
                array(
                   'name'      => esc_html__( 'Elementor Website Builder', 'spiraclethemes-site-library' ),
                   'slug'      => 'elementor',
                ),
                array(
                    'name'      => esc_html__( 'Contact Form 7', 'spiraclethemes-site-library' ),
                    'slug'      => 'contact-form-7',
                    'main_file' => 'wp-contact-form-7.php',/*the main plugin file of contact form 7 is different from plugin slug */
                ),
            )
        ),
   );
   return $demo_lists;
}
endif;
add_filter( 'advanced_import_demo_lists', 'spiraclethemes_site_library_colon_set_import_files' );