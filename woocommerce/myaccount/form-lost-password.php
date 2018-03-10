<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.3.0
 */

get_header();
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<div class="forgot-main-holder inner-page">
	<div class="main-width">

		<form method="post" class="lost_reset_password">

			<?php if( 'lost_password' === $args['form'] ) : ?>

				<div class="forgot-page-title">
			      <h1>FORGOT PASSWORD</h1>
			      <p><?php echo apply_filters( 'woocommerce_lost_password_message', __( 'Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.', 'woocommerce' ) ); ?></p>
			    </div>

			    <?php wc_print_notices(); ?>

				<div class="forgot-field-cnt">
					<input class="input-text" type="text" name="user_login" id="user_login" placeHolder="Enter your email address..."/>
				</div>

			<?php else : ?>

				<p><?php echo apply_filters( 'woocommerce_reset_password_message', __( 'Enter a new password below.', 'woocommerce') ); ?></p>

				<div class="forgot-field-cnt">
					<input type="password" name="password_1" id="password_1" placeholder="<?php _e( 'New password', 'woocommerce' ); ?>"/>
					<input type="password" class="input-text" name="password_2" id="password_2" placeholder="<?php _e( 'Re-enter new password', 'woocommerce' ); ?>"/>
				</div>

				<input type="hidden" name="reset_key" value="<?php echo isset( $args['key'] ) ? $args['key'] : ''; ?>" />
				<input type="hidden" name="reset_login" value="<?php echo isset( $args['login'] ) ? $args['login'] : ''; ?>" />

			<?php endif; ?>

			<div class="clear"></div>

			<?php do_action( 'woocommerce_lostpassword_form' ); ?>

			<div class="forgot-field-cnt">
				<div class="btn-reset-pass">
					<input type="hidden" name="wc_reset_password" value="true" />
					<input type="submit" class="btn trns-1" value="<?php echo 'lost_password' === $args['form'] ? __( 'Reset Password', 'woocommerce' ) : __( 'Save', 'woocommerce' ); ?>" />
				</div>
			</div>

			<?php wp_nonce_field( $args['form'] ); ?>

		</form>

	</div>
</div>

<?php get_template_part('/includes/footer','content'); ?>
