<?php
/**
 * Template part for displaying slider banner
 *
 * @package Electronic Supermarket
 * @subpackage electronic_supermarket
 */

?>

<div class="slide-banner">
  <?php if( get_theme_mod( 'electronic_supermarket_discount_sale_img1') != '') { ?>
    <div class="banner-1 mb-3">
      <div class="product-img">
        <img src="<?php echo esc_url(get_theme_mod('electronic_supermarket_discount_sale_img1')); ?>" alt="" />
        <div class="product-content first">
          <p class="toppro-text text-uppercase m-0"><?php echo esc_html(get_theme_mod('electronic_supermarket_topproduct_title1')); ?></p>
          <h2 class="discount-text m-0 text-uppercase"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('electronic_supermarket_product_sale_discount_title1')); ?></a></h2>
          <p class="toppro-content"><?php echo esc_html(get_theme_mod('electronic_supermarket_topproduct_content')); ?></p>
          <div class="product-btn mt-3" data-wow-duration="2s">
            <?php if(get_theme_mod('electronic_supermarket_product_btn_text1') != ''){ ?>
              <a href="<?php echo esc_url(get_theme_mod('electronic_supermarket_product_btn_link1')); ?>"><?php echo esc_html(get_theme_mod('electronic_supermarket_product_btn_text1')); ?><i class="fas fa-arrow-right ps-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('electronic_supermarket_product_btn_text1')); ?></span></a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if( get_theme_mod( 'electronic_supermarket_discount_sale_img2') != '') { ?>
    <div class="banner-2">
      <div class="product-img">
        <img src="<?php echo esc_url(get_theme_mod('electronic_supermarket_discount_sale_img2')); ?>" alt="" />
        <div class="product-content second">
          <p class="toppro-text text-capitalize m-0"><?php echo esc_html(get_theme_mod('electronic_supermarket_topproduct_title2')); ?></p>
          <h2 class="discount-text m-0 text-capitalize"><a href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('electronic_supermarket_product_sale_discount_title2')); ?></a></h2>
          <div class="product-btn mt-3" data-wow-duration="2s">
            <?php if(get_theme_mod('electronic_supermarket_product_btn_text2') != ''){ ?>
              <a href="<?php echo esc_url(get_theme_mod('electronic_supermarket_product_btn_link2')); ?>"><?php echo esc_html(get_theme_mod('electronic_supermarket_product_btn_text2')); ?><i class="fas fa-arrow-right ps-2"></i><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('electronic_supermarket_product_btn_text2')); ?></span></a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>