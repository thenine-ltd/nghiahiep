<?php

/**
* WPBakery Norebro Split Screen Left Column shortcode params
*/

vc_map( array(
	'name' => __( 'Split Screen Column', 'norebro-extra' ),
	'description' => __( 'Split screen column', 'norebro-extra' ),
	'base' => 'norebro_split_screen_column_left',
	'category' => __( 'Norebro', 'norebro-extra' ),
	'js_view' => 'VcColumnView',
	'show_settings_on_create' => false,
	'is_container' => true,
	'as_child' => array( 
		'only' => 'norebro_split_screen'
	),
	'params' => array(
		array(
			'type' => 'colorpicker',
			'group' => __( 'Styles', 'norebro-extra' ),
			'heading' => __( 'Background color', 'norebro-extra' ),
			'param_name' => 'bg_color',
		),
		array(
			'type' => 'attach_image',
			'group' => __( 'Styles', 'norebro-extra' ),
			'heading' => __( 'Background image', 'norebro-extra' ),
			'param_name' => 'bg_image',
		),
		array(
			'type' => 'dropdown',
			'group' => __( 'Styles', 'norebro-extra' ),
			'heading' => __( 'Background image size', 'norebro-extra' ),
			'param_name' => 'bg_size',
			'value' => array(
				__( 'Cover', 'norebro-extra' )   => 'cover',
				__( 'Contain', 'norebro-extra' ) => 'contain',
				__( 'No repeat', 'norebro-extra' )  => 'no-repeat',
				__( 'Repeat', 'norebro-extra' )  => 'repeat',
			),
		),
		array(
			'type' => 'textfield',
			'group' => __( 'Styles', 'norebro-extra' ),
			'heading' => __( 'Side paddings size', 'norebro-extra' ),
			'param_name' => 'side_paddings',
			'std' => '7%',
			'description' => __( 'You can change side paddings for each column. Use CSS-units value. Default is 7%.', 'norebro-extra' ),
		),
		array(
			'type' => 'textfield',
			'group' => __( 'Styles', 'norebro-extra' ),
			'heading' => __( 'Custom CSS class', 'norebro-extra' ),
			'param_name' => 'css_class',
			'description' => __( 'If you want to add styles to a specific unit, use this field to add CSS class.', 'norebro-extra' ),
		),
	)
) );



if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
	class WPBakeryShortCode_Norebro_Split_Screen_Column_Left extends WPBakeryShortCodesContainer {
		
		public function getColumnControls( $controls = 'full', $extended_css = '' ) {
			$controls_start = '<div class="vc_controls vc_controls-visible controls_column' . ( ! empty( $extended_css ) ? " {$extended_css}" : '' ) . '">';
			$controls_end = '</div>';

			if ( 'bottom-controls' === $extended_css ) {
				$control_title = sprintf( __( 'Append to this %s', 'norebro-extra' ), strtolower( $this->settings( 'name' ) ) );
			} else {
				$control_title = sprintf( __( 'Prepend to this %s', 'norebro-extra' ), strtolower( $this->settings( 'name' ) ) );
			}

			$controls_move = '';
			$controls_add = '<a class="vc_control column_add" data-vc-control="add" href="#" title="' . $control_title . '"><span class="vc_icon"></span></a>';
			$controls_edit = '<a class="vc_control column_edit" data-vc-control="edit" href="#" title="' . sprintf( __( 'Edit this %s', 'norebro-extra' ), strtolower( $this->settings( 'name' ) ) ) . '"><span class="vc_icon"></span></a>';
			$controls_clone = '';
			$controls_delete = '';
			$controls_full = $controls_move . $controls_add . $controls_edit . $controls_clone . $controls_delete;

			$editAccess = vc_user_access_check_shortcode_edit( $this->shortcode );
			$allAccess = vc_user_access_check_shortcode_all( $this->shortcode );

			if ( ! empty( $controls ) ) {
				if ( is_string( $controls ) ) {
					$controls = array( $controls );
				}
				$controls_string = $controls_start;
				foreach ( $controls as $control ) {
					$control_var = 'controls_' . $control;
					if ( ( $editAccess && 'edit' == $control ) || $allAccess ) {
						if ( isset( ${$control_var} ) ) {
							$controls_string .= ${$control_var};
						}
					}
				}

				return $controls_string . $controls_end;
			}

			if ( $allAccess ) {
				return $controls_start . $controls_full . $controls_end;
			} elseif ( $editAccess ) {
				return $controls_start . $controls_edit . $controls_end;
			}

			return $controls_start . $controls_end;
		}

		protected function outputTitle( $title ) {
			$icon = $this->settings( 'icon' );
			if ( filter_var( $icon, FILTER_VALIDATE_URL ) ) {
				$icon = '';
			}
			$params = array(
				'icon' => $icon,
				'is_container' => $this->settings( 'is_container' ),
				'title' => $title,
			);

			return '';//<h4 class="wpb_element_title"> ' . $this->getIcon( $params ) . '</h4>';
		}

		public function mainHtmlBlockParams( $width, $i ) {
			$sortable = ( vc_user_access_check_shortcode_all( $this->shortcode ) ? 'wpb_sortable' : $this->nonDraggableClass );

			return 'data-element_type="' . $this->settings['base'] . '" class="wpb_' . $this->settings['base'] . ' ' /*. $sortable*/ . ' wpb_content_holder vc_shortcodes_container"' . $this->customAdminBlockParams();
		}

	}
}