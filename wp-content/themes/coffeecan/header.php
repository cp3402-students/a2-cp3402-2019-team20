<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoffeeCan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'coffeecan'); ?></a>
    <?php $classes[] = get_body_class(); ?>
    <?php if (get_header_image() && in_array("home", $classes[0])): ?> <!-- If statement to check if header image is set-->
        <figure id="header-image-con" class="header-image-container transparent">
            <?php the_header_image_tag(); ?>
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <?php
                    the_custom_logo(); ?>
                    <div class="branding-text-container">
                        <?php
                        if (is_front_page() && is_home()) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>
                        <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                     rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
                        endif; ?>
                        <?php
                        $coffeecan_description = get_bloginfo('description', 'display');
                        if ($coffeecan_description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $coffeecan_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- .site-branding -->
                <div class="main-navigation-div">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'coffeecan'); ?></button>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id' => 'primary-menu',
                        ));
                        ?>
                    </nav>
                </div><!-- #site-navigation -->
            </header><!-- #masthead -->
        </figure>
        <div class="title-bar">
            <?php the_title('<h2 class="title-text">', '</h2>'); ?>
        </div>
        <!--    --><?php //endif; ?>

    <?php else : ?> <!-- If statement to check if header image is set-->
        <!--        --><?php //the_header_image_tag(); ?>
        <header id="masthead" class="site-header-basic">
            <div class="site-branding">
                <?php
                the_custom_logo(); ?>
                <div class="branding-text-container">
                    <?php
                    if (is_front_page() && is_home()) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                  rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                 rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php
                    endif; ?>
                    <?php
                    $coffeecan_description = get_bloginfo('description', 'display');
                    if ($coffeecan_description || is_customize_preview()) :
                        ?>
                        <p class="site-description"><?php echo $coffeecan_description; /* WPCS: xss ok. */ ?></p>
                    <?php endif; ?>
                </div>
            </div><!-- .site-branding -->
            <div class="main-navigation-div">
                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false"><?php esc_html_e('Primary Menu', 'coffeecan'); ?></button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>
                </nav>
            </div><!-- #site-navigation -->
            <div class="title-bar">
                <?php the_title('<h2 class="title-text">', '</h2>'); ?>
            </div>
        </header><!-- #masthead -->
    <?php endif; ?>

    <!-- Code to separate the post and page titles into their own element for styling -->
    <!-- Uses conditional check to only place post post titles on pages that are not home -->

<!--    --><?php //if (!is_home()) : ?>
<!--        <div class="title-bar">-->
<!--            --><?php //the_title('<h2 class="title-text">', '</h2>'); ?>
<!--        </div>-->
<!--    --><?php //else : ?>
<!--        <div class="title-bar">-->
<!--            <h1 class="title-text">The Coffee Can Cairns</h1>-->
<!--        </div>-->
<!--    --><?php //endif; ?>

    <div id="content" class="site-content">
        <script src="/wp-content/themes/coffeecan/js/scroll.js"></script>
