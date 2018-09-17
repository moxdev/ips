<?php
/**
 * Display the Global Estimate Callout.
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_estimate_callout' ) ) :
  function ips_estimate_callout() {
    if( function_exists( 'get_field' ) ) :
      $es_title = get_field( 'title', 'estimate-callout' );
      $es_subtitle = get_field( 'subtitle', 'estimate-callout' );
      $es_button_text = get_field( 'button_text', 'estimate-callout' );
      $es_button_page_link = get_field( 'button_page_link', 'estimate-callout' );

      if( $es_title || $es_subtitle ) : ?>

        <section class='estimate-callout'>
          <div class='estimate-title-wrapper'>
            <div class="estimate-title"><?php echo esc_html( $es_title ); ?></div>
            <div class='estimate-subtitle'><?php echo esc_html( $es_subtitle ); ?></div>
          </div>

          <div class='estimate-button-wrapper'>
            <a class="btn" href='<?php echo esc_url( $es_button_page_link ); ?>'><?php echo $es_button_text; ?></a><span class='decoration-line'></span>
          </div>

        </section>

      <?php endif;

    endif;

  }

endif;