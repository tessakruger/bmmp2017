<?php
/**
 * The template for displaying the footer*/
?>

	<!-- start of Footer -->
	<footer class="footer-container">

		<div class="footer-map">
			<img src="assets/images/map/map-orangecounty-1926x334.png">
		</div>

		<div class="footer-wrapper">
			<div class="footer-logo footer-item">
				<a href="#"><img class="footer-bmmp-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logos-bmmp/bmmp-logo-white.png"></a>
			</div>
			
			<div class="footer-contact footer-item">
				<form class="footer-contact-form">
					<p>Get In Touch</p>
					<input type="text" id="footer-name" name="name" placeholder="Name">
					<input type="text" id="footer-email" name="email" placeholder="Email">
					<textarea type="text" id="footer-message" name="message" placeholder="Message"></textarea>
					<button type="button" id="footer-button-send" form="footer-contact-form" value="Send Message">Send Message</button>
				</form>
			</div>

			<div class="footer-categories-social footer-item">
				<div class="footer-categories-container">
					<p>Other Categories</p>
					<ul class="footer-categories">
						<a href="gift-cards.php"><li class="footer-categories-item">Gift Cards</li></a>
						<a href="nutrition-facts.php"><li class="footer-categories-item">Nutritional Facts</li></a>
						<a href="subscription.php"><li class="footer-categories-item">Email Subscription</li></a>
					</ul>
				</div>
				<div class="footer-social-container">
					<p>Connect With Us</p>
					<ul class="footer-social-links">
						<a href="https://www.facebook.com/blackmarketmealprep/" target="_blank"><li class="footer-social-icon" id="footer-facebook"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons-social/facebook-icon-white.png"></li></a>
						<a href="https://www.instagram.com/blackmarketmealprep/" target="_blank"><li class="footer-social-icon" id="footer-instagram"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons-social/instagram-icon-white.png"></li></a>
					</ul>
				</div>
			</div>

			<div class="footer-affiliate-container footer-item">
				<p>Affiliates</p>
				<ul class="footer-affiliates">
					<li class="footer-affiliate-logo"><img id="footer-affiliate-logo-cfw" src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/cfw-logo-white.png"></li>
					<li class="footer-affiliate-logo"><img id="footer-affiliate-logo-hog" src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/houseofgyms-logo-white.png"></li>
					<li class="footer-affiliate-logo"><img id="footer-affiliate-logo-nts" src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/nutrishop-logo-white.png"></li>
				</ul>
			</div>
		</div>

		<div>
			<div class="footer-copyright-container">
				<p class="copyright-info">Copyright © 2017 Black Market Meal Prep. All rights reserved.</p>
				<ul class="footer-copyright-links">
					<a href="terms.php"><li class="secondary-links footer-terms">Terms</li></a>
					<a href="faq.php"><li class="secondary-links footer-faq">FAQ</li></a>
					<a href="feedback.php"><li class="secondary-links footer-feedback">Feedback</li></a>
				</ul>
			</div>
		</div>

	</footer>
	<!-- end of Footer  -->

<?php wp_footer(); ?>
