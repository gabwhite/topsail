<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<div class="site-info container">
			<div class="copyright">
				<p>Copyright Topsail Entertainment <?php echo date('Y'); ?></p>
			</div>

			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-horiz.svg" alt="Topsail Logo">
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
