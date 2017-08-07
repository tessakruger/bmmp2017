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
    <ul class="promo">
	    <li>You are now ordering for Sunday July 02, 2017.  Pick-Up (6pm-9pm)/Delivery(4pm-9pm)</li><!-- this needs to be the actual date? -->
	  </ul>
	  <ul class="orders">
	  	<li>Place your order before Thursday 11:59PM. Questions? Call/Text (714)767-4145</li><!-- this needs to be the actual date? -->
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/order_nav_icon.png" alt="order"/></li>
	  	<li>&nbsp;Order Now&nbsp;</li>
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/checkout_nav_icon.png" alt="checkout"/></li>
	  	<li>&nbsp;Checkout&nbsp;</li>
	  	<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/cart_nav_icon.png" alt="cart" /></li>
	  	<li>&nbsp;5 items - $20.85&nbsp;</li>
	  	<li><button>login</button></li>
	  </ul>
	   <div class="tablet-orders">
	   	<ul class="order-text">
	   		<li>Place your order before Thursday 11:59PM. Questions? Call/Text (714)767-4145</li>
	   	</ul>
	  	<hr>
	  	  <ul class="order-nav">
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/order_nav_icon.png" alt="order"/></li>
	  		<li>&nbsp;Order Now&nbsp;&nbsp;</li>
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/checkout_nav_icon.png" alt="checkout"/></li>
	  		<li>&nbsp;Checkout&nbsp;&nbsp;</li>
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/cart_nav_icon.png" alt="cart" /></li>
	  		<li>&nbsp;5 items - $20.85&nbsp;&nbsp;</li>
	  	  </ul>
	  	  <ul class="tablet-buttons">
	  	  	<li> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/facebook_icon.png" href="https://www.facebook.com/blackmarketmealprep/" alt="facebook"/> </li>
	    	<li> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/instagram_icon.png" href="https://www.instagram.com/blackmarketmealprep/" alt="instagram"/> </li>
	  		<li><button>login</button></li>
	  	  </ul>	
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
	  	<li><div class="dot">&#8226;</div>&nbsp;Home</li>
	  	<li><div class="dot">&#8226;</div>&nbsp;How to Order</li>
	  	<li><div class="dot">&#8226;</div>&nbsp;Mission</li>
	  	<li><div class="dot">&#8226;</div>&nbsp;Menu</li>
	  	<li><div class="dot">&#8226;</div>&nbsp;What People Say</li>
	  <ul>
	  <ul class="social">
	    <li> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/facebook_icon.png" href="https://www.facebook.com/blackmarketmealprep/" alt="facebook"/> </li>
	    <li> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/instagram_icon.png" href="https://www.instagram.com/blackmarketmealprep/" alt="instagram"/> </li>
	  </ul>
	</div>
	<div class="mobile-nav">
	  	<ul class="mobile-social">
	  		<li><img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/logo.png" height="45px" alt="logo"/>&nbsp;&nbsp;</li>
	  		<li> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/facebook_icon.png" href="https://www.facebook.com/blackmarketmealprep/" alt="facebook"/> </li>
	    	<li> <img src="<?php echo site_url(); ?>/wp-content/themes/blackmarketmealprep/assets/images/instagram_icon.png" href="https://www.instagram.com/blackmarketmealprep/" alt="instagram"/> </li>
	  	</ul>
	  	<ul class="mobile-info">
	  		<li>Order Now</li>
	  		<li>Checkout</li>
	  		<li>Cart</li>
	  		<li><button>login</button></li>
	  	</ul>
	</div>
</body>