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

if ( ! function_exists( 'spiraclethemes_site_library_purea_fashion_set_import_files' ) ) :
function spiraclethemes_site_library_purea_fashion_set_import_files() {
    $demo_lists = array(
        'fashiondemo' =>array(
            'title' => esc_html__( 'Fashion', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'fashion',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'fashion', 'multipurpose' ),
            'categories' => array( 'fashion' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-fashion/demo1/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-fashion/demo1/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-fashion/demo1/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-fashion/demo1/demo1.jpg',
            'demo_url' => 'http://pureamagwp.spiraclethemes.com/demo3/',
        ),
        'demo1' =>array(
            'title' => esc_html__( 'Demo 1', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'magazine',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'magazine', 'multipurpose' ),
            'categories' => array( 'magazine' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo1/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo1/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo1/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo1/demo1.jpg',
            'demo_url' => 'http://pureamagwp.spiraclethemes.com/demo1/',
        ),
        'demo2' =>array(
            'title' => esc_html__( 'Demo 2', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'magazine',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'magazine', 'multipurpose' ),
            'categories' => array( 'magazine' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo2/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo2/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo2/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/purea-magazine/demo2/demo2.jpg',
            'demo_url' => 'http://pureamagwp.spiraclethemes.com/demo2/',
        ),
   );
   return $demo_lists;
}
endif;
add_filter( 'advanced_import_demo_lists', 'spiraclethemes_site_library_purea_fashion_set_import_files' );