<?php

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

// check if class already exists
if( ! class_exists( 'acf_field_norebro_code' ) ) :


class acf_field_norebro_code extends acf_field {

	function __construct( $settings ) {

		$this->name = 'norebro_code';
		/*
		*  label (string) Multiple words, can include spaces, visible when selecting a field type
		*/
		$this->label = esc_html__( 'Norebro code', 'norebro-extra' );
		/*
		*  category (string) basic | content | choice | relational | jquery | layout | CUSTOM GROUP NAME
		*/
		$this->category = 'basic';
		/*
		*  defaults (array) Array of default settings which are merged into the field object. These are used later in settings
		*/
		$this->defaults = array(
			'add_theme_inherited' => true
		);
		/*
		*  l10n (array) Array of strings that are used in JavaScript. This allows JS strings to be translated in PHP and loaded via:
		*  var message = acf._e('FIELD_NAME', 'error');
		*/
		
		$this->l10n = array(
			'error'	=> esc_html__( 'Error! Please enter a higher value', 'norebro-extra' ),
		);
		/*
		*  settings (array) Store plugin settings (url, path, version) as a reference for later use with assets
		*/
		$this->settings = $settings;

		// ----------------------------------------------------------------------------------------------------

		// do not delete!
    	parent::__construct();
    	
	}



	/*function render_field_settings( $field ) {
		acf_render_field_setting( $field, array(
			'label'			=> __( 'Add "Theme inherited" option?','acf' ),
			'instructions'	=> '',
			'name'			=> 'add_theme_inherited',
			'type'			=> 'true_false',
			'ui'			=> 1,
		));
	}*/
	
	
	function render_field( $field ) {

		/*
		echo '<pre>';
		print_r( $field );
		echo '</pre>';
		*/

		$text = acf_get_sub_array( $field, array('id', 'class', 'name', 'value') );
		$hidden = acf_get_sub_array( $field, array('name', 'value') );
		$uniqid = uniqid( 'norebro-code' );
?>

		<div class="norebro-acf-code-field-content" data-uniqid="<?php echo $uniqid; ?>">

			<!-- Hidden field -->
			<textarea name="<?php echo $hidden['name']; ?>" cols="30" rows="10"><?php echo $hidden['value']; ?></textarea>
			<script>
			(function() {
				jQuery(window).on('load', norebroInitCodeEditor);
				jQuery('body').on('click', 'ul.acf-tab-group > li a', norebroInitCodeEditor);

				function norebroInitCodeEditor() {
					setTimeout(function() {
						let $sourceEl = jQuery('[data-uniqid="<?php echo $uniqid; ?>"] textarea');
						if ($sourceEl.css('display') == 'none' || !$sourceEl.closest('.acf-field').is(':visible')) {
							return;
						}

						var editor = CodeMirror.fromTextArea( $sourceEl[0], {
							lineNumbers: true,
							mode: '<?php echo $field['language']; ?>'
						});

						editor.on('blur', function(){
							editor.save();
						});
					}, 40);

					return false;
				}
			})();
			</script>

		</div>

<?php
	}
	

	
	function input_admin_enqueue_scripts() {
		global $wp_scripts, $wp_styles;

		$url = $this->settings['url'];
		$version = $this->settings['version'];

		// wp_register_style( 'acf-input-norebro', "{$url}assets/css/input.css", array( 'acf-input' ), $version );
		wp_enqueue_style( 'acf-input-norebro' );
		
		wp_register_script( 'acf-input-norebro-code', "{$url}assets/js/input.js", array( 'acf-input' ), $version );

        $fonts_type = NorebroSettings::get('font_type', 'global');
        $inputVariables = array(
            'typoType' => $fonts_type
        );
        switch ($fonts_type) {
            case 'adobe_fonts':
                $inputVariables['typoLink'] = 'https://use.typekit.net/' . NorebroSettings::get('adobekit_url', 'global') . '.css';
                break;
            case 'google_fonts':
                $inputVariables['typoLink'] = 'https://fonts.googleapis.com/css?family=';
                break;
            default:
                $inputVariables['typoLink'] = 'https://fonts.googleapis.com/css?family=';
                break;
        }
        wp_localize_script('acf-input-norebro-code', 'inputVariables', $inputVariables);

		wp_enqueue_script('acf-input-norebro-code');

		wp_register_style( 'code-mirror', "{$url}assets/css/codemirror.css", array( 'acf-input' ), $version );
		wp_enqueue_style( 'code-mirror' );
		wp_register_script( 'code-mirror', "{$url}assets/js/codemirror.js", array( 'acf-input' ), $version );
		wp_enqueue_script('code-mirror');
		wp_register_script( 'code-mirror-css', "{$url}assets/mode/css/css.js", array( 'acf-input' ), $version );
		wp_enqueue_script('code-mirror-css');
		wp_register_script( 'code-mirror-javascript', "{$url}assets/mode/javascript/javascript.js", array( 'acf-input' ), $version );
		wp_enqueue_script('code-mirror-javascript');
	}
	
	
	
	function load_value( $value, $post_id, $field ) {
		return $value;
	}
}

// initialize
new acf_field_norebro_code( $this->settings );

// class_exists check
endif;

?>