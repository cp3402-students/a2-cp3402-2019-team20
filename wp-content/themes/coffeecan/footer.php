<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoffeeCan
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div class="footer-text-container">
            <p class="footer-text">The Coffee Can, 28 Michaelangelo Drive, Redlynch, Cairns <?php echo date('Y')?> </p>
            </div>
            <div class="footer-links-container">
                <a href="https://www.facebook.com/Mycoffeecan"><p>Like us on Facebook</p></a>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
