<?php
/**
 * Lost password reset form.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-reset-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_reset_password_form' );
?>

<div class="vc_row">	
	<div class="vc_col-md-12 myaccount-login-form">
		<form method="post" class="woocommerce-ResetPassword lost_reset_password">
			<p><?php echo apply_filters( 'woocommerce_reset_password_message', esc_html__( 'Enter a new password below.', 'norebro') ); ?></p>
			<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
				<label for="password_1"><?php esc_html_e( 'New password', 'norebro' ); ?> <span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_1" id="password_1" />
			</p>
			<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
				<label for="password_2"><?php esc_html_e( 'Re-enter new password', 'norebro' ); ?> <span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password_2" id="password_2" />
			</p>
			<input type="hidden" name="reset_key" value="<?php echo esc_attr( $args['key'] ); ?>" />
			<input type="hidden" name="reset_login" value="<?php echo esc_attr( $args['login'] ); ?>" />
			<div class="clear"></div>
			<?php do_action( 'woocommerce_resetpassword_form' ); ?>
			<p class="woocommerce-FormRow form-row">
				<input type="hidden" name="wc_reset_password" value="true" />
				<input type="submit" class="woocommerce-Button btn" value="<?php esc_attr_e( 'Save', 'norebro' ); ?>" />
			</p>
			<?php wp_nonce_field( 'reset_password' ); ?>
		</form>
	</div>
</div>
