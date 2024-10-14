<?php

/**
 * WPBakery Norebro Image shortcode
 */

add_shortcode( 'norebro_image', 'norebro_image_func' );

function norebro_image_func( $atts ) {
    if ( isset( $atts ) && is_array( $atts ) ) extract( $atts );

    // Default values, parsing and filtering
    $image_url = isset( $image_url ) ? NorebroExtraFilter::string( wp_get_attachment_url( NorebroExtraFilter::string( $image_url ) ) ) : false;
    $title = isset( $title ) ? NorebroExtraFilter::string( $title, 'attr', '' )  : '';
    $alignment = isset( $alignment ) ? NorebroExtraFilter::string( $alignment, 'attr', 'left' )  : 'left';
    //$float = isset( $float ) ? NorebroExtraFilter::string( $float, 'attr', 'left' )  : 'left';

    $appearance_effect = isset( $appearance_effect ) ? NorebroExtraFilter::string( $appearance_effect, 'attr', 'none' )  : 'none';
    $appearance_duration = isset( $appearance_duration ) ? NorebroExtraFilter::string( $appearance_duration, 'attr', false )  : false;
    $css_class = isset( $css_class ) ? ' ' . NorebroExtraFilter::string( $css_class, 'attr', '' ) : '';

    // Styling
    $image_uniqid = uniqid( 'norebro-custom-' );
    //$floating_css = 'float:' . $float . ';';

    // Assembling
    include( plugin_dir_path( __FILE__ ) . 'image__style.php' );
    ob_start();
    include( plugin_dir_path( __FILE__ ) . 'image__view.php' );
    return ob_get_clean();
}