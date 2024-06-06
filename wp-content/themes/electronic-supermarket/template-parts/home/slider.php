<?php
/**
 * Template part for displaying slider section
 *
 * @package Electronic Supermarket
 * @subpackage electronic_supermarket
 */

?>
<?php $static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'electronic_supermarket_slider_arrows') != '') { ?>
  <section id="slider" class="mb-3">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $electronic_supermarket_slide_pages = array();
      for ( $count = 1; $count <= 4; $count++ ) {
        $mod = intval( get_theme_mod( 'electronic_supermarket_slider_page' . $count ));
        if ( 'page-none-selected' != $mod ) {
          $electronic_supermarket_slide_pages[] = $mod;
        }
      }
      if( !empty($electronic_supermarket_slide_pages) ) :
        $electronic_supermarket_args = array(
          'post_type' => 'page',
          'post__in' => $electronic_supermarket_slide_pages,
          'orderby' => 'post__in'
        );
        $electronic_supermarket_query = new WP_Query( $electronic_supermarket_args );
        if ( $electronic_supermarket_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $electronic_supermarket_query->have_posts() ) : $electronic_supermarket_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
          <?php if(has_post_thumbnail()){ ?>
               <img src="<?php the_post_thumbnail_url('full'); ?>"/> <?php }else {echo ('<img src="'.$static_image.'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <h2 class="mb-2"><?php the_title(); ?></h2>
              <div class="slidercontent ps-4">
                <p class="slider-saletext my-2"><?php
                  $slider_text = esc_html(get_theme_mod('electronic_supermarket_slider_text'));
                  $words = explode(' ', $slider_text);
                  $total_words = count($words);
                  $last_two_words = array_slice($words, -2); // Get the last two words

                  // Output all words with the last two words wrapped in a span with a class
                  foreach ($words as $key => $word) {
                      if ($key >= $total_words - 2) {
                          // If it's one of the last two words, add it to the HTML output without space
                          echo '<span class="orange-bg">' . $word . '</span>';
                      } else {
                          // Otherwise, just append the word to the HTML output with a space
                          echo $word . ' ';
                      }
                  }
                  ?></p>
                <p><?php echo esc_html( wp_trim_words( get_the_content(), 10 ) );?></p>
              </div>
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('Shop Now','electronic-supermarket'); ?>  <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <div class="carousel-navigation">
      <div class="carousel-dots">
        <div class="carousel-dot active"></div>
        <div class="carousel-dot"></div>
        <div class="carousel-dot"></div>
        <div class="carousel-dot"></div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</section>

<?php } ?>
