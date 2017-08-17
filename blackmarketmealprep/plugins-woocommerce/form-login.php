<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<div style="background-color: #f4f2ed;" class="u-columns col2-set" id="customer_login">

	<div style="padding-left: 8vw; font-family: 'Arimo', sans-serif;" class="u-column1 col-1">

<?php endif; ?>

		<form class="woocomerce-form woocommerce-form-login login" method="post">

			<?php do_action( 'woocommerce_login_form_start' ); ?>
			<h2 style="text-align: center;"><?php _e( 'Login', 'woocommerce' ); ?></h2>
			<br />
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required"></span></label> -->
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text required" placeholder="username" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required"></span></label> -->
				<input class="woocommerce-Input woocommerce-Input--text input-text required" placeholder="password" type="password" name="password" id="password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<input style="float: right; padding-left: 20px; padding-right: 20px; text-align: center; border-radius: 20px; background-color: #000; color: #eee; font-family: 'Arimo', sans-serif;" type="submit" class="woocommerce-Button button" name="login" value="<?php esc_attr_e( 'LOGIN', 'woocommerce' ); ?>" />
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php _e( 'Remember me', 'woocommerce' ); ?></span>
				</label>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'lost your password', 'woocommerce' ); ?></a>
			</p>

			<?php do_action( 'woocommerce_login_form_end' ); ?>

		</form>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

	</div>

	<div style="padding-right: 8vw; font-family: 'Arimo', sans-serif; background-color: #f4f2ed;" class="u-column2 col-2">

		<form method="post" class="register">

			<?php do_action( 'woocommerce_register_form_start' ); ?>
			<h2 style="text-align: center;"><?php _e( 'Register', 'woocommerce' ); ?></h2>
			<br />
			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<!-- <label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required"></span></label> -->
					<input type="text" placeholder="username" class="woocommerce-Input woocommerce-Input--text input-text required" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<!-- <label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required"></span></label> -->
				<input type="email" placeholder="email" class="woocommerce-Input woocommerce-Input--text input-text required" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( $_POST['email'] ) : ''; ?>" />
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<!-- <label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required"></span></label> -->
					<input type="password" placeholder="password" class="woocommerce-Input woocommerce-Input--text input-text required" name="password" id="reg_password" />
				</p>

			<?php endif; ?>

			<!-- Spam Trap -->
			<div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" autocomplete="off" /></div>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocomerce-FormRow form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<input style="float: right; padding-left: 20px; padding-right: 20px; text-align: center; border-radius: 20px; background-color: #e4b95b; color: #eee; font-family: 'Arimo', sans-serif;" type="submit" class="woocommerce-Button button" name="register" value="<?php esc_attr_e( 'REGISTER NOW', 'woocommerce' ); ?>" />
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
