<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see       http://docs.woothemes.com/document/template-structure/
 * @author    WooThemes
 * @package   WooCommerce/Templates
 * @version     2.2.6
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="full-width-bg-login" >
	<div class="dark-overlay">
		<div class="reg-cnt-hldr">

		<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

			<?php if( isset( $_GET['action']) && $_GET['action'] == "register"): ?>

			<div class="reg-title">
				<h1><?php _e( 'Register', 'woocommerce' ); ?></h1>
				<?php if(get_field('reg_content', options)): ?>
				<?php the_field('reg_content', options); ?>
				<?php else: ?>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<?php endif; ?>
			</div>

			<?php wc_print_notices(); ?>

			<form method="post" class="register">

				<?php do_action( 'woocommerce_register_form_start' ); ?>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<div class='reg-txt-fld'>
					<input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" placeHolder="Enter your username..."/>
				</div>


				<?php endif; ?>

				<div class='reg-txt-fld'>
					<input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" placeHolder="Enter your email address..."/>
				</div>

				<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<div class='reg-txt-fld'>
					<input type="password" class="input-text" name="password" id="reg_password" placeHolder="Password"/>
				</div>


				<?php endif; ?>

				<!-- Spam Trap -->
				<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

				<?php do_action( 'woocommerce_register_form' ); ?>
				<?php do_action( 'register_form' ); ?>

				<?php wp_nonce_field( 'woocommerce-register' ); ?>
				<input type="submit" class="btn-sbmt trns-1" name="register" value="<?php esc_attr_e( 'Submit', 'woocommerce' ); ?>" />

				<?php do_action( 'woocommerce_register_form_end' ); ?>

			</form>

			<span class="hve-acc-qst"><?php esc_attr_e( 'Have an account?', 'woocommerce' ); ?> <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="trns-1"><?php esc_attr_e( 'Login', 'woocommerce' ); ?></a></span>

			<?php else : ?>

			<div class="reg-title">
				<h1><?php _e( 'Login', 'woocommerce' ); ?></h1>
				<?php if(get_field('login_content', options)): ?>
				<?php the_field('login_content', options); ?>
				<?php else: ?>
				<p>If you have an account with us, please log in.</p>
				<?php endif; ?>
			</div>

			<form method="post" class="login">

				<?php wc_print_notices(); ?>

				<?php do_action( 'woocommerce_login_form_start' ); ?>

				<div class='reg-txt-fld'>
					<input type="text" class="input-text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" placeHolder="Enter your email address..."/>
				</div>

				<div class='reg-txt-fld'>
					<input class="input-text" type="password" name="password" id="password" placeHolder="Password"/>
				</div>


				<?php do_action( 'woocommerce_login_form' ); ?>


				<?php wp_nonce_field( 'woocommerce-login' ); ?>
				<input type="submit" class="btn-sbmt trns-1" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />

				<div>
					<br>
					<label class="chck-box-style mr-elm" for="rememberme" id="chk-me">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" />
						<i class="fa fa-check"></i>
					</label>
					<label for="rememberme"><?php _e( 'Keep me logged in', 'woocommerce' ); ?></label>
				</div>

				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Forgot Password?', 'woocommerce' ); ?></a>

				<span class="hve-acc-qst"><?php _e( 'Have an account?', 'woocommerce' ); ?> <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ) . '?action=register'; ?>" class="trns-1"><?php _e( 'Register', 'woocommerce' ); ?></a></span>


				<?php do_action( 'woocommerce_login_form_end' ); ?>

			</form>


			<?php endif ?>

		<?php do_action( 'woocommerce_after_customer_login_form' ); ?>

		</div>
	</div>
</div>
<style>
.full-width-bg-login {

	<?php if( isset( $_GET['action']) && $_GET['action'] == "register"): ?>

		<?php if(get_field("reg_background", options)): ?>
		<?php echo "background-image:url(". get_field('reg_background', options) .")"; ?>
		<?php else: ?>
		background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg-register.jpg);
		<?php endif; ?>

	<?php else : ?>

		<?php if(get_field("login_background", options)): ?>
		<?php echo "background-image:url(". get_field('login_background', options) .")"; ?>
		<?php else: ?>
		background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg-login.jpg)
		<?php endif; ?>


	<?php endif ?>
}
</style>
