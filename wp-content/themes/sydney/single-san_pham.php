<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */

get_header(); ?>

  <?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
    $fullwidth = 'fullwidth';
  } else {
    $fullwidth = '';
  } ?>

  <div id="primary" class="content-area col-md-9 <?php echo $fullwidth; ?>">
    <main id="main" class="post-wrap product-iii" role="main">

    <?php while ( have_posts() ) : the_post(); ?>
        <div class="product-info">
          <div class="product-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="product-thumb">
            <?php $attachment_id = get_post_meta( $post->ID, 'product_image', true );
            $image_attributes = wp_get_attachment_image_src($attachment_id);
            if ( $image_attributes ) : ?>
                <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
            <?php endif; ?>
          </div>
          <div class="product-price">
            <?php echo "<strong>Giá:</strong> ". get_post_meta( $post->ID, 'product_price', true ); ?>
          </div>
          <div class="product-status">
            <?php echo "<strong>Tình trạng:</strong> " .get_post_meta( $post->ID, 'product_status', true );
            ?>
          </div>
        <div class="product-description">
          <?php echo "<strong>Đặc trưng:</strong> ". get_post_meta( $post->ID, 'product_description', true ); ?>
        </div>
      </div>

      <?php sydney_post_navigation(); ?>

      <?php
        // If comments are open or we have at least one comment, load up the comment template
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php if ( get_theme_mod('fullwidth_single', 0) != 1 ) {
  get_sidebar();
} ?>
<?php get_footer(); ?>
