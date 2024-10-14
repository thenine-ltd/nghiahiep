<?php

	$logo = NorebroSettings::get_logo( false );

	switch ( NorebroSettings::get_menu_style() ) {
		case 'simple':
			$logo = NorebroSettings::get_logo( true );
			break;
		case 'centered':
			$logo = NorebroSettings::get_logo( true );
			break;
		case 'split':
			$logo = NorebroSettings::get_logo( true );
			break;
	}
	$logo_as_image = is_array( $logo );
	$have_wpml = function_exists( 'icl_get_languages' );

	$menu_class = '';
	switch ( NorebroSettings::get_menu_style() ) {
		case 'simple': $menu_class .= ' simple'; break;
		case 'centered': $menu_class .= ' centered'; break;
		case 'split': $menu_class .= ' split'; break;
	}
	if ( NorebroSettings::side_panel_have_padding() ) {
		$menu_class .= ' with-panel-offset';
	}
	$header_have_social = have_rows( 'global_header_menu_social_links', 'option' );


	$overlay = NorebroSettings::get( 'overlay_menu_logo', 'global' );
?>

<div class="fullscreen-navigation<?php echo esc_attr( $menu_class ); ?>" id="fullscreen-mega-menu">
	<div class="site-branding">
		<p class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php if ( $overlay ) : ?>
				<?php if ( $overlay['global_overlay_logo'] || $overlay['global_overlay_logo_retina'] ) : ?>
					<span class="first-logo">
						<img src="<?php echo esc_url( ( $overlay['global_overlay_logo'] ) ? $overlay['global_overlay_logo'] : $overlay['global_overlay_logo_retina'] ); ?>"
							<?php if ( $overlay['global_overlay_logo_retina'] ) { echo ' srcset="' . esc_attr( $overlay['global_overlay_logo_retina'] ) . ' 2x"'; } ?>
							alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					</span>
				<?php endif; ?>
			<?php else : ?>
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			<?php endif; ?>
			</a>
		</p>
	</div>
	<div class="fullscreen-menu-wrap font-titles">
		<div id="fullscreen-mega-menu-wrap">
            <?php
            $page_menu_type = NorebroSettings::get( 'menu_type' );
            if ( in_array( $page_menu_type, array( 'inherit', NULL ) ) ) {
                if (NorebroSettings::get('hamburger_menu', 'global')) {
                    wp_nav_menu(array('menu' => NorebroSettings::get('hamburger_menu' , 'global'), 'menu_id' => 'secondary-menu'));
                } else {
                    if ( has_nav_menu( 'primary' ) ) {
                        wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'secondary-menu' ) );
                    } else {
                        echo '<span class="menu-not-assigned">' . sprintf( esc_html__( 'Please %1$s assign a menu %2$s to the primary menu location', 'norebro' ), '<a href="' . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">', '</a>' ) . '</span>';
                    }
                }
            } else {
                $norebro_menu = NorebroSettings::get('hamburger_menu');
                if(in_array($norebro_menu, array(NULL, 'inherit'))) {
                    if (NorebroSettings::get('hamburger_menu', 'global')) {
                        wp_nav_menu(array('menu' => NorebroSettings::get('hamburger_menu' , 'global'), 'menu_id' => 'secondary-menu'));
                    } else {
                        if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'secondary-menu' ) );
                        } else {
                            echo '<span class="menu-not-assigned">' . sprintf( esc_html__( 'Please %1$s assign a menu %2$s to the primary menu location', 'norebro' ), '<a href="' . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">', '</a>' ) . '</span>';
                        }
                    }
                } else {
                    wp_nav_menu(array('menu' => NorebroSettings::get('hamburger_menu'), 'menu_id' => 'secondary-menu'));
                }
            }
            ?>
		</div>
	</div>

	<?php if ( $have_wpml ) : ?>
	<div class="languages">
		<?php
		$languages = icl_get_languages('orderby=name');
		foreach( $languages as $language ) {
			$class = ( $language['active'] ) ? ' class="active"' : '';
			printf( '<a href="%1$s"%2$s><span>%3$s</span></a> ', $language['url'], $class,
				$language['language_code'] );
		}
		?>
	</div>
	<?php endif; ?>

	<div class="copyright">
		<span class="content">
			<?php echo wp_kses( NorebroSettings::get( 'footer_copyright_left', 'global' ), 'post' ); ?>
			<br>
			<?php echo wp_kses( NorebroSettings::get( 'footer_copyright_right', 'global' ), 'post' ); ?>
		</span>

		<?php if ( $header_have_social ) : ?>
		<div class="socialbar small outline">
			<?php get_template_part( 'parts/elements/social-networks' ); ?>
		</div>
		<?php endif; ?>
	</div>
	<div class="close" id="fullscreen-menu-close">
		<span class="ion-ios-close-empty"></span>
	</div>
</div>
