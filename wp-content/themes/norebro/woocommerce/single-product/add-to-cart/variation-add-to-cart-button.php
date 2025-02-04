<?php
/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<div class="variation-add-to-cart-wrap">
	<div class="woocommerce-variation-add-to-cart variations_button woocommerce-add-to-cart">

		<?php if ( ! $product->is_sold_individually() ) : ?>

			<?php woocommerce_quantity_input( array( 'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 ) ); ?>

		<?php endif; ?>

		<button type="submit" class="single_add_to_cart_button btn alt brand-bg-color brand-border-color brand-color-hover">
			<?php echo esc_html( $product->single_add_to_cart_text() ); ?>
		</button>
		
		<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
		<input type="hidden" name="variation_id" class="variation_id" value="0" />
	</div>
</div>
