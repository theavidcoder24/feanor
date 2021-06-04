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

if ( ! function_exists( 'spiraclethemes_site_library_somalite_set_import_files' ) ) :
function spiraclethemes_site_library_somalite_set_import_files() {
    $demo_lists = array(
        'demo3' =>array(
            'title' => esc_html__( 'Demo Business', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'business', 'multipurpose' ),
            'categories' => array( 'business' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo3/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo3/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo3/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo3/demo3.jpg',
            'demo_url' => 'http://somawp.spiraclethemes.com/demo3/',
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
                array(
                   'name'      => esc_html__( 'WooCommerce', 'spiraclethemes-site-library' ),
                   'slug'      => 'woocommerce',
                ),
            )
        ),
        'demo4' =>array(
            'title' => esc_html__( 'Demo Shop', 'spiraclethemes-site-library' ),
            'is_pro' => false,
            'type' => 'elementor',/* Optional eg gutentor, elementor or other page builders or type */
            'author' => esc_html__( 'Spiracle Themes', 'spiraclethemes-site-library' ),
            'keywords' => array( 'ecommerce', 'multipurpose' ),
            'categories' => array( 'ecommerce' ),
                'template_url' => array(
                    'content' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo4/content.json',
                    'options' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo4/options.json',
                    'widgets' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo4/widgets.json',
                ),
            'screenshot_url' => SPIR_SITE_LIBRARY_URL . 'ocdi/somalite/demo4/demo4.jpg',
            'demo_url' => 'http://somawp.spiraclethemes.com/demo4/',
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
                array(
                   'name'      => esc_html__( 'WooCommerce', 'spiraclethemes-site-library' ),
                   'slug'      => 'woocommerce',
                ),
            )
        ),
   );
   return $demo_lists;
}
endif;
add_filter( 'advanced_import_demo_lists', 'spiraclethemes_site_library_somalite_set_import_files' );