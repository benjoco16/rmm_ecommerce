<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see         http://docs.woothemes.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
} ?>

<div class="clearfix">
  <div class="cls-acct-left pl-no">
    <ul>
      <li class='active'><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php _e('Overview', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo wc_customer_edit_account_url(); ?>"><?php _e('Edit Profile', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo wc_get_endpoint_url( 'edit-address', 'billing' ); ?>"><?php _e('Billing Address', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo wc_get_endpoint_url( 'edit-address', 'shipping' ); ?>"><?php _e('Shipping Address', 'coffeeinaplace'); ?></a></li>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>order-history"><?php _e('Order History', 'coffeeinaplace'); ?></a></li>
    </ul>
  </div>
  <div class="cls-acct-right pr-no-pl">
    <div class="acct-content-right clearfix">

      <?php wc_print_notices(); ?>

      <!-- <p class="myaccount_user">
          <?php
          printf(
              __( 'Hello <strong>%1$s</strong> (not %1$s? <a href="%2$s">Sign out</a>).', 'woocommerce' ) . ' ',
              $current_user->display_name,
              wc_get_endpoint_url( 'customer-logout', '', wc_get_page_permalink( 'myaccount' ) )
          );

          printf( __( 'From your account dashboard you can view your recent orders, manage your shipping and billing addresses and <a href="%s">edit your password and account details</a>.', 'woocommerce' ),
              wc_customer_edit_account_url()
          );
          ?>
      </p> -->

      <?php do_action( 'woocommerce_before_my_account' ); ?>

      <?php //wc_get_template( 'myaccount/my-orders.php', array( 'order_count' => $order_count ) ); ?>

      <?php //wc_get_template( 'myaccount/my-address.php' ); ?>

      <div class="acct-right-cl3 trns-1">
        <a href="<?php echo wc_customer_edit_account_url(); ?>" class='link-over'>
          <h6><?php _e('Edit Profile', 'coffeeinaplace'); ?></h6>
          <?php $current_user = wp_get_current_user(); ?>
          <p><?php echo $current_user->user_email; ?> <br/>******</p>
          <a href="<?php echo wc_customer_edit_account_url(); ?>" class='btn-edit-acct trns-1 fa fa-pencil-square-o'></a>
        </a>
      </div>
      <div class="acct-right-cl3 trns-1">
        <a href="<?php echo wc_get_endpoint_url( 'edit-address', 'billing' ); ?>" class='link-over'>
          <h6><?php _e('Billing Address', 'coffeeinaplace'); ?></h6>
          <p><?php _e('Change your address', 'coffeeinaplace'); ?></p>
           <a href="<?php echo wc_get_endpoint_url( 'edit-address', 'billing' ); ?>" class='btn-edit-acct trns-1 fa fa-pencil-square-o'></a>
        </a>
      </div>
      <div class="acct-right-cl3 trns-1">
        <a href="<?php echo wc_get_endpoint_url( 'edit-address', 'shipping' ); ?>" class='link-over'>
          <h6><?php _e('Shipping Addres', 'coffeeinaplace'); ?></h6>
          <p><?php _e('Change your address', 'coffeeinaplace'); ?></p>
           <a href="<?php echo wc_get_endpoint_url( 'edit-address', 'shipping' ); ?>" class='btn-edit-acct trns-1 fa fa-pencil-square-o'></a>
        </a>
      </div>

      <?php wc_get_template( 'myaccount/my-downloads.php' ); ?>

      <?php do_action( 'woocommerce_after_my_account' ); ?>

    </div>
  </div>
</div>
