<?php
/**
 * CoffeeCan Theme Customizer
 *
 * @package CoffeeCan
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function coffeecan_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    $wp_customize->add_section('social_media_icons', array(
        'title' => __('Social Media Icons', 'coffeecan'),
        'priority' => 30,
        'description' => __('Size of the social media icons in px', 'coffeecan')
    ));

    // added options below

    $wp_customize->add_setting('header_background', array(
        'default' => '#ffffff',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_background', array(
                'label' => __('Header background colour', 'coffeecan'),
                'section' => 'colors',
                'settings' => 'header_background' // needs to be same as 1st argument of add_settings()
            )
        )
    );

    $wp_customize->add_setting('footer_background', array(
        'default' => '#FFFFCF',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'footer_background', array(
                'label' => __('Footer background colour', 'coffeecan'),
                'section' => 'colors',
                'settings' => 'footer_background'
            )
        )
    );

    $wp_customize->add_setting('title_background', array(
        'default' => '#FFFFCF',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'title_background', array(
                'label' => __('Title background colour', 'coffeecan'),
                'section' => 'colors',
                'settings' => 'title_background'
            )
        )
    );

    $wp_customize->add_setting('title_text', array(
        'default' => '#404040',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'title_text', array(
                'label' => __('Title text colour', 'coffeecan'),
                'section' => 'colors',
                'settings' => 'title_text'
            )
        )
    );

    $wp_customize->add_setting('social-icon', array(
        'default' => '50px',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
    ));
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'social-icon', array(
                'label' => __('Social media icons pixel size', 'coffeecan'),
                'section' => 'social_media_icons',
                'settings' => 'social-icon',
                'type' => 'text'
            )
        )
    );

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'coffeecan_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'coffeecan_customize_partial_blogdescription',
        ));
    }
}

if (!function_exists('coffeecan_header_style')) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see coffeecan_custom_header_setup().
     */
    function coffeecan_header_style()
    {
        $header_text_color = get_header_textcolor();
        $header_background_color = get_theme_mod('header_background');
        $footer_background_color = get_theme_mod('footer_background');
        $title_bar_background_color = get_theme_mod('title_background');
        $title_bar_text_color = get_theme_mod('title_text');
        $social_icon_size = get_theme_mod('social-icon');
        /*
         * If no custom options for text are set, let's bail.
         * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
         */
        if (get_theme_support('custom-header', 'default-text-color') != $header_text_color) {


            // If we get this far, we have custom styles. Let's do this.
            ?>
            <style type="text/css">
                <?php
                // Has the text been hidden?
                if ( ! display_header_text() ) :
                    ?>
                .site-title,
                .site-description {
                    position: absolute;
                    clip: rect(1px, 1px, 1px, 1px);
                }

                <?php
                // If the user has set a custom color for the text use that.
                else :
                    ?>
                .site-title a,
                .site-description {
                    color: <?php echo esc_attr( $header_text_color ); ?>;
                }

                <?php endif; ?>
            </style>
            <?php
        }

        if (strtolower('#ffffff') != $header_background_color) { ?>
            <style type="text/css">
                .site-header,
                .site-header-basic {
                    background-color: <?php echo esc_attr($header_background_color); ?>
                }
            </style>
        <?php }
        if (strtolower('#FFFFCF') != $footer_background_color) { ?>
            <style type="text/css">
                .site-info {
                    background-color: <?php echo esc_attr($footer_background_color); ?>
                }
            </style>
        <?php }
        if (strtolower('#FFFFCF') != $title_bar_background_color) { ?>
            <style type="text/css">
                .title-bar {
                    background-color: <?php echo esc_attr($title_bar_background_color); ?>
                }
            </style>
        <?php }
        if ('#404040' != $title_bar_text_color) { ?>
            <style type="text/css">
                .title-text {
                    color: <?php echo esc_attr($title_bar_text_color); ?>
                }
            </style>
        <?php }
        if ('50px' != $social_icon_size) { ?>
            <style type="text/css">
                .site-info .social-media-container img {
                    max-width: <?php echo esc_attr($social_icon_size); ?>
                }
            </style>
        <?php }

    }
endif;


add_action('customize_register', 'coffeecan_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function coffeecan_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function coffeecan_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function coffeecan_customize_preview_js()
{
    wp_enqueue_script('coffeecan-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'coffeecan_customize_preview_js');
