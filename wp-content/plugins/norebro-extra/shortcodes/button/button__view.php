<?php

/**
* WPBakery Norebro Button shortcode view
*/

?>
<div class="norebro-button-sc btn-wrap<?php echo $wrap_class; ?>" 
	id="<?php echo esc_attr( $button_uniqid ); ?>"
	<?php if ( $appearance_effect != 'none' ) { echo ' data-aos="' . $appearance_effect . '"'; } ?> 
	<?php if ( $appearance_duration ) { echo ' data-aos-duration="' . intval( $appearance_duration ) . '"'; } ?>>

	<a href="<?php echo esc_url($link['url']); ?>"<?php if ( $link['blank'] ) echo ' target="_blank"'; ?> 
		class="btn <?php echo $button_class . $css_class; ?>">

		<?php if ( $icon_use && $icon_as_icon && $icon_position == 'left' ): ?>
			<span class="icon ion-left <?php echo $icon_as_icon; ?>"></span>
		<?php endif; ?>

		<?php if ( $icon_use && $icon_as_image && $icon_position === 'left' ): ?>
			<img class="icon ion-left" <?php echo $icon_image_atts; ?> />
		<?php endif; ?>

		<span class="text">
			<?php echo $link['caption']; ?>
		</span>

		<?php if ( $icon_use && $icon_as_icon && $icon_position == 'right' ): ?>
			<span class="icon ion-right <?php echo $icon_as_icon; ?>"></span>
		<?php endif; ?>

		<?php if ( $icon_use && $icon_as_image && $icon_position === 'right' ): ?>
			<img class="icon ion-right" <?php echo $icon_image_atts; ?> />
		<?php endif; ?>

		<?php if ( $layout == 'link') : ?>
			<span class="icon-arrow ion-ios-arrow-thin-right"></span>
		<?php endif; ?>
	</a>

</div>