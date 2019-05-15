<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoffeeCan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( is_active_sidebar('sidebar-1') ) :
            ?>
            <div class="entry-meta">
                <?php
                coffeecan_posted_by();
                coffeecan_posted_on();
                coffeecan_show_comments();
                coffeecan_show_edit_link(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php
    if ( has_post_thumbnail() ) { ?>
    <figure class="bleed-image">
     <?php coffeecan_post_thumbnail(); ?>
    </figure>
   <?php } ?>

    <section class="single-post-content">
        <?php
        if ( !is_active_sidebar('sidebar-1') ) : ?>
        <div class="post-content-wrapper">
        <div class="entry-meta">
            <?php
            coffeecan_posted_by();
            coffeecan_posted_on();
            coffeecan_show_comments();
            coffeecan_show_edit_link(); ?>
        </div><!-- .entry-meta -->
        <div class="post-content-body">
        <?php endif; ?>

        <div class="entry-content">
            <?php
            the_content( sprintf(
                wp_kses(
                /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'coffeecan' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coffeecan' ),
                'after'  => '</div>',
            ) );
            ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php coffeecan_entry_footer(); ?>
        </footer><!-- .entry-footer -->

<!--            php  conditional check to close the div tags creating in the same conditional if-->
<!--            block above if no widgets are present on the page-->
        <?php
        if ( !is_active_sidebar('sidebar-1') ) : ?>
        </div> <!-- post-content-body -->
        </div> <!-- post-content-wrapper -->
        <?php endif; ?>

        <?php
        coffeecan_post_navigation();

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
        comments_template();
        endif; ?>
    </section>
    <?php get_sidebar(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
