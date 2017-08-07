<?php
/**
 * The template for displaying the footer*/
?>

		<!-- start of Footer -->
		<footer>
			<div id="footer-map">
				<img class="footer-map-image" src="<?php bloginfo('template_url'); ?>/assets/images/map/map-orangecounty-1926x334.png">
			</div>
			<div id="footer-container">
				<div id="footer-logo" class="footer-div">
					<a href="#"><img class="footer-bmmp-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logos-bmmp/bmmp-logo-white.png"></a>
				</div>
				<div id="footer-contact" class="footer-div">
					<h5>Get In Touch</h5>
					<form id="footer-form">
						<input type="text" id="footer-name" name="name" placeholder="Name">
						<input type="text" id="footer-email" name="email" placeholder="Email">
						<textarea type="text" id="footer-message" name="message" placeholder="Message"></textarea>
						<button type="button" id="footer-button-send" form="footer-contact-form" value="Send Message">Send Message</button>
					</form>
				</div>
				<div id="footer-other-social-links" class="footer-div">
					<div id="footer-other-categories">
						<p>Other Categories</p>
						<ul id="footer-other-categories-links">
							<a href="gift-cards.php"><li class="footer-categories">Gift Cards</li></a>
							<a href="nutrition-facts.php"><li class="footer-categories">Nutritional Facts</li></a>
							<a href="subscription.php"><li class="footer-categories">Email Subscription</li></a>
						</ul>
					</div>
					<div id="footer-social-links">
						<p>Connect With Us</p>
						<ul id="footer-social">
							<a href="https://www.facebook.com/blackmarketmealprep/" target="_blank"><li><img class="footer-social-icons" src="<?php bloginfo('template_url'); ?>/assets/images/icons-social/facebook-icon-white.png"></li></a>
							<a href="https://www.instagram.com/blackmarketmealprep/" target="_blank"><li><img class="footer-social-icons" src="<?php bloginfo('template_url'); ?>/assets/images/icons-social/instagram-icon-white.png"></li></a>
						</ul>
					</div>
				</div>
				<div id="footer-affiliate-links" class="footer-div">
					<p>Affiliates</p>
					<ul id="footer-affiliates">
						<li><img id="footer-affiliate-logo-cfw" class="footer-affiliate-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/cfw-logo-white.png"></li>
						<li><img id="footer-affiliate-logo-hog" class="footer-affiliate-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/houseofgyms-logo-white.png"></li>
						<li><img id="footer-affiliate-logo-nts" class="footer-affiliate-logo" src="<?php bloginfo('template_url'); ?>/assets/images/logos-affiliates/nutrishop-logo-white.png"></li>
					</ul>
				</div>
				<div id="footer-copyright">
					<ul id="footer-copyright-links">
						<li class="copyright">Copyright © 2017 Black Market Meal Prep. All rights reserved.</li>
						<a href="terms.php"><li class="secondary-links">Terms</li></a>
						<a href="faq.php"><li class="secondary-links">FAQ</li></a>
						<a href="feedback.php"><li class="secondary-links">Feedback</li></a>
					</ul>
				</div>
			</div>
		</footer>
		<!-- end of Footer  -->

<?php wp_footer(); ?>