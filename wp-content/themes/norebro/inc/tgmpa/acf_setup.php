<?php

add_action('acf/init', 'load_exported_fields');

add_filter('acf/settings/show_updates', '__return_false', 100);

function load_exported_fields(){
	require 'acf-php/bootstrap.php';
}

if ( function_exists( 'acf_add_options_page' ) && function_exists( 'acf_add_options_sub_page' ) ) {

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Site Identity', 'norebro' ),
		'menu_slug' => 'theme-general',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Theme Styling', 'norebro' ),
		'menu_slug' => 'theme-general-styling',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Typography', 'norebro' ),
		'menu_slug' => 'theme-general-typography',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Header Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Header', 'norebro' ),
		'menu_slug' => 'theme-general-header',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Header Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Menu', 'norebro' ),
		'menu_slug' => 'theme-general-menu',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Pages Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Page Settings', 'norebro' ),
		'menu_slug' => 'theme-general-pages',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Portfolio Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Portfolio', 'norebro' ),
		'menu_slug' => 'theme-general-portfolio',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Blog Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Blog', 'norebro' ),
		'menu_slug' => 'theme-general-blog',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme WooCommerce Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Shop', 'norebro' ),
		'menu_slug' => 'theme-general-woocommerce',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Footer Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Footer', 'norebro' ),
		'menu_slug' => 'theme-general-footer',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Custom CSS Settings', 'norebro' ),
		'menu_title' => esc_html__( 'Custom CSS', 'norebro' ),
		'menu_slug' => 'theme-general-custom',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Plugins', 'norebro' ),
		'menu_title' => esc_html__( 'Other', 'norebro' ),
		'menu_slug' => 'theme-general-other',
		'parent_slug' => '_norebro_fake'
	));

	acf_add_options_sub_page(array(
		'page_title' => esc_html__( 'Theme Backup', 'norebro' ),
		'menu_title' => esc_html__( 'Backup', 'norebro' ),
		'menu_slug' => 'theme-general-backup',
		'parent_slug' => '_norebro_fake'
	));
}

// Hide "inherit" option for global background types
add_filter('acf/load_field/name=background_type', function( $field ) {
	if ( function_exists( 'get_current_screen' ) ) {
		$screen = get_current_screen();
		if ( isset( $screen->base ) ) {
			if ( in_array( $screen->base, [
				'theme-settings_page_theme-general-pages',
				'theme-settings_page_theme-general-header',
				'theme-settings_page_theme-general-footer'
			] ) ) {
				unset($field['choices']['inherit']);
			}
		}
	}

	// Fallback for new code
	if ( !empty( $_GET['options_page'] ) ) {
		if ( in_array( $_GET['options_page'], [
			'theme-general-pages',
			'theme-general-header',
			'theme-general-footer'
		] ) ) {
			unset($field['choices']['inherit']);
		}
	}

	return $field;
});

// Remove post options from Page settings if not post page
add_filter('acf/get_fields', function( $fields, $parent ) {
	if ( ! function_exists( 'get_current_screen' ) ) {
		return $fields;
	}

	$screen = get_current_screen();
	if ( isset( $screen->base ) ) {
		if ( $screen->post_type == 'post' ) {
			return $fields;
		}

		foreach ( $fields as $key => $field ) {
			if ( $field['name'] == 'page_post_style_in_grid' ) unset( $fields[$key] );

			if ( $screen->base != 'theme-settings_page_theme-general-post' ) {
				if ( $field['name'] == 'header_title_subtitle_type' ) unset( $fields[$key] );
			}
		}
	}

	return $fields;
}, 20, 2);

// Header title additional "Featured image" option
add_filter('acf/prepare_field/name=page_header_title', function( $field ) {
	$field['sub_fields'][0]['choices']['featured'] = 'Featured image';
	return $field;
});

// Global post page headline additional "Featured image" option
add_filter('acf/prepare_field/name=global_post_page_header_title', function( $field ) {
	$field['sub_fields'][0]['choices']['featured'] = 'Featured image';
	return $field;
});

// Inherited slug field apply
add_filter('acf/prepare_field/type=clone', function( $field ) {
	$background_group_key = 'group_982e082a3bcfcf81b766eaa1ec2df4f11e0f5cd3';
	if ( $field['clone'] && $field['clone'][0] == $background_group_key ) {

		if ( isset( $field['inherited_slug'] ) && isset( $field['sub_fields'][0]['choices']['inherit'] ) ) {
			$field['sub_fields'][0]['choices']['inherit'] = $field['inherited_slug'];
		}
	}

	return $field;
});

// ACF fallbacks.
if ( ! is_admin() ) {

	if ( ! function_exists( 'have_rows' ) ) {
		function have_rows() { return false; }
	}

	if ( ! function_exists( 'the_row' ) ) {
		function the_row() { return false; }
	}
}


if ( function_exists( 'acf_add_local_field_group' ) && function_exists( 'wc_get_attribute_taxonomy_names' ) ) :

	$attribute_terms = wc_get_attribute_taxonomy_names();

	if ( $attribute_terms ) {
		$group_filter = array();
		foreach( $attribute_terms as $attribute_term ) {
			$group_filter[] = array( array(
				'param'    => 'taxonomy',
				'operator' => '==',
				'value'    => $attribute_term,
				'order_no' => 0,
				'group_no' => 0,
			) );
		}

		acf_add_local_field_group(array (
			'key' => 'norebroattrsetting',
			'title' => esc_html__('Attribute setting', 'norebro'),
			'fields' => array (
				array (
					'key' => 'field_norebroattrsettingselect',
					'label' => 'Mod',
					'name' => 'attribute_mod',
					'type' => 'select',
					'choices' => array(
						'default' 	=> 'Default',
						'color'		=> 'Color'
					),
					'allow_null' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
					'readonly' => 0,
					'disabled' => 0,
				),
				array(
					'key'	=> 'field_norebroattrsettingcolor',
					'label' => 'Choose color',
					'name' => 'color',
					'type' => 'color_picker',
					'conditional_logic'	=> array(
						array(
							array(
								'field' => 'field_norebroattrsettingselect',
								'operator' => '==',
								'value' => 'color')
							)
						)
				)
			),
			'location' => $group_filter,
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
		));
	}
endif;

// Refresh permalinks after options update
function norebro_acf_update_project_slug_value( $value, $post_id, $field ) {
	$value = NorebroHelper::slug_from_string( $value );
	if ( empty( $value ) ) {
		$value = 'project';
	}

	delete_option( 'rewrite_rules' );

	return $value;
}

add_filter('acf/update_value/key=field_59fb4ad44a1dtd336sl', 'norebro_acf_update_project_slug_value', 10, 3);

// Update with short param ids
add_filter( 'option__options_global_header_menu_social_links', function( $value ) {
	return 'ghmsl';
});
