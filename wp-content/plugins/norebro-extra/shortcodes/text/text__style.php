<?php

/**
* WPBakery Norebro Text shortcode custom style
*/

$_style_block = '';

if ( $text_css ) {
	$_style_block .= '#' . $text_uniqid . ',#' . $text_uniqid . ' > *{';
	$_style_block .= $text_css;
	$_style_block .= '}';
}

NorebroLayout::append_to_shortcodes_css_buffer( $_style_block );