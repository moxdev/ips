<?php
/**
 * Display Global ACF Felxible Content on default page template
 *
 * @package Indoor_Pollution_Solutions
 */

 if (! function_exists( 'ips_default_flexible_content' ) ) :
  function ips_default_flexible_content() {
    if( function_exists( 'get_field' ) ) {
      if( have_rows('default_flexible_sections') ):
        while ( have_rows('default_flexible_sections') ) : the_row();
          if( get_row_layout() == 'gallery_section' ):
            ips_flexible_gallery_section();
          elseif( get_row_layout() == 'company_values_section' ):
            // ips_flexible_company_values_section();
          endif;
        endwhile;
      endif;
    }
  }
endif;

 if (! function_exists( 'ips_flexible_gallery_section' ) ) :
  function ips_flexible_gallery_section() { ?>

    <section id="photo-gallery" class="acf-flex-content-area">
      <?php
      $imgs = get_sub_field('gallery_images');
      if( $imgs ) { ?>
        <ul class="gallery-list">

          <?php foreach($imgs as $img) { ?>
            <li>
              <a class="item" data-imagelightbox="gallery" data-ilb2-caption="<?php echo esc_attr( $img['caption'] ); ?>" href="<?php echo esc_attr( $img['url'] ); ?>">
                <img src="<?php echo esc_url( $img['sizes']['portfolio-img'] ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" description="<?php echo esc_attr( $img['description'] ); ?>">
              </a>
            </li>
          <?php } ?>
        </ul>

        <?php function gallery_js() { ?>
          <script>
            jQuery('a[data-imagelightbox="gallery"]').imageLightbox({
              activity: true,
              arrows: true,
              button: true,
              caption: true,
              enableKeyboard: true,
              overlay: true,
              quitOnEscKey: false
            });
          </script>
        <?php }
        add_action('wp_footer', 'gallery_js', 100);

        wp_enqueue_script( 'imglightbox-lib', get_template_directory_uri() . '/js/min/imagelightbox.min.js', array( 'jquery' ), NULL, TRUE );

        // wp_enqueue_script( 'ips-scroll-view', get_template_directory_uri() . '/js/scroll-view.js', array('lodash'), NULL, TRUE );
      }
      ?>
    </section>

  <?php
  }
endif;

