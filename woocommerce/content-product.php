<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
global $post;

$productID = $product->get_id();

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="best-holder wow fadeIn" >
	<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */

	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */

	// hover type add to cart button
	?>
	<div class="img-holder">
		<div class="sash-handle">
		</div>
		<div class="overlay ease">
			<a href="<?php echo get_permalink( $productID ); ?>" class="btn btn-white-b">SEE DETAILS</a>
			<a href="/rmm/shop/?add-to-cart=<?php echo $productID; ?>" class="btn btn-white-b button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $productID; ?>">ADD TO CART</a>
		</div>
	<?php
	do_action( 'woocommerce_before_shop_loop_item_title' );
	?>
	</div>
	<div class="text-content">
	<?php
	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	

	//display product category name
	$terms = get_the_terms($productID , 'yith_product_brand' );
	foreach ($terms as $term) {
   		echo '<h3>'.$term->name.'</h3> ';
   	}


   	do_action( 'woocommerce_shop_loop_item_title' );
   	
	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	?>
	<div>
		<h4><?php do_action( 'woocommerce_after_shop_loop_item_title' ); ?></h4>
	</div>
	<?php	

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	//do_action( 'woocommerce_after_shop_loop_item' );
	?>
	</div>
</div>
