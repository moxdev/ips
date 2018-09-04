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