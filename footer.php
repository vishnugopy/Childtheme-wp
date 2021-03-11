<?php
/**
 * The template for displaying the footer.
 *
 * Contains all content after the main content area and sidebar
 *
 * @package Gridbox
 */

?>
	
	</div><!-- #content -->
	
	<?php do_action( 'gridbox_before_footer' ); ?>

	<div id="footer" class="footer-wrap">
	
		<footer id="colophon" class="site-footer container clearfix" role="contentinfo">

			<div id="footer-text" class="site-info">
            <a href="<?php echo esc_url (get_theme_mod( 'gridbox_child_theme_custom_link' )) ?>"><?php echo get_theme_mod( 'gridbox_child_theme_custom_setting' ) ?></a>
			</div><!-- .site-info -->
			
			<?php do_action( 'gridbox_footer_menu' ); ?>

		</footer><!-- #colophon -->
		
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
