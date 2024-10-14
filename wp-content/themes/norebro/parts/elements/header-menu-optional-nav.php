<?php
	// Settings
	$header_style = NorebroSettings::header_menu_style();

	$show_search = ! NorebroSettings::get( 'header_hide_search', 'global' );
	$aligment_class = '';
	if ( $header_style == 'style4' ) {
		$show_search = false;
		$aligment_class = ' right';
	}
	if ( $header_style == 'style6' || $header_style == 'style5' ) {
		$show_search = false;
	}

	$have_woocomerce = function_exists( 'WC' );
	$have_woocomerce_wl = function_exists( 'YITH_WCWL' );
	$have_wpml = function_exists( 'icl_get_languages' );
	$wpml_show_in_header = NorebroSettings::wpml_menu_item_is_displayed();
	$cart_visible = NorebroSettings::get( 'woocommerce_cart_icon', 'global' );
	$mobile_social_position = NorebroSettings::get( 'header_mobile_social_position', 'global' );
	$mobile_cart_position = NorebroSettings::get( 'header_mobile_cart_position', 'global' );
	$mobile_lang_position = NorebroSettings::get( 'header_mobile_lang_position', 'global' );

	$wpml_type = NorebroSettings::get( 'wpml_switcher_type', 'global' );
	if ( is_null( $wpml_type ) ) {
		$wpml_type = 'inline';
	}

	$header_have_social = have_rows( 'global_header_menu_social_links', 'option' );
?>

<?php if ( $show_search || ( $have_wpml && $wpml_show_in_header ) || $have_woocomerce || $have_woocomerce_wl || $header_have_social ) : ?>

<ul class="menu-other<?php echo esc_attr( $aligment_class ); ?>">

	<?php if ( $header_style != 'style4' ) : ?>
	<?php if ( $have_woocomerce ) : ?>
		<?php if ( $cart_visible !== false ) : ?>
		<li>
			<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart<?php if ( $mobile_cart_position == 'inside' ) { echo ' inside'; } ?>">
				<span class="icon">
					<svg version="1.1" viewBox="30 20 40 60" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="19px">
					<path d="M59.4,72.1H40.7c-4.1,0-7-2.6-7.1-6.1l-2.5-27c0-0.1,0-0.1,0-0.2c0-1.5,1.2-2.7,2.9-2.7h32.3c1.5,0,2.8,1.3,2.8,2.9  c0,0.1,0,0.1,0,0.2l-2.5,26.7C66.4,69.4,63.4,72.1,59.4,72.1z M35.1,40.1l2.4,25.6c0,0.1,0,0.1,0,0.2c0,1.5,1.6,2.2,3.1,2.2h18.7  c1.5,0,3.1-0.7,3.1-2.3c0-0.1,0-0.1,0-0.2l2.4-25.5H35.1z"/><path d="M58.4,40.1c-1.1,0-2-0.9-2-2v-2.6c0-3.8-2.6-6.7-6-6.7s-6,2.9-6,6.7v2.6c0,1.1-0.9,2-2,2s-2-0.9-2-2v-2.6  c0-6,4.4-10.7,10-10.7s10,4.7,10,10.7v2.6C60.4,39.2,59.5,40.1,58.4,40.1z"/></svg>
				</span>
				<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
			</a>
			<div class="submenu submenu_cart <?php if ( ! WC()->cart->is_empty() ) echo 'cart'; ?>">
				<div class="widget_shopping_cart_content">
					<?php woocommerce_mini_cart(); ?>
				</div>
			</div>
		</li>
		<?php endif; ?>

		<?php if ( $have_woocomerce_wl ) : ?>
			<li>
				<a href="<?php echo esc_url( YITH_WCWL()->get_wishlist_url( 'user' . '/' . get_current_user_id() ) ); ?>" class="wishlist">
					<span class="icon ion-android-favorite-outline"></span>
				</a>
			</li>
		<?php endif; ?>
	<?php endif; ?>
	<?php endif; ?>

	<?php if ( $have_wpml && $wpml_show_in_header ) : ?>
		<li class="languages<?php if ( $mobile_lang_position == 'inside' ) { echo ' inside'; } ?>">
		<?php if ( $wpml_type == 'dropdown' ) : ?>
			<a href="#">
			<?php
				$languages = icl_get_languages('skip_missing=1');
				$curr_lang = array();
				if ( !empty( $languages ) ) {
					foreach( $languages as $language ) {
						if( !empty( $language['active'] ) ) {
							$curr_lang = $language; // This will contain current language info.
							break;
						}
					}
				}
				echo '<img src="' . $curr_lang['country_flag_url'] . '" alt="'.$curr_lang['translated_name'].'" class="icon">';
				echo esc_attr($curr_lang['translated_name']);
			?>
			</a>
			<div class="submenu no-paddings">
				<ul class="sub-nav languages">
					<?php
						$languages = icl_get_languages('orderby=name');
						foreach( $languages as $language ) {
							$class = ( $language['active'] ) ? ' class="active"' : '';
							printf( '<li%s><a href="%s"><img src="%s" alt="%s"> %s</a></li>', $class, $language['url'],
								$language['country_flag_url'], $language['native_name'], $language['native_name'] );
						}
					?>
				</ul>
			</div>
		<?php else: ?>
		<?php
			$languages = icl_get_languages('');
			foreach( $languages as $language ) {
				$class = ( $language['active'] ) ? ' class="active"' : '';
				printf( '<a href="%s"%s><span>%s</span></a>', $language['url'], $class,
					$language['language_code'] );
			}
		?>
		<?php endif; ?>
		</li>
	<?php endif; ?>

	<?php if ( $header_have_social ) : ?>
		<li class="social<?php if ( $mobile_social_position == 'inside' ) { echo ' inside'; } ?>">
			<?php get_template_part( 'parts/elements/social-networks' ); ?>
		</li>
	<?php endif; ?>

	<?php if ( $show_search ) : ?>
		<li class="search">
			<a data-nav-search="true">
				<span class="icon ion-android-search"></span>
				<?php if ( $header_style == 'style6' ) { esc_html_e( 'Search', 'norebro' ); } ?>
			</a>
		</li>
	<?php endif; ?>
</ul>

<?php endif; ?>

<div class="hamburger-menu" id="hamburger-menu">
	<a class="hamburger" aria-controls="site-navigation" aria-expanded="false"></a>
</div>
