<?php
/**
 * Main template file default fallback of our theme.
 * 
 * @package wpresto
 * @version 1.0
 */

get_header();
?>
<div class="container-fluid carousel-container">
  <div id="wp-resto-carousel-ctrl" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/resto_slider_v1.jpg' ); ?>" alt="Slider 1">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/resto_slider_v1.jpg' ); ?>" alt="Slider 2">
      </div>
      <div class="carousel-item">
      <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/resto_slider_v1.jpg' ); ?>" alt="Slider 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#wp-resto-carousel-ctrl" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#wp-resto-carousel-ctrl" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
</div>
<div id="flag" class="mx-auto">The Menu</div>

<?php get_footer();