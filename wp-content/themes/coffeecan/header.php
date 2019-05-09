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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'coffeecan' ); ?></a>

    <?php if ( get_header_image() and is_front_page()) : ?> <!-- If statement to check if header image is set and user is on home page -->
        <figure class="header-image-container transparent">
        <?php the_header_image_tag(); ?>    <header id="masthead" class="site-header">
                <div class="site-branding">
                    <?php
                    the_custom_logo(); ?>
                    <div class="branding-text-container">
                        <?php
                        if ( is_front_page() && is_home() ) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                        endif; ?>
                        <?php
                        $coffeecan_description = get_bloginfo( 'description', 'display' );
                        if ( $coffeecan_description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $coffeecan_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'coffeecan' ); ?></button>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    ) );
                    ?>
                </nav><!-- #site-navigation -->
            </header><!-- #masthead -->
        </figure>
    <?php endif; ?>
<!--    uncomment above to display the custom header element-->


	<div id="content" class="site-content">
