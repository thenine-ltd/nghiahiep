<?php

/**
* WPBakery Norebro Accordion Inner shortcode custom style
*/

$_style_block = '';

if ( $heading_css ) {
	$_style_block .= '[id=\'' . $accordion_inner_uniqid . '\'] div.title h4{';
	$_style_block .= $heading_css;
	$_style_block .= '}';
}
if ( $heading_text_color ) {
	$_style_block .= '[id=\'' . $accordion_inner_uniqid . '\'] .content{';
	$_style_block .= 'color: ' . $heading_text_color;
	$_style_block .= '}';
}
if ( $head_fill_css ) {
	$_style_block .= '[id=\'' . $accordion_inner_uniqid . '\'] div.title{';
	$_style_block .= $head_fill_css;
	$_style_block .= '}';
}
if ( $icon_css ) {
	$_style_block .= '[id=\'' . $accordion_inner_uniqid . '\'] div.title .icon{';
	$_style_block .= $icon_css;
	$_style_block .= '}';
}
if ( $content_css ) {
	$_style_block .= '[id=\'' . $accordion_inner_uniqid . '\'] .content .wrap{';
	$_style_block .= $content_css;
	$_style_block .= '}';
}

if ( vc_mode() == 'page_editable' ) {
	echo '<style>' . $_style_block . '</style>';
} else {
	NorebroLayout::append_to_shortcodes_css_buffer( $_style_block );
}