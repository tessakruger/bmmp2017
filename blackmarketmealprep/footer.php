<?php
/**
 * The template for displaying the footer*/
?>

		<!-- Home: Footer -->
		<footer>
			<div id="footer-container">
				<div id="footer-bmmp-logo">
					<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/images/logos-bmmp/bmmp-logo-white.png"></a>
				</div>
				<div id="footer-contact">
					<h5>Get In Touch</h5>
					<form>
						<input type="text" id="footer-name" name="name" placeholder="Name">
						<input type="text" id="footer-email" name="email" placeholder="Email">
						<input type="text" id="footer-message" name="message" placeholder="Message">
						<button type="button" form="footer-contact-form" value="Send Message">Send Message</button>
					</form>
				</div>
				<div>
					<div id="footer-other-categories">
						<p>Other Categories</p>
						<ul id="footer-other-categories-links">
							<a href="gift-cards.php"><li>Gift Cards</li></a>
							<a href="nutrition-facts.php"><li>Nutritional Facts</li></a>
							<a href="subscription.php"><li>Email Subscription</li></a>
						</ul>
					</div>
					<div id="footer-social-links">
						<p>Connect With Us</p>
						<ul id="footer-social-logos">
							<li><img src="<?php bloginfo('template_url'); ?>/assets/images/icons-social/facebook-icon-white.png"></li>
							<li><img src="<?php bloginfo('template_url'); ?>/assets/images/icons-social/instagram-icon-white.png"></li>
						</ul>
					</div>
				</div>
				<div id="footer-affiliate-links">
					<p>Affiliates</p>
					<ul id="footer-affiliate-logos">
						<li><img src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/cfw-logo-white.png"></li>
						<li><img src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/houseofgyms-logo-white.png"></li>
						<li><img src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/nutrishop-logo-white.png"></li>
					</ul>
				</div>
				<div id="footer-copyright">
					<ul id="footer-copyright-links">
						<li>Copyright © 2017 Black Market Meal Prep. All rights reserved.</li>
						<a href="terms.php"><li>Terms</li></a>
						<a href="faq.php"><li>FAQ</li></a>
						<a href="feedback.php"><li>Feedback</li></a>
					</ul>
				</div>
			</div>
		</footer>
		<!-- end of Footer  -->

<?php wp_footer(); ?>