<?php
/**
 * Display Hompage Hero
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_home_hero' ) ) :
  function ips_home_hero() {
    if( function_exists( 'get_field' ) ) {
      $hero = get_field( 'home_hero' ); ?>
        <section class='hero'>
          <img src="<?php echo esc_url( $hero['background_image']['sizes']['home-hero'] ); ?>" alt="<?php echo esc_attr( $hero['background_image']['alt'] ); ?>" description="<?php echo esc_attr( $hero['background_image']['description'] ); ?>">
          <div class='services-container'>
            <?php echo $hero['services_list']; ?>
          </div>
          <div class='callout-container'>
            <div class='title'><?php echo esc_html( $hero['title'] ); ?></div>
            <div class='sub-title'><?php echo esc_html( $hero['subtitle'] ); ?></div>
            <a class="btn" href='<?php echo $hero['button_page_link']; ?>'><?php echo esc_html( $hero['button_text'] ); ?></a>
          </div>
        </section>
      <?php
    }
  }
endif;