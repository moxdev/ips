<?php
/**
 * Template Name: Services-Child
 *
 * @package Indoor_Pollution_Solutions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class='main-column main-decorative-column'></div>
			<div class='main-wrapper'>

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'service' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
			<div class='main-column'></div>
		</main><!-- #main -->
		<?php ips_certifications_section(); ?>
	</div><!-- #primary -->

<?php

get_footer();
