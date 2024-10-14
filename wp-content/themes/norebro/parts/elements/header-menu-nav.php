<?php
	// Settings
	$menu_type = NorebroSettings::menu_type();
	$have_woocomerce = function_exists( 'WC' );
	$have_woocomerce_wl = function_exists( 'YITH_WCWL' );
	$have_wpml = function_exists( 'icl_get_languages' );
	$wpml_show_in_header = NorebroSettings::get( 'wpml_show_in_header', 'global' );
	$wpml_show_in_header = ( $wpml_show_in_header === false ) ? false : true;
	$header_have_social = have_rows( 'global_header_menu_social_links', 'option' );

	$mobile_social_position = NorebroSettings::get( 'header_mobile_social_position', 'global' );
	$mobile_cart_position = NorebroSettings::get( 'header_mobile_cart_position', 'global' );
	$mobile_lang_position = NorebroSettings::get( 'header_mobile_lang_position', 'global' );

	$dropdown_carets_visibility = NorebroSettings::get( 'header_dropdown_carets_visibility', 'global' );
	$mobile_menu_position = NorebroSettings::get( 'mobile_menu_position', 'global' );

	$wpml_type = NorebroSettings::get( 'wpml_switcher_type', 'global' );
	if ( is_null( $wpml_type ) ) {
		$wpml_type = 'inline';
	}

	$site_navigation_class = '';
	if ( $menu_type != 'full' ) { 
		$site_navigation_class .= ' hidden'; 
	}

	if ( $mobile_menu_position == 'right' ) {
		$site_navigation_class .= ' slide-right';
	}

	if ( $dropdown_carets_visibility == false ) {
		$site_navigation_class .= ' without-dropdown-carets';
	}
?>

<nav id="site-navigation" class="main-nav<?php echo esc_attr( $site_navigation_class ); ?>">
	<div class="close">
		<i class="icon ion-android-close"></i>
	</div>
	<div id="mega-menu-wrap">
        <?php
        $page_menu_type = NorebroSettings::get( 'menu_type' );
        if ( in_array( $page_menu_type, array( 'inherit', NULL ) ) ) {
            if ( NorebroSettings::get('extended_menu', 'global') ) {
                wp_nav_menu( array( 'menu' => NorebroSettings::get('extended_menu', 'global'), 'menu_id' => 'primary-menu' ) );
            } else {
                if ( has_nav_menu( 'primary' ) ) {
                    wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'secondary-menu' ) );
                } else {
                    echo '<span class="menu-not-assigned">' . sprintf( esc_html__( 'Please %1$s assign a menu %2$s to the primary menu location', 'norebro' ), '<a href="' . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">', '</a>' ) . '</span>';
                }
            }
        } else {
            $norebro_menu = NorebroSettings::get('extended_menu');
            if(in_array($norebro_menu, array(NULL, 'inherit'))) {
                if ( NorebroSettings::get('extended_menu', 'global') ) {
                    wp_nav_menu( array( 'menu' => NorebroSettings::get('extended_menu', 'global'), 'menu_id' => 'primary-menu' ) );
                } else {
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'secondary-menu' ) );
                    } else {
                        echo '<span class="menu-not-assigned">' . sprintf( esc_html__( 'Please %1$s assign a menu %2$s to the primary menu location', 'norebro' ), '<a href="' . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">', '</a>' ) . '</span>';
                    }
                }
            } else {
                wp_nav_menu( array( 'menu' => NorebroSettings::get('extended_menu'), 'menu_id' => 'primary-menu' ) );
            }
        }
        ?>
	</div>

	<ul class="phone-menu-middle font-titles">
		<?php if ( $mobile_lang_position == 'inside' && $wpml_type == 'dropdown' ) : ?>
			<li class="languages has-submenu">
				<a href="#">
				<?php 
					if ($have_wpml) {
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
						echo esc_html($curr_lang['translated_name']);
					}
				?>
				</a>
				<div class="submenu no-paddings">
					<ul class="sub-nav languages">
						<?php
							if ($have_wpml) {
								$languages = icl_get_languages('orderby=name');
								foreach( $languages as $language ) {
									$class = ( $language['active'] ) ? ' class="active"' : '';
									printf( '<li%s><a href="%s"><img src="%s" alt="%s"> %s</a></li>', $class, $language['url'],
										$language['country_flag_url'], $language['native_name'], $language['native_name'] );
								} 
							}
						?>
					</ul>
				</div>
			</li>
		<?php endif; ?>
		<?php if ( $have_woocomerce && $mobile_cart_position == 'inside' ) : ?>
			<li>
				<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="cart">
					<span class="icon">
						<svg version="1.1" viewBox="30 20 40 60" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="19px">
						<path d="M59.4,72.1H40.7c-4.1,0-7-2.6-7.1-6.1l-2.5-27c0-0.1,0-0.1,0-0.2c0-1.5,1.2-2.7,2.9-2.7h32.3c1.5,0,2.8,1.3,2.8,2.9  c0,0.1,0,0.1,0,0.2l-2.5,26.7C66.4,69.4,63.4,72.1,59.4,72.1z M35.1,40.1l2.4,25.6c0,0.1,0,0.1,0,0.2c0,1.5,1.6,2.2,3.1,2.2h18.7  c1.5,0,3.1-0.7,3.1-2.3c0-0.1,0-0.1,0-0.2l2.4-25.5H35.1z"/><path d="M58.4,40.1c-1.1,0-2-0.9-2-2v-2.6c0-3.8-2.6-6.7-6-6.7s-6,2.9-6,6.7v2.6c0,1.1-0.9,2-2,2s-2-0.9-2-2v-2.6  c0-6,4.4-10.7,10-10.7s10,4.7,10,10.7v2.6C60.4,39.2,59.5,40.1,58.4,40.1z"/></svg>
					</span>
					<?php esc_html_e( 'Cart', 'norebro' ); ?>
					(<span class="cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>)
				</a>
			</li>
		<?php endif; ?>
	</ul>

	<ul class="phone-menu-bottom">
		<?php if ( $have_wpml && $wpml_show_in_header ) : ?>
			<li class="lang font-titels">
				<?php
					$languages = icl_get_languages('');
					foreach( $languages as $language ) {
						$class = ( $language['active'] ) ? ' class="active"' : '';
						printf( '<a href="%s"%s><span>%s</span></a>', $language['url'], $class,
							$language['language_code'] );
					} 
				?>
			</li>
		<?php endif; ?>

		<?php if ( $header_have_social && $mobile_social_position == 'inside' ) : ?>
			<li class="socialbar small outline">
				<?php get_template_part( 'parts/elements/social-networks' ); ?>
			</li>
		<?php endif; ?>
	</ul>
</nav>