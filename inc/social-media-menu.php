<?php
/**
 * Displays Social Media Menu
 *
 * @package Indoor_Pollution_Solutions
 */

if ( ! function_exists( 'ips_social_media_menu' ) ) :
	function ips_social_media_menu() {
		if( function_exists( 'acf_add_options_page' ) ) {
			$fb = get_field('facebook_url', 'social-media-channels');
			$tw = get_field('twitter_url', 'social-media-channels');
			$goo = get_field('google_plus_url', 'social-media-channels');
			$linked = get_field('linkedin_url', 'social-media-channels');
			$yt = get_field('youtube_url', 'social-media-channels');
			$pinterest = get_field('pinterest_url', 'social-media-channels');
			$insta = get_field('instagram_url', 'social-media-channels');
			if( $fb || $tw || $goo || $linked || $yt || $pinterest || $insta ) { ?>
				<div class="social-media">
					<ul>
						<?php if($fb): ?><li class="fb"><a href="<?php echo esc_url( $fb );?>" target="_blank" rel="noopener noreferrer">Find Us On Facebook</a></li><?php endif;
						if($tw): ?><li class="tw"><a href="<?php echo esc_url( $tw );?>" target="_blank" rel="noopener noreferrer">Follow Us On Twitter</a></li><?php endif;
						if($insta): ?><li class="insta"><a href="<?php echo esc_url( $insta );?>" target="_blank" rel="noopener noreferrer">Find Us On Instagram</a></li><?php endif;
						if($yt): ?><li class="yt"><a href="<?php echo esc_url( $yt );?>" target="_blank" rel="noopener noreferrer">Watch Us On YouTube</a></li><?php endif;
						if($goo): ?><li class="goo"><a href="<?php echo esc_url( $goo );?>" target="_blank" rel="noopener noreferrer">Find Us On Google+</a></li><?php endif;
						if($linked): ?><li class="linked"><a href="<?php echo esc_url( $linked );?>" target="_blank" rel="noopener noreferrer">Find Us On LinkedIn</a></li><?php endif;
						if($pinterest): ?><li class="pin"><a href="<?php echo esc_url( $pinterest );?>" target="_blank" rel="noopener noreferrer">See Us On Pinterest</a></li><?php endif; ?>
					</ul>
				</div>
			<?php }
		}
	}
endif;