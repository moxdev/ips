<?php
/**
 * Display the Certifications Section on every page.
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_certifications_section' ) ) :
  function ips_certifications_section() {

    if( have_rows('certifications', 'certifications') ):

    $cert_section_title = get_field('certification_section_title', 'certifications');
    $cert_page_link = get_field('certification_page_link_url', 'certifications'); ?>

      <section id='certifications'>
        <?php if($cert_section_title): ?>

          <h2><?php echo esc_html( $cert_section_title ); ?></h2>

        <?php endif; ?>

          <ul>

            <?php while( have_rows('certifications', 'certifications') ): the_row();
              $cert_img = get_sub_field('certification_image', 'certifications'); ?>

                <li>
                  <a href='<?php echo esc_url( $cert_page_link ); ?>'>

                    <?php if( $cert_img ) : ?>

                      <img src="<?php echo esc_url( $cert_img['sizes']['home-cert-img'] ); ?>" alt="<?php echo esc_attr( $cert_img['alt'] ); ?>" description="<?php echo esc_attr( $cert_img['description'] ); ?>">

                    <?php endif; ?>

                  </a>
                </li>

            <?php endwhile; ?>

          </ul>
      </section>

    <?php endif;

  }

endif;