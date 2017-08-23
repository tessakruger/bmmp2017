<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<!-- <?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		// do_action( 'woocommerce_before_main_content' );
	?>
	-->

    <header class="woocommerce-products-header">
    	<div class="subheader-container">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

				<h2 class="woocommerce-products-header__title page-title subheader-text"><?php woocommerce_page_title(); ?></h2>
				<p class="description-text">Feel free to mix and match as you like, but be sure to order a minimum of 5 meals.</p>

			<?php endif; ?>
		</div>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

    </header>
<!-- 
    	<div class="navbar-meals">
    		<ul class="meal-type" style="color: orange">
    			<li data-filter="all">All</li>
    			<li data-filter=".breakfast">Breakfast</li>
    			<li data-filter=".chicken">Chicken</li>
    			<li data-filter=".fish">Fish</li>
    		</ul>
    	</div>

    	<div class="container">
    		<div class="mix breakfast">Breakfast Burrito</div>
    		<div class="mix chicken">Lime Chipotle Chicken</div>
    		<div class="mix fish">Peach Glazed Salmon</div>
    	</div> -->


		<nav class="shop-navbar">
			<ul class="shop-navbar-list">
				<li data-filter="all">All</li>
    			<div class="item-group">
    				<li data-filter=".product_cat-breakfast" class="selected">Breakfast
<!--     					<div class="selected-arrow"></div> -->
    				</li>
    			</div>
    			<li data-filter=".product_cat-chicken">Chicken</li>
    			<li data-filter=".product_cat-fish">Fish</li>
    			<li data-filter=".product_cat-turkey">Turkey</li>
    			<li data-filter=".product_cat-beef">Beef</li>
    			<li data-filter=".product_cat-vegan">Vegan</li>
    			<li data-filter=".product_cat-salads">Salads</li>
			</ul>
		</nav>

		<?php if ( have_posts() ) : ?>

			<!-- <?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				// do_action( 'woocommerce_before_shop_loop' );
			?>
			-->

			<?php woocommerce_product_loop_start(); ?>
				<div class="shop-menu-items">
					<div class="shop-meals-wrapper container" id="Container">
					<?php woocommerce_product_subcategories(); ?>

					<?php while ( have_posts() ) : the_post(); ?>
					<?php
							/**
							 * woocommerce_shop_loop hook.
							 *
							 * @hooked WC_Structured_Data::generate_product_data() - 10
							 */
							do_action( 'woocommerce_shop_loop' );
						?>
							<?php wc_get_template_part( 'content', 'product' ); ?>


					<?php endwhile; // end of the loop. ?>
					</div>
				</div>
			<?php woocommerce_product_loop_end(); ?>

			<!--<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				//do_action( 'woocommerce_after_shop_loop' );
			?>
			-->

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<!-- <?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		// do_action( 'woocommerce_sidebar' );
	?>
	-->
	<script type="text/javascript">
		var mixer = mixitup('.container', {
	    	load: {
	      		filter: '.product_cat-breakfast'
	    		}
	    	});
	</script>

<?php get_footer( ); ?>
