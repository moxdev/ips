<?php
/**
 * Display the Services highlights onthe Services page.
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_services_highlights' ) ) :
  function ips_services_highlights() {

    if( have_rows('highlights') ): ?>

    <section class='services'>

      <?php while( have_rows('highlights') ): the_row();

      $link_text = get_sub_field('link_text');
      $link_page_url = get_sub_field('link_page_url');
      $service_img = get_sub_field('background_image'); ?>

      <div class="inner-wrapper">
        <a href='<?php echo esc_url( $link_page_url ); ?>'>

          <?php if( $service_img ) : ?>
            <img src="<?php echo esc_url( $service_img['sizes']['home-cta-img'] ); ?>" alt="<?php echo esc_attr( $service_img['alt'] ); ?>" description="<?php echo esc_attr( $service_img['description'] ); ?>">
          <?php endif; ?>

          <?php if( $link_text ) : ?>

            <span class='title'><?php echo esc_html( $link_text ); ?></span>

          <?php endif; ?>

        </a>
      </div>

      <?php endwhile; ?>

      <?php if( function_exists( 'get_field' ) ) :
        $title = get_field( 'title', 'estimate-callout' );
        $subtitle = get_field( 'subtitle', 'estimate-callout' );
        $button_text = get_field( 'button_text', 'estimate-callout' );
        $button_page_link = get_field( 'button_page_link', 'estimate-callout' ); ?>

        <div class='inner-wrapper estimate-callout'>

          <span class="estimate-title"><?php echo esc_html( $title ); ?></span>
          <span class='subtitle'><?php echo esc_html( $subtitle ); ?></span>
          <a class="btn" href='<?php echo esc_url( $button_page_link ); ?>'><?php echo $button_text; ?></a>

        </div>

      <?php endif; ?>

    </section>

    <?php endif;
  }

endif;