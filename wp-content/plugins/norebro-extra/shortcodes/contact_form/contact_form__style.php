<?php

/**
* WPBakery Norebro Contact Form shortcode custom style
*/

$_style_block = '';

if ( $fields_css ) {
	$_style_block .= '#' . $contact_form_uniqid . ' input:not([type=\'submit\']),';
	$_style_block .= '#' . $contact_form_uniqid . ' textarea,';
	$_style_block .= '#' . $contact_form_uniqid . ' select {';
	$_style_block .= $fields_css;
	$_style_block .= '}';
}
if ( $fields_placeholder_css ) {
	$_style_block .= '#' . $contact_form_uniqid . ' input::-webkit-input-placeholder,';
	$_style_block .= '#' . $contact_form_uniqid . ' textarea::-webkit-input-placeholder{';
	$_style_block .= $fields_placeholder_css;
	$_style_block .= '}';
	$_style_block .= '#' . $contact_form_uniqid . ' input::-moz-input-placeholder,';
	$_style_block .= '#' . $contact_form_uniqid . ' textarea::-moz-input-placeholder{';
	$_style_block .= $fields_placeholder_css;
	$_style_block .= '}';
	$_style_block .= '#' . $contact_form_uniqid . ' input::-ms-input-placeholder,';
	$_style_block .= '#' . $contact_form_uniqid . ' textarea::-ms-input-placeholder{';
	$_style_block .= $fields_placeholder_css;
	$_style_block .= '}';
	$_style_block .= '#' . $contact_form_uniqid . ' input::-moz-placeholder,';
	$_style_block .= '#' . $contact_form_uniqid . ' textarea::-moz-placeholder{';
	$_style_block .= $fields_placeholder_css;
	$_style_block .= '}';
}
if ( $fields_focus_css ) {
	$_style_block .= '#' . $contact_form_uniqid . ' input:focus,';
	$_style_block .= '#' . $contact_form_uniqid . ' .focus.active,';
	$_style_block .= '#' . $contact_form_uniqid . ' textarea:focus{';
	$_style_block .= $fields_focus_css;
	$_style_block .= '}';
}
if ( isset( $button_css['css'] ) && $button_css['css'] ) {
	$_style_block .= '#' . $contact_form_uniqid . ' button.btn{';
	$_style_block .= $button_css['css'];
	$_style_block .= '}';
}
if ( isset( $button_css['hover-css'] ) && $button_css['hover-css'] ) {
	$_style_block .= '#' . $contact_form_uniqid . ' button.btn:hover{';
	$_style_block .= $button_css['hover-css'];
	$_style_block .= '}';
}
if ( $label_css ) {
	$_style_block .= '#' . $contact_form_uniqid . ' label{';
	$_style_block .= $label_css;
	$_style_block .= '}';
}
if ( $button_margin_css ) {
	$_style_block .= '#' . $contact_form_uniqid . ' .btn{';
	$_style_block .= $button_margin_css;
	$_style_block .= '}';
}
if ( $form_margin_css ) {
	$_style_block .= '#' . $contact_form_uniqid . '.contact-form form{';
	$_style_block .= $form_margin_css;
	$_style_block .= '}';
}

NorebroLayout::append_to_shortcodes_css_buffer( $_style_block );