<?php
/*
	Plugin Name: Norebro Extra
	Plugin URI: http://norebro.clbthemes.com
	Description: Supercharge Norebro theme with pack of shortcodes, custom VC settings types and sidebar widgets
	Version: 1.4.3
	Author: Colabrio
	Author URI: http://norebro.clbthemes.com

	Copyright 2023 Colabrio (email: support@clbthemes.com)

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$norebro_extra_get_theme = wp_get_theme();

if ( in_array( $norebro_extra_get_theme->get( 'TextDomain' ), array( 'norebro', 'norebro-child' ) ) ) {

	// Dir path URL
	define( 'NOREBRO_EXTRA_DIR_URL', plugin_dir_url( __FILE__ ) );
	define( 'NOREBRO_EXTRA_DIR_PATH', plugin_dir_path( __FILE__ ) );

	// Language
	add_action( 'plugins_loaded', 'norebro_extra_load_plugin_textdomain' );
	function norebro_extra_load_plugin_textdomain() {
		load_plugin_textdomain( 'norebro-extra', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	// Styles and JS scripts
	function norebro_extra_admin_style_and_scripts() {
		wp_enqueue_style( 'norebro-extra-styles', plugin_dir_url( __FILE__ ) . 'assets/css/norebro-extra.css', [], '1.4.3' );
		wp_enqueue_style( 'norebro-admin-wpbakery-styles', plugin_dir_url( __FILE__ ) . 'assets/css/wpbakery.css', [], '1.4.3' );

		wp_enqueue_script( 'norebro-extra-scripts', plugin_dir_url( __FILE__ ) . 'assets/js/main.js', [], '1.4.3' );
	}
	add_action( 'admin_enqueue_scripts', 'norebro_extra_admin_style_and_scripts' );

	add_action( 'vc_before_init', 'norebro_extra_vc_init_plugin' );

	if ( function_exists( 'vc_set_shortcodes_templates_dir' ) ) {
		$vc_template_dir = plugin_dir_path( __FILE__ ) . 'vc_templates';
		vc_set_shortcodes_templates_dir( $vc_template_dir );
	}

	// REST API
	include_once plugin_dir_path( __FILE__ ) . 'rest_api/routes.php';

	// Norebro social shortcodes
	function norebro_share_woo_func( ) {
		global $post;

		$social_networks = NorebroSettings::get( 'woocommerce_sharing_networks', 'global' );

		if ( !$social_networks ) {
			return false;
		}

		$facebook_link = 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( get_permalink() );
		$twitter_link = 'https://twitter.com/intent/tweet?text=' . urlencode( $post->post_title ) . ',+' . rawurlencode( get_permalink() );
		$linkedin_link = 'https://www.linkedin.com/shareArticle?mini=true&url=' . rawurlencode( get_permalink() ) . '&title=' . urlencode( $post->post_title ) . '&source=' . urlencode( get_bloginfo( 'name' ) );
		$pinterest_link = 'http://pinterest.com/pin/create/button/?url=' . rawurlencode( get_permalink() ) . '&description=' . urlencode( $post->post_title );
		?>

		<div class="woocommerce-share">
			<div class="wrap">
				<?php _e( 'Share this product', 'norebro-extra' ); ?>:
				<div class="socialbar flat">
				<?php
					foreach ( $social_networks as $link ) {
						switch ( $link ) {
							case 'facebook':
								echo '<a href="' . $facebook_link . '"><i class="fab fa-facebook-f"></i></a>';
								break;
							case 'twitter':
								echo '<a href="' . $twitter_link . '"><i class="fab fa-x-twitter"></i></a>';
								break;
							case 'linkedin':
								echo '<a href="' . $linkedin_link . '"><i class="fab fa-linkedin"></i></a>';
								break;
							case 'pinterest':
								echo '<a href="' . $pinterest_link . '"><i class="fab fa-pinterest-p"></i></a>';
								break;
						}
					}
				?>
				</div>
			</div>
		</div>
		<?php return "";
	}
	add_shortcode( 'norebro_share_woo', 'norebro_share_woo_func' );

	function norebro_share_blog_func( ) {
		global $post;

		$social_networks = NorebroSettings::get( 'post_sharing_networks', 'global' );

		if ( !$social_networks ) {
			return false;
		}

		$facebook_link = 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( get_permalink() );
		$twitter_link = 'https://twitter.com/intent/tweet?text=' . urlencode( $post->post_title ) . ',+' . rawurlencode( get_permalink() );
		$linkedin_link = 'https://www.linkedin.com/shareArticle?mini=true&url=' . rawurlencode( get_permalink() ) . '&title=' . urlencode( $post->post_title ) . '&source=' . urlencode( get_bloginfo( 'name' ) );
		$pinterest_link = 'http://pinterest.com/pin/create/button/?url=' . rawurlencode( get_permalink() ) . '&description=' . urlencode( $post->post_title );
		?>

		<div class="share" data-blog-share="true">
			<div class="title"><?php echo esc_html__( 'Share story', 'norebro-extra' ); ?></div>
			<div class="socialbar small outline default">
			<?php
				foreach ( $social_networks as $link ) {
					switch ( $link ) {
						case 'facebook':
							echo '<a href="' . $facebook_link . '" class="facebook"><span class="fab fa-facebook"></span></a>';
							break;
						case 'twitter':
							echo '<a href="' . $twitter_link . '" class="twitter"><span class="fab fa-x-twitter"></span></a>';
							break;
						case 'linkedin':
							echo '<a href="' . $linkedin_link . '" class="linkedin"><span class="fab fa-linkedin"></span></a>';
							break;
						case 'pinterest':
							echo '<a href="' . $pinterest_link . '" class="pinterest"><span class="fab fa-pinterest-p"></span></a>';
							break;
					}
				}
			?>
			</div>
		</div>
		<?php return "";
	}
	add_shortcode( 'norebro_share_blog', 'norebro_share_blog_func' );

	function norebro_extra_vc_init_plugin() {
        $shortcodes_path = plugin_dir_path( __FILE__ ) . 'shortcodes/';
        $helpers_path 	= plugin_dir_path( __FILE__ ) . 'helpers/';
        $types_path 	= plugin_dir_path( __FILE__ ) . 'types/';

        // Helpers
        require_once $helpers_path . 'parsing.php';
        require_once $helpers_path . 'filtering.php';
        require_once $helpers_path . 'google_fonts.php';
        require_once $helpers_path . 'adobe_fonts.php';

        // VC param types
        require_once $types_path . 'input.php'; // Fully HTML allowed input
        require_once $types_path . 'button.php'; // Button settings
        require_once $types_path . 'columns.php'; // Columns settings
        require_once $types_path . 'colorpicker.php'; // Color picker settings
        require_once $types_path . 'choose_box.php'; // Radio select with images
        require_once $types_path . 'check.php'; // Pretty checkboxes
        require_once $types_path . 'divider.php'; // Simple titled divider
        require_once $types_path . 'typography.php'; // Powerfull typography module
        //require_once $types_path . 'icon_selector.php'; // Old extended icon selector
        require_once $types_path . 'icon_picker.php'; // Extended icon picker
        require_once $types_path . 'datetime.php'; // JQuery datetime selector
        require_once $types_path . 'portfolio_types.php'; // Dropdown with portfolio categories
        require_once $types_path . 'post_types.php'; // Dropdown with post categories
        require_once $types_path . 'woo_cats_types.php'; // Dropdown with WooCommerce categories

        // VC shortcodes
        $dh = opendir( $shortcodes_path );
        while ( false !== ( $filename = readdir( $dh ) ) ) {
          if ( substr( $filename, 0, 1) != '_' && strrpos( $filename, '.' ) === false ) {
            include_once $shortcodes_path . $filename . '/' . $filename . '.php';
            include_once $shortcodes_path . $filename . '/' . $filename . '__params.php';
          }
        }

        add_action('vc_after_init', function() {
        		// Custom setting for default row
				$useLinesData = array(
					'type' => 'norebro_check',
					'heading' => __( 'Use through lines under background?', 'norebro-extra' ),
					'param_name' => 'use_through_lines',
					'description' => __( '...', 'norebro-extra' ),
					'value' => array(
						__( 'Yes, use lines for this row', 'norebro-extra' ) => '0'
					)
				);
				vc_update_shortcode_param( 'vc_row', $useLinesData );

				$linesStyleData = array(
					'type' => 'dropdown',
					'heading' => __( 'Through lines background style', 'norebro-extra' ),
					'param_name' => 'through_lines_style',
					'description' => __( '...', 'norebro-extra' ),
					'value' => array(
						__( 'Dark', 'norebro-extra' ) => 'dark',
						__( 'Light', 'norebro-extra' ) => 'light'
					),
					'dependency' => array(
						'element' => 'use_through_lines',
						'value' => array(
							'1'
						)
					)
				);
				vc_update_shortcode_param( 'vc_row', $linesStyleData );

				$sideTitleData = array(
					'type' => 'textfield',
					'group' => __( 'Side Background Title', 'norebro-extra' ),
					'heading' => __( 'Background title text', 'norebro-extra' ),
					'param_name' => 'side_background_title',
					'description' => __( 'Recommended to use short headers.', 'norebro-extra' ),
				);
				vc_update_shortcode_param( 'vc_row', $sideTitleData );

				$sideTitleAlignmentData = array(
					'type' => 'dropdown',
					'group' => __( 'Side Background Title', 'norebro-extra' ),
					'heading' => __( 'Background title alignment', 'norebro-extra' ),
					'param_name' => 'side_background_title_alignment',
					'value' => array(
						__( 'Left', 'norebro-extra' ) => 'left',
						__( 'Right', 'norebro-extra' ) => 'right'
					)
				);
				vc_update_shortcode_param( 'vc_row', $sideTitleAlignmentData );

				$sideTitleColorData = array(
					'type' => 'norebro_colorpicker',
					'group' => __( 'Side Background Title', 'norebro-extra' ),
					'heading' => __( 'Background title color', 'norebro-extra' ),
					'param_name' => 'side_background_title_color',
					'description' => __( 'Recommended to use transparent or non-contrast colors.', 'norebro-extra' ),
				);
				vc_update_shortcode_param( 'vc_row', $sideTitleColorData );

				$sideTitleTypoData = array(
					'type' => 'norebro_typography',
					'group' => __( 'Side Background Title', 'norebro-extra' ),
					'heading' => __( 'Background title typography', 'norebro-extra' ),
					'param_name' => 'side_background_title_typo'
				);
				vc_update_shortcode_param( 'vc_row', $sideTitleTypoData );
			});
	}

	add_action( 'widgets_init', 'norebro_extra_widgets_init_plugin' );

	function norebro_extra_widgets_init_plugin() {
		$widgets_path = plugin_dir_path( __FILE__ ) . 'widgets/';
		require_once $widgets_path . 'widget.php';
		require_once $widgets_path . 'widget-about-author.php'; // About author. Multicontext widget
		require_once $widgets_path . 'widget-contacts.php'; // Contacts block widget
		require_once $widgets_path . 'widget-login.php'; // Login into Wordpress
		require_once $widgets_path . 'widget-logo.php'; // Show logo in sidebar
		require_once $widgets_path . 'widget-menu.php'; // Navigation widget
		require_once $widgets_path . 'widget-recent.php'; // Recent posts widget
		require_once $widgets_path . 'widget-socialbar-subscribe.php'; // ?
		require_once $widgets_path . 'widget-socialbar.php'; // Social bar icons with
		require_once $widgets_path . 'widget-subscribe.php'; // Subscribe by Feedburner feed
	}

	// ACF Norebro fields extention
	require plugin_dir_path( __FILE__ ) . 'acf_ext/acf-fields.php';

	// Custom admin bar theme menu
	add_action( 'admin_bar_menu', 'norebro_admin_bar_link', 40 );
	function norebro_admin_bar_link( $wp_admin_bar ) {
		$args = array(
			'id'     => 'theme-settings',
			'title'	=>	esc_html__( 'Theme Settings', 'norebro-extra' ),
		);
		$wp_admin_bar->add_node( $args );

		$args = array();
		array_push( $args, array(
			'id' => 'general',
			'title' => esc_html__( 'General', 'norebro-extra' ),
			'href' => admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general' ),
			'parent' => 'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'typography',
			'title'		=>	esc_html__( 'Typography', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-typography' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'menu',
			'title'		=>	esc_html__( 'Menu', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-menu' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'header-settings',
			'title'		=>	esc_html__( 'Header', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-header' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'page-settings',
			'title'		=>	esc_html__( 'Page', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-pages' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'footer-settings',
			'title'		=>	esc_html__( 'Footer', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-footer' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'blog-settings',
			'title'		=>	esc_html__( 'Blog', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-blog' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'portfolio-settings',
			'title'		=>	esc_html__( 'Portfolio', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-portfolio' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'shop-settings',
			'title'		=>	esc_html__( 'Shop', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-woocommerce' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'custom-settings',
			'title'		=>	esc_html__( 'Custom CSS', 'norebro' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-custom' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'other-settings',
			'title'		=>	esc_html__( 'Other', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-other' ),
			'parent'	=>	'theme-settings',
		));
		array_push( $args, array(
			'id'		=>	'backup-settings',
			'title'		=>	esc_html__( 'Backup', 'norebro-extra' ),
			'href'		=>	admin_url( 'admin.php?page=norebro_hub_settings&options_page=theme-general-backup' ),
			'parent'	=>	'theme-settings',
		));

		foreach( $args as $each_arg ) {
			$wp_admin_bar->add_node( $each_arg );
		}
	}

	if ( is_admin() ) {
		require_once plugin_dir_path( __FILE__ ) . 'hub/init.php';
	}

} else {
	add_action( 'admin_notices', 'norebro_extra_admin_notice' );

	function norebro_extra_admin_notice() {
?>
	<div class="notice notice-error">
		<p>
			<strong><?php esc_html_e( '"Norebro Extra" plugin is not supported by this theme', 'norebro-extra' ); ?></strong>
			<br>
			<?php esc_html_e( 'Please use this plugin with Norebro theme, or deactivate it.', 'norebro-extra' ); ?>
		</p>
	</div>
<?php
	}
}