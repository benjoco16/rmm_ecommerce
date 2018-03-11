<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

	<?php do_action( 'woocommerce_before_cart_totals' ); ?>

	<h2><?php _e( 'CART TOTALS', 'woocommerce' ); ?></h2>
	<ul class="total">
		<li>
			<div class="item">
				<p>Total Coupon Discount</p>
			</div>
			<div class="price">
				<p>-$ 0</p>
			</div>
		</li>
		<li>
			<div class="item">
				<p>Subtotal</p>
			</div>
			<div class="price">
				<p><?php wc_cart_totals_subtotal_html(); ?></p>
			</div>
		</li>
	</ul>
	<p class="order-total">Order Total <span class="f-right"><?php wc_cart_totals_order_total_html(); ?></span></p>
	<div class="wc-proceed-to-checkout">
		<?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
	</div>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>

</div>
