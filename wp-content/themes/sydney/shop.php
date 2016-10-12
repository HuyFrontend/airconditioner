<?php
/**
 * Template Name: Shop Page
 *
 * @package WordPress
 * @subpackage Sydney
 * @since Sydney 1.0
 */

get_header(); ?>

  <div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
    <main id="main" class="post-wrap" role="main">


      <?php  $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query('showposts=6&post_type=san_pham'.'&paged='.$paged);
        $count = 0;?>
      <div class="posts-layout">
        <section>
          <h3 class="block-title">Các loại cà phê</h3>
            <div  class="products">

            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); $count++; ?>
              <div class="product-item" id="product-<?php the_ID(); ?>">
                <div class="">
                  <span class="product-title">CAFÉ<span> <?php the_title(); ?> </span></span>
                </div>
                <a>
                  <?php $product_img_value = get_post_meta( $post->ID, 'product_image', true );
                    $image_attributes = wp_get_attachment_image_src($product_img_value);
                    if ( $image_attributes ) : ?>
                      <img href="<?php the_permalink(); ?>" src="<?php echo $image_attributes[0]; ?>"/>
                    <?php endif; ?>
                  <img href="<?php the_permalink(); ?>" src=<?php echo get_template_directory_uri() . '/images/coffee-900x556.jpg'; ?> alt="photo-10"/>
                </a>
                <div class="product-price"><span>Giá: <span class="price-value"><?php echo get_post_meta( $post->ID, 'product_price', true ); ?></span></span>
                </div>
                <div class="product-status">
                  <?php echo "<strong>Tình trạng:</strong> " .get_post_meta( $post->ID, 'product_status', true );
                  ?>
                </div>
                <div class="product-description"><p><?php echo get_post_meta( $post->ID, 'product_description', true ); ?></p>
                </div>
                <div class="product-detail"><a data-type="modal" href="<?php the_permalink();?>">Chi tiết</a>
                </div>
            </div>
          <?php endwhile; ?>
        </div>
      </section>

<nav>
    <?php previous_posts_link('&laquo; Mới hơn') ?>
    <?php next_posts_link('Cũ hơn &raquo;') ?>
</nav>

    </div>
<?php
  $wp_query = null;
  $wp_query = $temp;  // Reset
?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>