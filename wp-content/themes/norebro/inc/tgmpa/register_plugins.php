<?php

function norebro_register_plugins() {
	$plugins = array(
		array(
			'name' => 'WPBakery Page Builder',
			'slug' => 'js_composer',
			'source' => 'https://plugins.clbthemes.com/js_composer.zip',
			'required' => true,
			'version' => '7.1',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'ACF PRO',
			'slug' => 'advanced-custom-fields-pro',
			'source' => 'https://plugins.clbthemes.com/advanced-custom-fields-pro.zip',
			'required' => true,
			'version' => '6.2.2',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
			'required' => true
		),
		array(
			'name' => 'Slider Revolution',
			'slug' => 'slider-revolution',
			'source' => 'https://plugins.clbthemes.com/slider-revolution.zip',
			'required' => true,
			'version' => '6.6.18',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Portfolio',
			'slug' => 'norebro-portfolio',
			'source' => 'https://plugins.clbthemes.com/norebro-portfolio-v105.zip',
			'required' => true,
			'version' => '1.0.5',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Extra',
			'slug' => 'norebro-extra',
			'source' => 'https://plugins.clbthemes.com/norebro-extra-v143.zip',
			'required' => true,
			'version' => '1.4.3',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Norebro Importer',
			'slug' => 'norebro-importer',
			'source' => 'https://plugins.clbthemes.com/norebro-importer-v124.zip',
			'required' => true,
			'version' => '1.2.4',
			'force_activation' => false,
			'force_deactivation' => false
		),
		array(
			'name' => 'Contact Form 7',
			'slug' => 'contact-form-7',
			'required' => false
		),
		array(
			'name' => 'Contact Form 7 MailChimp Extension',
			'slug' => 'contact-form-7-mailchimp-extension',
			'required' => false
		),
		array(
			'name' => 'Instagram Feed',
			'slug' => 'instagram-feed',
			'required' => false
		),
		array(
			'name' => 'Envato Market',
			'slug' => 'envato-market',
			'source' => 'http://envato.github.io/wp-envato-market/dist/envato-market.zip',
			'required' => false,
			'version' => '2.0.8',
			'force_activation' => false,
			'force_deactivation' => false
		),
	);

	$config = array(
		'domain' => 'norebro',
		'default_path' => '',
		'menu' => 'install-required-plugins',
		'has_notices' => true,
		'is_automatic' => false,
		'message' => ''
	);
	
	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'norebro_register_plugins' );