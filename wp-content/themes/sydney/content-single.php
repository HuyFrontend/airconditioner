<?php
/**
 * @package Sydney
 */
?>

<article  data-share-content id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() && ( get_theme_mod( 'post_feat_image' ) != 1 ) ) : ?>
		<div class="entry-thumb">
			<?php the_post_thumbnail('sydney-large-thumb'); ?>
		</div>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 data-share-title class="title-post news-post">', '</h1>' ); ?>

		<?php if (get_theme_mod('hide_meta_single') != 1 ) : ?>
		<div class="meta-post">
			<?php sydney_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<!-- social sharing -->
	<?php renderSocialSharing () ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php renderSocialSharing () ?>
	<footer class="entry-footer">
		<?php sydney_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
function renderSocialSharing () {
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	?>
	<div class="content-share">
		<a class="btn social-sharing share-facebook">
			<i class="fa fa-facebook"></i>
			<span class="share-desktop">Share on Facebook</span>
			<span class="share-tablet">Share</span>
		</a>
		<a class="btn social-sharing share-twitter">
			<i class="fa fa-twitter"></i>
			<span class="share-desktop">Share on Twitter</span>
			<span class="share-tablet">Tweet</span>
		</a>
		<a class="btn social-sharing share-pinterest">
			<i class="fa fa-pinterest"></i>
			<span class="share-desktop">Share on Pinterest</span>
			<span class="share-tablet">Pin</span>
		</a>
	</div>
<?php
}
?>
