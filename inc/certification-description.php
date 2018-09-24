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
<<<<<<< HEAD
              <img src="<?php echo esc_url( $certification_image['sizes']['cert-img'] ); ?>" alt="<?php echo esc_attr( $certification_image['alt'] ); ?>" description="<?php echo esc_attr( $certification_image['description'] ); ?>">
=======
              <img src="<?php echo esc_url( $certification_image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $certification_image['alt'] ); ?>" description="<?php echo esc_attr( $certification_image['description'] ); ?>">
>>>>>>> 488ca87592c1c29d758fb002f97ddb3d0dfd7541
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