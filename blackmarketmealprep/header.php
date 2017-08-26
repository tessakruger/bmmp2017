<?php
/**
 * The template for displaying the header*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<!--load fonts from google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Arimo|Bitter:700" rel="stylesheet">
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85807/jquery.flexslider.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/carousel.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<title><?php echo get_the_title(); ?> | Black Market Meal Prep</title>
	<?php wp_head(); ?>
</head>
<body>
  <div class="header">
  	<div class="promo-orders-wrapper">
    <ul class="promo">
	    <li>You are now ordering for Sunday July 02, 2017.  Pick-Up (6pm-9pm)/Delivery(4pm-9pm)</li><!-- this needs to be the actual date? -->
	  </ul>
	  <ul class="orders">
	  	<li>Place your order before Thursday 11:59PM. Questions? Call/Text (714)767-4145</li><!-- this needs to be the actual date? -->
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/order_nav_icon.png" alt="order"/></li>
	  	<li><a href="<?php echo site_url(); ?>/store/">&nbsp;Order Now&nbsp;</a></li>
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/checkout_nav_icon.png" alt="checkout"/></li>
	  	<li><a href="<?php echo site_url(); ?>/checkout/">&nbsp;Checkout&nbsp;</a></li>
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/cart_nav_icon.png" alt="cart" /></li>
	  	<li><a href="<?php echo site_url(); ?>/cart/">&nbsp;5 items - $20.85&nbsp;</a></li>
	  	<li><button><a href="<?php echo site_url(); ?>/my-account/">login</a></button></li>
	  </ul>
	   <div class="tablet-orders">
	   	<ul class="order-text">
	   		<li>Place your order before Thursday 11:59PM. Questions? Call/Text (714)767-4145</li>
	   	</ul>
	  	<hr>
	  	  <ul class="order-nav">
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/order_nav_icon.png" alt="order"/></li>
	  		<li><a href="<?php echo site_url(); ?>/store/">&nbsp;Order Now&nbsp;&nbsp;</a></li>
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/checkout_nav_icon.png" alt="checkout"/></li>
	  		<li><a href="<?php echo site_url(); ?>/checkout/">&nbsp;Checkout&nbsp;&nbsp;</a></li>
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/cart_nav_icon.png" alt="cart" /></li>
	  		<li><a href="<?php echo site_url(); ?>/cart/">&nbsp;5 items - $20.85&nbsp;&nbsp;</a></li>
	  	  </ul>
	  	  <ul class="tablet-buttons">
	  	  	<li><a target="_blank" href="https://www.facebook.com/blackmarketmealprep/"><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/facebook_icon.png" alt="facebook"/></a></li>
	    	<li><a target="_blank" href="https://www.instagram.com/blackmarketmealprep/"><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/instagram_icon.png" alt="instagram"/></a></li>
	  		<li><a href="<?php echo site_url(); ?>/my-account/"><button>login</button></a></li>
	  	  </ul>
	  	</div>	
	  </div>
	  <div class="mobile-orders">
	    <ul class="mobile-promo">
	    	<li>You are now ordering for </li>  <!-- this needs to be the actual date? -->
	  		</br>
	  		<li>Sunday July 02, 2017</li>
	  	</ul>
	  	<br/>
	  	<ul>
	    	<li>Pick-Up (6pm-9pm) / Delivery(4pm-9pm).</li>
	    	<li>Place your order before Thursday</li>
	    	<br />
	    	<li>11:59PM</li> 
	    	<br />
	    	<li>Questions? Call/Text (714)767-4145</li>
	    </ul>
	  </div>
	</div>
	<div class="nav">
	  <ul>
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/logo.png" height="45px" alt="logo"/>&nbsp;&nbsp;</li>
	  	<li><div class="dot">&#8226;</div><a href="<?php echo site_url(); ?>">&nbsp;Home</a></li>
	  	<li><div class="dot">&#8226;</div><a href="<?php echo site_url(); ?>/#how-to-order"> &nbsp;How to Order</a></li>
	  	<li><div class="dot">&#8226;</div>&nbsp;<a href="<?php echo site_url(); ?>/#mission">Mission</a></li>
	  	<li><div class="dot">&#8226;</div><a href="<?php echo site_url(); ?>/store/">&nbsp;Menu</a></li>
	  	<li><div class="dot">&#8226;</div>&nbsp;<a href="<?php echo site_url(); ?>/#testimonials-container">What People Say</a></li>
	  <ul>
	  <ul class="social">
	    <li><a target="_blank" href="www.facebook.com/blackmarketmealprep/"><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/facebook_icon.png"  alt="facebook"/></a></li>
	    <li><a target="_blank" href="https://www.instagram.com/blackmarketmealprep/"><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/instagram_icon.png" alt="instagram"/></a></li>
	  </ul>
	</div>
	<div class="mobile-nav">
	  	<ul class="mobile-social">
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/logo.png" height="45px" alt="logo"/>&nbsp;&nbsp;</li>
	  		<li><a target="_blank" href="https://www.facebook.com/blackmarketmealprep/"> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/facebook_icon.png" alt="facebook"/></a></li>
	    	<li><a target="_blank" href="https://www.instagram.com/blackmarketmealprep/"><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/instagram_icon.png" alt="instagram"/></a></li>
	    	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/hamburger_menu.png" alt="menu" class="hamburger-btn"/></li>
	    	<div class="mobile-menu">
	    		<ul>
	    			<li><a href="<?php echo site_url(); ?>">Home</a></li>
	    			<li><a href="<?php echo site_url(); ?>/#how-to-order">How To Order</a></li>
	    			<li><a href="<?php echo site_url(); ?>/#mission">Mission</a></li>
	    			<li><a href="<?php echo site_url(); ?>/store/">Menu</a></li>
	    			<li><a href="<?php echo site_url(); ?>/#testimonials-container">What People Say</a></li>
	    		</ul>
	    	</div>
	  	</ul>
	  	<ul class="mobile-info">
	  		<li><a href="<?php echo site_url(); ?>/orders/">Order Now</a></li>
	  		<li><a href="<?php echo site_url(); ?>/checkout/">Checkout</a></li>
	  		<li><a href="<?php echo site_url(); ?>/cart/">Cart</a></li>
	  		<li><button><a href="<?php echo site_url(); ?>/my-account/">login</a></button></li>
	  	</ul>
	</div>
</body>