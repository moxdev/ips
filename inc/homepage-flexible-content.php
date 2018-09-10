<?php
/**
 * Display Hompage ACF Felxible Content
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_flexible_content' ) ) :
  function ips_flexible_content() {
    if( function_exists( 'get_field' ) ) {
      if( have_rows('flexible_sections') ):
        while ( have_rows('flexible_sections') ) : the_row();
          if( get_row_layout() == 'cta_section' ):
            ips_flexible_cta_section();
          elseif( get_row_layout() == 'company_values_section' ):
            ips_flexible_company_values_section();
          endif;
        endwhile;
      endif;
    }
  }
endif;

 if (! function_exists( 'ips_flexible_cta_section' ) ) :
  function ips_flexible_cta_section() {

    if( have_rows('call_to_actions') ): ?>

    <section id="call-to-action">
      <ul>
        <?php while( have_rows('call_to_actions') ): the_row();
          $title = get_sub_field('title');
          $desc = get_sub_field('description');
          $page_link = get_sub_field('page_link_url');
          $bk_img = get_sub_field('background_image'); ?>

        <li>
          <a href='<?php echo esc_url( $page_link ); ?>'>
            <span class='title'><?php echo esc_html( $title ); ?></span>
            <span class='desc'><?php echo esc_html( $desc ); ?></span>
          </a>
          <?php if( $bk_img ) : ?>
            <img src="<?php echo esc_url( $bk_img['sizes']['home-cta-img'] ); ?>" alt="<?php echo esc_attr( $bk_img['alt'] ); ?>" description="<?php echo esc_attr( $bk_img['description'] ); ?>">
          <?php endif; ?>
        </li>
        <?php endwhile; ?>

      </ul>

    </section>

    <?php endif;

  }
endif;

 if (! function_exists( 'ips_flexible_company_values_section' ) ) :
  function ips_flexible_company_values_section() {

    $value_1 = get_sub_field( 'values1' );
    $value_2 = get_sub_field( 'values2' );
    $value_3 = get_sub_field( 'values3' ); ?>

    <section id='company-values'>
      <ul class='values-list'>
        <li><span><?php echo esc_html( $value_1 ); ?></span></li>
        <li><span><?php echo esc_html( $value_2 ); ?></span></li>
        <li><span><?php echo esc_html( $value_3 ); ?></span></li>
      </ul>
    </section>

    <?php
  }
endif;