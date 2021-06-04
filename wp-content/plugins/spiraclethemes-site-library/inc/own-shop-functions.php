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

if ( ! function_exists( 'spiraclethemes_site_library_own_shop_set_import_files' ) ) :
function spiraclethemes_site_library_own_shop_set_import_files() {
    $demo_lists = array(
        'demo1' =>array(
            'title' => esc_html__( 'Demo 1', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'ecommerce', 'multipurpose' ),
            'categories' => array( 'ecommerce' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo1/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo1/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo1/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo1/demo1.jpg',
            'demo_url' => 'http://ownshopwp.spiraclethemes.com/demo1/',
        ),
        'demo2' =>array(
            'title' => esc_html__( 'Demo 2', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'ecommerce', 'multipurpose' ),
            'categories' => array( 'ecommerce' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo2/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo2/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo2/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/own-shop/demo2/demo2.jpg',
            'demo_url' => 'http://ownshopwp.spiraclethemes.com/demo2/',
        ),
   );
   return $demo_lists;
}
endif;
add_filter( 'advanced_import_demo_lists', 'spiraclethemes_site_library_own_shop_set_import_files' );