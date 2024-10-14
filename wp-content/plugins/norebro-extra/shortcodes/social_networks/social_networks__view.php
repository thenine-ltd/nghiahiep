<?php

/**
* WPBakery Norebro Social Networks shortcode view
*/

?>
<div class="norebro-socialbar-sc socialbar <?php echo $socialbar_class . $css_class; ?>" 
	id="<?php echo esc_attr( $social_bar_uniqid ); ?>" 
	<?php if ( $appearance_effect != 'none' ) { echo ' data-aos="' . $appearance_effect . '"'; } ?> 
	<?php if ( $appearance_duration ) { echo ' data-aos-duration="' . $appearance_duration . '"'; } ?>>

	<?php if ( $twitter_link ) : ?>
		<a href="<?php echo $twitter_link; ?>" target="_blank" class="twitter<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-x-twitter"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Twitter', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $facebook_link ) : ?>
		<a href="<?php echo $facebook_link; ?>" target="_blank" class="facebook<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-facebook"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Facebook', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $instagram_link ) : ?>
		<a href="<?php echo $instagram_link; ?>" target="_blank" class="instagram<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-instagram"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Instagram', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $dribbble_link ) : ?>
		<a href="<?php echo $dribbble_link; ?>" target="_blank" class="dribbble<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-dribbble"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Dribbble', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $linkedin_link ) : ?>
		<a href="<?php echo $linkedin_link; ?>" target="_blank" class="linkedin<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-linkedin"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'LinkedIn', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $pinterest_link ) : ?>
		<a href="<?php echo $pinterest_link; ?>" target="_blank" class="pinterest<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-pinterest-p"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Pinterest', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $github_link ) : ?>
		<a href="<?php echo $github_link; ?>" target="_blank" class="github<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-github"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'GitHub', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $dropbox_link ) : ?>
		<a href="<?php echo $dropbox_link; ?>" target="_blank" class="dropbox<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-dropbox"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Dropbox', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $youtube_link ) : ?>
		<a href="<?php echo $youtube_link; ?>" target="_blank" class="youtube<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-youtube"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Youtube', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $vimeo_link ) : ?>
		<a href="<?php echo $vimeo_link; ?>" target="_blank" class="vimeo<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-vimeo"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Vimeo', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $behance_link ) : ?>
		<a href="<?php echo $behance_link; ?>" target="_blank" class="behance<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-behance"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Behance', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $tumblr_link ) : ?>
		<a href="<?php echo $tumblr_link; ?>" target="_blank" class="tumblr<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-tumblr"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Tumblr', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $flickr_link ) : ?>
		<a href="<?php echo $flickr_link; ?>" target="_blank" class="flickr<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-flickr"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Flickr', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $reddit_link ) : ?>
		<a href="<?php echo $reddit_link; ?>" target="_blank" class="reddit<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-reddit-alien"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Reddit', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $snapchat_link ) : ?>
		<a href="<?php echo $snapchat_link; ?>" target="_blank" class="snapchat<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-snapchat-ghost"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Snapchat', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $whatsapp_link ) : ?>
		<a href="<?php echo $whatsapp_link; ?>" target="_blank" class="whatsapp<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-whatsapp"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'WhatsApp', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $quora_link ) : ?>
		<a href="<?php echo $quora_link; ?>" target="_blank" class="quora<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-quora"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Quora', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $vine_link ) : ?>
		<a href="<?php echo $vine_link; ?>" target="_blank" class="vine<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-vine"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Vine', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>

	<?php if ( $digg_link ) : ?>
		<a href="<?php echo $digg_link; ?>" target="_blank" class="digg<?php echo $link_class; ?>">
			<?php if ( $show_icon ) : ?>
			<i class="fab fa-digg"></i>
			<?php endif; ?>
			<?php if ( $show_text ) : ?>
			<span class="social-text"><?php esc_html_e( 'Digg', 'norebro-extra' ); ?></span>
			<?php endif; ?>
		</a>
	<?php endif; ?>
</div>