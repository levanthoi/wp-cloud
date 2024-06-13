<?php
if (!defined('ABSPATH')) {
    exit;
}
?>

<form id="custom-search-form" role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>" style="position: relative;">
    <i class="fas fa-microphone" id="voice-search-button" style="position: absolute; top: 20px; left: 10px; cursor: pointer;"></i>
    <label class="screen-reader-text" for="woocommerce-product-search-field"><?php esc_html_e('Search for:', 'woocommerce'); ?></label>
    <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Tìm kiếm sản phẩm ..." value="<?php echo get_search_query(); ?>" name="s" style="padding-left: 30px;" />
    <button type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'woocommerce'); ?>" class="btn_search"><?php echo esc_html_x('Search', 'submit button', 'woocommerce'); ?></button>
    <input type="hidden" name="post_type" value="product" />
</form>