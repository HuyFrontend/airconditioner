<?php
/**
 * Slider template
 *
 * @package Sydney
 */

//Slider template
if ( ! function_exists( 'sydney_slider_template' ) ) :
function sydney_slider_template() {

    if ( (get_theme_mod('front_header_type','slider') == 'slider' && is_front_page()) || (get_theme_mod('site_header_type') == 'slider' && !is_front_page()) ) {

    //Get the slider options
    $speed      = get_theme_mod('slider_speed', '4000');
    $text_slide = get_theme_mod('textslider_slide', 0);

    $slide_title_welcome = 'Welcome to An Nhiên';
    $slide_title_an_nhien = 'Ừ thì An Nhiên';
    $slide_sub_from_to = 'Từ cà phê hạt đến cà phê rang';
    $slide_sub_rain = 'An nhiên những cơn mưa tháng Tám';
    $slide_sub_new_date = 'Ngày mới lên thắm hương vị ấm nồng';
    $slide_btn_text = 'Sản phẩm';
    $slide_img_1 = '/images/slide-1.jpg';
    $slide_img_2 = '/images/slide-2.jpg';
    $slide_img_3 = '/images/slide-3.jpg';
    ?>

    <div id="slideshow" class="header-slider" data-speed="<?php echo esc_attr($speed); ?>">
        <div class="slides-container">

            <div class="slide-item" style="background-image:url(<?php echo get_template_directory_uri() . $slide_img_1; ?>)">
                <div class="slide-inner">
                    <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"><?php echo esc_html($slide_title_welcome); ?></h2>
                        <p class="subtitle"><?php echo esc_html($slide_sub_from_to); ?></p>
                    </div>
                    <a href="#primary" class="roll-button button-slider btn-slider btn-product"><?php echo esc_html($slide_btn_text); ?></a>
                </div>
            </div>

            <div class="slide-item" style="background-image:url(<?php echo get_template_directory_uri() . $slide_img_2; ?>)">
                <div class="slide-inner">
                    <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"><?php echo esc_html($slide_title_an_nhien); ?></h2>
                        <p class="subtitle"><?php echo esc_html($slide_sub_rain); ?></p>
                    </div>
                    <a href="#primary" class="roll-button button-slider btn-slider btn-product"><?php echo esc_html($slide_btn_text); ?></a>
                </div>
            </div>

            <div class="slide-item" style="background-image:url(<?php echo get_template_directory_uri() . $slide_img_3; ?>)">
                <div class="slide-inner">
                    <div class="contain animated fadeInRightBig text-slider">
                        <h2 class="maintitle"><?php echo esc_html($slide_title_an_nhien); ?></h2>
                        <p class="subtitle"><?php echo esc_html($slide_sub_new_date); ?></p>
                    </div>
                    <a href="#primary" class="roll-button button-slider btn-slider btn-product"><?php echo esc_html($slide_btn_text); ?></a>
                </div>
            </div>
        </div>
    </div>

    <?php if ( $text_slide ) : ?>
        <?php echo sydney_stop_text(); ?>
    <?php endif; ?>

    <?php
    }
}
endif;

function sydney_slider_button() {

    if ( !function_exists('pll_register_string') ) {
        $slider_button      = get_theme_mod('slider_button_text', 'Sản phẩm');
        $slider_button_url  = get_theme_mod('slider_button_url','#primary');
    } else {
        $slider_button      = pll__(get_theme_mod('slider_button_text', 'Sản phẩm'));
        $slider_button_url  = pll__(get_theme_mod('slider_button_url','#primary'));
    }

    if ($slider_button) {
        echo '<a href="' . esc_url($slider_button_url) . '" class="roll-button button-slider">' . esc_html($slider_button) . '</a>';
    }
}

function sydney_stop_text() {

    if ( !function_exists('pll_register_string') ) {
        $slider_title_1     = get_theme_mod('slider_title_1', 'Welcome to Sydney');
        $slider_subtitle_1  = get_theme_mod('slider_subtitle_1','Feel free to look around');
    } else {
        $slider_title_1     = pll__(get_theme_mod('slider_title_1', 'Welcome to Sydney'));
        $slider_subtitle_1  = pll__(get_theme_mod('slider_subtitle_1','Feel free to look around'));
    }

    ?>
    <div class="slide-inner text-slider-stopped">
        <div class="contain text-slider">
            <h2 class="maintitle"><?php echo esc_html($slider_title_1); ?></h2>
            <p class="subtitle"><?php echo esc_html($slider_subtitle_1); ?></p>
        </div>
        <?php sydney_slider_button(); ?>
    </div>
    <?php
}

