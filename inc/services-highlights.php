<?php
/**
 * Display the Services highlights onthe Services page.
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_services_highlights' ) ) :
  function ips_services_highlights() {

    if( have_rows('highlights') ): ?>

    <section id='services'>
      <ul>
        <?php while( have_rows('highlights') ): the_row();
        $link_text = get_sub_field('link_text');
        $link_page_url = get_sub_field('link_page_url');
        $service_img = get_sub_field('background_image'); ?>

        <li>
          <a class="service-link" href='<?php echo esc_url( $link_page_url ); ?>'>
            <span class='title'><?php echo esc_html( $link_text ); ?></span>
            <?php if( $service_img ) : ?>
              <img src="<?php echo esc_url( $service_img['sizes']['services-highlight-img'] ); ?>" alt="<?php echo esc_attr( $service_img['alt'] ); ?>" description="<?php echo esc_attr( $service_img['description'] ); ?>">
            <?php endif; ?>
          </a>

        </li>

        <?php endwhile; ?>

        <?php if( function_exists( 'get_field' ) ) :
          $es_title = get_field( 'title', 'estimate-callout' );
          $es_subtitle = get_field( 'subtitle', 'estimate-callout' );
          $es_button_text = get_field( 'button_text', 'estimate-callout' );
          $es_button_page_link = get_field( 'button_page_link', 'estimate-callout' );

          if( $es_title || $es_subtitle ) : ?>

            <li class='estimate-callout'>
              <div class='estimate-title-wrapper'>
                <span class="estimate-title"><?php echo esc_html( $es_title ); ?></span>
                <span class='estimate-subtitle'><?php echo esc_html( $es_subtitle ); ?></span>
              </div>

              <div class='estimate-button-wrapper'>
                <a class="btn" href='<?php echo esc_url( $es_button_page_link ); ?>'><?php echo $es_button_text; ?></a><span class='decoration-line'></span>
              </div>

            </li>

          <?php endif; ?>

        <?php endif; ?>

      </ul>

    </section>

    <?php endif;
  }

endif;