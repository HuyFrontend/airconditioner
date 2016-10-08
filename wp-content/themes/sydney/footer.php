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

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<h3 class="footer-title">Cơ sở Café rang An Nhiên</h3>
			<p>[ĐC] - 32 Đường số 5, KDC Hiệp Bình, Q. Thủ Đức</p>
			<p>[ĐT] - 0942.404.202 - 089.893.2519</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src=<?php echo get_template_directory_uri() . 'js/main.js';?> ></script>

</body>
</html>
