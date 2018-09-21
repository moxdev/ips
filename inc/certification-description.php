<?php
/**
 * Display the Certification Description on the Certification page.
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_certification_description' ) ) :
  function ips_certification_description() {

    if( have_rows('certification') ): ?>

    <section id='certification-description'>

      <?php while( have_rows('certification') ): the_row();
        $certification_image = get_sub_field('certification_image');
        $certification_description = get_sub_field('certification_description');

        if($certification_image): ?>
          <div class='certification-wrapper'>
            <div class='img-wrapper'>
              <img src="<?php echo esc_url( $certification_image['sizes']['cert-img'] ); ?>" alt="<?php echo esc_attr( $certification_image['alt'] ); ?>" description="<?php echo esc_attr( $certification_image['description'] ); ?>">
            </div>

            <div class='description-wrapper'>
              <?php echo $certification_description; ?>
            </div>
          </div>

        <?php endif; ?>


      <?php endwhile; ?>
    </section>

    <?php endif;

  }

endif;