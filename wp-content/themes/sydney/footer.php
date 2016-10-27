<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

</div><!-- #page -->
<div class="footer_section">
	<div class="footer-social-area"><ul class="footer-social-icons">
		<li><a href="https://twitter.com/CafeAnNhien" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<li><a href="https://www.facebook.com/CafeAnNhien/" target="_blank"><i class="fa fa-facebook"></i></a></li>
		<li><a href="https://plus.google.com/111877956106983357843" target="_blank"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="https://www.pinterest.com/CafeAnNhien/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
		<li><a href="https://www.instagram.com/CafeAnNhien/" target="_blank"><i class="fa fa-instagram"></i></a></li>
	</ul>
</div>
<div class="container">
	<div class="row footer-widget-section">
	</div>
  <div class="row">
		<div class="col-md-12">
			<div class="footer-copyright">
				<p>Copyright @ 2016 - <a href="http://www.facebook.com/CafeAnNhien" class="web-author" target="_blank">UH THI AN NHIEN</a>. Designed by, huyvoxuan.
				</p>
			</div>
		</div>
	</div>
<?php wp_footer(); ?>
<script type="text/javascript" src=<?php echo get_template_directory_uri() . '/js/plugins.js';?> ></script>

</body>
</html>
