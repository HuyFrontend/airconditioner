<?php
/**
 * The home template file.
 *
 * @package Sydney
 */

get_header(); ?>


	<div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
		<main id="main" class="post-wrap" role="main">

		<?php if ( !have_posts() ) : ?>

		<div class="posts-layout">
			<section>
				<h3 class="block-title">Các loại cà phê</h3>
        <div  class="products">
        	<?php for ($i = 0; $i < 6; $i++){ ?>
				    <div class="product-item">
							<span class="product-title">CAFÉ<span> LIBERICA</span></span>
							<a>
								<img src=<?php echo get_template_directory_uri() . '/images/coffee-900x556.jpg'; ?> alt="photo-10"/>
							</a>
							<div class="product-price"><span>Giá: <span class="price-value">120,000</span></span></div>
							<div class="product-description"><p>A Smart way of Natural Presence. This is a Test Description and you can change it from the Theme Options.</p>
							</div>
							<div class="product-detail"><a data-type="modal">Chi tiết</a>
							</div>
	        </div>
					<?php } ?>
        </div>
      </section>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>
		</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	if ( get_theme_mod('blog_layout','classic') == 'classic' ) :
	get_sidebar();
	endif;
?>
<?php get_footer(); ?>
