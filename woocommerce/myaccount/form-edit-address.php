<?php
/**
 * Edit address form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-edit-address.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see       http://docs.woothemes.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

$page_title   = ( $load_address === 'billing' ) ? __( 'Billing Address', 'woocommerce' ) : __( 'Shipping Address', 'woocommerce' );
?>

<?php wc_print_notices(); ?>

<?php if ( ! $load_address ) : ?>

  <?php wc_get_template( 'myaccount/my-address.php' ); ?>

<?php else : ?>


<div class="clearfix">
  <div class="cls-acct-left pl-no">
    <ul>
      <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('Overview', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo wc_customer_edit_account_url(); ?>"><?php _e('Edit Profile', 'coffeeinaplace'); ?></a></li>
      <li class="active"><a href="<?php echo wc_get_endpoint_url( 'edit-address', 'billing' ); ?>"><?php _e('Billing Address', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo wc_get_endpoint_url( 'edit-address', 'shipping' ); ?>"><?php _e('Shipping Address', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>order-history"><?php _e('Order History', 'coffeeinaplace'); ?></a></li>
    </ul>
  </div>
  <div class="cls-acct-right pr-no-pl">
    <div class="acct-content-right">

      <form method="post">

        <h3><?php echo apply_filters( 'woocommerce_my_account_edit_address_title', $page_title ); ?></h3>

        <?php do_action( "woocommerce_before_edit_address_form_{$load_address}" ); ?>

        <?php foreach ( $address as $key => $field ) : ?>

          <?php woocommerce_form_field( $key, $field, ! empty( $_POST[ $key ] ) ? wc_clean( $_POST[ $key ] ) : $field['value'] ); ?>

        <?php endforeach; ?>

        <?php do_action( "woocommerce_after_edit_address_form_{$load_address}" ); ?>

        <div class="btn-hlder sve-chnge">
          <p>
            <input type="submit" class="button" name="save_address" value="<?php esc_attr_e( 'Save Address', 'woocommerce' ); ?>" />
          <?php wp_nonce_field( 'woocommerce-edit_address' ); ?>
            <input type="hidden" name="action" value="edit_address" />
          </p>
        </div>

      </form>

    </div>
  </div>
</div>
<?php endif; ?>
