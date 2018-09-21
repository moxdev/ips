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

          <div class='content-container'>

            <div class='services-container'>
              <span></span>
              <div class='services-list'>
                <?php echo $hero['services_list']; ?>
              </div>
            </div>

            <div class='callout-container'>

              <div class='title-container'>
                <div class='title'><?php echo esc_html( $hero['title'] ); ?></div>

                <div class='subtitle'><?php echo esc_html( $hero['subtitle'] ); ?></div>
              </div>

              <div class='button-container'>
                <a class="btn" href='<?php echo esc_url( $hero['button_page_link'] ); ?>'><?php echo esc_html( $hero['button_text'] ); ?></a>
                <span></span>
              </div>

            </div>

          </div>

        </section>
      <?php
    }
  }
endif;