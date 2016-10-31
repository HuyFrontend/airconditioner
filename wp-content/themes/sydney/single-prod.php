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
        <div class="product-info" data-share-content>
          <div class="product-title">
            <h1 data-share-title><?php the_title(); ?></h1>
          </div>
          <?php renderSocialSharing () ?>
          <div class="product-image">
            <?php $attachment_id = get_post_meta( $post->ID, 'product_image_1', true );
            $image_attributes = wp_get_attachment_image_src($attachment_id, 'large');
            $image_thumb = wp_get_attachment_image_src($attachment_id, 'thumbnail');
            if ( $image_attributes ) : ?>
                <div class="large-view">
                  <img class="large-img lazy-load" src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" data-share-img/>
                  <div class="caption">
                    <img class="caption-img lazy-load" src=<?php echo get_template_directory_uri() .'/images/logo-281016.png';?> alt="caption"/>
                  </div>
                </div>
            <?php endif; ?>
            <!-- Thumb image -->
            <div class="thumb" data-hover-image="true">
              <?php
              for($i = 1; $i <= 5; $i++) {
                $field_name = "product_image_" .$i;
                $this_img = get_post_meta( $post->ID, $field_name, true );
                $this_img_thumb = wp_get_attachment_image_src($this_img, 'thumbnail');
                $this_img_large = wp_get_attachment_image_src($this_img, 'large');
                if($this_img_thumb) {
                  $this_img_source = $this_img_thumb[0];
                  $this_data_source = $this_img_large[0];
                  echo "<img src=$this_img_source width=70 data-src=$this_data_source>";
                }
              }
              ?>
            </div>
          </div>


          <div class="product-price">
            <span>Giá:
              <span class="price-value"><?php echo get_post_meta( $post->ID, 'product_price', true ); ?>
              </span> đ
            </span>
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
