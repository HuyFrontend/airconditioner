<?php
/**
 * Template Name: Shop Page
 *
 * @package WordPress
 * @subpackage Sydney
 * @since Sydney 1.0
 */

get_header();
include('languages/vi.lng.php');
?>

  <div id="primary" class="content-area col-md-9 <?php echo sydney_blog_layout(); ?>">
    <main id="main" class="post-wrap">

      <?php $temp = $wp_query;
        $wp_query = null;
        $wp_query = new WP_Query();
        $wp_query->query('showposts=6&post_type=prod'.'&paged='.$paged);
        $count = 0;?>
      <div class="posts-layout">
        <section>
          <h3 class="block-title">Các loại cà phê</h3>
            <div  class="products lazy-load">

            <?php while ($wp_query->have_posts()) : $wp_query->the_post(); $count++; ?>
              <div class="product-item" id="product-<?php the_ID(); ?>">
                <div class="product-title">
                  <a class="" href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
                </div>
                <div class="product-image">
                  <?php $product_img_value = get_post_meta( $post->ID, 'product_image_1', true );
                    $image_attributes = wp_get_attachment_image_src($product_img_value, 'large');
                    if ( $image_attributes ) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <img class="lazy-load" src="<?php echo $image_attributes[0]; ?>" alt="ca phe nguyen chat An Nhien"/>
                      </a>
                    <?php endif; ?>
                </div>
                <div class="product-price"><span><?php echo $l10n['product']['price'] .': ';?><span class="price-value"><?php echo get_post_meta( $post->ID, 'product_price', true ); ?></span>đ</span>
                </div>
                <div class="product-status">
                  <span class="bold"><?php echo $l10n['product']['status'] .': '; ?></span>
                  <span> <?php echo get_post_meta( $post->ID, 'product_status', true ); ?> </span>
                </div>
                <div class="product-description"><p><?php echo $l10n['product']['description'] .': ' .get_post_meta( $post->ID, 'product_description', true ); ?></p>
                </div>
                <div class="product-detail">
                  <a data-type="modal" href="<?php the_permalink();?>"><?php echo $l10n['btn']['detail']; ?></a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </section>
        <nav class="navigation-link">
            <?php previous_posts_link('&laquo; Mới hơn') ?>
            <?php next_posts_link('Cũ hơn &raquo;') ?>
        </nav>
      </div>
    <?php
      $wp_query = null;
      $wp_query = $temp;  // Reset
    ?>
    <?php the_posts_navigation(); ?>
    </main><!-- #main -->
  </div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
