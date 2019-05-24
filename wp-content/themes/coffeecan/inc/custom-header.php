<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
 * <?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package CoffeeCan
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses coffeecan_header_style()
 */
function coffeecan_custom_header_setup()
{
    add_theme_support('custom-header', apply_filters('coffeecan_custom_header_args', array(
        'default-image' => '',
        'default-text-color' => '000000',
        'width' => 2000,
        'height' => 250,
        'flex-height' => true,
        'wp-head-callback' => 'coffeecan_header_style',
    )));
}

add_action('after_setup_theme', 'coffeecan_custom_header_setup');

