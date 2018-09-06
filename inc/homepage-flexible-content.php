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
          elseif( get_row_layout() == 'certifications_section' ):
            ips_certifications_section();
          endif;
        endwhile;
      endif;
    }
  }
endif;

 if (! function_exists( 'ips_flexible_cta_section' ) ) :
  function ips_flexible_cta_section() {

    if( have_rows('call_to_actions') ): ?>

    <section class="call-to-action">
      <?php while( have_rows('call_to_actions') ): the_row();
        $title = get_sub_field('title');
        $desc = get_sub_field('description');
        $page_link = get_sub_field('page_link_url');
        $bk_img = get_sub_field('background_image'); ?>

      <div class="inner-wrapper">
        <a href='<?php echo esc_url( $page_link ); ?>'>

          <?php if( $bk_img ) : ?>
            <img src="<?php echo esc_url( $bk_img['sizes']['home-cta-img'] ); ?>" alt="<?php echo esc_attr( $bk_img['alt'] ); ?>" description="<?php echo esc_attr( $bk_img['description'] ); ?>">
          <?php endif; ?>

          <?php if( $title || $desc ) : ?>

            <div class='title-container'>

              <span class='title'><?php echo esc_html( $title ); ?></span>
              <span class='desc'><?php echo esc_html( $desc ); ?></span>

            </div>

          <?php endif; ?>

        </a>
      </div>
      <?php endwhile; ?>
    </section>

    <?php endif;

  }
endif;

 if (! function_exists( 'ips_flexible_company_values_section' ) ) :
  function ips_flexible_company_values_section() {

    $value_1 = get_sub_field( 'values1' );
    $value_2 = get_sub_field( 'values2' );
    $value_3 = get_sub_field( 'values3' ); ?>

    <section class='company-values'>
      <ul class='values-list'>
        <li><?php echo esc_html( $value_1 ); ?></li>
        <li><?php echo esc_html( $value_2 ); ?></li>
        <li><?php echo esc_html( $value_3 ); ?></li>
      </ul>
    </section>

    <?php
  }
endif;

 if (! function_exists( 'ips_certifications_section' ) ) :
  function ips_certifications_section() {

    $cert_section_title = get_sub_field('certification_section_title');
    $cert_page_link = get_sub_field('certification_page_link_url'); ?>

    <section class='certifications'>

      <?php if($cert_section_title): ?>

      <h2><?php echo esc_html( $cert_section_title ); ?></h2>

      <?php endif; ?>

      <?php if( have_rows('certifications') ): ?>

      <div class="certifications">

        <?php while( have_rows('certifications') ): the_row();
          $cert_img = get_sub_field('certification_image'); ?>

        <div class="inner-wrapper">
          <a href='<?php echo esc_url( $cert_page_link ); ?>'>

            <?php if( $cert_img ) : ?>
              <img src="<?php echo esc_url( $cert_img['sizes']['home-cert-img'] ); ?>" alt="<?php echo esc_attr( $cert_img['alt'] ); ?>" description="<?php echo esc_attr( $cert_img['description'] ); ?>">

            <?php endif; ?>

          </a>
        </div>
        <?php endwhile; ?>
      </div>

    </section>

    <?php endif;
  }
endif;